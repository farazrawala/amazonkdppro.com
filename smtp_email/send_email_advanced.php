<?php

// Load Composer's autoloader
require 'vendor/autoload.php';

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

/**
 * Send Email via SMTP using PHPMailer
 * 
 * @param string $to Recipient email address
 * @param string $subject Email subject
 * @param string $body Email body (HTML or plain text)
 * @param bool $isHTML Whether the body is HTML (default: true)
 * @return array Array with 'success' boolean and 'message' string
 */
function sendEmail($to, $subject, $body, $isHTML = true) {
    // SMTP Configuration
    $smtpConfig = [
        'host' => 'mail.amazon-publishers.co',
        'username' => 'leads@amazon-publishers.co',
        'password' => 'leads@amazon-publishers.co',
        'port' => 465,
        'encryption' => PHPMailer::ENCRYPTION_SMTPS, // SSL
        'from_email' => 'leads@amazon-publishers.co',
        'from_name' => 'Amazon Publishers'
    ];
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();                                      // Enable SMTP
        $mail->Host       = $smtpConfig['host'];              // SMTP host
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = $smtpConfig['username'];          // SMTP username
        $mail->Password   = $smtpConfig['password'];          // SMTP password
        $mail->SMTPSecure = $smtpConfig['encryption'];        // Enable encryption
        $mail->Port       = $smtpConfig['port'];              // TCP port to connect to
        
        // Enable verbose debug output (set to DEBUG_OFF in production)
        $mail->SMTPDebug = SMTP::DEBUG_OFF;
        
        // Set timeout
        $mail->Timeout = 30;
        
        // Recipients
        $mail->setFrom($smtpConfig['from_email'], $smtpConfig['from_name']);
        $mail->addAddress($to);                               // Add a recipient
        
        // Content
        $mail->isHTML($isHTML);                               // Set email format
        $mail->Subject = $subject;
        $mail->Body    = $body;
        
        // If sending HTML email, also set plain text version
        if ($isHTML) {
            $mail->AltBody = strip_tags($body);
        }
        
        // Send the email
        $mail->send();
        
        return [
            'success' => true,
            'message' => "Email sent successfully to: {$to}"
        ];
        
    } catch (Exception $e) {
        return [
            'success' => false,
            'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"
        ];
    }
}

// Example usage
echo "=== PHPMailer SMTP Email Test ===\n\n";

// Test 1: Plain text email
echo "Sending plain text email...\n";
$result1 = sendEmail(
    'johndavid78663@gmail.com',
    'Test Email - Plain Text johndavid78663@gmail.com',
    'This is a test email from PHPMailer SMTP using plain text format.',
    false
);


echo $result1['message'] . "\n\n";

// Test 2: HTML email
echo "Sending HTML email...\n";
$htmlBody = "
<html>
<head>
    <title>Test Email</title>
</head>
<body>
    <h2>Test Email from PHPMailer</h2>
    <p>This is a <strong>test email</strong> sent via SMTP using PHPMailer.</p>
    <p>Features:</p>
    <ul>
        <li>HTML formatting</li>
        <li>SMTP authentication</li>
        <li>Error handling</li>
    </ul>
    <p>Sent from: <em>Amazon Publishers</em></p>
</body>
</html>";

$result2 = sendEmail(
    'johndavid78663@gmail.com',
    'Test Email - HTML Format',
    $htmlBody,
    true
);

echo $result2['message'] . "\n\n";

echo "=== Test Complete ===\n";
