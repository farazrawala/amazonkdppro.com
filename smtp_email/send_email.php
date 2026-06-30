<?php

// Load Composer's autoloader
require 'vendor/autoload.php';

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                      // Enable SMTP
    $mail->Host       = 'mail.amazon-publishers.co';      // SMTP host
    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
    $mail->Username   = 'leads@amazon-publishers.co';     // SMTP username
    $mail->Password   = 'leads@amazon-publishers.co';     // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;      // Enable implicit TLS encryption
    $mail->Port       = 465;                              // TCP port to connect to (use 465 for SSL, 587 for TLS)
    
    // Alternative TLS configuration (uncomment if SSL doesn't work)
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    // $mail->Port       = 587;
    
    // Enable verbose debug output (optional - remove in production)
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    
    // Recipients
    $mail->setFrom('leads@amazon-publishers.co', 'Amazon Publishers');
    $mail->addAddress('johndavid78663@gmail.com', 'Test Recipient');     // Add a recipient
    
    // Content
    $mail->isHTML(false);                                  // Set email format to plain text
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email from PHPMailer SMTP';
    
    // Send the email
    $mail->send();
    echo "Email sent successfully!\n";
    echo "Message has been sent to: test@example.com\n";
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}\n";
}
