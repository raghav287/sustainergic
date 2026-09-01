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

                <div class="contact-form-wrapper">

                    <div class="contact-form-head">

                        <span class="section-badge">Send a Message</span>

                        <h2>Tell Us About <span>Your Project</span></h2>

                        <p>
                            Share a few details and our lead engineer will get back
                            to you with a tailored proposal and certification options.
                        </p>

                    </div>

                    <form class="contact-form" action="#" method="post">

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
                                    <option>Green Building Certification</option>
                                    <option>Energy Simulation</option>
                                    <option>HVAC Design &amp; Installation</option>
                                    <option>Building Commissioning</option>
                                    <option>Renewable Energy Systems</option>
                                    <option>Sustainability Consulting</option>
                                    <option>Other</option>
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
    </script>

</body>

</html>