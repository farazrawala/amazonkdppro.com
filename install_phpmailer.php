<?php
// PHPMailer Installation Helper
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>📦 PHPMailer Installation Helper</h1>";

// Check if PHPMailer is already available
$phpmailer_available = class_exists('PHPMailer\PHPMailer\PHPMailer');

if ($phpmailer_available) {
    echo "<p style='color: green;'><strong>✅ PHPMailer is already installed and available!</strong></p>";
    echo "<p>You can now use PHPMailer in your email scripts.</p>";
} else {
    echo "<p style='color: orange;'><strong>⚠️ PHPMailer is not installed.</strong></p>";
}

// Check if all required files exist
$required_files = [
    'PHPMailer/PHPMailer.php',
    'PHPMailer/SMTP.php',
    'PHPMailer/Exception.php'
];

$missing_files = [];
foreach ($required_files as $file) {
    if (!file_exists($file)) {
        $missing_files[] = $file;
    }
}

if (!empty($missing_files)) {
    echo "<p style='color: red;'><strong>❌ Missing files:</strong></p>";
    echo "<ul>";
    foreach ($missing_files as $file) {
        echo "<li>$file</li>";
    }
    echo "</ul>";
    
    // Check if we can download and install it
    echo "<h2>🔧 Installation Options:</h2>";
    
    // Option 1: Manual download
    echo "<h3>Option 1: Manual Download</h3>";
    echo "<p>1. Download PHPMailer from: <a href='https://github.com/PHPMailer/PHPMailer/archive/refs/heads/master.zip' target='_blank'>GitHub</a></p>";
    echo "<p>2. Extract the files</p>";
    echo "<p>3. Upload the <code>src</code> folder to your server</p>";
    echo "<p>4. Rename it to <code>PHPMailer</code></p>";
    
    // Option 2: Try to download automatically
    echo "<h3>Option 2: Automatic Download (if server allows)</h3>";
    
    if (function_exists('file_get_contents') && ini_get('allow_url_fopen')) {
        echo "<p>Your server allows remote file downloads. You can try automatic installation:</p>";
        
        if (isset($_GET['install'])) {
            try {
                // Create PHPMailer directory
                if (!is_dir('PHPMailer')) {
                    mkdir('PHPMailer', 0755, true);
                }
                
                // Download PHPMailer files
                $files = [
                    'PHPMailer.php' => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/PHPMailer.php',
                    'SMTP.php' => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/SMTP.php',
                    'Exception.php' => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/Exception.php'
                ];
                
                $success = true;
                foreach ($files as $filename => $url) {
                    echo "<p>Downloading $filename...</p>";
                    $content = file_get_contents($url);
                    if ($content !== false) {
                        $bytes_written = file_put_contents("PHPMailer/$filename", $content);
                        if ($bytes_written !== false) {
                            echo "<p style='color: green;'>✅ Downloaded: $filename ($bytes_written bytes)</p>";
                        } else {
                            echo "<p style='color: red;'>❌ Failed to write: $filename</p>";
                            $success = false;
                        }
                    } else {
                        echo "<p style='color: red;'>❌ Failed to download: $filename</p>";
                        $success = false;
                    }
                }
                
                if ($success) {
                    echo "<p style='color: green;'><strong>✅ PHPMailer installed successfully!</strong></p>";
                    echo "<p>You can now use PHPMailer in your email scripts.</p>";
                    
                    // Verify installation
                    echo "<h3>🔍 Verifying Installation:</h3>";
                    foreach ($required_files as $file) {
                        if (file_exists($file)) {
                            echo "<p style='color: green;'>✅ $file exists</p>";
                        } else {
                            echo "<p style='color: red;'>❌ $file missing</p>";
                        }
                    }
                }
                
            } catch (Exception $e) {
                echo "<p style='color: red;'>❌ Installation failed: " . $e->getMessage() . "</p>";
            }
        } else {
            echo "<p><a href='?install=1' style='background: #007cba; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Install PHPMailer Automatically</a></p>";
        }
    } else {
        echo "<p style='color: red;'>❌ Your server doesn't allow automatic downloads.</p>";
        echo "<p>Please use Option 1 (Manual Download).</p>";
    }
    
    // Option 3: Composer
    echo "<h3>Option 3: Composer (Recommended)</h3>";
    echo "<p>If you have Composer installed:</p>";
    echo "<pre>composer require phpmailer/phpmailer</pre>";
} else {
    echo "<p style='color: green;'><strong>✅ All required PHPMailer files are present!</strong></p>";
}

// Test PHPMailer after installation
if ($phpmailer_available || (isset($_GET['install']) && $success)) {
    echo "<h2>🧪 Test PHPMailer Installation</h2>";
    echo "<p><a href='quick_test.php' style='background: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Test Email with PHPMailer</a></p>";
}

echo "<hr>";
echo "<p><strong>Current Directory:</strong> " . __DIR__ . "</p>";
echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";

// Show current file status
echo "<h3>📁 Current File Status:</h3>";
foreach ($required_files as $file) {
    if (file_exists($file)) {
        $size = filesize($file);
        echo "<p style='color: green;'>✅ $file ($size bytes)</p>";
    } else {
        echo "<p style='color: red;'>❌ $file (missing)</p>";
    }
}
?>
