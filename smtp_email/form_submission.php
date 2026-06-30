<?php

// Load Composer's autoloader
require 'vendor/autoload.php';

// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Function to get all form data from GET and POST
function getAllFormData() {
    $data = [];
    
    // Get POST data
    if ($_POST) {
        foreach ($_POST as $key => $value) {
            if (is_array($value)) {
                $data[$key] = implode(', ', $value);
            } else {
                $data[$key] = $value;
            }
        }
    }
    
    // Get GET data
    if ($_GET) {
        foreach ($_GET as $key => $value) {
            if (is_array($value)) {
                $data[$key] = implode(', ', $value);
            } else {
                $data[$key] = $value;
            }
        }
    }
    
    return $data;
}

// Function to create HTML table from form data
function createFormDataTable($formData) {
    if (empty($formData)) {
        return '<p style="color: #666; font-family: Arial, sans-serif; text-align: center; padding: 20px; background: #f8f9fa; border-radius: 8px;">No form data received.</p>';
    }
    
    $html = '<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 20px; border-radius: 15px; margin: 20px 0; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">';
    $html .= '<table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">';
    $html .= '<thead>';
    $html .= '<tr style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">';
    $html .= '<th style="padding: 15px 20px; text-align: left; color: white; font-weight: 600; font-size: 16px; text-transform: uppercase; letter-spacing: 1px;">Field Name</th>';
    $html .= '<th style="padding: 15px 20px; text-align: left; color: white; font-weight: 600; font-size: 16px; text-transform: uppercase; letter-spacing: 1px;">Value</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    
    $rowCount = 0;
    foreach ($formData as $fieldName => $fieldValue) {
        // Create gradient colors for alternating rows
        if ($rowCount % 2 == 0) {
            $rowStyle = 'background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);';
        } else {
            $rowStyle = 'background: linear-gradient(135deg, #ffffff 0%, #fafbff 100%);';
        }
        
        $html .= '<tr style="' . $rowStyle . '; transition: all 0.3s ease;">';
        $html .= '<td style="padding: 15px 20px; border-bottom: 1px solid #e8ecff; font-weight: 600; color: #4a5568; font-size: 14px; text-transform: capitalize;">' . htmlspecialchars($fieldName) . '</td>';
        $html .= '<td style="padding: 15px 20px; border-bottom: 1px solid #e8ecff; color: #2d3748; word-wrap: break-word; font-size: 14px; line-height: 1.5;">' . htmlspecialchars($fieldValue) . '</td>';
        $html .= '</tr>';
        $rowCount++;
    }
    
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';
    
    return $html;
}

// Get all form data
$formData = getAllFormData();

// Create the email body with the form data table
$emailBody = '<html><body>';
$emailBody .= '<h2 style="color: #333; font-family: Arial, sans-serif;">Lead Form Data</h2>';
$emailBody .= '<p style="color: #666; font-family: Arial, sans-serif;">A new form has been submitted with the following data:</p>';
$emailBody .= createFormDataTable($formData);
$emailBody .= '<hr style="margin: 30px 0; border: none; border-top: 1px solid #ddd;">';
$emailBody .= '<p style="color: #999; font-size: 12px; font-family: Arial, sans-serif;">';
$emailBody .= 'Submitted on: ' . date('Y-m-d H:i:s') . '<br>';
$emailBody .= 'IP Address: ' . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . '<br>';
$emailBody .= 'User Agent: ' . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown');
$emailBody .= '</p>';
$emailBody .= '</body></html>';

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
    $mail->setFrom('leads@amazon-publishers.co', 'Amazon KDP Experts');
    $mail->addAddress('info@amazonkdpexperts.com', 'Inquiry Form');     // Add a recipient
    
    // Content
    $mail->isHTML(true);                                   // Set email format to HTML
    $mail->Subject = 'New Form Submission - ' . date('Y-m-d H:i:s');
    $mail->Body    = $emailBody;
    
    // Send the email
    $mail->send();
    
    // Return JSON response for AJAX requests
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'message' => 'Email sent successfully!',
            'data' => $formData
        ]);
    } else {
        echo "Email sent successfully!\n";
        echo "Message has been sent to: johndavid78663@gmail.com\n";
        echo "Form data captured: " . count($formData) . " fields\n";
    }
    
} catch (Exception $e) {
    $errorMessage = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
    // Return JSON response for AJAX requests
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => $errorMessage,
            'data' => $formData
        ]);
    } else {
        echo $errorMessage . "\n";
    }
}
