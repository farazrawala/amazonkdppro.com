<?php
// Simplified form submission for cPanel - optimized for reliability
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if form was submitted
if (!empty($_REQUEST)) {
    
    // Email configuration
    $to = 'leads@amazon-publishers.co';
    $subject = isset($_REQUEST['subject']) ? $_REQUEST['subject'] : 'New Form Submission from ' . $_SERVER['SERVER_NAME'];
    
    // Build simple email content
    $emailContent = "New Form Submission\n\n";
    $emailContent .= "Form Details:\n";
    $emailContent .= "================\n\n";
    
    // Loop through all form fields
    foreach ($_REQUEST as $field_name => $field_value) {
        // Skip empty values
        if (empty($field_value) && $field_value !== '0') {
            continue;
        }
        
        // Clean and format field name
        $display_name = ucwords(str_replace(['_', '-'], ' ', $field_name));
        
        // Handle arrays
        if (is_array($field_value)) {
            $field_value = implode(', ', $field_value);
        }
        
        $emailContent .= $display_name . ": " . $field_value . "\n";
    }
    
    $emailContent .= "\n================\n";
    $emailContent .= "Submitted on: " . date('F j, Y \a\t g:i A T') . "\n";
    $emailContent .= "From: " . $_SERVER['SERVER_NAME'] . "\n";
    $emailContent .= "User Agent: " . (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : 'Not available') . "\n";
    
    // Get domain for From address
    $domain = $_SERVER['SERVER_NAME'];
    
    // Try multiple From address formats
    $from_addresses = [
        'noreply@' . $domain,
        'webmaster@' . $domain,
        'info@' . $domain,
        'admin@' . $domain
    ];
    
    $mail_sent = false;
    $error_message = '';
    
    // Try each From address until one works
    foreach ($from_addresses as $from_email) {
        // Simple headers for maximum compatibility
        $headers = array(
            'From: ' . $from_email,
            'Reply-To: ' . $from_email,
            'X-Mailer: PHP/' . phpversion()
        );
        
        // Try to send email
        $result = mail($to, $subject, $emailContent, implode("\r\n", $headers));
        
        if ($result) {
            $mail_sent = true;
            $successful_from = $from_email;
            break;
        } else {
            $error_message .= "Failed with From: $from_email\n";
        }
    }
    
    // Log the attempt
    $log_message = date('Y-m-d H:i:s') . " - Email attempt to $to - Status: " . ($mail_sent ? 'SUCCESS' : 'FAILED') . " - From: " . ($successful_from ?? 'NONE') . "\n";
    error_log($log_message, 3, 'email_log.txt');
    
    // Return JSON response
    header('Content-Type: application/json');
    
    if ($mail_sent) {
        echo json_encode([
            'status' => 'success',
            'to' => $to,
            'from' => $successful_from,
            'message' => 'Form submitted successfully! We will get back to you soon.',
            'timestamp' => date('Y-m-d H:i:s')
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Failed to send email. Please try again later.',
            'timestamp' => date('Y-m-d H:i:s'),
            'debug_info' => [
                'to' => $to,
                'subject' => $subject,
                'domain' => $domain,
                'mail_function' => function_exists('mail') ? 'Available' : 'Not Available',
                'error_details' => $error_message
            ]
        ]);
    }
    
} else {
    // No form data received
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error',
        'message' => 'No form data received.',
        'timestamp' => date('Y-m-d H:i:s'),
        'debug_info' => [
            'post_data' => $_POST,
            'get_data' => $_GET,
            'request_data' => $_REQUEST
        ]
    ]);
}
?>
