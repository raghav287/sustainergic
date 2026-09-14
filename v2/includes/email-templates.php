<?php
/**
 * HTML Email Templates for Sustainergic Tech Contact Form (PHPMailer Integration)
 */

/**
 * Admin Notification Email Template
 */
function getAdminEmailTemplate($data) {
    $name     = htmlspecialchars($data['name'] ?? 'N/A');
    $email    = htmlspecialchars($data['email'] ?? 'N/A');
    $phone    = htmlspecialchars($data['phone'] ?? 'N/A');
    $service  = htmlspecialchars($data['service'] ?? 'N/A');
    $company  = htmlspecialchars($data['company'] ?? 'N/A');
    $location = htmlspecialchars($data['location'] ?? 'N/A');
    $message  = nl2br(htmlspecialchars($data['message'] ?? 'N/A'));
    $date     = date('F j, Y, g:i a T');

    return "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <title>New Contact Form Inquiry</title>
        <style>
            body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; color: #333; }
            .container { max-width: 650px; background: #ffffff; margin: 0 auto; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; }
            .header { background: linear-gradient(135deg, #0b4d2c 0%, #15803d 100%); color: #ffffff; padding: 25px 30px; text-align: left; }
            .header h2 { margin: 0; font-size: 22px; font-weight: 700; letter-spacing: -0.5px; }
            .header p { margin: 5px 0 0 0; font-size: 14px; opacity: 0.9; }
            .content { padding: 30px; }
            .badge { display: inline-block; background: #e6f4ea; color: #0b4d2c; font-weight: 600; padding: 4px 12px; border-radius: 20px; font-size: 13px; margin-bottom: 20px; }
            .table-details { width: 100%; border-collapse: collapse; margin-bottom: 25px; }
            .table-details td { padding: 12px 15px; border-bottom: 1px solid #edf2f7; font-size: 14px; }
            .table-details td.label { font-weight: 600; color: #4a5568; width: 35%; background-color: #f8fafc; }
            .table-details td.val { color: #1a202c; font-weight: 500; }
            .message-box { background: #f8fafc; border-left: 4px solid #15803d; padding: 15px 20px; border-radius: 0 6px 6px 0; margin-top: 15px; font-size: 14px; color: #2d3748; line-height: 1.6; }
            .footer { background: #f1f5f9; padding: 15px 30px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Sustainergic Tech Inquiry</h2>
                <p>New Client Contact Form Submission</p>
            </div>
            <div class='content'>
                <div class='badge'>Received on {$date}</div>
                <table class='table-details'>
                    <tr>
                        <td class='label'>Full Name</td>
                        <td class='val'><strong>{$name}</strong></td>
                    </tr>
                    <tr>
                        <td class='label'>Email Address</td>
                        <td class='val'><a href='mailto:{$email}' style='color: #15803d; text-decoration: none;'>{$email}</a></td>
                    </tr>
                    <tr>
                        <td class='label'>Phone Number</td>
                        <td class='val'><a href='tel:{$phone}' style='color: #15803d; text-decoration: none;'>{$phone}</a></td>
                    </tr>
                    <tr>
                        <td class='label'>Service Required</td>
                        <td class='val'>{$service}</td>
                    </tr>
                    <tr>
                        <td class='label'>Company / Project</td>
                        <td class='val'>{$company}</td>
                    </tr>
                    <tr>
                        <td class='label'>Location</td>
                        <td class='val'>{$location}</td>
                    </tr>
                </table>

                <h4 style='margin: 0 0 8px 0; color: #2d3748; font-size: 15px;'>Project Details / Message:</h4>
                <div class='message-box'>
                    {$message}
                </div>
            </div>
            <div class='footer'>
                This notification was sent automatically via PHPMailer from Sustainergic Tech website contact form.<br>
                &copy; " . date('Y') . " Sustainergic Tech. All rights reserved.
            </div>
        </div>
    </body>
    </html>
    ";
}

/**
 * Customer Auto-responder Email Template
 */
function getCustomerEmailTemplate($data) {
    $name    = htmlspecialchars($data['name'] ?? 'Valued Client');
    $service = htmlspecialchars($data['service'] ?? 'Engineering Consultation');

    return "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <title>Thank You for Contacting Sustainergic Tech</title>
        <style>
            body { font-family: 'Segoe UI', Arial, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; color: #333; }
            .container { max-width: 600px; background: #ffffff; margin: 0 auto; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; }
            .header { background: linear-gradient(135deg, #0b4d2c 0%, #15803d 100%); color: #ffffff; padding: 30px; text-align: center; }
            .header h2 { margin: 0; font-size: 24px; font-weight: 700; }
            .header p { margin: 8px 0 0 0; font-size: 15px; opacity: 0.95; }
            .content { padding: 35px 30px; line-height: 1.7; color: #334155; font-size: 15px; }
            .service-highlight { background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 6px; padding: 15px 20px; margin: 20px 0; color: #166534; font-weight: 600; }
            .footer { background: #f8fafc; padding: 20px 30px; text-align: center; font-size: 13px; color: #64748b; border-top: 1px solid #e2e8f0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Sustainergic Tech</h2>
                <p>Engineering & Sustainability Advisory</p>
            </div>
            <div class='content'>
                <p>Hello <strong>{$name}</strong>,</p>
                <p>Thank you for reaching out to Sustainergic Tech. We have received your inquiry regarding:</p>
                
                <div class='service-highlight'>
                    Service: {$service}
                </div>

                <p>Our engineering team is currently reviewing your project details. A dedicated technical consultant will follow up with you within <strong>24 hours</strong> with tailored proposal options.</p>
                
                <p>If your requirement is urgent, feel free to call us directly at <a href='tel:+919785749960' style='color: #0b4d2c; font-weight: 600;'>+91 97857 49960</a> or write to <a href='mailto:business@sustainergictech.in' style='color: #0b4d2c; font-weight: 600;'>business@sustainergictech.in</a>.</p>

                <br>
                <p style='margin: 0;'>Warm regards,</p>
                <p style='margin: 4px 0 0 0; font-weight: 700; color: #0b4d2c;'>Sustainergic Tech Team</p>
            </div>
            <div class='footer'>
                <strong>Jaipur Office:</strong> GF, D-5/24, Chitrakoot Scheme, Vaishali Nagar, Jaipur 302021<br>
                <strong>Zirakpur Office:</strong> SCO 3, First Floor, Dashmesh Colony, Patiala Road, Zirakpur 140603<br><br>
                &copy; " . date('Y') . " Sustainergic Tech. All rights reserved.
            </div>
        </div>
    </body>
    </html>
    ";
}
