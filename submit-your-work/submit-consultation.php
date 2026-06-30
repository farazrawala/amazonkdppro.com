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
    echo json_encode(['success' => false, 'message' => 'Server Error: vendor/autoload.php not found. Run composer install or upload the vendor folder.']);
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

$name = trim($_POST['name'] ?? '');
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$phone = trim($_POST['phone'] ?? '');
$brief = trim($_POST['brief'] ?? '');

if ($name === '') {
    respond(false, 'Full name is required.', 422);
}

if (!$email) {
    respond(false, 'Please enter a valid email address.', 422);
}

$formData = [
    'Full Name' => $name,
    'Email' => $email,
    'Phone Number' => $phone ?: 'Not provided',
    'About Your Book' => $brief ?: 'Not provided',
];

function buildEmailBody(array $formData, string $heading): string
{
    $rows = '';
    foreach ($formData as $label => $value) {
        $rows .= '<tr>
            <td style="padding:12px;border:1px solid #e5e7eb;font-weight:600;background:#f9fafb;">' . htmlspecialchars($label) . '</td>
            <td style="padding:12px;border:1px solid #e5e7eb;">' . nl2br(htmlspecialchars($value)) . '</td>
        </tr>';
    }

    return '<html><body style="font-family:Arial,sans-serif;color:#111;">
        <h2 style="color:#ff9900;">' . htmlspecialchars($heading) . '</h2>
        <p>A new consultation request has been received.</p>
        <table style="width:100%;border-collapse:collapse;margin:20px 0;">' . $rows . '</table>
        <p style="color:#666;font-size:12px;">Submitted on: ' . date('Y-m-d H:i:s') . '</p>
    </body></html>';
}

function sendMail(string $toEmail, string $toName, string $subject, string $body): void
{
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'mail.amazon-publishers.co';
    $mail->SMTPAuth = true;
    $mail->Username = 'leads@amazon-publishers.co';
    $mail->Password = 'leads@amazon-publishers.co';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    $mail->SMTPDebug = SMTP::DEBUG_OFF;

    $mail->setFrom('leads@amazon-publishers.co', 'Amazon Publishers');
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
    $adminBody = buildEmailBody($formData, 'New Consultation Request - Amazon KDP Pro');
    sendMail('info@amazonkdpexperts.com', 'Amazon KDP Experts', 'New Consultation Request - Amazon KDP Pro', $adminBody);

    $userBody = buildEmailBody($formData, 'Your Consultation Request Received');
    sendMail($email, $name, 'Your Consultation Request - Amazon KDP Pro', $userBody);

    respond(true, 'Thank you! Your consultation request has been submitted. We will contact you shortly.', 200, [
        'params' => [
            'name' => $name,
            'email' => $email,
            'e' => $email,
            'phone' => $phone,
            'brief' => $brief,
        ],
    ]);
} catch (Throwable $e) {
    respond(false, 'Error: ' . $e->getMessage(), 500);
}
