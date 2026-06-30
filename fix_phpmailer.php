<?php
// Fix missing PHPMailer files
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>🔧 Fix PHPMailer Installation</h1>";

// Check what files are missing
$required_files = [
    'PHPMailer.php' => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/PHPMailer.php',
    'SMTP.php' => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/SMTP.php',
    'Exception.php' => 'https://raw.githubusercontent.com/PHPMailer/PHPMailer/master/src/Exception.php'
];

echo "<h2>📁 Checking Files:</h2>";

$missing_files = [];
foreach ($required_files as $filename => $url) {
    $filepath = "PHPMailer/$filename";
    if (file_exists($filepath)) {
        $size = filesize($filepath);
        echo "<p style='color: green;'>✅ $filename exists ($size bytes)</p>";
    } else {
        echo "<p style='color: red;'>❌ $filename missing</p>";
        $missing_files[$filename] = $url;
    }
}

if (!empty($missing_files)) {
    echo "<h2>🔧 Downloading Missing Files:</h2>";
    
    if (function_exists('file_get_contents') && ini_get('allow_url_fopen')) {
        // Create directory if it doesn't exist
        if (!is_dir('PHPMailer')) {
            mkdir('PHPMailer', 0755, true);
            echo "<p>Created PHPMailer directory</p>";
        }
        
        foreach ($missing_files as $filename => $url) {
            echo "<p>Downloading $filename...</p>";
            
            $content = file_get_contents($url);
            if ($content !== false) {
                $bytes_written = file_put_contents("PHPMailer/$filename", $content);
                if ($bytes_written !== false) {
                    echo "<p style='color: green;'>✅ Downloaded $filename ($bytes_written bytes)</p>";
                } else {
                    echo "<p style='color: red;'>❌ Failed to write $filename</p>";
                }
            } else {
                echo "<p style='color: red;'>❌ Failed to download $filename</p>";
            }
        }
        
        echo "<h2>🔍 Final Check:</h2>";
        foreach ($required_files as $filename => $url) {
            $filepath = "PHPMailer/$filename";
            if (file_exists($filepath)) {
                $size = filesize($filepath);
                echo "<p style='color: green;'>✅ $filename exists ($size bytes)</p>";
            } else {
                echo "<p style='color: red;'>❌ $filename still missing</p>";
            }
        }
        
        echo "<h2>🧪 Test PHPMailer:</h2>";
        echo "<p><a href='quick_test.php' style='background: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Test Email with PHPMailer</a></p>";
        
    } else {
        echo "<p style='color: red;'>❌ Your server doesn't allow automatic downloads.</p>";
        echo "<p>Please download the missing files manually:</p>";
        echo "<ul>";
        foreach ($missing_files as $filename => $url) {
            echo "<li><a href='$url' target='_blank'>$filename</a></li>";
        }
        echo "</ul>";
    }
} else {
    echo "<p style='color: green;'><strong>✅ All PHPMailer files are present!</strong></p>";
    echo "<h2>🧪 Test PHPMailer:</h2>";
    echo "<p><a href='quick_test.php' style='background: #28a745; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Test Email with PHPMailer</a></p>";
}

echo "<hr>";
echo "<p><strong>Current Directory:</strong> " . __DIR__ . "</p>";
echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";
?>
