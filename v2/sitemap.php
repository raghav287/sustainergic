<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>Website Directory &amp; Sitemap | Sustainergic Tech India</title>
    <meta name="description" content="Explore the comprehensive website directory of Sustainergic Tech including green building certification, HVAC engineering, IoT water solutions, and case studies.">
    <meta name="keywords" content="Sustainergic sitemap, website directory, green building services, HVAC engineering solutions">
    <link rel="canonical" href="https://sustainergictech.in/sitemap.php">
    <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sustainergictech.in/sitemap.php">
    <meta property="og:site_name" content="Sustainergic Tech">
    <meta property="og:locale" content="en_IN">
    <meta property="og:title" content="Website Directory &amp; Sitemap | Sustainergic Tech India">
    <meta property="og:description" content="Explore the comprehensive website directory of Sustainergic Tech including green building certification, HVAC engineering, IoT water solutions, and case studies.">
    <meta property="og:image" content="https://sustainergictech.in/assets/images/og-banner.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Sustainergic Tech - Sustainable Green Building &amp; HVAC Engineering">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Website Directory &amp; Sitemap | Sustainergic Tech India">
    <meta name="twitter:description" content="Explore the comprehensive website directory of Sustainergic Tech including green building certification, HVAC engineering, IoT water solutions, and case studies.">
    <meta name="twitter:image" content="https://sustainergictech.in/assets/images/og-banner.png">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .sitemap-section {
            padding: 70px 0 90px;
            background-color: #f8fafc;
        }

        .sitemap-container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .sitemap-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .sitemap-col {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 30px 28px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .sitemap-col:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.07);
            border-color: #10b981;
        }

        .sitemap-col-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 22px;
            padding-bottom: 16px;
            border-bottom: 2px solid #f1f5f9;
        }

        .sitemap-col-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: #ecfdf5;
            color: #047857;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .sitemap-col-header h3 {
            font-size: 20px;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .sitemap-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .sitemap-links-list li a {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #334155;
            text-decoration: none;
            font-size: 14.5px;
            font-weight: 500;
            transition: color 0.2s ease, transform 0.2s ease;
        }

        .sitemap-links-list li a i {
            color: #10b981;
            font-size: 11px;
            transition: transform 0.2s ease;
        }

        .sitemap-links-list li a:hover {
            color: #10b981;
            transform: translateX(4px);
        }

        .sitemap-links-list li a:hover i {
            transform: translateX(2px);
        }

        .sitemap-xml-callout {
            margin-top: 45px;
            background: #ffffff;
            border: 1px dashed #cbd5e1;
            border-radius: 14px;
            padding: 22px 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        @media (max-width: 991px) {
            .sitemap-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .sitemap-grid {
                grid-template-columns: 1fr;
            }
            .sitemap-xml-callout {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body class="page-sitemap">

    <?php include 'includes/navbar.php'; ?>

    <!-- =========================
        PAGE BANNER
    ========================= -->
    <section class="page-banner">
        <div class="page-banner-inner">
            <h1>Website Sitemap</h1>
            <ul class="page-banner-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="sep">/</li>
                <li>Sitemap</li>
            </ul>
        </div>
    </section>

    <!-- =========================
        SITEMAP DIRECTORY
    ========================= -->
    <section class="sitemap-section">
        <div class="sitemap-container">

            <div class="section-heading" style="text-align: center; max-width: 700px; margin: 0 auto 30px;">
                <span class="sp-label" style="display: inline-flex; align-items: center; gap: 8px; padding: 6px 18px; background-color: #ecfdf5; color: #047857; font-size: 13px; font-weight: 700; border-radius: 20px; text-transform: uppercase; border: 1px solid #a7f3d0; margin-bottom: 12px;">Directory</span>
                <h2 style="font-size: 34px; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Explore All <span style="color: #10b981;">Web Pages</span></h2>
                <p style="color: #64748b; font-size: 15px; line-height: 1.6;">A complete hierarchical index of our sustainability consulting services, smart HVAC engineering systems, certified case studies, and corporate policies.</p>
            </div>

            <div class="sitemap-grid">

                <!-- Column 1: Core & Resources -->
                <div class="sitemap-col">
                    <div class="sitemap-col-header">
                        <div class="sitemap-col-icon"><i class="fa-solid fa-house"></i></div>
                        <h3>General &amp; Portfolio</h3>
                    </div>
                    <ul class="sitemap-links-list">
                        <li><a href="index.php"><i class="fa-solid fa-chevron-right"></i> Home Page</a></li>
                        <li><a href="about.php"><i class="fa-solid fa-chevron-right"></i> About Us</a></li>
                        <li><a href="project.php"><i class="fa-solid fa-chevron-right"></i> Projects Portfolio</a></li>
                        <li><a href="client.php"><i class="fa-solid fa-chevron-right"></i> Our Clients &amp; Partners</a></li>
                        <li><a href="case-studies.php"><i class="fa-solid fa-chevron-right"></i> Case Studies Directory</a></li>
                        <li><a href="case-study-detail.php?id=rockefeller-chitkara"><i class="fa-solid fa-chevron-right"></i> Rockefeller Block Case Study</a></li>
                        <li><a href="case-study-detail.php?id=hyatt-regency-dehradun"><i class="fa-solid fa-chevron-right"></i> Hyatt Regency Case Study</a></li>
                        <li><a href="case-study-detail.php?id=fortis-medical-cooling"><i class="fa-solid fa-chevron-right"></i> Fortis Healthcare Case Study</a></li>
                        <li><a href="case-study-detail.php?id=havells-iot-water"><i class="fa-solid fa-chevron-right"></i> Havells India Case Study</a></li>
                        <li><a href="case-study-detail.php?id=vaibhav-esg-brsr"><i class="fa-solid fa-chevron-right"></i> Vaibhav Global BRSR Case Study</a></li>
                        <li><a href="case-study-detail.php?id=sbi-head-office"><i class="fa-solid fa-chevron-right"></i> SBI Head Office Case Study</a></li>
                        <li><a href="contact-us.php"><i class="fa-solid fa-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 2: Sustainability Services -->
                <div class="sitemap-col">
                    <div class="sitemap-col-header">
                        <div class="sitemap-col-icon"><i class="fa-solid fa-leaf"></i></div>
                        <h3>Sustainability Services</h3>
                    </div>
                    <ul class="sitemap-links-list">
                        <li><a href="green-building-certification.php"><i class="fa-solid fa-chevron-right"></i> Green Building Certification (LEED/IGBC/GRIHA)</a></li>
                        <li><a href="simulation-modeling.php"><i class="fa-solid fa-chevron-right"></i> Simulation &amp; Energy Modeling</a></li>
                        <li><a href="audits.php"><i class="fa-solid fa-chevron-right"></i> Energy &amp; Water Audits</a></li>
                        <li><a href="commissioning-authority.php"><i class="fa-solid fa-chevron-right"></i> Commissioning Authority (CxA)</a></li>
                        <li><a href="ecsbc-compliance.php"><i class="fa-solid fa-chevron-right"></i> ECSBC &amp; Eco-Niwas Compliance</a></li>
                        <li><a href="carbon-accounting-advisory.php"><i class="fa-solid fa-chevron-right"></i> Carbon Accounting &amp; GHG Advisory</a></li>
                        <li><a href="iot-water-solution.php"><i class="fa-solid fa-chevron-right"></i> IoT Smart Water Automation</a></li>
                        <li><a href="hybrid-thermal-solar-panel.php"><i class="fa-solid fa-chevron-right"></i> Hybrid Thermal Solar (HTS) Panels</a></li>
                        <li><a href="esg-and-ehs.php"><i class="fa-solid fa-chevron-right"></i> ESG &amp; EHS Frameworks</a></li>
                    </ul>
                </div>

                <!-- Column 3: HVAC Solutions & Legal -->
                <div class="sitemap-col">
                    <div class="sitemap-col-header">
                        <div class="sitemap-col-icon"><i class="fa-solid fa-fan"></i></div>
                        <h3>HVAC Engineering</h3>
                    </div>
                    <ul class="sitemap-links-list">
                        <li><a href="radiant-heating-cooling-system.php"><i class="fa-solid fa-chevron-right"></i> Radiant Heating &amp; Cooling System</a></li>
                        <li><a href="underfloor-electric-heating-system.php"><i class="fa-solid fa-chevron-right"></i> Underfloor Electric Heating</a></li>
                        <li><a href="geothermal-system.php"><i class="fa-solid fa-chevron-right"></i> Geothermal Heat Pump Systems</a></li>
                        <li><a href="fresh-air-system.php"><i class="fa-solid fa-chevron-right"></i> Fresh Air &amp; IAQ Ventilation</a></li>
                        <li><a href="chilled-water-system.php"><i class="fa-solid fa-chevron-right"></i> Chilled Water Systems</a></li>
                        <li><a href="vrv-vrf-system.php"><i class="fa-solid fa-chevron-right"></i> VRV / VRF Air Conditioning</a></li>
                        <li><a href="heat-pumps.php"><i class="fa-solid fa-chevron-right"></i> Heat Pump Systems Engineering</a></li>
                        <li><a href="radiators.php"><i class="fa-solid fa-chevron-right"></i> Radiators &amp; Hydronic Heat</a></li>
                        <li><a href="industrial-hvac-solutions.php"><i class="fa-solid fa-chevron-right"></i> Industrial HVAC Solutions</a></li>
                        <li><a href="precision-medical-cooling-solution.php"><i class="fa-solid fa-chevron-right"></i> Precision Medical Cooling Solutions</a></li>
                    </ul>

                    <div class="sitemap-col-header" style="margin-top: 30px; margin-bottom: 16px; padding-bottom: 12px;">
                        <div class="sitemap-col-icon" style="background: #f1f5f9; color: #475569;"><i class="fa-solid fa-shield-halved"></i></div>
                        <h3 style="font-size: 18px;">Legal &amp; Policies</h3>
                    </div>
                    <ul class="sitemap-links-list">
                        <li><a href="privacy-policy.php"><i class="fa-solid fa-chevron-right"></i> Privacy Policy</a></li>
                        <li><a href="terms-condition.php"><i class="fa-solid fa-chevron-right"></i> Terms &amp; Conditions</a></li>
                        <li><a href="sitemap.php"><i class="fa-solid fa-chevron-right"></i> HTML Sitemap</a></li>
                        <li><a href="sitemap.xml" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> XML Sitemap (Machine Readable)</a></li>
                    </ul>
                </div>

            </div>

            <!-- XML Sitemap Callout -->
            <div class="sitemap-xml-callout">
                <div style="display: flex; gap: 14px; align-items: center;">
                    <i class="fa-solid fa-file-code" style="font-size: 26px; color: #10b981;"></i>
                    <div>
                        <strong style="color: #0f172a; font-size: 15px; display: block;">Search Engine XML Sitemap Available</strong>
                        <span style="font-size: 13.5px; color: #64748b;">Crawler-accessible XML sitemap formatted to Google and Bing webmaster index standards.</span>
                    </div>
                </div>
                <a href="sitemap.xml" target="_blank" class="quote-btn" style="white-space: nowrap; padding: 10px 22px; font-size: 13.5px;">
                    View sitemap.xml <i class="fa-solid fa-arrow-up-right-from-square"></i>
                </a>
            </div>

        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>

</body>

</html>
