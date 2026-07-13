<?php

ob_start();

register_shutdown_function(function () {
    $error = error_get_last();
    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR], true)) {
        while (ob_get_level()) {
            ob_end_clean();
        }
        if (!headers_sent()) {
            header('Content-Type: application/json');
            http_response_code(500);
        }
        echo json_encode([
            'success' => false,
            'message' => 'PHP Error: ' . $error['message'] . ' in ' . basename($error['file']) . ':' . $error['line'],
        ]);
    }
});

$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    ob_end_clean();
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server Error: vendor/autoload.php not found. Upload the vendor folder to the server.']);
    exit;
}

require $autoload;

$phpmailerClass = __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
if (!file_exists($phpmailerClass)) {
    ob_end_clean();
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server Error: PHPMailer library missing. Upload vendor/phpmailer/phpmailer/ to the server.']);
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

function respond(bool $success, string $message, int $code = 200, array $params = []): void
{
    while (ob_get_level()) {
        ob_end_clean();
    }
    http_response_code($code);
    echo json_encode(array_merge(['success' => $success, 'message' => $message], $params));
    exit;
}

$requiredFields = [
    'title' => 'Title',
    'firstName' => 'First name',
    'lastName' => 'Last name',
    'contactNumber' => 'Contact number',
    'email' => 'Email',
    'confirmEmail' => 'Confirm email',
    'country' => 'Country',
    'bookTitle' => 'Book title',
    'genre' => 'Genre',
    'synopsis' => 'Synopsis',
];

foreach ($requiredFields as $field => $label) {
    if (empty(trim($_POST[$field] ?? ''))) {
        respond(false, $label . ' is required.', 422);
    }
}

$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$confirmEmail = filter_var(trim($_POST['confirmEmail']), FILTER_VALIDATE_EMAIL);

if (!$email || !$confirmEmail) {
    respond(false, 'Please enter a valid email address.', 422);
}

if ($email !== $confirmEmail) {
    respond(false, 'Email addresses do not match.', 422);
}

$originalName = '';
$fileUrl = '';
$destination = null;

$fileError = isset($_FILES['manuscript']['error']) ? (int) $_FILES['manuscript']['error'] : UPLOAD_ERR_NO_FILE;
$hasManuscript = $fileError !== UPLOAD_ERR_NO_FILE && !empty($_FILES['manuscript']['name']);

if ($hasManuscript) {
    $file = $_FILES['manuscript'];

    if ($fileError !== UPLOAD_ERR_OK) {
        respond(false, 'File upload failed. Please try again.', 422);
    }

    $allowedExtensions = ['pdf', 'doc', 'docx', 'txt'];
    $maxSize = 10 * 1024 * 1024;
    $originalName = $file['name'];
    $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

    if (!in_array($extension, $allowedExtensions, true)) {
        respond(false, 'Invalid file type. Allowed: PDF, DOC, DOCX, TXT.', 422);
    }

    if ($file['size'] > $maxSize) {
        respond(false, 'File size must be less than 10MB.', 422);
    }

    $uploadDir = __DIR__ . '/uploads/manuscripts/';
    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
        respond(false, 'Unable to create upload directory.', 500);
    }

    $safeBaseName = preg_replace('/[^a-zA-Z0-9_-]/', '_', pathinfo($originalName, PATHINFO_FILENAME));
    $storedName = date('Ymd_His') . '_' . uniqid() . '_' . $safeBaseName . '.' . $extension;
    $destination = $uploadDir . $storedName;

    if (!move_uploaded_file($file['tmp_name'], $destination)) {
        respond(false, 'Failed to save uploaded file.', 500);
    }

    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
    $fileUrl = $protocol . '://' . $host . $scriptDir . '/uploads/manuscripts/' . rawurlencode($storedName);
}

$formData = [
    'Title' => trim($_POST['title']),
    'First Name' => trim($_POST['firstName']),
    'Last Name' => trim($_POST['lastName']),
    'Contact Number' => trim($_POST['contactNumber']),
    'Email' => $email,
    'Street Address' => trim($_POST['street'] ?? ''),
    'Town/City' => trim($_POST['city'] ?? ''),
    'County/State' => trim($_POST['state'] ?? ''),
    'Postcode/Zipcode' => trim($_POST['postcode'] ?? ''),
    'Country' => trim($_POST['country']),
    'Book Title' => trim($_POST['bookTitle']),
    'Genre' => trim($_POST['genre']),
    'Synopsis' => trim($_POST['synopsis']),
    'Author Information' => trim($_POST['authorInfo'] ?? ''),
    'Manuscript File' => $hasManuscript ? $originalName : 'Not provided',
];

if ($hasManuscript) {
    $formData['Download Link'] = $fileUrl;
}

function buildEmailBody(array $formData, string $heading): string
{
    $rows = '';
    $rowIndex = 0;
    foreach ($formData as $label => $value) {
        $rowBg = ($rowIndex % 2 === 0) ? '#ffffff' : '#fffaf2';
        if ($label === 'Download Link') {
            $safeUrl = htmlspecialchars($value);
            $value = '<a href="' . $safeUrl . '" style="display:inline-block;padding:10px 18px;background:#ff9900;color:#ffffff;text-decoration:none;border-radius:6px;font-weight:700;font-size:14px;">Download Manuscript</a>
                <br><span style="display:inline-block;margin-top:10px;font-size:12px;color:#6b7280;word-break:break-all;">' . $safeUrl . '</span>';
        } else {
            $value = nl2br(htmlspecialchars($value));
        }
        $rows .= '<tr style="background:' . $rowBg . ';">
            <td style="padding:14px 16px;border-bottom:1px solid #f3e8d8;width:34%;font-weight:700;color:#1f2937;font-size:13px;vertical-align:top;">' . htmlspecialchars($label) . '</td>
            <td style="padding:14px 16px;border-bottom:1px solid #f3e8d8;color:#374151;font-size:14px;line-height:1.6;vertical-align:top;">' . $value . '</td>
        </tr>';
        $rowIndex++;
    }

    $submittedOn = date('F j, Y \a\t g:i A');

    return '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . htmlspecialchars($heading) . '</title>
</head>
<body style="margin:0;padding:0;background:#f4f4f5;font-family:Arial,Helvetica,sans-serif;color:#111827;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f4f5;padding:28px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:640px;background:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 8px 24px rgba(0,0,0,0.08);">
                    <tr>
                        <td style="background:linear-gradient(135deg,#ff9900 0%,#e88b00 100%);padding:28px 32px;text-align:center;">
                            <p style="margin:0 0 8px;font-size:12px;letter-spacing:2px;text-transform:uppercase;color:#fff3d6;font-weight:700;">Amazon KDP Pro</p>
                            <h1 style="margin:0;font-size:24px;line-height:1.3;color:#ffffff;font-weight:800;">' . htmlspecialchars($heading) . '</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:28px 32px 10px;">
                            <p style="margin:0 0 18px;font-size:15px;line-height:1.7;color:#4b5563;">A new manuscript submission has been received. Please review the details below.</p>
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border:1px solid #f3e8d8;border-radius:10px;overflow:hidden;">
                                <tr style="background:#fff7e8;">
                                    <td colspan="2" style="padding:12px 16px;font-size:12px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#b45309;">Submission Details</td>
                                </tr>
                                ' . $rows . '
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:8px 32px 28px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#fafafa;border:1px dashed #e5e7eb;border-radius:10px;">
                                <tr>
                                    <td style="padding:14px 16px;font-size:12px;color:#6b7280;line-height:1.6;">
                                        <strong style="color:#374151;">Submitted:</strong> ' . $submittedOn . '<br>
                                        <strong style="color:#374151;">Source:</strong> Online Submission Form
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="background:#111827;padding:18px 32px;text-align:center;">
                            <p style="margin:0;font-size:12px;color:#d1d5db;line-height:1.6;">&copy; ' . date('Y') . ' Amazon KDP Pro. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
}

function sendMail(string $toEmail, string $toName, string $subject, string $body): void
{
    $smtpHost = 'smtp.gmail.com';
    $smtpPort = 465;
    $smtpUser = 'travisarthurkdp@gmail.com';
    $smtpPass = 'mbkr dngi cbzt elvr';
    $fromEmail = $smtpUser;
    $fromName = 'Amazon KDP Pro - Publishing Experts';

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = $smtpPort;
    $mail->SMTPDebug = SMTP::DEBUG_OFF;

    $mail->setFrom($fromEmail, $fromName);
    $mail->addAddress($toEmail, $toName);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    try {
        $mail->send();
    } catch (Exception $e) {
        throw new Exception($mail->ErrorInfo ?: $e->getMessage());
    }
}

try {
    $adminBody = buildEmailBody($formData, 'New Manuscript Submission - Amazon KDP Pro');
    sendMail('info@amazonkdpexperts.com', 'Amazon KDP Experts', 'New Manuscript Submission - Amazon KDP Pro', $adminBody);

    $userBody = buildEmailBody($formData, 'Your Manuscript Submission Received');
    sendMail($email, trim($_POST['firstName'] . ' ' . $_POST['lastName']), 'Your Manuscript Submission - Amazon KDP Pro', $userBody);

    respond(true, 'Thank you! Your manuscript has been submitted successfully. A confirmation email has been sent to you.', 200, [
        'params' => [
            'title' => trim($_POST['title']),
            'firstName' => trim($_POST['firstName']),
            'lastName' => trim($_POST['lastName']),
            'name' => trim($_POST['firstName'] . ' ' . $_POST['lastName']),
            'contactNumber' => trim($_POST['contactNumber']),
            'email' => $email,
            'e' => $email,
            'confirmEmail' => trim($_POST['confirmEmail']),
            'street' => trim($_POST['street'] ?? ''),
            'city' => trim($_POST['city'] ?? ''),
            'state' => trim($_POST['state'] ?? ''),
            'postcode' => trim($_POST['postcode'] ?? ''),
            'country' => trim($_POST['country']),
            'bookTitle' => trim($_POST['bookTitle']),
            'genre' => trim($_POST['genre']),
            'synopsis' => trim($_POST['synopsis']),
            'authorInfo' => trim($_POST['authorInfo'] ?? ''),
            'manuscript' => $originalName,
            'downloadLink' => $fileUrl,
        ],
    ]);
} catch (Throwable $e) {
    if (isset($destination) && file_exists($destination)) {
        unlink($destination);
    }
    respond(false, 'Error: ' . $e->getMessage(), 500);
}
