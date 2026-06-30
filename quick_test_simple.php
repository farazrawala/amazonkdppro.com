<?php
// Simple email test without PHPMailer - optimized for cPanel
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>📧 Simple Email Test (No PHPMailer)</h1>";

// Check if mail function exists
$mail_available = function_exists('mail');
echo "<p><strong>Mail function available:</strong> " . ($mail_available ? '✅ YES' : '❌ NO') . "</p>";

if ($mail_available) {
    // Test multiple email configurations
    $test_email = 'johndavid78663@gmail.com';
    $domain = $_SERVER['SERVER_NAME'];
    
    echo "<h2>🧪 Testing Different Email Configurations</h2>";
    
    // Test 1: Basic configuration
    echo "<h3>Test 1: Basic Configuration</h3>";
    $subject1 = 'Test 1 - Basic from ' . $domain;
    $message1 = 'This is a basic test email sent at ' . date('Y-m-d H:i:s');
    $headers1 = 'From: noreply@' . $domain;
    
    $result1 = mail($test_email, $subject1, $message1, $headers1);
    echo "<p><strong>Result:</strong> " . ($result1 ? '✅ SUCCESS' : '❌ FAILED') . "</p>";
    
    // Test 2: With proper headers
    echo "<h3>Test 2: With Proper Headers</h3>";
    $subject2 = 'Test 2 - Proper Headers from ' . $domain;
    $message2 = 'This is a test email with proper headers.';
    $headers2 = array(
        'MIME-Version: 1.0',
        'Content-type: text/plain; charset=UTF-8',
        'From: noreply@' . $domain,
        'Reply-To: noreply@' . $domain,
        'X-Mailer: PHP/' . phpversion()
    );
    
    $result2 = mail($test_email, $subject2, $message2, implode("\r\n", $headers2));
    echo "<p><strong>Result:</strong> " . ($result2 ? '✅ SUCCESS' : '❌ FAILED') . "</p>";
    
    // Test 3: HTML email
    echo "<h3>Test 3: HTML Email</h3>";
    $subject3 = 'Test 3 - HTML Email from ' . $domain;
    $message3 = '<html><body><h1>Test HTML Email</h1><p>This is an HTML test email sent at ' . date('Y-m-d H:i:s') . '</p></body></html>';
    $headers3 = array(
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: noreply@' . $domain,
        'Reply-To: noreply@' . $domain,
        'X-Mailer: PHP/' . phpversion()
    );
    
    $result3 = mail($test_email, $subject3, $message3, implode("\r\n", $headers3));
    echo "<p><strong>Result:</strong> " . ($result3 ? '✅ SUCCESS' : '❌ FAILED') . "</p>";
    
    // Test 4: Multiple recipients
    echo "<h3>Test 4: Multiple Recipients</h3>";
    $subject4 = 'Test 4 - Multiple Recipients from ' . $domain;
    $message4 = 'This is a test email to multiple recipients.';
    $headers4 = array(
        'MIME-Version: 1.0',
        'Content-type: text/plain; charset=UTF-8',
        'From: noreply@' . $domain,
        'Reply-To: noreply@' . $domain,
        'X-Mailer: PHP/' . phpversion()
    );
    
    $result4 = mail('johndavid78663@gmail.com,faraz.rawala@gmail.com', $subject4, $message4, implode("\r\n", $headers4));
    echo "<p><strong>Result:</strong> " . ($result4 ? '✅ SUCCESS' : '❌ FAILED') . "</p>";
    
    // Test 5: Different From address
    echo "<h3>Test 5: Different From Address</h3>";
    $subject5 = 'Test 5 - Different From from ' . $domain;
    $message5 = 'This is a test email with different from address.';
    $headers5 = array(
        'MIME-Version: 1.0',
        'Content-type: text/plain; charset=UTF-8',
        'From: webmaster@' . $domain,
        'Reply-To: webmaster@' . $domain,
        'X-Mailer: PHP/' . phpversion()
    );
    
    $result5 = mail($test_email, $subject5, $message5, implode("\r\n", $headers5));
    echo "<p><strong>Result:</strong> " . ($result5 ? '✅ SUCCESS' : '❌ FAILED') . "</p>";
    
    // Summary
    echo "<h2>📊 Test Summary</h2>";
    $success_count = 0;
    if ($result1) $success_count++;
    if ($result2) $success_count++;
    if ($result3) $success_count++;
    if ($result4) $success_count++;
    if ($result5) $success_count++;
    
    echo "<p><strong>Successful tests:</strong> $success_count out of 5</p>";
    
    if ($success_count > 0) {
        echo "<p style='color: green;'><strong>✅ Email functionality is working!</strong></p>";
        echo "<p>Check your email inbox and spam folder for test emails.</p>";
    } else {
        echo "<p style='color: red;'><strong>❌ All email tests failed.</strong></p>";
        echo "<p>This indicates a server configuration issue.</p>";
    }
    
} else {
    echo "<p style='color: red;'><strong>❌ CRITICAL:</strong> Mail function is not available.</p>";
    echo "<p>Contact your hosting provider to enable the mail() function.</p>";
}

// Server information
echo "<hr>";
echo "<h2>📋 Server Information</h2>";
echo "<ul>";
echo "<li><strong>Server:</strong> " . $_SERVER['SERVER_NAME'] . "</li>";
echo "<li><strong>PHP Version:</strong> " . phpversion() . "</li>";
echo "<li><strong>Time:</strong> " . date('Y-m-d H:i:s') . "</li>";
echo "<li><strong>sendmail_path:</strong> " . (ini_get('sendmail_path') ?: 'Not set') . "</li>";
echo "<li><strong>SMTP:</strong> " . (ini_get('SMTP') ?: 'Not set') . "</li>";
echo "</ul>";

// Troubleshooting tips
echo "<h2>🔧 Troubleshooting Tips</h2>";
echo "<ul>";
echo "<li>📧 Check your spam/junk folder for test emails</li>";
echo "<li>🔧 Verify your email addresses are correct</li>";
echo "<li>🔧 Contact your hosting provider about mail server configuration</li>";
echo "<li>🔧 Try setting up a proper email account in cPanel</li>";
echo "<li>🔧 Check if your hosting provider has email sending restrictions</li>";
echo "</ul>";

// Next steps
echo "<h2>🚀 Next Steps</h2>";
echo "<p>If emails are working, you can now use the updated form submission scripts:</p>";
echo "<ul>";
echo "<li><a href='form_submission.php'>form_submission.php</a> - Updated with better error handling</li>";
echo "<li><a href='form_submission_simple.php'>form_submission_simple.php</a> - Simplified version</li>";
echo "<li><a href='test_form.html'>test_form.html</a> - Test form interface</li>";
echo "</ul>";
?>
