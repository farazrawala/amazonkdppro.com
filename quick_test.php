<?php
// Quick email test using PHPMailer for better reliability
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Quick Email Test with PHPMailer</h1>";

// Check if PHPMailer is available
$phpmailer_available = class_exists('PHPMailer\PHPMailer\PHPMailer');

if (!$phpmailer_available) {
    // Try to include PHPMailer manually
    $phpmailer_paths = [
        'vendor/autoload.php',
        'PHPMailer/PHPMailer.php',
        'phpmailer/PHPMailer.php',
        '../vendor/autoload.php'
    ];
    
    foreach ($phpmailer_paths as $path) {
        if (file_exists($path)) {
            require_once $path;
            $phpmailer_available = true;
            break;
        }
    }
}

if ($phpmailer_available) {
    echo "<p><strong>PHPMailer available:</strong> ✅ YES</p>";
    
    try {
        // Create PHPMailer instance
        if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
            $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        } else {
            $mail = new PHPMailer(true);
        }
        
        // Server settings for cPanel
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->SMTPAuth = false;
        $mail->Port = 25;
        $mail->SMTPDebug = 0; // Set to 2 for debugging
        
        // Recipients
        $mail->setFrom('noreply@' . $_SERVER['SERVER_NAME'], $_SERVER['SERVER_NAME']);
        $mail->addAddress('johndavid78663@gmail.com');
        $mail->addAddress('faraz.rawala@gmail.com');
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'PHPMailer Test from ' . $_SERVER['SERVER_NAME'];
        $mail->Body = '<h1>PHPMailer Test Email</h1><p>This is a test email sent using PHPMailer at ' . date('Y-m-d H:i:s') . '</p><p>If you receive this, PHPMailer is working correctly!</p>';
        $mail->AltBody = 'This is a test email sent using PHPMailer at ' . date('Y-m-d H:i:s');
        
        echo "<p><strong>Attempting to send email with PHPMailer...</strong></p>";
        
        $result = $mail->send();
        
        if ($result) {
            echo "<p style='color: green;'><strong>✅ SUCCESS:</strong> Email sent successfully with PHPMailer!</p>";
            echo "<p>Check your emails: johndavid78663@gmail.com and faraz.rawala@gmail.com</p>";
            echo "<p>Also check your spam folder.</p>";
        } else {
            echo "<p style='color: red;'><strong>❌ FAILED:</strong> PHPMailer could not send email.</p>";
        }
        
    } catch (Exception $e) {
        echo "<p style='color: red;'><strong>❌ PHPMailer Error:</strong> " . $e->getMessage() . "</p>";
    }
    
} else {
    echo "<p><strong>PHPMailer available:</strong> ❌ NO</p>";
    echo "<p>PHPMailer not found. Trying basic mail() function as fallback...</p>";
    
    // Fallback to basic mail function
    $mail_available = function_exists('mail');
    echo "<p><strong>Mail function available:</strong> " . ($mail_available ? '✅ YES' : '❌ NO') . "</p>";
    
    if ($mail_available) {
        // Test email with basic mail function
        $to = 'johndavid78663@gmail.com,faraz.rawala@gmail.com';
        $subject = 'Basic Mail Test from ' . $_SERVER['SERVER_NAME'];
        $message = 'This is a basic test email sent at ' . date('Y-m-d H:i:s');
        $headers = 'From: noreply@' . $_SERVER['SERVER_NAME'];
        
        echo "<p><strong>Attempting to send email with basic mail()...</strong></p>";
        
        $result = mail($to, $subject, $message, $headers);
        
        if ($result) {
            echo "<p style='color: green;'><strong>✅ SUCCESS:</strong> Basic mail() function returned true!</p>";
            echo "<p>However, if you're not receiving emails, this indicates a server configuration issue.</p>";
            echo "<p>Check your spam folder and contact your hosting provider.</p>";
        } else {
            echo "<p style='color: red;'><strong>❌ FAILED:</strong> Basic mail() function failed.</p>";
        }
    } else {
        echo "<p style='color: red;'><strong>❌ CRITICAL:</strong> Neither PHPMailer nor mail() function is available.</p>";
        echo "<p>Contact your hosting provider to enable email functionality.</p>";
    }
}

echo "<hr>";
echo "<p><strong>Server Info:</strong></p>";
echo "<ul>";
echo "<li>Server: " . $_SERVER['SERVER_NAME'] . "</li>";
echo "<li>PHP Version: " . phpversion() . "</li>";
echo "<li>Time: " . date('Y-m-d H:i:s') . "</li>";
echo "</ul>";

// Additional troubleshooting info
echo "<h3>🔧 Troubleshooting Tips:</h3>";
echo "<ul>";
echo "<li>📧 Check your spam/junk folder</li>";
echo "<li>🔧 Verify your email addresses are correct</li>";
echo "<li>🔧 Contact your hosting provider about mail server configuration</li>";
echo "<li>🔧 Try setting up a proper email account in cPanel</li>";
echo "<li>🔧 Check if your hosting provider has email sending restrictions</li>";
echo "</ul>";

// Install PHPMailer instructions
if (!$phpmailer_available) {
    echo "<h3>📦 Install PHPMailer:</h3>";
    echo "<p>To install PHPMailer, you can:</p>";
    echo "<ol>";
    echo "<li><strong>Via Composer:</strong> Run <code>composer require phpmailer/phpmailer</code></li>";
    echo "<li><strong>Manual Download:</strong> Download from <a href='https://github.com/PHPMailer/PHPMailer' target='_blank'>GitHub</a></li>";
    echo "<li><strong>cPanel File Manager:</strong> Upload PHPMailer files to your server</li>";
    echo "</ol>";
}
?>
