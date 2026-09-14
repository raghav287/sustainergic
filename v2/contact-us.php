<?php
require_once __DIR__ . '/includes/smtp-config.php';
require_once __DIR__ . '/includes/SmtpMailer.php';
require_once __DIR__ . '/includes/email-templates.php';

$form_success = false;
$form_error = '';
$form_data = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'service' => '',
    'company' => '',
    'location' => '',
    'message' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_data['name']     = trim($_POST['name'] ?? '');
    $form_data['email']    = trim($_POST['email'] ?? '');
    $form_data['phone']    = trim($_POST['phone'] ?? '');
    $form_data['service']  = trim($_POST['service'] ?? '');
    $form_data['company']  = trim($_POST['company'] ?? '');
    $form_data['location'] = trim($_POST['location'] ?? '');
    $form_data['message']  = trim($_POST['message'] ?? '');

    // Basic Validation
    if (empty($form_data['name']) || empty($form_data['email']) || empty($form_data['message'])) {
        $form_error = 'Please fill in all required fields (Name, Email, and Message).';
    } elseif (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Please enter a valid email address.';
    } else {
        $mailer = new SmtpMailer();

        // 1. Admin Email (Notification via PHPMailer)
        $adminSubject = "New Project Inquiry: " . ($form_data['service'] ? $form_data['service'] : 'General') . " - " . $form_data['name'];
        $adminBody    = getAdminEmailTemplate($form_data);
        $adminTo      = defined('ADMIN_NOTIFICATION_EMAIL') ? ADMIN_NOTIFICATION_EMAIL : 'business@sustainergictech.in';
        $adminCc      = defined('ADMIN_NOTIFICATION_CC') ? ADMIN_NOTIFICATION_CC : '';

        $adminSent = $mailer->send($adminTo, $adminSubject, $adminBody, $form_data['email'], $adminCc);

        // 2. Customer Email (Auto-responder Confirmation via PHPMailer)
        $customerSubject = "Thank you for contacting Sustainergic Tech";
        $customerBody    = getCustomerEmailTemplate($form_data);

        $customerSent = $mailer->send($form_data['email'], $customerSubject, $customerBody);

        if ($adminSent || $customerSent) {
            $form_success = true;
            // Reset form fields on success
            $form_data = [
                'name' => '',
                'email' => '',
                'phone' => '',
                'service' => '',
                'company' => '',
                'location' => '',
                'message' => ''
            ];
        } else {
            $form_error = 'Unable to send message: ' . ($mailer->getLastError() ? $mailer->getLastError() : 'Please check your SMTP credentials or contact business@sustainergictech.in');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <title>Contact Us | Sustainergic Tech</title>
    <meta name="description" content="Get in touch with Sustainergic Tech for green building certifications, HVAC engineering, IoT water solutions, and sustainability advisory services.">
    <meta name="keywords" content="contact Sustainergic Tech, HVAC consultant inquiry, green building consultation, energy audit contact, sustainability advisors India">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="page-contact">

    <?php include 'includes/navbar.php'; ?>

    <!-- =========================
        PAGE BANNER
========================= -->

    <section class="page-banner">

        <div class="page-banner-inner">

            <h1>Contact Us</h1>

            <ul class="page-banner-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="sep">/</li>
                <li>Contact Us</li>
            </ul>

        </div>

    </section>

    <!-- =========================
        CONTACT INFO CARDS
========================= -->

    <section class="contact-info-section">

        <div class="container">

            <div class="contact-info-grid">

                <div class="contact-info-card">
                    <div class="cic-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <h4>Our Offices</h4>
                    <p style="margin-bottom: 12px; font-size: 14.5px;">
                        <strong>Jaipur:</strong> GF, D-5/24, Chitrakoot Scheme, Vaishali Nagar, Jaipur, Rajasthan 302021
                    </p>
                    <p style="font-size: 14.5px;">
                        <strong>Zirakpur:</strong> SCO 3, First Floor, Dashmesh Colony, Patiala Road, Zirakpur 140603
                    </p>
                </div>

                <div class="contact-info-card contact-info-card--accent">
                    <div class="cic-icon cic-icon--accent"><i class="fa-solid fa-phone-volume"></i></div>
                    <h4>Call Us</h4>
                    <p>
                        <a href="tel:+919785749960">+91 97857 49960</a><br>
                        Mon – Sat · 9:00 – 18:00
                    </p>
                </div>

                <div class="contact-info-card">
                    <div class="cic-icon"><i class="fa-regular fa-envelope-open"></i></div>
                    <h4>Email</h4>
                    <p>
                        <a href="mailto:prateek@sustainergictech.in">prateek@sustainergictech.in</a><br>
                        <a href="mailto:business@sustainergictech.in">business@sustainergictech.in</a><br>
                        We reply within 24 hours
                    </p>
                </div>

            </div>

        </div>

    </section>

    <!-- =========================
        CONTACT FORM + MAP
========================= -->

    <section class="contact-main-section">

        <div class="container">

            <div class="contact-main-grid">

                <!-- Contact Form -->

                <div class="contact-form-wrapper" id="contact-form-wrapper">

                    <div class="contact-form-head">

                        <span class="section-badge">Send a Message</span>

                        <h2>Tell Us About <span>Your Project</span></h2>

                        <p>
                            Share a few details and our lead engineer will get back
                            to you with a tailored proposal and certification options.
                        </p>

                    </div>

                    <?php if ($form_success): ?>
                        <div id="formAlert" class="alert-box alert-success" style="transition: opacity 0.5s ease-out; background: #e6f4ea; border: 1px solid #34a853; color: #137333; padding: 15px 20px; border-radius: 8px; margin-bottom: 25px; font-weight: 500;">
                            <i class="fa-solid fa-circle-check" style="margin-right: 8px; font-size: 18px;"></i>
                            Thank you! Your message has been sent successfully. Our engineering team will contact you within 24 hours.
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($form_error)): ?>
                        <div id="formAlert" class="alert-box alert-error" style="transition: opacity 0.5s ease-out; background: #fce8e6; border: 1px solid #ea4335; color: #c5221f; padding: 15px 20px; border-radius: 8px; margin-bottom: 25px; font-weight: 500;">
                            <i class="fa-solid fa-circle-exclamation" style="margin-right: 8px; font-size: 18px;"></i>
                            <?php echo htmlspecialchars($form_error); ?>
                        </div>
                    <?php endif; ?>

                    <form class="contact-form" action="#contact-form-wrapper" method="post">

                        <div class="cf-row cf-row-2">
                            <div class="cf-field">
                                <label for="cf-name">Full Name</label>
                                <input id="cf-name" type="text" name="name" placeholder="Rahul Sharma" required>
                            </div>
                            <div class="cf-field">
                                <label for="cf-email">Email Address</label>
                                <input id="cf-email" type="email" name="email" placeholder="you@company.com" required>
                            </div>
                        </div>

                        <div class="cf-row cf-row-2">
                            <div class="cf-field">
                                <label for="cf-phone">Phone Number</label>
                                <input id="cf-phone" type="tel" name="phone" placeholder="+91 98765 43210">
                            </div>
                            <div class="cf-field">
                                <label for="cf-service">Service You Need</label>
                                <select id="cf-service" name="service">
                                    <option value="">Choose a service…</option>
                                    <optgroup label="Engineering &amp; Advisory Services">
                                        <option value="Green Building Certification">Green Building Certification</option>
                                        <option value="Building Simulation &amp; Modeling">Building Simulation &amp; Modeling</option>
                                        <option value="Energy, Water &amp; Carbon Audits">Energy, Water &amp; Carbon Audits</option>
                                        <option value="Commissioning Authority (CxA)">Commissioning Authority (CxA)</option>
                                        <option value="ECBC / ECSBC Compliance">ECBC / ECSBC Compliance</option>
                                        <option value="Carbon Accounting &amp; Advisory">Carbon Accounting &amp; Advisory</option>
                                        <option value="IoT Water Solution">IoT Water Solution</option>
                                        <option value="Hybrid Thermal Solar (HTS) Panel">Hybrid Thermal Solar (HTS) Panel</option>
                                        <option value="ESG and EHS Advisory">ESG and EHS Advisory</option>
                                    </optgroup>
                                    <optgroup label="HVAC &amp; Thermal Engineering Solutions">
                                        <option value="Radiant Heating &amp; Cooling System">Radiant Heating &amp; Cooling System</option>
                                        <option value="Underfloor Electric Heating System">Underfloor Electric Heating System</option>
                                        <option value="Geothermal System">Geothermal System</option>
                                        <option value="Fresh Air System (IAQ)">Fresh Air System (IAQ)</option>
                                        <option value="Chilled Water System">Chilled Water System</option>
                                        <option value="VRV / VRF System">VRV / VRF System</option>
                                        <option value="Heat Pumps">Heat Pumps</option>
                                        <option value="Radiators">Radiators</option>
                                        <option value="Industrial HVAC Solutions">Industrial HVAC Solutions</option>
                                        <option value="Precision Medical Cooling Solution">Precision Medical Cooling Solution</option>
                                    </optgroup>
                                    <option value="Other">Other / Custom Requirement</option>
                                </select>
                            </div>
                        </div>

                        <div class="cf-row cf-row-2">
                            <div class="cf-field">
                                <label for="cf-company">Company / Project Name</label>
                                <input id="cf-company" type="text" name="company" placeholder="Veridia Corp">
                            </div>
                            <div class="cf-field">
                                <label for="cf-location">Project Location</label>
                                <input id="cf-location" type="text" name="location" placeholder="Mumbai, India">
                            </div>
                        </div>

                        <div class="cf-row">
                            <div class="cf-field">
                                <label for="cf-message">Project Details</label>
                                <textarea id="cf-message" name="message" rows="6"
                                    placeholder="Tell us about the project size, timelines and the certification or goal you are aiming for…"
                                    required></textarea>
                            </div>
                        </div>

                        <div class="cf-row cf-row-submit">
                            <button type="submit" class="cf-submit">
                                Send Message <i class="fa-solid fa-paper-plane"></i>
                            </button>
                            <small class="cf-note">
                                <i class="fa-solid fa-shield-halved"></i>
                                Your information is secure and never shared.
                            </small>
                        </div>

                    </form>

                </div>

                <!-- Map + Side Info -->

                <div class="contact-side-wrapper">

                    <div class="map-tabs-container">
                        <div class="map-tabs-header">
                            <button class="map-tab-btn active" onclick="switchMap(this, 'jaipur')">
                                <i class="fa-solid fa-location-dot"></i> Jaipur Office
                            </button>
                            <button class="map-tab-btn" onclick="switchMap(this, 'zirakpur')">
                                <i class="fa-solid fa-location-dot"></i> Zirakpur Office
                            </button>
                        </div>
                        
                        <div class="contact-map" id="map-jaipur">
                            <iframe title="Sustainergic Jaipur Office Location"
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d29019.195209651716!2d75.69811562014799!3d26.906383277218882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGF%2C%20D-5%2F24%2C%20Chitrakoot%20Scheme%2C%20Vaishali%20Nagar%2C%20Jaipur%20302021!5e1!3m2!1sen!2sin!4v1786521547387!5m2!1sen!2sin" 
                                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
                            </iframe>
                        </div>

                        <div class="contact-map" id="map-zirakpur" style="display: none;">
                            <iframe title="Sustainergic Zirakpur Office Location"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4375.737249700763!2d76.81682737630085!3d30.643766589925526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feb2e11f441e3%3A0x741d2739520e8a23!2sSCO%203%2C%20First%20Floor%2C%20Lohgarh%20Rd%2C%20Zirakpur%2C%20Punjab%20140603!5e1!3m2!1sen!2sin!4v1786521708071!5m2!1sen!2sin" 
                                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
                            </iframe>
                        </div>
                    </div>

                    <div class="contact-side-card">

                        <h4>Office Hours</h4>

                        <ul class="office-hours">
                            <li><span>Monday – Friday</span><strong>9:00 – 18:00</strong></li>
                            <li><span>Saturday</span><strong>10:00 – 15:00</strong></li>
                            <li><span>Sunday</span><strong class="c-soft">Closed</strong></li>
                        </ul>

                        <div class="side-divider"></div>

                        <h4>Follow Us</h4>

                        <div class="side-socials">
                            <a href="https://www.linkedin.com/company/sustainergic-tech/" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://www.instagram.com/sustainergictech?igsh=MTBwdDZhd3lzNnF0eQ" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
    <script>
        function switchMap(btn, office) {
            document.getElementById('map-jaipur').style.display = 'none';
            document.getElementById('map-zirakpur').style.display = 'none';
            document.getElementById('map-' + office).style.display = 'block';
            
            const buttons = document.querySelectorAll('.map-tab-btn');
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        }

        <?php if ($form_success || !empty($form_error)): ?>
        document.addEventListener("DOMContentLoaded", function() {
            const formElem = document.getElementById("contact-form-wrapper");
            if (formElem) {
                formElem.scrollIntoView({ behavior: "smooth", block: "start" });
            }

            const alertElem = document.getElementById("formAlert");
            if (alertElem) {
                setTimeout(function() {
                    alertElem.style.opacity = "0";
                    setTimeout(function() {
                        alertElem.style.display = "none";
                    }, 500);
                }, 5000); // Auto hide confirmation/error message after 5 seconds
            }
        });
        <?php endif; ?>
    </script>

</body>

</html>