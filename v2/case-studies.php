<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>Case Studies &amp; Engineering Success Stories | Sustainergic Tech</title>
    <meta name="description" content="Explore real-world sustainability, HVAC engineering, IoT water management, and green building case studies executed by Sustainergic Tech across India.">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/green-building.css">

    <style>
        /* Dedicated Case Studies Page Custom Styles */
        .cs-filter-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 36px;
        }

        .cs-filter-btn {
            padding: 10px 22px;
            border-radius: 30px;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            color: #475569;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .cs-filter-btn:hover,
        .cs-filter-btn.active {
            background: #047857;
            color: #ffffff;
            border-color: #047857;
            box-shadow: 0 4px 14px rgba(4, 120, 87, 0.25);
        }

        /* Featured Spotlight Card */
        .cs-spotlight-card {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            border-radius: 24px;
            overflow: hidden;
            color: #ffffff;
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.15);
            margin-bottom: 60px;
            border: 1px solid #334155;
        }

        .cs-spotlight-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            min-height: 440px;
        }

        .cs-spotlight-content {
            padding: 48px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cs-spotlight-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            background: rgba(16, 185, 129, 0.15);
            color: #34d399;
            border: 1px solid rgba(52, 211, 153, 0.3);
            border-radius: 20px;
            font-size: 12.5px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 20px;
            width: fit-content;
        }

        .cs-spotlight-title {
            font-size: 32px;
            font-weight: 800;
            line-height: 1.3;
            margin-bottom: 16px;
            color: #ffffff;
        }

        .cs-spotlight-desc {
            font-size: 15.5px;
            color: #94a3b8;
            line-height: 1.65;
            margin-bottom: 28px;
        }

        .cs-metrics-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            padding-top: 24px;
            border-top: 1px solid #334155;
        }

        .cs-metric-box h4 {
            font-size: 26px;
            font-weight: 800;
            color: #34d399;
            margin-bottom: 4px;
        }

        .cs-metric-box p {
            font-size: 12.5px;
            color: #cbd5e1;
            margin: 0;
            font-weight: 500;
        }

        .cs-spotlight-img-wrapper {
            position: relative;
            overflow: hidden;
            min-height: 320px;
        }

        .cs-spotlight-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Case Studies Grid Cards */
        .cs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));
            gap: 30px;
        }

        .cs-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .cs-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
            border-color: #10b981;
        }

        .cs-card-img-box {
            position: relative;
            height: 220px;
            overflow: hidden;
            background: #f1f5f9;
        }

        .cs-card-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .cs-card:hover .cs-card-img-box img {
            transform: scale(1.07);
        }

        .cs-card-category-tag {
            position: absolute;
            top: 16px;
            left: 16px;
            padding: 5px 14px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(4px);
            color: #34d399;
            font-size: 11.5px;
            font-weight: 700;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(52, 211, 153, 0.3);
        }

        .cs-card-body {
            padding: 26px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .cs-client-location {
            font-size: 12.5px;
            font-weight: 700;
            color: #047857;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .cs-card-title {
            font-size: 20px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.35;
            margin-bottom: 12px;
        }

        .cs-card-desc {
            font-size: 14px;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .cs-card-highlights {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            padding-top: 16px;
            border-top: 1px solid #f1f5f9;
            margin-top: auto;
        }

        .cs-pill {
            padding: 5px 12px;
            background: #ecfdf5;
            color: #047857;
            font-size: 12px;
            font-weight: 700;
            border-radius: 12px;
            border: 1px solid #a7f3d0;
        }

        /* Modal Popup */
        .cs-modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(6px);
            z-index: 9999;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .cs-modal-overlay.active {
            display: flex;
        }

        .cs-modal-box {
            background: #ffffff;
            border-radius: 24px;
            max-width: 760px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            padding: 40px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.25);
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .cs-modal-close {
            position: absolute;
            top: 20px;
            right: 24px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #f1f5f9;
            border: none;
            color: #475569;
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .cs-modal-close:hover {
            background: #ef4444;
            color: #ffffff;
        }

        @media (max-width: 991px) {
            .cs-spotlight-grid {
                grid-template-columns: 1fr;
            }
            .cs-spotlight-content {
                padding: 30px;
            }
            .cs-spotlight-title {
                font-size: 24px;
            }
            .cs-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body class="page-green-building">

    <?php include 'includes/navbar.php'; ?>

    <!-- ==========================================
       1. HERO BANNER
       ========================================== -->
    <section class="gb-hero">
        <div class="gb-container">
            <div class="gb-hero-grid">
                <!-- Left Content Column -->
                <div class="gb-hero-content">
                    <ul class="gb-breadcrumbs" aria-label="Breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="#">Resources</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li class="text-black" aria-current="page">Case Studies</li>
                    </ul>
                    
                    <h1 class="gb-hero-title">
                        Engineering <span>Impact &amp; Case Studies</span>
                    </h1>
                    
                    <p class="gb-hero-subtitle">
                        Discover how Sustainergic Tech delivers net-zero decarbonization, high-COP HVAC engineering, smart IoT water management, and LEED/IGBC Platinum certifications across India.
                    </p>
                    
                    <div class="gb-hero-actions">
                        <a href="#case-studies-grid" class="gb-btn gb-btn--primary">
                            Explore Case Studies <i class="fa-solid fa-folder-open"></i>
                        </a>
                        <a href="contact-us.php" class="gb-btn gb-btn--outline">
                            Submit Project RFP <i class="fa-solid fa-paper-plane"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Column -->
                <div class="gb-hero-visual">
                    <div class="gb-hero-img-wrapper">
                        <img src="assets/images/benefits-building.png" alt="Sustainergic Tech Certified Case Studies Impact">
                        
                        <!-- Floating Badge 1 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--one">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>150+ Certified Projects</h5>
                                <p>LEED &amp; IGBC Platinum</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--two">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>45 GWh / Year Saved</h5>
                                <p>Clean Energy Reduction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       2. FEATURED SPOTLIGHT CASE STUDY
       ========================================== -->
    <section class="gb-section">
        <div class="gb-container">
            
            <div class="gb-section-header">
                <span class="gb-label">Flagship Project Spotlight</span>
                <h2 class="gb-title-main">Featured Transformation Story</h2>
            </div>

            <div class="cs-spotlight-card">
                <div class="cs-spotlight-grid">
                    <div class="cs-spotlight-content">
                        <span class="cs-spotlight-badge">
                            <i class="fa-solid fa-star"></i> Featured Case Study
                        </span>
                        <h3 class="cs-spotlight-title">Hyatt Regency Dehradun Resort - Net Zero Thermal &amp; LEED Platinum</h3>
                        <p class="cs-spotlight-desc">
                            Sustainergic Tech designed an integrated sustainability infrastructure comprising 100 Hybrid Thermal Solar (HTS) PVT panels, high-efficiency geothermal heat pumps, and a 42-node LoRaWAN IoT water telemetry network. The resort achieved 38% energy reduction and earned LEED Platinum certification.
                        </p>

                        <div class="cs-metrics-row">
                            <div class="cs-metric-box">
                                <h4>38%</h4>
                                <p>Energy Saved / Yr</p>
                            </div>
                            <div class="cs-metric-box">
                                <h4>1,200 T</h4>
                                <p>CO₂ Avoided / Yr</p>
                            </div>
                            <div class="cs-metric-box">
                                <h4>3.2 Yrs</h4>
                                <p>Financial Payback</p>
                            </div>
                        </div>
                    </div>

                    <div class="cs-spotlight-img-wrapper">
                        <img src="assets/images/hero.png" alt="Hyatt Regency Dehradun Sustainable Resort Engineering">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ==========================================
       3. CASE STUDIES FILTER & GRID
       ========================================== -->
    <section class="gb-section gb-section--light" id="case-studies-grid">
        <div class="gb-container">
            
            <div class="gb-section-header text-center">
                <span class="gb-label">Project Portfolio</span>
                <h2 class="gb-title-main">Browse Success Stories by Category</h2>
                
                <!-- Category Filter Buttons -->
                <div class="cs-filter-bar">
                    <button class="cs-filter-btn active" data-filter="all">All Case Studies</button>
                    <button class="cs-filter-btn" data-filter="hvac">HVAC &amp; Chillers</button>
                    <button class="cs-filter-btn" data-filter="green-building">Green Building</button>
                    <button class="cs-filter-btn" data-filter="iot-water">IoT Water</button>
                    <button class="cs-filter-btn" data-filter="esg">ESG &amp; Carbon</button>
                </div>
            </div>

            <!-- Case Studies Grid -->
            <div class="cs-grid" style="margin-top: 40px;">
                
                <!-- Case Study 1 -->
                <div class="cs-card" data-category="hvac">
                    <div class="cs-card-img-box">
                        <img src="assets/images/lca-stages.png" alt="Fortis Hospital Precision Medical Cooling">
                        <span class="cs-card-category-tag">HVAC &amp; Medical Cooling</span>
                    </div>
                    <div class="cs-card-body">
                        <span class="cs-client-location">
                            <i class="fa-solid fa-location-dot"></i> Fortis Hospital, Mohali
                        </span>
                        <h3 class="cs-card-title">N+1 Redundant MRI Scanner Chiller &amp; ISO Class 5 Surgical OT Ventilation</h3>
                        <p class="cs-card-desc">
                            Engineered dual-circuit precision liquid chillers for 3.0T MRI helium compressors, eliminating diagnostic downtime with ±0.1°C stability and sterile laminar OT airflow.
                        </p>
                        <div class="cs-card-highlights">
                            <span class="cs-pill">±0.1°C Stability</span>
                            <span class="cs-pill">Zero Downtime</span>
                            <span class="cs-pill">NABH Compliant</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="cs-card" data-category="iot-water">
                    <div class="cs-card-img-box">
                        <img src="assets/images/emissions-calculation.png" alt="Havells India ZLD Telemetry">
                        <span class="cs-card-category-tag">IoT Water &amp; Industrial</span>
                    </div>
                    <div class="cs-card-body">
                        <span class="cs-client-location">
                            <i class="fa-solid fa-location-dot"></i> Havells India, Rajasthan
                        </span>
                        <h3 class="cs-card-title">Automated ZLD Effluent Telemetry &amp; Baghouse Dust Scrubbing</h3>
                        <p class="cs-card-desc">
                            Deployed real-time IoT water quality sensors across STP/ETP plants linked directly to Pollution Control Board servers, alongside industrial baghouse dust collectors.
                        </p>
                        <div class="cs-card-highlights">
                            <span class="cs-pill">100% ZLD Recycled</span>
                            <span class="cs-pill">SPCB Telemetry</span>
                            <span class="cs-pill">ATEX Dust Scrubbers</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 3 -->
                <div class="cs-card" data-category="esg">
                    <div class="cs-card-img-box">
                        <img src="assets/images/carbon-intro.png" alt="Vaibhav Global SEBI BRSR ESG">
                        <span class="cs-card-category-tag">ESG &amp; Carbon</span>
                    </div>
                    <div class="cs-card-body">
                        <span class="cs-client-location">
                            <i class="fa-solid fa-location-dot"></i> Vaibhav Global HQ, Jaipur
                        </span>
                        <h3 class="cs-card-title">Statutory SEBI BRSR Disclosure &amp; Scope 1-3 Decarbonization</h3>
                        <p class="cs-card-desc">
                            Formulated comprehensive SEBI BRSR annual filings, GHG Protocol Scope 1, 2, and 3 accounting, and set Science Based Targets (SBTi) net-zero goals.
                        </p>
                        <div class="cs-card-highlights">
                            <span class="cs-pill">SEBI Compliant</span>
                            <span class="cs-pill">Scope 1-3 Verified</span>
                            <span class="cs-pill">SBTi Net-Zero</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 4 -->
                <div class="cs-card" data-category="green-building">
                    <div class="cs-card-img-box">
                        <img src="assets/images/sustainable-architecture.png" alt="SBI Head Office Green Building">
                        <span class="cs-card-category-tag">Green Building</span>
                    </div>
                    <div class="cs-card-body">
                        <span class="cs-client-location">
                            <i class="fa-solid fa-location-dot"></i> SBI Head Office, Chandigarh
                        </span>
                        <h3 class="cs-card-title">IGBC Platinum Certification &amp; Underfloor Radiant Heating</h3>
                        <p class="cs-card-desc">
                            Retro-commissioned 12-story commercial tower HVAC, retrofitting underfloor hydronic heating loops and EC plug fan AHUs for 32% building energy reduction.
                        </p>
                        <div class="cs-card-highlights">
                            <span class="cs-pill">IGBC Platinum</span>
                            <span class="cs-pill">32% Energy Saved</span>
                            <span class="cs-pill">Radiant Comfort</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 5 -->
                <div class="cs-card" data-category="iot-water">
                    <div class="cs-card-img-box">
                        <img src="assets/images/water-audit.png" alt="Chitkara University Smart Water">
                        <span class="cs-card-category-tag">IoT Water</span>
                    </div>
                    <div class="cs-card-body">
                        <span class="cs-client-location">
                            <i class="fa-solid fa-location-dot"></i> Chitkara University, Zirakpur
                        </span>
                        <h3 class="cs-card-title">Campus-Wide LoRaWAN IoT Smart Water Grid &amp; Auto Leak Detection</h3>
                        <p class="cs-card-desc">
                            Installed 60+ ultrasonic smart water meters and automated motorized shutoff valves across 15 hostel blocks, saving 120,000 liters of water daily.
                        </p>
                        <div class="cs-card-highlights">
                            <span class="cs-pill">120k L/Day Saved</span>
                            <span class="cs-pill">LoRaWAN Telemetry</span>
                            <span class="cs-pill">Auto Valve Shutoff</span>
                        </div>
                    </div>
                </div>

                <!-- Case Study 6 -->
                <div class="cs-card" data-category="hvac">
                    <div class="cs-card-img-box">
                        <img src="assets/images/fundamental-commissioning.png" alt="Honda Motors Gujarat Factory HVAC">
                        <span class="cs-card-category-tag">HVAC &amp; Industrial</span>
                    </div>
                    <div class="cs-card-body">
                        <span class="cs-client-location">
                            <i class="fa-solid fa-location-dot"></i> Honda Motors, Gujarat
                        </span>
                        <h3 class="cs-card-title">55°C High-Ambient Factory Ventilation &amp; Heavy Process Cooling</h3>
                        <p class="cs-card-desc">
                            Engineered 50,000 sq.m assembly bay fresh air supply units and 450 TR process water chillers operating seamlessly in 50°C+ summer heat.
                        </p>
                        <div class="cs-card-highlights">
                            <span class="cs-pill">55°C Ambient Duty</span>
                            <span class="cs-pill">450 TR Process Chillers</span>
                            <span class="cs-pill">50,000 Sq.m Covered</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ==========================================
       4. AGGREGATED IMPACT METRICS BAR
       ========================================== -->
    <section class="gb-section" style="background: #0f172a; color: #ffffff;">
        <div class="gb-container">
            <div class="gb-section-header text-center">
                <span class="gb-label" style="background: rgba(16,185,129,0.15); color: #34d399; border-color: rgba(52,211,153,0.3);">Quantifiable Impact</span>
                <h2 class="gb-title-main" style="color: #ffffff;">Our Proven Engineering Track Record</h2>
            </div>

            <div class="gb-trust-highlights" style="margin-top: 40px; justify-content: center; gap: 40px;">
                <div class="gb-th-item" style="background: rgba(255,255,255,0.05); border: 1px solid #334155; padding: 24px 36px; border-radius: 16px;">
                    <span class="gb-th-num" style="color: #34d399; font-size: 42px;">150+</span>
                    <span class="gb-th-lbl" style="color: #cbd5e1;">Green Certified Projects</span>
                </div>
                <div class="gb-th-item" style="background: rgba(255,255,255,0.05); border: 1px solid #334155; padding: 24px 36px; border-radius: 16px;">
                    <span class="gb-th-num" style="color: #34d399; font-size: 42px;">45 GWh</span>
                    <span class="gb-th-lbl" style="color: #cbd5e1;">Annual Energy Saved</span>
                </div>
                <div class="gb-th-item" style="background: rgba(255,255,255,0.05); border: 1px solid #334155; padding: 24px 36px; border-radius: 16px;">
                    <span class="gb-th-num" style="color: #34d399; font-size: 42px;">120 ML</span>
                    <span class="gb-th-lbl" style="color: #cbd5e1;">Water Saved via IoT</span>
                </div>
                <div class="gb-th-item" style="background: rgba(255,255,255,0.05); border: 1px solid #334155; padding: 24px 36px; border-radius: 16px;">
                    <span class="gb-th-num" style="color: #34d399; font-size: 42px;">100%</span>
                    <span class="gb-th-lbl" style="color: #cbd5e1;">Audit Approval Success</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       5. CALL-TO-ACTION SECTION
       ========================================== -->
    <section class="gb-cta-banner">
        <div class="gb-cta-overlay"></div>
        <div class="gb-cta-content">
            <h2>Have a Complex Facility Challenge? Let's Build Your Success Story.</h2>
            <p>
                Partner with Sustainergic Tech to engineer high-performance HVAC, smart IoT water, and green certified infrastructure.
            </p>
            <div class="gb-cta-buttons">
                <a href="contact-us.php" class="gb-btn gb-btn--gold">
                    Request Case Study Portfolio <i class="fa-solid fa-download"></i>
                </a>
                <a href="contact-us.php" class="gb-btn gb-btn--white-outline">
                    Schedule Engineering Consultation <i class="fa-solid fa-calendar-days"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Global Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Interactive Category Filter JS -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterBtns = document.querySelectorAll('.cs-filter-btn');
        const cards = document.querySelectorAll('.cs-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const filterValue = this.getAttribute('data-filter');

                cards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
    </script>

</body>

</html>
