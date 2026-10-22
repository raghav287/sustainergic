<?php
// Canonical 301 redirect if requested directly as /index.php or /index (GET only)
$request_method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$request_uri = $_SERVER['REQUEST_URI'] ?? '';
$parsed_path = parse_url($request_uri, PHP_URL_PATH);
if ($request_method === 'GET' && $parsed_path && preg_match('#/index(?:\.php)?$#i', $parsed_path)) {
    $clean_path = preg_replace('#index(?:\.php)?$#i', '', $parsed_path);
    $query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $clean_path . $query);
    exit();
}

require_once __DIR__ . '/includes/smtp-config.php';
require_once __DIR__ . '/includes/SmtpMailer.php';
require_once __DIR__ . '/includes/email-templates.php';

$enquiry_success = false;
$enquiry_error = '';
$lead_success = false;
$lead_error = '';

// Handle Homepage Short Consultation Form (Name, Project Type, City, Message only)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'quick_enquiry') {
    $is_ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    
    $name     = trim($_POST['name'] ?? '');
    $service  = trim($_POST['project_type'] ?? 'General Consultation');
    $location = trim($_POST['city'] ?? '');
    $message  = trim($_POST['message'] ?? '');

    if (empty($name) || empty($service) || empty($location)) {
        $msg = 'Please provide your Name, Project Type, and City.';
        if ($is_ajax) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => $msg]);
            exit;
        }
        $enquiry_error = $msg;
    } else {
        $mailer = new SmtpMailer();
        $adminTo = defined('ADMIN_NOTIFICATION_EMAIL') ? ADMIN_NOTIFICATION_EMAIL : 'business@sustainergictech.in';
        $adminCc = defined('ADMIN_NOTIFICATION_CC') ? ADMIN_NOTIFICATION_CC : '';

        $formData = [
            'name'     => $name,
            'email'    => 'web-lead@sustainergictech.in',
            'phone'    => 'Submitted via Quick Form',
            'service'  => $service,
            'company'  => 'Homepage Consultation Form',
            'location' => $location,
            'message'  => $message ?: 'Consultation requested for ' . $service . ' in ' . $location
        ];

        $adminSubject = "⚡ Homepage Short Enquiry: " . $service . " - " . $name . " (" . $location . ")";
        $adminBody    = getAdminEmailTemplate($formData);

        $mailer->send($adminTo, $adminSubject, $adminBody, $adminTo, $adminCc);

        $successMsg = 'Thank you, ' . htmlspecialchars($name) . '! Your project details have been received. Our senior engineering team will contact you shortly.';
        if ($is_ajax) {
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'message' => $successMsg]);
            exit;
        }
        $enquiry_success = true;
    }
}

// Handle Lead Magnet Download Request ("IGBC vs LEED vs GRIHA: Which Rating Suits Your Project?")
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'download_guide') {
    $is_ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
    
    $name  = trim($_POST['lead_name'] ?? '');
    $email = trim($_POST['lead_email'] ?? '');

    if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = 'Please enter your Name and a valid Work Email to download your rating guide.';
        if ($is_ajax) {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => $msg]);
            exit;
        }
        $lead_error = $msg;
    } else {
        $mailer = new SmtpMailer();
        $leadData = [
            'name'     => $name,
            'email'    => $email,
            'phone'    => 'N/A (Guide Download)',
            'service'  => 'Guide: IGBC vs LEED vs GRIHA Comparison',
            'company'  => 'Website Visitor',
            'location' => 'Web Download',
            'message'  => 'User downloaded: "IGBC vs LEED vs GRIHA: Which Rating Suits Your Project?"'
        ];

        $adminSubject = "📗 New Guide Download Lead: " . $name . " (" . $email . ")";
        $adminBody    = getAdminEmailTemplate($leadData);
        $adminTo      = defined('ADMIN_NOTIFICATION_EMAIL') ? ADMIN_NOTIFICATION_EMAIL : 'business@sustainergictech.in';
        $adminCc      = defined('ADMIN_NOTIFICATION_CC') ? ADMIN_NOTIFICATION_CC : '';

        $mailer->send($adminTo, $adminSubject, $adminBody, $email, $adminCc);

        $downloadUrl = 'assets/docs/IGBC-vs-LEED-vs-GRIHA-Guide-Sustainergic.pdf';
        if ($is_ajax) {
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true,
                'message' => 'Thank you! Your "IGBC vs LEED vs GRIHA" guide download is starting immediately.',
                'download_url' => $downloadUrl
            ]);
            exit;
        }
        $lead_success = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <title>Green Building &amp; HVAC Consultants India | Sustainergic Tech</title>
    <meta name="description" content="Sustainergic Tech provides expert Green Building Certification (LEED, IGBC), HVAC engineering, IoT water management, and energy audits across India.">
    <meta name="keywords" content="green building consultant, HVAC engineering India, LEED certification, IGBC certification, energy audit, IoT water management, sustainable building design, Sustainergic Tech">
    <link rel="canonical" href="https://sustainergictech.in/">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <?php include 'includes/navbar.php'; ?>

    <!-- ================= HERO SECTION (STATIC REDESIGN - #EE775A BRAND COLOR) ================= -->
    <style>
    /* Scoped Hero Section Styles */
    .hero {
        position: relative;
        padding-top: 180px;
        padding-bottom: 80px;
        overflow: hidden;
        background: #EE775A;
        color: #ffffff;
        min-height: auto;
        display: flex;
        align-items: center;
    }

    /* Completely hide global hero::before circle from style.css */
    .hero::before {
        display: none !important;
        content: none !important;
    }

    /* Ambient subtle watermark */
    .hero-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: clamp(70px, 12vw, 160px);
        font-weight: 900;
        color: rgba(255, 255, 255, 0.08);
        letter-spacing: 16px;
        white-space: nowrap;
        pointer-events: none;
        user-select: none;
        z-index: 1;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
    }

    .hero-glow-effect {
        display: none;
    }

    .hero .container {
        max-width: 1280px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 50px;
        position: relative;
        z-index: 3;
        padding: 0 24px;
        width: 100%;
    }

    /* Left Content Column */
    .hero-content {
        width: 50%;
        max-width: 580px;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 18px;
        background: rgba(255, 255, 255, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.38);
        border-radius: 40px;
        color: #ffffff;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
        backdrop-filter: blur(8px);
    }

    .hero h1 {
        font-size: clamp(28px, 3.2vw, 42px);
        font-weight: 800;
        color: #ffffff;
        line-height: 1.22;
        margin-bottom: 18px;
        letter-spacing: -0.3px;
    }

    .hero h1 span {
        color: #ffffff;
    }

    .hero-content > p {
        font-size: 15px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.92);
        max-width: 520px;
        margin-bottom: 30px;
    }

    /* Action Buttons */
    .hero-buttons {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        margin-top: 0;
    }

    .btn-primary {
        padding: 14px 30px;
        background: #0f172a;
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
        transition: all 0.3s ease;
        letter-spacing: 0.3px;
        border: none;
        text-decoration: none;
    }

    .btn-primary:hover {
        background: #000000;
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.28);
        color: #ffffff;
    }

    .btn-outline {
        padding: 14px 28px;
        background: rgba(255, 255, 255, 0.16);
        border: 1.5px solid rgba(255, 255, 255, 0.45);
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        backdrop-filter: blur(8px);
        text-decoration: none;
    }

    .btn-outline:hover {
        background: rgba(255, 255, 255, 0.3);
        border-color: #ffffff;
        color: #ffffff;
        transform: translateY(-2px);
    }

    /* Right Framed Image Container */
    .hero-image {
        width: 46%;
        position: relative;
        display: flex;
        justify-content: center;
    }

    .hero-image-frame {
        position: relative;
        padding: 12px;
        background: rgba(255, 255, 255, 0.18);
        border: 1.5px solid rgba(255, 255, 255, 0.38);
        border-radius: 28px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        backdrop-filter: blur(12px);
        width: 100%;
        max-width: 480px;
    }

    .hero-image-frame img {
        width: 100%;
        height: 380px;
        object-fit: cover;
        border-radius: 20px;
        display: block;
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .hero {
            padding-top: 160px;
            padding-bottom: 60px;
        }
        .hero .container {
            flex-direction: column;
            gap: 36px;
        }
        .hero-content {
            width: 100%;
            max-width: 100%;
            text-align: center;
        }
        .hero-content > p {
            margin-left: auto;
            margin-right: auto;
        }
        .hero-buttons {
            justify-content: center;
        }
        .hero-image {
            width: 100%;
            max-width: 460px;
        }
        .hero-image-frame img {
            height: 340px;
        }
    }

    @media (max-width: 576px) {
        .hero {
            padding-top: 140px;
            padding-bottom: 50px;
        }
        .hero h1 {
            font-size: 28px;
        }
        .hero-image-frame img {
            height: 280px;
        }
        .btn-primary, .btn-outline {
            width: 100%;
        }
    }

    /* ==========================================================================
       PHASE 2 REDESIGN: LIGHT TRUST BAR, 4-FIELD SHORT FORM & LEAD MAGNET
       ========================================================================== */

    /* 1. Brand Trust & Accreditations Section (Modern Light Theme) */
    .brand-trust-section {
        background: #ffffff;
        border-top: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
        padding: 44px 0 48px;
        position: relative;
        z-index: 5;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.03);
    }

    .brand-trust-section .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
    }

    .trust-header-center {
        text-align: center;
        margin-bottom: 24px;
    }

    .trust-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(238, 119, 90, 0.12);
        color: #EE775A;
        font-size: 11.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        padding: 5px 14px;
        border-radius: 20px;
    }

    .trust-main-title {
        font-size: 20px;
        font-weight: 800;
        color: #0f172a;
        margin: 8px 0 0;
        letter-spacing: -0.3px;
    }

    /* Badges Row */
    .trust-badges-row {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 32px;
    }

    .trust-badge-card {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #ffffff;
        border: 1.5px solid #e2e8f0;
        padding: 9px 18px;
        border-radius: 50px;
        box-shadow: 0 4px 14px rgba(15, 23, 42, 0.04);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        text-decoration: none;
        cursor: default;
    }

    .trust-badge-card:hover {
        border-color: #EE775A;
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(238, 119, 90, 0.15);
    }

    .trust-badge-card img {
        height: 26px;
        width: auto;
        max-width: 65px;
        object-fit: contain;
        display: block;
        transition: transform 0.3s ease;
    }

    .trust-badge-card:hover img {
        transform: scale(1.08);
    }

    .trust-badge-card .badge-title {
        font-size: 13px;
        font-weight: 700;
        color: #1e293b;
        letter-spacing: -0.2px;
        white-space: nowrap;
    }

    .trust-badge-card.ecsbc-pill {
        background: linear-gradient(135deg, #f0fdf4 0%, #e0f2fe 100%);
        border-color: #7dd3fc;
    }

    .trust-badge-card.ecsbc-pill .ecsbc-tag {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        color: #0284c7;
        font-size: 12.5px;
        font-weight: 800;
    }

    /* Divider */
    .trust-inner-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, #e2e8f0 20%, #e2e8f0 80%, transparent);
        max-width: 960px;
        margin: 0 auto 26px;
    }

    /* Client Logos Marquee */
    .trust-clients-header {
        text-align: center;
        margin-bottom: 18px;
    }

    .trust-clients-header span {
        font-size: 12.5px;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }

    .trust-marquee-wrapper {
        overflow: hidden;
        position: relative;
        mask-image: linear-gradient(90deg, transparent 0%, #000 8%, #000 92%, transparent 100%);
        -webkit-mask-image: linear-gradient(90deg, transparent 0%, #000 8%, #000 92%, transparent 100%);
    }

    .trust-marquee-track {
        display: flex;
        align-items: center;
        gap: 20px;
        width: max-content;
        animation: trustMarquee 38s linear infinite;
    }

    .trust-marquee-track:hover {
        animation-play-state: paused;
    }

    @keyframes trustMarquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }

    .trust-client-card {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 14px;
        padding: 10px 22px;
        min-width: 130px;
        height: 58px;
        box-shadow: 0 3px 10px rgba(15, 23, 42, 0.03);
        transition: all 0.3s ease;
    }

    .trust-client-card:hover {
        border-color: #EE775A;
        transform: translateY(-2px);
        box-shadow: 0 8px 22px rgba(15, 23, 42, 0.08);
    }

    .trust-client-card img {
        max-height: 32px;
        max-width: 90px;
        object-fit: contain;
        filter: grayscale(100%);
        opacity: 0.75;
        transition: all 0.3s ease;
    }

    .trust-client-card:hover img {
        filter: grayscale(0%);
        opacity: 1;
        transform: scale(1.05);
    }

    /* 2. Short Consultation Form Section (Name, Project Type, City, Message only) */
    .short-enquiry-section {
        padding: 85px 0;
        background: #f8fafc;
        position: relative;
    }

    .short-enquiry-wrapper {
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 24px;
        display: grid;
        grid-template-columns: 0.9fr 1.1fr;
        gap: 40px;
        align-items: center;
    }

    .short-enquiry-left h2 {
        font-size: 32px;
        font-weight: 800;
        color: #0f172a;
        line-height: 1.25;
        margin: 12px 0 14px;
    }

    .short-enquiry-left p {
        font-size: 15.5px;
        color: #64748b;
        line-height: 1.65;
        margin-bottom: 28px;
    }

    .short-perks-list {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .short-perk-item {
        display: flex;
        align-items: flex-start;
        gap: 14px;
    }

    .short-perk-icon {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(238, 119, 90, 0.12);
        color: #EE775A;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        flex-shrink: 0;
    }

    .short-perk-text strong {
        display: block;
        font-size: 14.5px;
        color: #0f172a;
        margin-bottom: 2px;
    }

    .short-perk-text span {
        font-size: 13px;
        color: #64748b;
        line-height: 1.45;
    }

    /* Short Form Card */
    .short-form-card {
        background: #ffffff;
        border-radius: 24px;
        padding: 40px;
        box-shadow: 0 20px 50px rgba(15, 23, 42, 0.07);
        border: 1px solid #e2e8f0;
    }

    .short-form-header {
        margin-bottom: 24px;
    }

    .short-form-header h3 {
        font-size: 22px;
        font-weight: 800;
        color: #0f172a;
        margin-bottom: 6px;
    }

    .short-form-header p {
        font-size: 14px;
        color: #64748b;
        margin: 0;
    }

    .short-form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 18px;
    }

    .short-form-full {
        grid-column: 1 / -1;
    }

    .short-field {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .short-field label {
        font-size: 13px;
        font-weight: 600;
        color: #334155;
    }

    .short-field label span.req {
        color: #EE775A;
    }

    .short-field input,
    .short-field select,
    .short-field textarea {
        width: 100%;
        padding: 13px 16px;
        border: 1.5px solid #cbd5e1;
        border-radius: 12px;
        font-size: 14px;
        color: #0f172a;
        background: #f8fafc;
        transition: all 0.25s ease;
        font-family: inherit;
        box-sizing: border-box;
    }

    .short-field input:focus,
    .short-field select:focus,
    .short-field textarea:focus {
        outline: none;
        border-color: #EE775A;
        background: #ffffff;
        box-shadow: 0 0 0 3px rgba(238, 119, 90, 0.15);
    }

    .short-field textarea {
        resize: vertical;
        min-height: 90px;
    }

    .btn-submit-short {
        width: 100%;
        padding: 16px 28px;
        background: linear-gradient(135deg, #EE775A 0%, #e05e3e 100%);
        color: #ffffff;
        border: none;
        border-radius: 14px;
        font-size: 15.5px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        box-shadow: 0 10px 24px rgba(238, 119, 90, 0.3);
        transition: all 0.3s ease;
    }

    .btn-submit-short:hover {
        transform: translateY(-2px);
        box-shadow: 0 14px 30px rgba(238, 119, 90, 0.42);
        background: linear-gradient(135deg, #f08368 0%, #db5535 100%);
    }

    .short-privacy-note {
        font-size: 12px;
        color: #94a3b8;
        text-align: center;
        margin-top: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    /* 3. Redesigned Lead Magnet: IGBC vs LEED vs GRIHA */
    .lead-magnet-section {
        padding: 85px 0;
        background: linear-gradient(135deg, #091124 0%, #152238 100%);
        color: #ffffff;
        position: relative;
        overflow: hidden;
    }

    .lead-magnet-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 48px;
        align-items: center;
    }

    .magnet-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #EE775A;
        color: #ffffff;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.8px;
        padding: 4px 14px;
        border-radius: 20px;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .lead-magnet-info h2 {
        font-size: 32px;
        font-weight: 800;
        color: #ffffff;
        line-height: 1.25;
        margin-bottom: 14px;
        letter-spacing: -0.3px;
    }

    .lead-magnet-info p.lead-magnet-tagline {
        font-size: 15.5px;
        color: #94a3b8;
        line-height: 1.6;
        margin-bottom: 24px;
    }

    /* Rating Highlights Grid */
    .rating-matrix-cards {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        gap: 12px;
        margin-bottom: 24px;
    }

    .rating-card-mini {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 14px;
        padding: 14px 12px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .rating-card-mini:hover {
        background: rgba(255, 255, 255, 0.1);
        border-color: #EE775A;
        transform: translateY(-2px);
    }

    .rating-card-mini strong {
        display: block;
        font-size: 14px;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 4px;
    }

    .rating-card-mini span {
        font-size: 11px;
        color: #cbd5e1;
        line-height: 1.35;
        display: block;
    }

    .magnet-topics-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .magnet-topic-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 13.5px;
        color: #e2e8f0;
    }

    .magnet-topic-item i {
        color: #22c55e;
        font-size: 14px;
    }

    /* Lead Magnet Form Box */
    .lead-magnet-form-card {
        background: rgba(255, 255, 255, 0.07);
        border: 1.5px solid rgba(255, 255, 255, 0.16);
        border-radius: 24px;
        padding: 38px 32px;
        backdrop-filter: blur(16px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    }

    .lead-magnet-form-card h3 {
        font-size: 23px;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 6px;
    }

    .lead-magnet-form-card p {
        font-size: 13.5px;
        color: #94a3b8;
        margin-bottom: 22px;
        line-height: 1.5;
    }

    .magnet-form {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .magnet-form input {
        width: 100%;
        padding: 13px 18px;
        background: rgba(255, 255, 255, 0.09);
        border: 1.5px solid rgba(255, 255, 255, 0.2);
        border-radius: 12px;
        color: #ffffff;
        font-size: 14px;
        box-sizing: border-box;
        transition: all 0.25s ease;
    }

    .magnet-form input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .magnet-form input:focus {
        outline: none;
        border-color: #EE775A;
        background: rgba(255, 255, 255, 0.16);
        box-shadow: 0 0 0 3px rgba(238, 119, 90, 0.25);
    }

    .btn-download-magnet {
        padding: 15px 28px;
        background: #EE775A;
        color: #ffffff;
        font-weight: 700;
        border: none;
        border-radius: 12px;
        font-size: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 10px 24px rgba(238, 119, 90, 0.35);
    }

    .btn-download-magnet:hover {
        background: #ff896d;
        transform: translateY(-2px);
        box-shadow: 0 14px 30px rgba(238, 119, 90, 0.45);
    }

    /* Feedback Alert */
    .form-feedback-alert {
        padding: 14px 18px;
        border-radius: 12px;
        font-size: 14px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form-feedback-alert.success {
        background: #dcfce7;
        color: #166534;
        border: 1px solid #bbf7d0;
    }

    .form-feedback-alert.error {
        background: #fee2e2;
        color: #991b1b;
        border: 1px solid #fecaca;
    }

    /* Project Card Clickability */
    .project-card {
        cursor: pointer;
        position: relative;
        text-decoration: none;
    }

    .project-card-full-link {
        text-decoration: none;
        color: inherit;
        display: block;
        height: 100%;
    }

    /* Responsive queries */
    @media (max-width: 991px) {
        .short-enquiry-wrapper {
            grid-template-columns: 1fr;
        }
        .lead-magnet-container {
            grid-template-columns: 1fr;
        }
        .rating-matrix-cards {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 640px) {
        .short-form-card {
            padding: 24px 18px;
        }
        .short-form-grid {
            grid-template-columns: 1fr;
        }
        .lead-magnet-form-card {
            padding: 26px 20px;
        }
        .trust-badges-row {
            gap: 8px;
        }
        .trust-badge-card {
            padding: 8px 14px;
        }
    }
    </style>

    <section class="hero">
        <!-- Ambient Watermark & Glow Background -->
        <div class="hero-watermark">SUSTAINABILITY</div>
        <div class="hero-glow-effect"></div>

        <div class="container">
            <!-- Left Content Column -->
            <div class="hero-content">
                <span class="hero-badge">
                    🌱 Sustainable Engineering Solutions
                </span>

                <h1>
                    Building a
                    <span>Greener Future</span>
                    Through Smart Engineering
                </h1>

                <p>
                    Sustainergic Tech provides Green Building Certification,
                    Energy Simulation, HVAC Design, Renewable Energy Solutions,
                    Building Commissioning and Sustainability Consulting to help
                    organizations create energy-efficient and environmentally
                    responsible buildings.
                </p>

                <div class="hero-buttons">
                    <a href="#enquiry" class="btn-primary">
                        <i class="fa-solid fa-calendar-check"></i> Book a Free Consultation
                    </a>
                    <a href="assets/docs/Sustainergic-Tech-Corporate-Credentials-Deck.pdf" download class="btn-outline">
                        <i class="fa-solid fa-file-arrow-down"></i> Credentials Deck
                    </a>
                </div>
            </div>

            <!-- Right Image Framed Container -->
            <div class="hero-image">
                <div class="hero-image-frame">
                    <img src="assets/images/hero.png" alt="Green Building Engineering">
                </div>
            </div>
        </div>
    </section>

    <!--==========================
        BRAND TRUST & ACCREDITATIONS SECTION (REDESIGNED)
    ===========================-->
    <section class="brand-trust-section">
        <div class="container">
            <!-- Header -->
            <div class="trust-header-center">
                <span class="trust-pill"><i class="fa-solid fa-award"></i> Recognized Engineering Credentials</span>
                <h2 class="trust-main-title">Certified by Leading Green Building &amp; Energy Councils</h2>
            </div>

            <!-- Accreditations Row (Centered Elevated Capsules) -->
            <div class="trust-badges-row">
                <div class="trust-badge-card" title="LEED Accredited Professional (USGBC / GBCI)">
                    <img src="assets/images/certifications/leed-logo.png" alt="LEED AP">
                    <span class="badge-title">LEED&reg; Accredited</span>
                </div>

                <div class="trust-badge-card" title="Indian Green Building Council (IGBC) Accredited Professional">
                    <img src="assets/images/certifications/igbc-logo.png" alt="IGBC AP">
                    <span class="badge-title">IGBC&reg; AP</span>
                </div>

                <div class="trust-badge-card" title="GRIHA Certified Professional (TERI & MNRE)">
                    <img src="assets/images/certifications/griha-logo.png" alt="GRIHA CP">
                    <span class="badge-title">GRIHA&reg; CP</span>
                </div>

                <div class="trust-badge-card" title="ASSOCHAM Green &amp; Eco-friendly Movement (GEM)">
                    <img src="assets/images/certifications/gem-logo.png" alt="ASSOCHAM GEM">
                    <span class="badge-title">ASSOCHAM GEM</span>
                </div>

                <div class="trust-badge-card" title="WELL Building Standard">
                    <img src="assets/images/certifications/well-logo.png" alt="WELL Standard">
                    <span class="badge-title">WELL&reg; Standard</span>
                </div>

                <div class="trust-badge-card" title="CII GreenPro Certified Products">
                    <img src="assets/images/certifications/greenpro-logo.png" alt="CII GreenPro">
                    <span class="badge-title">CII GreenPro</span>
                </div>

                <div class="trust-badge-card ecsbc-pill" title="Bureau of Energy Efficiency - Energy Conservation & Sustainable Building Code">
                    <span class="ecsbc-tag"><i class="fa-solid fa-leaf"></i> BEE ECSBC</span>
                    <span class="badge-title">2024 Compliant</span>
                </div>
            </div>

            <!-- Subtle Divider -->
            <div class="trust-inner-divider"></div>

            <!-- Client Logos Strip -->
            <div class="trust-clients-header">
                <span>Trusted by 100+ Leading Organizations, Resorts &amp; Institutions Across India</span>
            </div>

            <div class="trust-marquee-wrapper">
                <div class="trust-marquee-track">
                    <div class="trust-client-card" title="Hyatt Regency">
                        <img src="assets/images/clients/hyatt-logo.png" alt="Hyatt Regency">
                    </div>
                    <div class="trust-client-card" title="Taj Hotels">
                        <img src="assets/images/clients/taj.png" alt="Taj Hotels">
                    </div>
                    <div class="trust-client-card" title="Reserve Bank of India">
                        <img src="assets/images/clients/rbi.png" alt="Reserve Bank of India">
                    </div>
                    <div class="trust-client-card" title="AIIMS New Delhi">
                        <img src="assets/images/clients/aiims.png" alt="AIIMS New Delhi">
                    </div>
                    <div class="trust-client-card" title="Hindustan Coca-Cola Beverages">
                        <img src="assets/images/clients/hindustan-coca.png" alt="Hindustan Coca-Cola Beverages">
                    </div>
                    <div class="trust-client-card" title="Honda Cars India">
                        <img src="assets/images/clients/honda-logo.png" alt="Honda Cars India">
                    </div>
                    <div class="trust-client-card" title="Havells India">
                        <img src="assets/images/clients/havells-logo.png" alt="Havells India">
                    </div>
                    <div class="trust-client-card" title="State Bank of India">
                        <img src="assets/images/clients/sbi-logo.png" alt="State Bank of India">
                    </div>
                    <div class="trust-client-card" title="Indian Railways">
                        <img src="assets/images/clients/indian-railways-logo.png" alt="Indian Railways">
                    </div>
                    <div class="trust-client-card" title="Chitkara University">
                        <img src="assets/images/clients/chitkara-logo.png" alt="Chitkara University">
                    </div>
                    <div class="trust-client-card" title="KIMS Hospitals">
                        <img src="assets/images/clients/kims.png" alt="KIMS Hospitals">
                    </div>
                    <div class="trust-client-card" title="Indian Oil Corporation">
                        <img src="assets/images/clients/iocl-logo.png" alt="Indian Oil Corporation Limited">
                    </div>

                    <!-- Duplicate for smooth infinite marquee -->
                    <div class="trust-client-card" title="Hyatt Regency">
                        <img src="assets/images/clients/hyatt-logo.png" alt="Hyatt Regency">
                    </div>
                    <div class="trust-client-card" title="Taj Hotels">
                        <img src="assets/images/clients/taj.png" alt="Taj Hotels">
                    </div>
                    <div class="trust-client-card" title="Reserve Bank of India">
                        <img src="assets/images/clients/rbi.png" alt="Reserve Bank of India">
                    </div>
                    <div class="trust-client-card" title="AIIMS New Delhi">
                        <img src="assets/images/clients/aiims.png" alt="AIIMS New Delhi">
                    </div>
                    <div class="trust-client-card" title="Hindustan Coca-Cola Beverages">
                        <img src="assets/images/clients/hindustan-coca.png" alt="Hindustan Coca-Cola Beverages">
                    </div>
                    <div class="trust-client-card" title="Honda Cars India">
                        <img src="assets/images/clients/honda-logo.png" alt="Honda Cars India">
                    </div>
                    <div class="trust-client-card" title="Havells India">
                        <img src="assets/images/clients/havells-logo.png" alt="Havells India">
                    </div>
                    <div class="trust-client-card" title="State Bank of India">
                        <img src="assets/images/clients/sbi-logo.png" alt="State Bank of India">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
        SERVICES SECTION
    ===========================-->

    <section class="services-section">

        <div class="container">

            <div class="services-heading">

                <h2>
                    Our <span>Services</span>
                </h2>

            </div>

            <div class="services-swiper-container">
                <div class="swiper services-swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1: Green Certification -->
                        <div class="swiper-slide">
                            <a href="green-building-certification.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/green-building.png" alt="Green Certification">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-leaf"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>Green Certification</h3>
                                    <p>
                                        IGBC, LEED, BREEAM,  WELL and GRIHA certification expertise to help your project achieve the highest sustainability ratings.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 2: Audits -->
                        <div class="swiper-slide">
                            <a href="audits.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/energy-audit.png" alt="Audits">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-clipboard-check"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>Audits</h3>
                                    <p>
                                        Comprehensive Energy, Water, and Waste audits to identify inefficiencies, reduce consumption, and optimize resource performance.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 3: HTS -->
                        <div class="swiper-slide">
                            <a href="hybrid-thermal-solar-panel.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/hts-hero.png" alt="Hybrid Thermal Solar (HTS) Panel">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-solar-panel"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>Hybrid Thermal Solar (HTS) Panel</h3>
                                    <p>
                                        Innovative dual-generation HTS panels producing both clean electricity and thermal energy from a single integrated solar collector.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 4: IoT Water Solutions -->
                        <div class="swiper-slide">
                            <a href="iot-water-solution.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/water-audit.png" alt="IoT Water Solution">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-droplet"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>IoT Water Solution</h3>
                                    <p>
                                        Smart, real-time water monitoring, flow tracking, and automated analytics powered by IoT sensors to prevent leakages and waste.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 5: Radiant Heating & Cooling System -->
                        <div class="swiper-slide">
                            <a href="radiant-heating-cooling-system.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/radiant-hero.png" alt="Radiant Heating & Cooling System">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-temperature-arrow-down"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>Radiant Heating &amp; Cooling System</h3>
                                    <p>
                                        Advanced hydronic solutions delivering 30–40% energy savings, silent draft-free comfort, and uniform temperature distribution.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="services-swiper-pagination"></div>

                </div>

                <!-- Navigation Arrows -->
                <div class="services-swiper-btn services-swiper-prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="services-swiper-btn services-swiper-next">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>

            <!--<div class="services-cta">-->

            <!--    <a href="#" class="btn-primary">-->
            <!--        <i class="fa-solid fa-layer-group"></i> View All  Services-->
            <!--    </a>-->

            <!--</div>-->

        </div>

    </section>



    <!--==========================
        HVAC SERVICES SECTION
    ===========================-->
    <section class="hvac-split-section">
        <div class="container">
            <div class="hvac-split-wrapper">
                
                <!-- Left Side: Information Panel -->
                <div class="hvac-info-panel">
                    <div class="panel-content">
                        <span class="hvac-accent-badge">
                            <i class="fa-solid fa-bolt-lightning"></i> Smart HVAC Engineering
                        </span>
                        <h2>Intelligent <span>Climate Systems</span></h2>
                        <p>
                            We engineer next-generation HVAC solutions designed for net-zero performance, optimal air quality, and maximum thermal comfort.
                        </p>
                        
                        <div class="hvac-stats-row">
                            <div class="stat-box">
                                <span class="stat-number">40%</span>
                                <span class="stat-label">Energy Saved*</span>
                                <span class="stat-reference" style="font-size: 11px; color: #94a3b8; margin-top: 6px; line-height: 1.4;">vs. ASHRAE 90.1 / ECBC baseline standards</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">Zero</span>
                                <span class="stat-label">Carbon Goal*</span>
                                <span class="stat-reference" style="font-size: 11px; color: #94a3b8; margin-top: 6px; line-height: 1.4;">Aligned with IGBC &amp; LEED Zero Carbon frameworks</span>
                            </div>
                        </div>
                    </div>
                    
                    <a href="project.php" class="hvac-panel-btn">
                        Explore All Services <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                
                <!-- Right Side: 2x2 Grid of Custom Cards -->
                <div class="hvac-services-grid">
                    
                    <!-- Card 1 -->
                    <div class="hvac-grid-card">
                        <div class="card-header">
                            <div class="card-icon-box">
                                <i class="fa-solid fa-temperature-half"></i>
                            </div>
                            <span class="card-number">01</span>
                        </div>
                        <div class="card-body">
                            <h3>Radiant Heating & Cooling</h3>
                            <p>Hydronic piping embedded in building surfaces for energy-efficient, draft-free thermal comfort.</p>
                        </div>
                        <div class="card-footer">
                            <span class="card-tag">30% Saved</span>
                            <span class="card-tag">Draft-Free</span>
                            <span class="card-tag">Hydronic</span>
                        </div>
                        <a href="radiant-heating-cooling-system.php" class="card-overlay-link" aria-label="Radiant Heating & Cooling"></a>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="hvac-grid-card">
                        <div class="card-header">
                            <div class="card-icon-box">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <span class="card-number">02</span>
                        </div>
                        <div class="card-body">
                            <h3>Geothermal Systems</h3>
                            <p>Ground-source thermal loop integration for high-performance, renewable heating and cooling.</p>
                        </div>
                        <div class="card-footer">
                            <span class="card-tag">Renewable</span>
                            <span class="card-tag" title="Tested per AHRI-550/590 ground loop standards">COP 4.5+*</span>
                            <span class="card-tag">Low OPEX</span>
                        </div>
                        <a href="geothermal-system.php" class="card-overlay-link" aria-label="Geothermal Energy Systems"></a>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="hvac-grid-card">
                        <div class="card-header">
                            <div class="card-icon-box">
                                <i class="fa-solid fa-wind"></i>
                            </div>
                            <span class="card-number">03</span>
                        </div>
                        <div class="card-body">
                            <h3>Variable Refrigerant (VRF)</h3>
                            <p>Zoned climate control systems offering high partial-load efficiency and compact footprints.</p>
                        </div>
                        <div class="card-footer">
                            <span class="card-tag">Zoned Comfort</span>
                            <span class="card-tag">High SEER</span>
                            <span class="card-tag">Flexible</span>
                        </div>
                        <a href="vrv-vrf-system.php" class="card-overlay-link" aria-label="Variable Refrigerant Flow"></a>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="hvac-grid-card">
                        <div class="card-header">
                            <div class="card-icon-box">
                                <i class="fa-solid fa-fan"></i>
                            </div>
                            <span class="card-number">04</span>
                        </div>
                        <div class="card-body">
                            <h3>Mechanical Ventilation</h3>
                            <p>Fresh air circulation with thermal energy recovery and filtration for pristine indoor air quality.</p>
                        </div>
                        <div class="card-footer">
                            <span class="card-tag">ERVs / HRVs</span>
                            <span class="card-tag">Fresh Air</span>
                            <span class="card-tag">HEPA Filter</span>
                        </div>
                        <a href="fresh-air-system.php" class="card-overlay-link" aria-label="Mechanical Ventilation & IAQ"></a>
                    </div>

                    <!-- Supporting References Footnote Bar -->
                    <div style="grid-column: 1 / -1; margin-top: 10px; padding-top: 14px; border-top: 1px dashed rgba(255,255,255,0.14); font-size: 11.5px; color: #94a3b8; display: flex; align-items: center; gap: 8px;">
                        <i class="fa-solid fa-circle-info" style="color: #ff9475;"></i>
                        <span>*Performance benchmarks referenced against ASHRAE 90.1-2019 / BEE ECBC simulation baselines and AHRI-550/590 water-to-water heat pump COP test conditions.</span>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--==========================
        WORKING PROCESS
    ===========================-->
    <section class="process-section">
        <div class="container">
            <div class="process-split-wrapper">
                
                <!-- Left Sticky Heading Panel -->
                <div class="process-left-col">
                    <div class="process-sticky-panel">
                        <!-- <span class="process-badge">
                            <i class="fa-solid fa-gears"></i> Our Methodology
                        </span> -->
                        <h2>Our <span>Working Process</span></h2>
                        <p>
                            A structured, data-driven methodology that ensures every engineering and sustainability project delivers measurable, certifiable results.
                        </p>
                        <div class="process-cta-box">
                            <a href="contact-us.php" class="btn-primary">
                                Partner With Us <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Right Vertical Timeline -->
                <div class="process-timeline">
                    
                    <!-- Timeline Node 1 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">01</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Project Understanding</h3>
                            <p>Deep-dive stakeholder workshops and site feasibility analysis to align sustainability goals with business objectives and regulatory compliance.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Node 2 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">02</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-database"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Data Acquisition</h3>
                            <p>Comprehensive on-site surveys, utility audits, BIM extraction and historical consumption analysis to build an accurate performance baseline.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Node 3 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">03</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-cube"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Process Modeling</h3>
                            <p>Scientific energy simulation, thermal modeling and CFD analysis using industry-leading tools to design and validate every engineering decision.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Node 4 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">04</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Compare & Validate</h3>
                            <p>Side-by-side comparison of simulation outputs against real-world site data to calibrate models and close any performance gaps before implementation.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Node 5 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">05</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Final Results</h3>
                            <p>Commissioning, handover and certification support with post-occupancy monitoring to ensure promised energy savings and green ratings are achieved.</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>


    <!--==========================
        ABOUT US
===========================-->

    <section class="about-section">

        <div class="container">

            <div class="about-image">
                <img src="assets/images/home-about.png" alt="About Sustainergic Tech">
                <div class="about-experience-badge">
                    <span class="abt-num">15+</span>
                    <span class="abt-lbl">Years Experience</span>
                </div>
            </div>

            <div class="about-content">

                <span class="section-badge">About Sustainergic</span>

                <h2>We Engineer Energy and Water Optimization in the Built Environment</h2>

                <p>
                    Sustainergic Tech is a leading sustainability engineering and
                    green building consultancy delivering innovative solutions in
                    Green Building Certification, Energy Simulation, HVAC Design,
                    Renewable Energy Systems and more.
                </p>

                <ul class="about-features">
                    <li><i class="fas fa-check-circle"></i> Green Building Certification</li>
                    <li><i class="fas fa-check-circle"></i> Energy Efficient Design</li>
                    <li><i class="fas fa-check-circle"></i> Hybrid Thermal Solar Panels </li>
                    <li><i class="fas fa-check-circle"></i> Expert Engineering Team</li>
                </ul>

                <a href="about.php" class="about-btn">Learn More</a>

            </div>

        </div>

    </section>


    <!--==========================
        WHY CHOOSE US
===========================-->

    <section class="why-choose-section">

        <div class="container">

            <div class="why-choose-heading">

                <span class="section-badge">
                    Why Choose Us
                </span>

                <h2>
                    Reasons to <span>Partner</span> With Sustainergic
                </h2>

                <p>
                    We combine deep engineering expertise with a genuine passion for
                    sustainability to deliver outcomes that exceed expectations.
                </p>

            </div>

            <div class="why-choose-grid">

                <div class="why-choose-card">

                    <div class="why-choose-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>

                    <h3>Certified Experts</h3>

                    <p>
                        LEED, BREEAM, IGBC, WELL and GRIHA accredited professionals
                        delivering globally recognized certification standards.
                    </p>

                </div>

                <div class="why-choose-card">

                    <div class="why-choose-icon">
                        <i class="fa-solid fa-chart-column"></i>
                    </div>

                    <h3>Data-Driven Approach</h3>

                    <p>
                        Advanced energy simulation, thermal modeling and lifecycle
                        analysis ensure every decision is backed by rigorous data.
                    </p>

                </div>

                <div class="why-choose-card">

                    <div class="why-choose-icon">
                        <i class="fa-solid fa-diagram-project"></i>
                    </div>

                    <h3>End-to-End Delivery</h3>

                    <p>
                        From concept design and documentation to on-site commissioning
                        and post-occupancy evaluation, we manage every phase.
                    </p>

                </div>

                <div class="why-choose-card">

                    <div class="why-choose-icon">
                        <i class="fa-solid fa-bolt-lightning"></i>
                    </div>

                    <h3>Proven Energy/Water Savings</h3>

                    <p>
                        100+ completed and ongoing projects with an average 20-40% reduction in energy consumption and measurable operational cost savings.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!--==========================
        LEAD MAGNET: IGBC vs LEED vs GRIHA GUIDE (REDESIGNED)
    ===========================-->
    <section class="lead-magnet-section" id="guide">
        <div class="lead-magnet-container">
            <!-- Left Information / Value Props -->
            <div class="lead-magnet-info">
                <span class="magnet-badge"><i class="fa-solid fa-file-pdf"></i> Free Technical Decision Playbook</span>
                <h2>IGBC vs LEED vs GRIHA: Which Rating Suits Your Project?</h2>
                <p class="lead-magnet-tagline">Not sure which green rating delivers the highest tenant value, fastest approval, and best ROI? Our comparative framework breaks down credits, costs, and state government incentives.</p>

                <!-- 3-way Quick Matrix Cards -->
                <div class="rating-matrix-cards">
                    <div class="rating-card-mini">
                        <strong>IGBC (CII)</strong>
                        <span>Indian Climate Fit &bull; Fast-Track State Approvals</span>
                    </div>
                    <div class="rating-card-mini">
                        <strong>LEED v4.1</strong>
                        <span>Global MNC Tenant Demand &bull; REIT Standards</span>
                    </div>
                    <div class="rating-card-mini">
                        <strong>GRIHA (MNRE)</strong>
                        <span>CPWD &bull; Govt / PSU Mandates &bull; Native Habitat</span>
                    </div>
                </div>

                <div class="magnet-topics-list">
                    <div class="magnet-topic-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>Detailed scoring criteria &amp; documentation timelines comparison</span>
                    </div>
                    <div class="magnet-topic-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>State-wise additional FAR/FSI bonus policies (5% to 15% Free FAR)</span>
                    </div>
                    <div class="magnet-topic-item">
                        <i class="fa-solid fa-circle-check"></i>
                        <span>CapEx investment benchmarks vs operational energy payback cycles</span>
                    </div>
                </div>
            </div>

            <!-- Right Lead Capture Card -->
            <div class="lead-magnet-form-card">
                <h3>Download Free Rating Guide</h3>
                <p>Instant PDF download. Get the full comparison matrix delivered immediately.</p>

                <div id="leadFeedback">
                    <?php if ($lead_success): ?>
                        <div class="form-feedback-alert success">
                            <i class="fa-solid fa-circle-check"></i>
                            <div><strong>Success!</strong> Your "IGBC vs LEED vs GRIHA" download has started.</div>
                        </div>
                    <?php elseif (!empty($lead_error)): ?>
                        <div class="form-feedback-alert error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div><?php echo htmlspecialchars($lead_error); ?></div>
                        </div>
                    <?php endif; ?>
                </div>

                <form id="leadMagnetForm" method="POST" action="index.php#guide" class="magnet-form">
                    <input type="hidden" name="action" value="download_guide">

                    <input type="text" name="lead_name" required placeholder="Your Name">
                    <input type="email" name="lead_email" required placeholder="Your Work Email">

                    <button type="submit" id="leadMagnetSubmitBtn" class="btn-download-magnet">
                        <i class="fa-solid fa-file-arrow-down"></i> Download Free Guide (PDF)
                    </button>
                    <div class="short-privacy-note" style="color: #94a3b8;">
                        <i class="fa-solid fa-lock"></i> Free technical resource. Zero spam.
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!--==========================
        PROJECTS
===========================-->

    <section class="projects-section">

        <div class="projects-container">

            <div class="projects-heading">
                <h2>Our Projects</h2>
            </div>

            <div class="projects-swiper-container">
                <div class="swiper projects-swiper">
                    <div class="swiper-wrapper">

                        <!-- Project 1: Green Building Certification -->
                        <div class="swiper-slide">
                            <article class="project-card" onclick="window.location.href='case-study-detail.php?id=hyatt-regency-dehradun'">
                                <div class="project-image">
                                    <img src="assets/images/energy-hyatt.png" alt="Hyatt Regency, Dehradun">
                                    <span class="project-tag">Green Certification</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Dehradun, UK</span>
                                        <span><i class="fa-solid fa-building-shield"></i> LEED Platinum</span>
                                    </div>
                                    <h3><a href="case-study-detail.php?id=hyatt-regency-dehradun" class="project-card-full-link">Hyatt Regency, Dehradun</a></h3>
                                    <p>
                                        Comprehensive green building certification, thermal envelope optimization, and energy reduction strategies for a luxury resort.
                                    </p>
                                    <div class="project-foot">
                                        <div class="project-stat">
                                            <strong>LEED</strong>
                                            <small>Platinum Benchmark</small>
                                        </div>
                                        <a href="case-study-detail.php?id=hyatt-regency-dehradun" class="project-link" title="Read Hyatt Regency Case Study">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Project 2: Energy & Safety Audits -->
                        <div class="swiper-slide">
                            <article class="project-card" onclick="window.location.href='case-study-detail.php?id=holiday-inn-jaipur'">
                                <div class="project-image">
                                    <img src="assets/images/energy-holiday.png" alt="Holiday Inn, Jaipur">
                                    <span class="project-tag project-tag--sage">Energy Audit</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Jaipur, RJ</span>
                                        <span><i class="fa-solid fa-chart-line"></i> Energy &amp; HVAC</span>
                                    </div>
                                    <h3><a href="case-study-detail.php?id=holiday-inn-jaipur" class="project-card-full-link">Holiday Inn, Jaipur</a></h3>
                                    <p>
                                        Detailed electrical safety and HVAC thermal performance audit delivering actionable energy conservation measures.
                                    </p>
                                    <div class="project-foot">
                                        <div class="project-stat">
                                            <strong>34% Saved</strong>
                                            <small>Electrical &amp; HVAC Audit</small>
                                        </div>
                                        <a href="case-study-detail.php?id=holiday-inn-jaipur" class="project-link" title="Read Holiday Inn Case Study">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Project 3: ECSBC Compliance -->
                        <div class="swiper-slide">
                            <article class="project-card" onclick="window.location.href='case-study-detail.php?id=spj-vedatam-mall'">
                                <div class="project-image">
                                    <img src="assets/images/ecsbc-spj.png" alt="SPJ Vedatam Mall">
                                    <span class="project-tag project-tag--coral">ECSBC Compliance</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Gurugram, HR</span>
                                        <span><i class="fa-solid fa-shield-halved"></i> ECSBC / ECBC</span>
                                    </div>
                                    <h3><a href="case-study-detail.php?id=spj-vedatam-mall" class="project-card-full-link">SPJ Vedatam Mall</a></h3>
                                    <p>
                                        Energy Conservation &amp; Sustainable Building Code (ECSBC / ECBC) compliance modeling, glass specification, and efficient HVAC integration.
                                    </p>
                                    <div class="project-foot">
                                        <div class="project-stat">
                                            <strong>ECSBC 2024</strong>
                                            <small>Envelope &amp; Glass Model</small>
                                        </div>
                                        <a href="case-study-detail.php?id=spj-vedatam-mall" class="project-link" title="Read SPJ Vedatam Mall Case Study">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Project 4: Commissioning Authority -->
                        <div class="swiper-slide">
                            <article class="project-card" onclick="window.location.href='case-study-detail.php?id=martin-luther-chitkara'">
                                <div class="project-image">
                                    <img src="assets/images/comission-martin.png" alt="Martin Luther Block, Chitkara">
                                    <span class="project-tag">Building Commissioning</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Rajpura, PB</span>
                                        <span><i class="fa-solid fa-clipboard-check"></i> Third-Party Cx</span>
                                    </div>
                                    <h3><a href="case-study-detail.php?id=martin-luther-chitkara" class="project-card-full-link">Martin Luther Block, Chitkara</a></h3>
                                    <p>
                                        Comprehensive third-party commissioning of MEP systems, air balancing, and BMS controls for optimal operational performance.
                                    </p>
                                    <div class="project-foot">
                                        <div class="project-stat">
                                            <strong>100% Cx</strong>
                                            <small>Commissioned MEP</small>
                                        </div>
                                        <a href="case-study-detail.php?id=martin-luther-chitkara" class="project-link" title="Read Martin Luther Block Case Study">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Project 5: Precision Medical Cooling -->
                        <div class="swiper-slide">
                            <article class="project-card" onclick="window.location.href='case-study-detail.php?id=aiims-delhi'">
                                <div class="project-image">
                                    <img src="assets/images/medical-aims.png" alt="AIIMS, Delhi">
                                    <span class="project-tag project-tag--sage">Precision Medical</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> New Delhi</span>
                                        <span><i class="fa-solid fa-hospital"></i> Medical Cooling</span>
                                    </div>
                                    <h3><a href="case-study-detail.php?id=aiims-delhi" class="project-card-full-link">AIIMS, Delhi</a></h3>
                                    <p>
                                        Specialized ultra-precise temperature and humidity control cooling systems for critical medical equipment and research labs.
                                    </p>
                                    <div class="project-foot">
                                        <div class="project-stat">
                                            <strong>&plusmn;0.2&deg;C</strong>
                                            <small>Sterile Research HVAC</small>
                                        </div>
                                        <a href="case-study-detail.php?id=aiims-delhi" class="project-link" title="Read AIIMS Delhi Case Study">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Project 6: Industrial HVAC Solutions -->
                        <div class="swiper-slide">
                            <article class="project-card" onclick="window.location.href='case-study-detail.php?id=coca-cola-srikalahasti'">
                                <div class="project-image">
                                    <img src="assets/images/industry-hindustan.png" alt="Hindustan Coca-Cola Beverages Plant, Srikalahasti">
                                    <span class="project-tag project-tag--coral">Industrial HVAC</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Srikalahasti, AP</span>
                                        <span><i class="fa-solid fa-industry"></i> Industrial HVAC Solution</span>
                                    </div>
                                    <h3><a href="case-study-detail.php?id=coca-cola-srikalahasti" class="project-card-full-link">Hindustan Coca-Cola Beverages</a></h3>
                                    <p>
                                        High-efficiency industrial ventilation, cleanroom environmental control, and waste heat recovery for manufacturing plant.
                                    </p>
                                    <div class="project-foot">
                                        <div class="project-stat">
                                            <strong>38% Power Cut</strong>
                                            <small>Industrial Heat Recovery</small>
                                        </div>
                                        <a href="case-study-detail.php?id=coca-cola-srikalahasti" class="project-link" title="Read Hindustan Coca-Cola Case Study">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Project 7: Energy Simulation & Modeling -->
                        <div class="swiper-slide">
                            <article class="project-card" onclick="window.location.href='case-study-detail.php?id=42works-campus'">
                                <div class="project-image">
                                    <img src="assets/images/ecsbc-42.png" alt="42 Works Campus">
                                    <span class="project-tag">Energy Simulation</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Mohali, PB</span>
                                        <span><i class="fa-solid fa-vr-cardboard"></i> 3D Modeling</span>
                                    </div>
                                    <h3><a href="case-study-detail.php?id=42works-campus" class="project-card-full-link">42 Works Campus</a></h3>
                                    <p>
                                        Advanced 3D building energy simulation, solar shade analysis, and CFD airflow modeling for optimized daylighting and efficiency.
                                    </p>
                                    <div class="project-foot">
                                        <div class="project-stat">
                                            <strong>42% Energy Cut</strong>
                                            <small>3D CFD &amp; Solar Model</small>
                                        </div>
                                        <a href="case-study-detail.php?id=42works-campus" class="project-link" title="Read 42 Works Campus Case Study">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Project 8: IoT Water Solution -->
                        <div class="swiper-slide">
                            <article class="project-card" onclick="window.location.href='case-study-detail.php?id=the-gold-palace'">
                                <div class="project-image">
                                    <img src="assets/images/energy-gold.png" alt="The Gold Palace Resort, Jaipur">
                                    <span class="project-tag project-tag--sage">IoT Water Solution</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Jaipur</span>
                                        <span><i class="fa-solid fa-droplet"></i> Smart Water IoT</span>
                                    </div>
                                    <h3><a href="case-study-detail.php?id=the-gold-palace" class="project-card-full-link">The Gold Palace</a></h3>
                                    <p>
                                        Real-time IoT sensor network deployment for industrial water management, consumption auditing, and automated flow optimization.
                                    </p>
                                    <div class="project-foot">
                                        <div class="project-stat">
                                            <strong>35% Water Saved</strong>
                                            <small>Ultrasonic Telemetry</small>
                                        </div>
                                        <a href="case-study-detail.php?id=the-gold-palace" class="project-link" title="Read The Gold Palace Case Study">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="projects-swiper-pagination"></div>

                </div>

                <!-- Navigation Arrows -->
                <div class="projects-swiper-btn projects-swiper-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="projects-swiper-btn projects-swiper-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <div class="projects-cta-bottom">
                <a href="project.php" class="projects-view-all">
                    View All Projects <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>

    <!--==========================
        TESTIMONIALS (SOCIAL PROOF)
    ===========================-->
    <?php include 'includes/testimonials.php'; ?>

    <!--==========================
        HOMEPAGE SHORT CONSULTATION FORM (4 FIELDS ONLY)
    ===========================-->
    <section class="short-enquiry-section" id="enquiry">
        <div class="short-enquiry-wrapper">
            <!-- Left Value Prop Column -->
            <div class="short-enquiry-left">
                <span class="trust-pill"><i class="fa-solid fa-calendar-check"></i> Free Consultation</span>
                <h2>Book an Expert Engineering Consultation</h2>
                <p>Discuss your facility design, energy optimization, or green rating goals directly with certified LEED AP, IGBC AP, and BEE ECSBC specialists.</p>

                <div class="short-perks-list">
                    <div class="short-perk-item">
                        <div class="short-perk-icon">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <div class="short-perk-text">
                            <strong>Certified Senior Engineers</strong>
                            <span>Direct technical review by accredited green building professionals.</span>
                        </div>
                    </div>

                    <div class="short-perk-item">
                        <div class="short-perk-icon">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <div class="short-perk-text">
                            <strong>Rapid Turnaround</strong>
                            <span>Initial feasibility review and recommendations within 24 business hours.</span>
                        </div>
                    </div>

                    <div class="short-perk-item">
                        <div class="short-perk-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="short-perk-text">
                            <strong>Zero Obligation &amp; Confidential</strong>
                            <span>Complete privacy guaranteed. Non-disclosure agreement (NDA) available upon request.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Short Form Card -->
            <div class="short-form-card">
                <div class="short-form-header">
                    <h3>Request Free Project Review</h3>
                    <p>Provide brief project parameters below — our team will connect with you.</p>
                </div>

                <div id="enquiryFeedback">
                    <?php if ($enquiry_success): ?>
                        <div class="form-feedback-alert success">
                            <i class="fa-solid fa-circle-check"></i>
                            <div><strong>Enquiry Submitted!</strong> Thank you, our engineering team will connect with you shortly.</div>
                        </div>
                    <?php elseif (!empty($enquiry_error)): ?>
                        <div class="form-feedback-alert error">
                            <i class="fa-solid fa-circle-exclamation"></i>
                            <div><?php echo htmlspecialchars($enquiry_error); ?></div>
                        </div>
                    <?php endif; ?>
                </div>

                <form id="homeEnquiryForm" method="POST" action="index.php#enquiry">
                    <input type="hidden" name="action" value="quick_enquiry">

                    <div class="short-form-grid">
                        <!-- Field 1: Name -->
                        <div class="short-field short-form-full">
                            <label for="short_name">Full Name <span class="req">*</span></label>
                            <input type="text" id="short_name" name="name" required placeholder="e.g. Rajesh Singhal">
                        </div>

                        <!-- Field 2: Project Type -->
                        <div class="short-field">
                            <label for="short_service">Project Type <span class="req">*</span></label>
                            <select id="short_service" name="project_type" required>
                                <option value="">Select Project Type</option>
                                <option value="Green Building Certification (LEED / IGBC / GRIHA)">Green Building Certification</option>
                                <option value="Energy &amp; Electrical Safety Audit">Energy &amp; Electrical Safety Audit</option>
                                <option value="BEE ECSBC / ECBC Compliance Modeling">BEE ECSBC / ECBC Compliance</option>
                                <option value="HVAC Design &amp; Cleanroom Cooling">HVAC Design &amp; Cooling</option>
                                <option value="IoT Water Solution &amp; ZLD">IoT Water Management &amp; ZLD</option>
                                <option value="Building Commissioning Authority (CxA)">Building Commissioning (CxA)</option>
                                <option value="Other Sustainable Engineering">Other Engineering Requirement</option>
                            </select>
                        </div>

                        <!-- Field 3: City -->
                        <div class="short-field">
                            <label for="short_city">City / Location <span class="req">*</span></label>
                            <input type="text" id="short_city" name="city" required placeholder="e.g. Jaipur, Delhi NCR, Mumbai">
                        </div>

                        <!-- Field 4: Message -->
                        <div class="short-field short-form-full">
                            <label for="short_msg">Message / Project Scope</label>
                            <textarea id="short_msg" name="message" placeholder="Briefly describe built-up area (sq ft), target timeline, or project challenges..."></textarea>
                        </div>
                    </div>

                    <button type="submit" id="enquirySubmitBtn" class="btn-submit-short">
                        <i class="fa-solid fa-paper-plane"></i> Submit Project Enquiry
                    </button>
                    <div class="short-privacy-note">
                        <i class="fa-solid fa-lock"></i> 100% Confidential. NDA available upon request.
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Phase 2 AJAX Form Submissions & Download Handlers -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Short Enquiry AJAX Handling (Name, Project Type, City, Message)
        const enquiryForm = document.getElementById('homeEnquiryForm');
        const enquiryBtn = document.getElementById('enquirySubmitBtn');
        const enquiryFeedback = document.getElementById('enquiryFeedback');

        if (enquiryForm) {
            enquiryForm.addEventListener('submit', function(e) {
                e.preventDefault();
                enquiryBtn.disabled = true;
                enquiryBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';

                const formData = new FormData(enquiryForm);
                fetch('index.php', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    enquiryBtn.disabled = false;
                    enquiryBtn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Submit Project Enquiry';
                    if (data.success) {
                        enquiryFeedback.innerHTML = '<div class="form-feedback-alert success"><i class="fa-solid fa-circle-check"></i> <div>' + data.message + '</div></div>';
                        enquiryForm.reset();
                    } else {
                        enquiryFeedback.innerHTML = '<div class="form-feedback-alert error"><i class="fa-solid fa-circle-exclamation"></i> <div>' + (data.message || 'Submission error. Please try again.') + '</div></div>';
                    }
                })
                .catch(err => {
                    enquiryBtn.disabled = false;
                    enquiryBtn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Submit Project Enquiry';
                    enquiryForm.submit(); // fallback to normal POST
                });
            });
        }

        // Lead Magnet AJAX Handling & Instant PDF Trigger ("IGBC vs LEED vs GRIHA")
        const leadForm = document.getElementById('leadMagnetForm');
        const leadBtn = document.getElementById('leadMagnetSubmitBtn');
        const leadFeedback = document.getElementById('leadFeedback');

        if (leadForm) {
            leadForm.addEventListener('submit', function(e) {
                e.preventDefault();
                leadBtn.disabled = true;
                leadBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Preparing Guide...';

                const formData = new FormData(leadForm);
                fetch('index.php', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    leadBtn.disabled = false;
                    leadBtn.innerHTML = '<i class="fa-solid fa-file-arrow-down"></i> Download Free Guide (PDF)';
                    if (data.success) {
                        leadFeedback.innerHTML = '<div class="form-feedback-alert success"><i class="fa-solid fa-circle-check"></i> <div>' + data.message + '</div></div>';
                        leadForm.reset();
                        // Trigger download
                        const dlLink = document.createElement('a');
                        dlLink.href = data.download_url || 'assets/docs/IGBC-vs-LEED-vs-GRIHA-Guide-Sustainergic.pdf';
                        dlLink.download = 'IGBC-vs-LEED-vs-GRIHA-Guide-Sustainergic.pdf';
                        document.body.appendChild(dlLink);
                        dlLink.click();
                        document.body.removeChild(dlLink);
                    } else {
                        leadFeedback.innerHTML = '<div class="form-feedback-alert error"><i class="fa-solid fa-circle-exclamation"></i> <div>' + (data.message || 'Error processing request.') + '</div></div>';
                    }
                })
                .catch(err => {
                    leadBtn.disabled = false;
                    leadBtn.innerHTML = '<i class="fa-solid fa-file-arrow-down"></i> Download Free Guide (PDF)';
                    leadForm.submit();
                });
            });
        }
    });
    </script>

</body>

</html>
