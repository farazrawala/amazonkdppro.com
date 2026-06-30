<?php
// Comprehensive email debugging script
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>🔍 Email Debugging Report</h1>";

// 1. Basic Server Information
echo "<h2>📋 Server Information</h2>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr><td><strong>PHP Version</strong></td><td>" . phpversion() . "</td></tr>";
echo "<tr><td><strong>Server Name</strong></td><td>" . $_SERVER['SERVER_NAME'] . "</td></tr>";
echo "<tr><td><strong>Server Software</strong></td><td>" . $_SERVER['SERVER_SOFTWARE'] . "</td></tr>";
echo "<tr><td><strong>Document Root</strong></td><td>" . $_SERVER['DOCUMENT_ROOT'] . "</td></tr>";
echo "<tr><td><strong>Script Path</strong></td><td>" . __FILE__ . "</td></tr>";
echo "</table>";

// 2. Mail Function Check
echo "<h2>📧 Mail Function Status</h2>";
$mail_function_exists = function_exists('mail');
echo "<p><strong>Mail function available:</strong> " . ($mail_function_exists ? '✅ YES' : '❌ NO') . "</p>";

if ($mail_function_exists) {
    echo "<p><strong>Mail function disabled:</strong> " . (in_array('mail', explode(',', ini_get('disable_functions')))) ? '❌ YES' : '✅ NO' . "</p>";
}

// 3. PHP Mail Settings
echo "<h2>⚙️ PHP Mail Configuration</h2>";
echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
echo "<tr><td><strong>sendmail_path</strong></td><td>" . (ini_get('sendmail_path') ?: 'Not set') . "</td></tr>";
echo "<tr><td><strong>SMTP</strong></td><td>" . (ini_get('SMTP') ?: 'Not set') . "</td></tr>";
echo "<tr><td><strong>smtp_port</strong></td><td>" . (ini_get('smtp_port') ?: 'Not set') . "</td></tr>";
echo "<tr><td><strong>mail.add_x_header</strong></td><td>" . (ini_get('mail.add_x_header') ? 'On' : 'Off') . "</td></tr>";
echo "<tr><td><strong>mail.log</strong></td><td>" . (ini_get('mail.log') ?: 'Not set') . "</td></tr>";
echo "</table>";

// 4. Test Different Email Configurations
echo "<h2>🧪 Email Tests</h2>";

$test_email = 'johndavid78663@gmail.com';
$domain = $_SERVER['SERVER_NAME'];

// Test 1: Basic mail with minimal headers
echo "<h3>Test 1: Basic Mail Function</h3>";
$subject1 = 'Test 1 - Basic from ' . $domain;
$message1 = 'This is a basic test email.';
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
$message3 = '<html><body><h1>Test HTML Email</h1><p>This is an HTML test email.</p></body></html>';
$headers3 = array(
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: noreply@' . $domain,
    'Reply-To: noreply@' . $domain,
    'X-Mailer: PHP/' . phpversion()
);

$result3 = mail($test_email, $subject3, $message3, implode("\r\n", $headers3));
echo "<p><strong>Result:</strong> " . ($result3 ? '✅ SUCCESS' : '❌ FAILED') . "</p>";

// Test 4: Different From address
echo "<h3>Test 4: Different From Address</h3>";
$subject4 = 'Test 4 - Different From from ' . $domain;
$message4 = 'This is a test email with different from address.';
$headers4 = array(
    'MIME-Version: 1.0',
    'Content-type: text/plain; charset=UTF-8',
    'From: webmaster@' . $domain,
    'Reply-To: webmaster@' . $domain,
    'X-Mailer: PHP/' . phpversion()
);

$result4 = mail($test_email, $subject4, $message4, implode("\r\n", $headers4));
echo "<p><strong>Result:</strong> " . ($result4 ? '✅ SUCCESS' : '❌ FAILED') . "</p>";

// 5. Check for PHPMailer
echo "<h2>📬 PHPMailer Check</h2>";
$phpmailer_available = class_exists('PHPMailer\PHPMailer\PHPMailer');
echo "<p><strong>PHPMailer available:</strong> " . ($phpmailer_available ? '✅ YES' : '❌ NO') . "</p>";

if ($phpmailer_available) {
    echo "<h3>PHPMailer Test</h3>";
    try {
        require_once 'vendor/autoload.php';
        
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = false;
        $mail->Port = 25;
        $mail->SMTPDebug = 0; // Set to 2 for debugging
        
        // Recipients
        $mail->setFrom('noreply@' . $domain, $domain);
        $mail->addAddress($test_email);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'PHPMailer Test from ' . $domain;
        $mail->Body = '<h1>PHPMailer Test</h1><p>This is a PHPMailer test email.</p>';
        
        $phpmailer_result = $mail->send();
        echo "<p><strong>PHPMailer Result:</strong> " . ($phpmailer_result ? '✅ SUCCESS' : '❌ FAILED') . "</p>";
        
    } catch (Exception $e) {
        echo "<p><strong>PHPMailer Error:</strong> " . $e->getMessage() . "</p>";
    }
}

// 6. File System Check
echo "<h2>📁 File System Check</h2>";
$current_dir = dirname(__FILE__);
echo "<p><strong>Current Directory:</strong> $current_dir</p>";
echo "<p><strong>Writable:</strong> " . (is_writable($current_dir) ? '✅ YES' : '❌ NO') . "</p>";

// Test creating a log file
$log_file = $current_dir . '/email_debug.log';
$log_test = file_put_contents($log_file, date('Y-m-d H:i:s') . " - Debug test\n", FILE_APPEND);
echo "<p><strong>Log file writable:</strong> " . ($log_test !== false ? '✅ YES' : '❌ NO') . "</p>";

// 7. Error Log Check
echo "<h2>📝 Error Log Check</h2>";
$error_log = ini_get('error_log');
echo "<p><strong>Error Log Path:</strong> " . ($error_log ?: 'Default') . "</p>";

// 8. Recommendations
echo "<h2>💡 Recommendations</h2>";
echo "<ul>";

if (!$mail_function_exists) {
    echo "<li>❌ <strong>CRITICAL:</strong> Mail function is not available. Contact your hosting provider.</li>";
} else {
    echo "<li>✅ Mail function is available.</li>";
}

if (empty(ini_get('sendmail_path'))) {
    echo "<li>⚠️ <strong>WARNING:</strong> sendmail_path is not configured. This may cause issues.</li>";
} else {
    echo "<li>✅ sendmail_path is configured.</li>";
}

if (!$result1 && !$result2 && !$result3 && !$result4) {
    echo "<li>❌ <strong>CRITICAL:</strong> All mail tests failed. This indicates a server configuration issue.</li>";
    echo "<li>🔧 <strong>ACTION REQUIRED:</strong> Contact your hosting provider about mail server configuration.</li>";
} else {
    echo "<li>✅ At least one mail test succeeded.</li>";
}

echo "<li>📧 Check your spam folder for test emails.</li>";
echo "<li>🔧 Consider setting up a proper email account in cPanel.</li>";
echo "<li>🔧 Try using PHPMailer with SMTP authentication if available.</li>";
echo "</ul>";

// 9. Form Data Test
echo "<h2>📋 Form Data Test</h2>";
if (!empty($_REQUEST)) {
    echo "<p><strong>Form data received:</strong> ✅ YES</p>";
    echo "<pre>" . print_r($_REQUEST, true) . "</pre>";
} else {
    echo "<p><strong>Form data received:</strong> ❌ NO</p>";
}

echo "<hr>";
echo "<p><em>Debug completed at: " . date('Y-m-d H:i:s') . "</em></p>";
?>
