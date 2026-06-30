# PHPMailer SMTP Email Script

This project contains PHP scripts to send emails via SMTP using PHPMailer with the Amazon Publishers email configuration.

## Features

- ✅ SMTP authentication with SSL/TLS encryption
- ✅ Support for both HTML and plain text emails
- ✅ Comprehensive error handling
- ✅ Configurable SMTP settings
- ✅ Multiple email formats and examples

## Installation

### Prerequisites

- PHP 7.4 or higher
- Composer
- Access to the SMTP server

### Setup

1. **Install dependencies:**
   ```bash
   composer install
   ```

2. **Verify the configuration:**
   - Check `config.php` for SMTP settings
   - Ensure the credentials are correct for your environment

## Usage

### Basic Email Script

Run the basic email script:
```bash
php send_email.php
```

This will send a test email to `test@example.com` with the subject "Test Email".

### Advanced Email Script

Run the advanced script with multiple examples:
```bash
php send_email_advanced.php
```

This script demonstrates:
- Plain text emails
- HTML formatted emails
- Better error handling
- Reusable function

### Custom Usage

You can also use the email function in your own scripts:

```php
<?php
require 'vendor/autoload.php';
require 'send_email_advanced.php';

// Send a custom email
$result = sendEmail(
    'recipient@example.com',
    'Custom Subject',
    'Your email content here',
    true // true for HTML, false for plain text
);

if ($result['success']) {
    echo "Email sent successfully!";
} else {
    echo "Error: " . $result['message'];
}
?>
```

## Configuration

### SMTP Settings

The SMTP configuration is stored in `config.php`:

```php
'smtp' => [
    'host' => 'mail.amazon-publishers.co',
    'username' => 'leads@amazon-publishers.co',
    'password' => 'leads@amazon-publishers.co',
    'port' => 465,        // 465 for SSL, 587 for TLS
    'encryption' => 'ssl', // 'ssl' or 'tls'
    'timeout' => 30,
    'debug' => false
]
```

### Port Configuration

- **Port 465**: Use with SSL encryption (`ENCRYPTION_SMTPS`)
- **Port 587**: Use with TLS encryption (`ENCRYPTION_STARTTLS`)

## Troubleshooting

### Common Issues

1. **Connection timeout:**
   - Check if the SMTP host is accessible
   - Verify firewall settings
   - Try different ports (465 vs 587)

2. **Authentication failed:**
   - Verify username and password
   - Check if the email account is active
   - Ensure SMTP authentication is enabled

3. **SSL/TLS issues:**
   - Try switching between SSL and TLS
   - Check if your PHP has OpenSSL extension enabled

### Debug Mode

To enable debug mode, set `'debug' => true` in `config.php` or modify the script:

```php
$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Shows server communication
```

## Security Notes

- ⚠️ **Never commit credentials to version control**
- ⚠️ **Use environment variables for production**
- ⚠️ **Enable SSL/TLS encryption**
- ⚠️ **Validate email addresses before sending**

## File Structure

```
smtp_email/
├── composer.json              # Dependencies
├── config.php                 # SMTP configuration
├── send_email.php            # Basic email script
├── send_email_advanced.php   # Advanced email script
└── README.md                 # This file
```

## License

This project is for educational and development purposes. Please ensure you have proper authorization to use the SMTP credentials.
