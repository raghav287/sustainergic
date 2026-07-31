<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <title>Contact Us | Sustainergic Tech</title>

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
                    <h4>Head Office</h4>
                    <p>
                        302, Green Towers,<br>
                        Mindspace, Malad West,<br>
                        Mumbai, Maharashtra 400064
                    </p>
                </div>

                <div class="contact-info-card contact-info-card--accent">
                    <div class="cic-icon cic-icon--accent"><i class="fa-solid fa-phone-volume"></i></div>
                    <h4>Call Us</h4>
                    <p>
                        <a href="tel:+1234567890">+91 22 6543 2100</a><br>
                        <a href="tel:+1234567890">+91 98765 43210</a><br>
                        Mon – Sat · 9:00 – 18:00
                    </p>
                </div>

                <div class="contact-info-card">
                    <div class="cic-icon"><i class="fa-regular fa-envelope-open"></i></div>
                    <h4>Email</h4>
                    <p>
                        <a href="mailto:hello@sustainergic.com">hello@sustainergic.com</a><br>
                        <a href="mailto:projects@sustainergic.com">projects@sustainergic.com</a><br>
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

                    <div class="contact-map">
                        <iframe title="Sustainergic Office Location"
                            src="https://www.openstreetmap.org/export/embed.html?bbox=72.825000%2C19.170000%2C72.855000%2C19.195000&amp;layer=mapnik&amp;marker=19.182500%2C72.840000"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
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
                            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>

</body>

</html>