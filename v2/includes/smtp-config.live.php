<?php
/**
 * Sustainergic Tech - Live Production SMTP Configuration
 * 
 * File: v2/includes/smtp-config.live.php
 * 
 * Instructions for Live Server Deployment:
 * 1. Place this file on your live server in the `v2/includes/` directory.
 * 2. Fill in your live production email credentials below (e.g. from cPanel Webmail, Google Workspace, or Microsoft 365).
 * 3. Either rename this file to `smtp-config.php` on your live server, or keep it as `smtp-config.live.php`.
 */

// ==========================================
// 1. Live Server SMTP Host & Encryption
// ==========================================
// Google Workspace (Gmail SMTP)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_ENCRYPTION', 'tls');
define('SMTP_AUTH', true);

// ==========================================
// 2. Live SMTP Authentication Credentials
// ==========================================
define('SMTP_USERNAME', 'vivek@sustainergictech.in');  // Your live corporate email
define('SMTP_PASSWORD', 'zmknxbysowrtyvoc');          // Google App Password

// ==========================================
// 3. Sender Identity
// ==========================================
define('SMTP_FROM_EMAIL', 'vivek@sustainergictech.in');
define('SMTP_FROM_NAME', 'Sustainergic Tech');

// ==========================================
// 4. Admin Notification Recipients
// ==========================================
define('ADMIN_NOTIFICATION_EMAIL', 'business@sustainergictech.in');
define('ADMIN_NOTIFICATION_CC', 'vivek@sustainergictech.in, prateek@sustainergictech.in');

// ==========================================
// 5. Debug Mode
// ==========================================
define('SMTP_DEBUG', 0); // 0 = Production (no debug output printed), 2 = Client/Server debug
