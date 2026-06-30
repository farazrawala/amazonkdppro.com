<?php
// Simple test page for smtp_email folder
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>✅ SMTP Email Folder Test</h1>";
echo "<p>This page confirms that the smtp_email folder is accessible and working.</p>";

echo "<h2>📋 Server Information</h2>";
echo "<ul>";
echo "<li><strong>Script:</strong> " . __FILE__ . "</li>";
echo "<li><strong>Server:</strong> " . $_SERVER['SERVER_NAME'] . "</li>";
echo "<li><strong>PHP Version:</strong> " . phpversion() . "</li>";
echo "<li><strong>Time:</strong> " . date('Y-m-d H:i:s') . "</li>";
echo "<li><strong>Request Method:</strong> " . $_SERVER['REQUEST_METHOD'] . "</li>";
echo "<li><strong>Request URI:</strong> " . $_SERVER['REQUEST_URI'] . "</li>";
echo "</ul>";

echo "<h2>📧 Email Function Test</h2>";
$mail_available = function_exists('mail');
echo "<p><strong>Mail function available:</strong> " . ($mail_available ? '✅ YES' : '❌ NO') . "</p>";

if ($mail_available) {
    echo "<p style='color: green;'>✅ Email functionality is available!</p>";
} else {
    echo "<p style='color: red;'>❌ Email function is not available.</p>";
}

echo "<h2>🔗 Test Links</h2>";
echo "<ul>";
echo "<li><a href='send_email.php'>send_email.php</a> - Email sending script</a></li>";
echo "<li><a href='email_debug.log'>email_debug.log</a> - Debug log file (if exists)</li>";
echo "<li><a href='email_errors.log'>email_errors.log</a> - Error log file (if exists)</li>";
echo "</ul>";

echo "<h2>📝 Form Test</h2>";
echo "<form action='send_email.php' method='post'>";
echo "<p><label>Name: <input type='text' name='name' value='Test User' required></label></p>";
echo "<p><label>Email: <input type='email' name='email' value='test@example.com' required></label></p>";
echo "<p><label>Subject: <input type='text' name='subject' value='Test Email from SMTP Folder' required></label></p>";
echo "<p><label>Message: <textarea name='message' required>This is a test message from the smtp_email folder.</textarea></label></p>";
echo "<p><button type='submit'>Send Test Email</button></p>";
echo "</form>";

echo "<hr>";
echo "<p><em>If you can see this page, the smtp_email folder is working correctly!</em></p>";
?>
