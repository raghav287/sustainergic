    <!-- =========================
        FOOTER SECTION
========================= -->

<style>
/* Self-Contained Site Footer Styling */
.site-footer {
    background-color: #0f172a !important;
    color: #94a3b8 !important;
    font-family: 'Inter', 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif !important;
    border-top: 4px solid #10b981 !important;
    position: relative;
    z-index: 5;
    margin-top: 0 !important;
}

/* Top CTA Band */
.footer-top {
    background: #1e293b !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
    padding: 30px 0 !important;
    position: relative;
}

.ft-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    flex-wrap: wrap;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 20px;
}

.ft-tag {
    display: flex;
    align-items: center;
    gap: 18px;
}

.ft-tag-icon {
    width: 50px;
    height: 50px;
    border-radius: 14px;
    background: #10b981;
    color: #ffffff;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 18px rgba(16, 185, 129, 0.3);
    flex-shrink: 0;
}

.ft-tag-text strong {
    color: #ffffff !important;
    font-size: 18px !important;
    font-weight: 800 !important;
    display: block;
    margin-bottom: 2px;
}

.ft-tag-text small {
    color: #94a3b8 !important;
    font-size: 14px !important;
}

.ft-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 14px 30px;
    background: #10b981 !important;
    color: #ffffff !important;
    border-radius: 50px !important;
    font-weight: 700 !important;
    font-size: 14.5px !important;
    box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3);
    transition: all 0.3s ease !important;
    text-decoration: none !important;
    white-space: nowrap;
}

.ft-cta-btn:hover {
    background: #059669 !important;
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(16, 185, 129, 0.45);
    color: #ffffff !important;
}

.ft-cta-btn i {
    font-size: 12px;
    transition: transform 0.3s ease;
}

.ft-cta-btn:hover i {
    transform: translateX(4px);
}

/* Main Footer */
.footer-main {
    padding: 60px 0 50px !important;
    background: #0f172a !important;
}

.fm-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 20px;
}

.fm-grid {
    display: grid !important;
    grid-template-columns: 1.4fr 0.9fr 1.2fr 1.4fr !important;
    gap: 40px 32px !important;
}

.fm-col h4 {
    color: #ffffff !important;
    font-size: 16px !important;
    font-weight: 800 !important;
    letter-spacing: 0.5px !important;
    text-transform: uppercase !important;
    margin-bottom: 22px !important;
    padding-bottom: 12px !important;
    position: relative !important;
}

.fm-col h4::after {
    content: "" !important;
    position: absolute !important;
    left: 0 !important;
    bottom: 0 !important;
    width: 36px !important;
    height: 3px !important;
    border-radius: 4px !important;
    background: #10b981 !important;
}

.fm-logo-img {
    max-width: 220px;
    width: 100%;
    height: auto;
    display: block;
    margin-bottom: 18px;
}

.fm-about {
    color: #94a3b8 !important;
    font-size: 14px !important;
    line-height: 1.7 !important;
    margin-bottom: 22px !important;
}

/* Social Buttons */
.fm-socials {
    display: flex;
    gap: 10px;
}

.fm-socials a {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    color: #cbd5e1;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    transition: all 0.3s ease;
    text-decoration: none;
}

.fm-socials a:hover {
    background: #10b981;
    color: #ffffff;
    border-color: #10b981;
    transform: translateY(-3px);
    box-shadow: 0 6px 18px rgba(16, 185, 129, 0.35);
}

/* Navigation Lists */
.fm-nav ul {
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.fm-nav li {
    margin-bottom: 12px !important;
}

.fm-nav li a {
    color: #94a3b8 !important;
    font-size: 14px !important;
    text-decoration: none !important;
    transition: all 0.25s ease !important;
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.fm-nav li a:hover {
    color: #10b981 !important;
    transform: translateX(4px);
}

.fm-nav li a::before {
    content: "›";
    font-size: 16px;
    color: #10b981;
    font-weight: 700;
    transition: transform 0.2s ease;
}

/* Contact Details Column */
.fm-mini-contact ul {
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.fm-mini-contact li {
    display: flex !important;
    align-items: flex-start !important;
    gap: 14px !important;
    margin-bottom: 18px !important;
}

.fm-mini-contact li i {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    background: rgba(16, 185, 129, 0.12);
    border: 1px solid rgba(16, 185, 129, 0.25);
    color: #10b981;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    flex-shrink: 0;
    margin-top: 2px;
}

.fm-mini-contact li span {
    color: #94a3b8 !important;
    font-size: 13.5px !important;
    line-height: 1.6 !important;
}

.fm-mini-contact li strong {
    color: #f1f5f9 !important;
    font-weight: 700 !important;
}

.fm-mini-contact li a {
    color: #cbd5e1 !important;
    text-decoration: none !important;
    transition: color 0.2s ease !important;
}

.fm-mini-contact li a:hover {
    color: #10b981 !important;
}

/* Footer Bottom Bar */
.footer-bottom {
    background: #090d16 !important;
    border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
    padding: 22px 0 !important;
}

.fb-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    flex-wrap: wrap;
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 20px;
}

.fb-inner small {
    color: #64748b !important;
    font-size: 13.5px !important;
}

.fb-legal {
    display: flex !important;
    gap: 24px !important;
    list-style: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.fb-legal a {
    color: #64748b !important;
    font-size: 13.5px !important;
    text-decoration: none !important;
    transition: color 0.2s ease !important;
}

.fb-legal a:hover {
    color: #10b981 !important;
}

@media (max-width: 991px) {
    .fm-grid {
        grid-template-columns: 1fr 1fr !important;
    }
}

@media (max-width: 600px) {
    .fm-grid {
        grid-template-columns: 1fr !important;
    }
    .ft-inner {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>

<footer class="site-footer">

    <!-- Top CTA Band -->
    <div class="footer-top">
        <div class="ft-inner">
            <div class="ft-tag">
                <div class="ft-tag-icon">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <div class="ft-tag-text">
                    <strong>Ready to elevate your building's sustainability?</strong>
                    <small>Book a free 30-minute consultation with our lead green building engineers.</small>
                </div>
            </div>
            <a href="contact-us.php" class="ft-cta-btn">
                Book Free Consultation <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>

    <!-- Main Footer Content -->
    <div class="footer-main">
        <div class="fm-container">
            <div class="fm-grid">

                <!-- Brand Column -->
                <div class="fm-col fm-brand">
                    <div class="fm-logo">
                        <a href="index.php" class="fm-logo-link" aria-label="Sustainergic Home">
                            <img src="assets/images/logo-white.png" alt="Sustainergic Tech Logo" class="fm-logo-img">
                        </a>
                    </div>
                    <p class="fm-about">
                        Leading sustainability engineering &amp; green building consultancy delivering energy-efficient, IGBC/LEED certified developments across India and internationally.
                    </p>
                    <div class="fm-socials">
                        <a href="https://www.linkedin.com/company/sustainergic-tech/" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" aria-label="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="https://www.instagram.com/sustainergictech?igsh=MTBwdDZhd3lzNnF0eQ" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div class="fm-col fm-nav">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="project.php">Services Portfolio</a></li>
                        <li><a href="case-studies.php">Case Studies</a></li>
                        <li><a href="client.php">Client Projects</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="fm-col fm-nav">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="green-building-certification.php">Green Building Certification</a></li>
                        <li><a href="simulation-modeling.php">Building Simulation &amp; Modeling</a></li>
                        <li><a href="audits.php">Energy &amp; Water Audits</a></li>
                        <li><a href="commissioning-authority.php">Commissioning Authority</a></li>
                        <li><a href="radiant-heating-cooling-system.php">Radiant Cooling &amp; Heating</a></li>
                        <li><a href="geothermal-system.php">Geothermal Systems</a></li>
                        <li><a href="project.php">View All Services</a></li>
                    </ul>
                </div>

                <!-- Reach Us Column -->
                <div class="fm-col fm-end">
                    <div class="fm-mini-contact">
                        <h4>Reach Us</h4>
                        <ul>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>
                                    <strong>Jaipur:</strong> GF, D-5/24, Chitrakoot Scheme, Vaishali Nagar, Jaipur 302021<br><br>
                                    <strong>Zirakpur:</strong> SCO 3, 1st Floor, Dashmesh Colony, Patiala Road, Zirakpur 140603
                                </span>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span><a href="tel:+919785749960">+91 97857 49960</a></span>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <span>
                                    <a href="mailto:prateek@sustainergictech.in">prateek@sustainergictech.in</a><br>
                                    <a href="mailto:business@sustainergictech.in">business@sustainergictech.in</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom Legal Bar -->
    <div class="footer-bottom">
        <div class="fb-inner">
            <small>&copy; <?php echo date('Y'); ?> Sustainergic Tech. All rights reserved.</small>
            <ul class="fb-legal">
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                <li><a href="terms-condition.php">Terms of Service</a></li>
                <li><a href="#">Sitemap</a></li>
            </ul>
        </div>
    </div>

</footer>