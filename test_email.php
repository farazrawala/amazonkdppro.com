<?php
// Simple email test script for cPanel debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Email Configuration Test</h2>";

// Check if mail function exists
echo "<p><strong>Mail function available:</strong> " . (function_exists('mail') ? 'YES' : 'NO') . "</p>";

// Check PHP version
echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";

// Check server information
echo "<p><strong>Server Name:</strong> " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p><strong>Server Software:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</p>";

// Test basic email
$to = 'johndavid78663@gmail.com';
$subject = 'Test Email from ' . $_SERVER['SERVER_NAME'];
$message = 'This is a test email to verify mail functionality on cPanel server.';
$headers = 'From: noreply@' . $_SERVER['SERVER_NAME'] . "\r\n" .
           'Reply-To: noreply@' . $_SERVER['SERVER_NAME'] . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

echo "<p><strong>Attempting to send test email...</strong></p>";

$result = mail($to, $subject, $message, $headers);

if ($result) {
    echo "<p style='color: green;'><strong>SUCCESS:</strong> Test email sent successfully!</p>";
} else {
    echo "<p style='color: red;'><strong>FAILED:</strong> Test email could not be sent.</p>";
    
    // Additional debugging information
    echo "<h3>Possible Issues:</h3>";
    echo "<ul>";
    echo "<li>Mail server not configured properly</li>";
    echo "<li>SMTP settings not configured in cPanel</li>";
    echo "<li>Domain email not set up</li>";
    echo "<li>Server restrictions on mail function</li>";
    echo "</ul>";
    
    echo "<h3>Solutions to try:</h3>";
    echo "<ul>";
    echo "<li>Check cPanel Email Configuration</li>";
    echo "<li>Verify SMTP settings in cPanel</li>";
    echo "<li>Set up proper email accounts for your domain</li>";
    echo "<li>Contact your hosting provider about mail configuration</li>";
    echo "</ul>";
}

// Check for common mail-related PHP settings
echo "<h3>PHP Mail Settings:</h3>";
echo "<p><strong>sendmail_path:</strong> " . ini_get('sendmail_path') . "</p>";
echo "<p><strong>SMTP:</strong> " . ini_get('SMTP') . "</p>";
echo "<p><strong>smtp_port:</strong> " . ini_get('smtp_port') . "</p>";

// Test with different From address format
echo "<h3>Testing with different From address format...</h3>";
$headers2 = 'From: webmaster@' . $_SERVER['SERVER_NAME'] . "\r\n" .
            'Reply-To: webmaster@' . $_SERVER['SERVER_NAME'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

$result2 = mail($to, $subject . ' (Test 2)', $message, $headers2);

if ($result2) {
    echo "<p style='color: green;'><strong>SUCCESS:</strong> Test 2 email sent successfully!</p>";
} else {
    echo "<p style='color: red;'><strong>FAILED:</strong> Test 2 email could not be sent.</p>";
}

echo "<p><em>Note: If emails are not being received, check your spam folder. Some hosting providers may have restrictions on the mail() function.</em></p>";
?> 