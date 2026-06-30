<?php
// Log viewer for email debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>📋 Email Log Viewer</h1>";

// Check if log files exist
$debug_log = __DIR__ . '/email_debug.log';
$error_log = __DIR__ . '/email_errors.log';

echo "<h2>📁 Log Files Status</h2>";

if (file_exists($debug_log)) {
    $debug_size = filesize($debug_log);
    echo "<p><strong>Debug Log:</strong> ✅ Exists ($debug_size bytes)</p>";
} else {
    echo "<p><strong>Debug Log:</strong> ❌ Not found</p>";
}

if (file_exists($error_log)) {
    $error_size = filesize($error_log);
    echo "<p><strong>Error Log:</strong> ✅ Exists ($error_size bytes)</p>";
} else {
    echo "<p><strong>Error Log:</strong> ❌ Not found</p>";
}

// Display debug log
if (file_exists($debug_log)) {
    echo "<h2>📝 Debug Log Content</h2>";
    echo "<div style='background: #f5f5f5; padding: 15px; border-radius: 5px; max-height: 400px; overflow-y: auto; font-family: monospace; font-size: 12px;'>";
    $debug_content = file_get_contents($debug_log);
    if ($debug_content) {
        echo nl2br(htmlspecialchars($debug_content));
    } else {
        echo "<p>Debug log is empty.</p>";
    }
    echo "</div>";
}

// Display error log
if (file_exists($error_log)) {
    echo "<h2>❌ Error Log Content</h2>";
    echo "<div style='background: #fff5f5; padding: 15px; border-radius: 5px; max-height: 400px; overflow-y: auto; font-family: monospace; font-size: 12px;'>";
    $error_content = file_get_contents($error_log);
    if ($error_content) {
        echo nl2br(htmlspecialchars($error_content));
    } else {
        echo "<p>Error log is empty.</p>";
    }
    echo "</div>";
}

// Clear logs option
if (isset($_GET['clear']) && $_GET['clear'] === 'logs') {
    if (file_exists($debug_log)) {
        unlink($debug_log);
        echo "<p style='color: green;'>✅ Debug log cleared.</p>";
    }
    if (file_exists($error_log)) {
        unlink($error_log);
        echo "<p style='color: green;'>✅ Error log cleared.</p>";
    }
    echo "<script>location.reload();</script>";
}

echo "<h2>🔧 Actions</h2>";
echo "<p><a href='?clear=logs' onclick='return confirm(\"Clear all logs?\")' style='background: #dc3545; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Clear All Logs</a></p>";
echo "<p><a href='test.php' style='background: #007cba; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Back to Test Page</a></p>";

echo "<hr>";
echo "<p><em>Logs are automatically created when email scripts run.</em></p>";
?>

