<?php
/**
 * Sustainergic Tech - PHPMailer Wrapper
 */

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/smtp-config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class SmtpMailer
{
    private $lastError = '';

    /**
     * Send an email using PHPMailer
     * 
     * @param string $to Recipient email address
     * @param string $subject Email subject line
     * @param string $htmlBody HTML content
     * @param string|null $replyTo Reply-To email address
     * @param string|null $cc CC email address
     * @return bool True if sent successfully, False otherwise
     */
    public function send($to, $subject, $htmlBody, $replyTo = null, $cc = null)
    {
        $mail = new PHPMailer(true);

        try {
            // Server Settings
            $mail->SMTPDebug = defined('SMTP_DEBUG') ? SMTP_DEBUG : SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host       = defined('SMTP_HOST') ? SMTP_HOST : 'smtp.gmail.com';
            $mail->SMTPAuth   = defined('SMTP_AUTH') ? SMTP_AUTH : true;
            $mail->Username   = defined('SMTP_USERNAME') ? SMTP_USERNAME : '';
            $mail->Password   = defined('SMTP_PASSWORD') ? SMTP_PASSWORD : '';

            $encryption = defined('SMTP_ENCRYPTION') ? strtolower(SMTP_ENCRYPTION) : 'tls';
            if ($encryption === 'ssl') {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            } else {
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            }
            
            $mail->Port = defined('SMTP_PORT') ? (int)SMTP_PORT : 587;
            $mail->CharSet = 'UTF-8';

            // Allow SSL self-signed certificates in dev environments
            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ];

            // Recipients
            $fromEmail = defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : 'business@sustainergictech.in';
            $fromName  = defined('SMTP_FROM_NAME') ? SMTP_FROM_NAME : 'Sustainergic Tech';
            $mail->setFrom($fromEmail, $fromName);

            // Add main recipient
            $recipients = array_map('trim', explode(',', $to));
            foreach ($recipients as $recipient) {
                if (!empty($recipient)) {
                    $mail->addAddress($recipient);
                }
            }

            // Reply-To
            if (!empty($replyTo)) {
                $mail->addReplyTo($replyTo);
            }

            // CC
            if (!empty($cc)) {
                $ccList = array_map('trim', explode(',', $cc));
                foreach ($ccList as $ccAddr) {
                    if (!empty($ccAddr)) {
                        $mail->addCC($ccAddr);
                    }
                }
            }

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $htmlBody;
            $mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />', '</p>'], "\n", $htmlBody));

            $mail->send();
            return true;

        } catch (Exception $e) {
            $this->lastError = $mail->ErrorInfo;
            error_log("PHPMailer Error: " . $mail->ErrorInfo);
            return false;
        }
    }

    public function getLastError()
    {
        return $this->lastError;
    }
}
