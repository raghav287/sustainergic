<?php
/**
 * SMTP & Email Configuration for Sustainergic Tech (PHPMailer)
 * Update these settings with your SMTP provider credentials (e.g., Gmail, Outlook, cPanel Webmail, SendGrid, Amazon SES, etc.)
 */

// SMTP Host & Port Configuration
define('SMTP_HOST', 'smtp.gmail.com');                  // e.g. smtp.gmail.com, mail.sustainergictech.in
define('SMTP_PORT', 587);                               // 587 for TLS / STARTTLS, 465 for SSL
define('SMTP_ENCRYPTION', 'tls');                       // 'tls' or 'ssl'
define('SMTP_AUTH', true);                              // Enable SMTP authentication

// SMTP Credentials
define('SMTP_USERNAME', 'vivek@sustainergictech.in'); // Your SMTP email address
define('SMTP_PASSWORD', 'zmknxbysowrtyvoc');  // Your SMTP password or App Password

// Sender Identity
define('SMTP_FROM_EMAIL', 'vivek@sustainergictech.in');
define('SMTP_FROM_NAME', 'Sustainergic Tech');

// Admin Notification Recipients (Emails that receive contact form submissions)
define('ADMIN_NOTIFICATION_EMAIL', 'business@sustainergictech.in');
define('ADMIN_NOTIFICATION_CC', 'vivek@sustainergictech.in, prateek@sustainergictech.in'); // Comma-separated CC recipients

// Enable PHPMailer Debug output (0 = off, 2 = client and server messages)
define('SMTP_DEBUG', 0);
