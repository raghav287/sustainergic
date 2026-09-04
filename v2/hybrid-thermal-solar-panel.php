<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>HTS Panel — Hybrid Thermal Solar Panel for VRF &amp; Chillers | Sustainergic Tech</title>
    <meta name="description" content="HTS Panel technology connects parabolic sun-tracking solar collectors to VRF &amp; Chiller refrigeration cycles, cutting AC electricity bills by up to 40% with COP 6+.">
    <meta name="keywords" content="HTS panel, hybrid thermal solar panel, VRF solar retrofit, chiller solar optimization, solar thermal HVAC, sun tracking solar concentrator, COP 6 HVAC">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/green-building.css">
    <style>
        .hts-spec-card {
            background: #ffffff;
            border: 1px solid var(--gb-border-light);
            border-radius: 16px;
            padding: 24px;
            box-shadow: var(--gb-shadow-sm);
            height: 100%;
        }
        .hts-spec-card h4 {
            color: var(--gb-text-dark);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .hts-spec-card h4 i {
            color: #0d9488;
        }
        .hts-spec-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .hts-spec-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px dashed #e2e8f0;
            font-size: 0.92rem;
        }
        .hts-spec-list li:last-child {
            border-bottom: none;
        }
        .hts-spec-label {
            color: #64748b;
            font-weight: 500;
        }
        .hts-spec-value {
            color: #0f172a;
            font-weight: 700;
        }
        .hts-award-banner {
            background: linear-gradient(135deg, #0f766e 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 20px;
            padding: 32px;
            display: flex;
            align-items: center;
            gap: 24px;
            margin-top: 40px;
            box-shadow: 0 10px 25px rgba(13, 148, 136, 0.25);
        }
        .hts-award-icon {
            width: 72px;
            height: 72px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 32px;
            color: #fef08a;
            flex-shrink: 0;
        }
        .hts-award-text h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 6px;
            color: #ffffff;
        }
        .hts-award-text p {
            margin: 0;
            font-size: 0.95rem;
            color: #ccfbf1;
        }
        .brand-badge-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            justify-content: center;
            margin-top: 24px;
        }
        .brand-badge {
            background: #ffffff;
            border: 1px solid var(--gb-border-light);
            border-radius: 12px;
            padding: 10px 20px;
            font-size: 0.95rem;
            font-weight: 700;
            color: #334155;
            box-shadow: 0 2px 5px rgba(0,0,0,0.04);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .brand-badge i {
            color: #0d9488;
            font-size: 0.8rem;
        }
        .app-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-top: 24px;
        }
        .app-item {
            background: #ffffff;
            border: 1px solid var(--gb-border-light);
            border-radius: 14px;
            padding: 16px 20px;
            display: flex;
            align-items: center;
            gap: 14px;
            font-weight: 600;
            color: #1e293b;
            box-shadow: var(--gb-shadow-sm);
        }
        .app-item i {
            font-size: 1.2rem;
            color: #0d9488;
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
                        <li><a href="#">Services</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li class="text-black" aria-current="page">HTS Panel Technology</li>
                    </ul>
                    
                    <h1 class="gb-hero-title">
                        HTS Panel — <span>Hybrid Thermal Solar Panel</span>
                    </h1>
                    
                    <p class="gb-hero-subtitle">
                        Make your VRF &amp; Chiller the most efficient HVAC system with HTS Panel technology. Harness smart sun-tracking solar thermal energy to slash AC electricity bills by up to 40% with a COP of 6+.
                    </p>
                    
                    <div class="gb-hero-actions">
                        <a href="contact-us.php" class="gb-btn gb-btn--primary">
                            Request HTS Audit <i class="fa-solid fa-sun"></i>
                        </a>
                        <a href="#how-it-works" class="gb-btn gb-btn--outline">
                            How It Works <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Column -->
                <div class="gb-hero-visual">
                    <div class="gb-hero-img-wrapper">
                        <img src="assets/images/hts-hero.png" alt="HTS Hybrid Thermal Solar Renewable Energy Based Rooftop Panel">
                        
                        <!-- Floating Badge 1 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--one">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-bolt"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>Up to 40% AC Energy Saved</h5>
                                <p>COP 6+ Efficiency</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--two">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-solar-panel"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>1200% Space Efficient</h5>
                                <p>Compared to PV Panels</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       2. OVERVIEW & HOW IT WORKS SECTION
       ========================================== -->
    <section class="gb-section" id="how-it-works">
        <div class="gb-container">
            <div class="gb-grid-2">
                <!-- Left Column (Visual) -->
                <div class="gb-intro-visual-wrapper">
                    <img src="assets/images/hts-about.png" class="gb-intro-img" alt="HTS Solar Parabolic Refrigeration Cycle Diagram">
                    <div class="gb-intro-badge">
                        <strong>HTS Technology</strong>
                        <span>Refrigeration Solar Boost</span>
                    </div>
                </div>

                <!-- Right Column (Content) -->
                <div class="gb-intro-content">
                    <span class="gb-label">How HTS Technology Works</span>
                    <h2 class="gb-title-main">Sun-Tracking Thermal Power for Refrigeration Cycles</h2>
                    <p class="gb-text-lead">
                        The HTS Panel connects directly to the VRF outdoor unit or Chiller plant refrigeration circuit via copper piping between the compressor and condenser.
                    </p>
                    <p style="color: #475569; line-height: 1.65; margin-bottom: 24px;">
                        Smart sun-tracking parabolic heat concentrators capture direct solar irradiance to add heat and thermal pressure to the refrigerant gas. By raising the temperature and pressure naturally before the condenser, compressor work is dramatically reduced—enabling the compressor to operate on partial load while saving up to 40% AC electricity.
                    </p>
                    
                    <div class="gb-intro-capabilities">
                        <!-- Capability 1 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-temperature-arrow-up"></i></div>
                            <div class="gb-cap-text">
                                <h4>Direct Refrigerant Solar Pre-Heating</h4>
                                <p>Adds thermal energy to gas between compressor and condenser.</p>
                            </div>
                        </div>
                        
                        <!-- Capability 2 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-compress"></i></div>
                            <div class="gb-cap-text">
                                <h4>Compressor Partial Load Operation</h4>
                                <p>Reduces compressor speed and electrical work during peak hours.</p>
                            </div>
                        </div>

                        <!-- Capability 3 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-sun"></i></div>
                            <div class="gb-cap-text">
                                <h4>Dual Phototransistor Sun Tracking</h4>
                                <p>Automated 12V DC stepper motor tracks solar movement for maximum heat focus.</p>
                            </div>
                        </div>

                        <!-- Capability 4 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-shield-virus"></i></div>
                            <div class="gb-cap-text">
                                <h4>Arrests Summer Capacity Deration</h4>
                                <p>Prevents AC cooling capacity loss during extreme peak summer ambient temperatures.</p>
                            </div>
                        </div>
                    </div>

                    <div class="gb-trust-highlight" style="margin-top: 30px;">
                        <div class="gb-th-item">
                            <span class="gb-th-num">6+</span>
                            <span class="gb-th-lbl">Best-in-Industry COP</span>
                        </div>
                        <div class="gb-th-item">
                            <span class="gb-th-num">~3 Yrs</span>
                            <span class="gb-th-lbl">Rapid Financial ROI</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Award Banner -->
            <div class="hts-award-banner">
                <div class="hts-award-icon">
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <div class="hts-award-text">
                    <h3>Most Innovative Energy Saving Product ’24 — National Award Winner</h3>
                    <p>Presented at the 23rd National Energy Efficiency Summit for extraordinary thermal energy innovation in VRF and Chiller HVAC optimization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       3. KEY BENEFITS
       ========================================== -->
    <section class="gb-section gb-section--light">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Key Advantages</span>
                <h2 class="gb-title-main">Why Upgrade Your HVAC with HTS Panels?</h2>
            </div>

            <div class="gb-why-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                <!-- Benefit 1 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-bolt-lightning"></i></div>
                    <h4>Up to 40% Reduction in AC Bills</h4>
                    <p>Dramatically lowers monthly kilowatt-hour consumption for VRF units and central chillers.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h4>Best-in-Industry COP of 6+</h4>
                    <p>Elevates overall system Coefficient of Performance well beyond standard AC design limits.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-heart-pulse"></i></div>
                    <h4>Improved AC Operating Life</h4>
                    <p>Compressor runs at reduced partial load speeds, extending mechanical lifespan and lowering wear.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-maximize"></i></div>
                    <h4>1200% More Space Efficient</h4>
                    <p>Requires a fraction of the rooftop footprint compared to standard photovoltaic solar panels.</p>
                </div>

                <!-- Benefit 5 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                    <h4>Saves Capital Costs &amp; Prevents Deration</h4>
                    <p>Reduces required HVAC sizing and prevents cooling capacity loss during 45°C+ summer heatwaves.</p>
                </div>

                <!-- Benefit 6 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h4>Government Incentives &amp; Depreciation</h4>
                    <p>Eligible for 12% GST rate and accelerated 40% depreciation tax benefits for renewable energy.</p>
                </div>

                <!-- Benefit 7 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    <h4>~3 Years Payback Period</h4>
                    <p>Delivers full capital return within ~3 years through guaranteed monthly energy cost savings.</p>
                </div>

                <!-- Benefit 8 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h4>15-Year Life &amp; 5-Year Warranty</h4>
                    <p>Heavy-duty aluminum enclosure, hardened glass, and EPDM insulation engineered for 15-year operational life.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       4. PANEL SPECIFICATIONS & SUN TRACKING
       ========================================== -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Engineering Data</span>
                <h2 class="gb-title-main">HTS Panel Specifications &amp; Performance</h2>
            </div>

            <div class="gb-grid-3">
                <!-- Card 1: Physical Specifications -->
                <div class="hts-spec-card">
                    <h4><i class="fa-solid fa-ruler-combined"></i> Panel Dimensions &amp; Build</h4>
                    <ul class="hts-spec-list">
                        <li><span class="hts-spec-label">Capacity</span><span class="hts-spec-value">7.5 Tons / 10 HP / 90,000 BTU</span></li>
                        <li><span class="hts-spec-label">Panel Size</span><span class="hts-spec-value">8 ft × 4 ft</span></li>
                        <li><span class="hts-spec-label">Dimensions</span><span class="hts-spec-value">100" × 52" × 7"</span></li>
                        <li><span class="hts-spec-label">Total Weight</span><span class="hts-spec-value">86 kg</span></li>
                        <li><span class="hts-spec-label">Reflector Area</span><span class="hts-spec-value">8 ft × 4 ft</span></li>
                        <li><span class="hts-spec-label">Outer Enclosure</span><span class="hts-spec-value">Aluminium Enclosure</span></li>
                    </ul>
                </div>

                <!-- Card 2: Thermal Components -->
                <div class="hts-spec-card">
                    <h4><i class="fa-solid fa-temperature-full"></i> Absorber &amp; Insulation</h4>
                    <ul class="hts-spec-list">
                        <li><span class="hts-spec-label">Front Cover</span><span class="hts-spec-value">4 mm Hardened Clear Glass</span></li>
                        <li><span class="hts-spec-label">Heat Absorber</span><span class="hts-spec-value">Copper Tube Absorbers</span></li>
                        <li><span class="hts-spec-label">Thermal Insulation</span><span class="hts-spec-value">9 mm EPDM Insulation</span></li>
                        <li><span class="hts-spec-label">Mounting Stand</span><span class="hts-spec-value">Adjustable Mounting Stand</span></li>
                        <li><span class="hts-spec-label">Panel Warranty</span><span class="hts-spec-value">5 Years Warranty</span></li>
                        <li><span class="hts-spec-label">Design Life</span><span class="hts-spec-value">15 Years Lifetime</span></li>
                    </ul>
                </div>

                <!-- Card 3: Sun Tracking System -->
                <div class="hts-spec-card">
                    <h4><i class="fa-solid fa-compass"></i> Automated Sun Tracking</h4>
                    <ul class="hts-spec-list">
                        <li><span class="hts-spec-label">Optical Sensors</span><span class="hts-spec-value">2 Shaded Phototransistors</span></li>
                        <li><span class="hts-spec-label">Drive Motor</span><span class="hts-spec-value">Brushless Stepper Motor</span></li>
                        <li><span class="hts-spec-label">Operating Voltage</span><span class="hts-spec-value">12 VDC</span></li>
                        <li><span class="hts-spec-label">Power Consumption</span><span class="hts-spec-value">Ultra-Low 1.5 W</span></li>
                        <li><span class="hts-spec-label">Site Reports</span><span class="hts-spec-value">30+ Field Testing Reports</span></li>
                        <li><span class="hts-spec-label">Average Savings</span><span class="hts-spec-value">35% Verified Energy Saved</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       5. TESTED HVAC BRANDS & APPLICATIONS
       ========================================== -->
    <section class="gb-section gb-section--light">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Verified Performance</span>
                <h2 class="gb-title-main">Tested Across 11 Leading HVAC Brands</h2>
                <p style="max-width: 700px; margin: 10px auto 0 auto; color: #64748b; text-align: center;">
                    HTS Panel technology has been field tested across 30+ site reports and multiple Indian cities on all major commercial AC brands:
                </p>
            </div>

            <!-- Brand Badges -->
            <div class="brand-badge-grid">
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> LG</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Hitachi</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Samsung</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Daikin</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Toshiba</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Carrier</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Mitsubishi</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Blue Star</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Voltas</div>
                <div class="brand-badge"><i class="fa-solid fa-circle-check"></i> Reynold</div>
            </div>

            <!-- Target Applications -->
            <div style="margin-top: 50px;">
                <div class="gb-section-header" style="margin-bottom: 20px;">
                    <span class="gb-label">Ideal Deployments</span>
                    <h2 class="gb-title-main" style="font-size: 1.6rem;">Target Commercial &amp; Industrial Applications</h2>
                </div>

                <div class="app-grid">
                    <div class="app-item"><i class="fa-solid fa-fan"></i> VRF Systems</div>
                    <div class="app-item"><i class="fa-solid fa-snowflake"></i> Chiller Systems</div>
                    <div class="app-item"><i class="fa-solid fa-building"></i> Office Buildings</div>
                    <div class="app-item"><i class="fa-solid fa-industry"></i> Process Cooling</div>
                    <div class="app-item"><i class="fa-solid fa-server"></i> Data Centres</div>
                    <div class="app-item"><i class="fa-solid fa-hospital"></i> Hospitals</div>
                    <div class="app-item"><i class="fa-solid fa-utensils"></i> Canteens</div>
                    <div class="app-item"><i class="fa-solid fa-users"></i> Auditoriums</div>
                    <div class="app-item"><i class="fa-solid fa-gavel"></i> Courtrooms</div>
                    <div class="app-item"><i class="fa-solid fa-city"></i> Commercial Facilities</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       6. IMPLEMENTATION ROADMAP
       ========================================== -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Our Process</span>
                <h2 class="gb-title-main">4-Step HTS Retrofit Roadmap</h2>
            </div>

            <div class="gb-process-timeline">
                <div class="gb-process-line"></div>

                <div class="gb-process-grid gb-process-grid--4">
                    <!-- Step 1 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">01</div>
                        <div class="gb-process-step-content">
                            <h4>VRF &amp; Chiller Site Audit</h4>
                            <p>Auditing AC tonnage, compressor specs, outdoor unit placement, and daily solar shadow angles.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">02</div>
                        <div class="gb-process-step-content">
                            <h4>HTS Panel Layout &amp; Pipe Sizing</h4>
                            <p>Designing copper refrigeration line taps between compressor and condenser with sun-tracking alignment.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">03</div>
                        <div class="gb-process-step-content">
                            <h4>Retrofit Installation &amp; Piping</h4>
                            <p>Mounting HTS panels on adjustable stands, tapping refrigeration loops, and wiring 12V tracker sensors.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">04</div>
                        <div class="gb-process-step-content">
                            <h4>Testing &amp; Energy Verification</h4>
                            <p>Verifying refrigerant pressures, sun-tracking calibration, and measuring kW draw savings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       7. CALL-TO-ACTION BANNER
       ========================================== -->
    <section class="gb-cta-banner">
        <div class="gb-cta-overlay"></div>
        <div class="gb-cta-content">
            <h2>Make Your VRF &amp; Chiller the Most Efficient HVAC System with HTS Panels</h2>
            <p>
                Partner with Sustainergic Tech to evaluate, retrofit, and optimize your commercial cooling infrastructure with award-winning HTS solar thermal technology.
            </p>
            <div class="gb-cta-buttons">
                <a href="contact-us.php" class="gb-btn gb-btn--gold">
                    Schedule HTS Audit <i class="fa-solid fa-calendar-days"></i>
                </a>
                <a href="contact-us.php" class="gb-btn gb-btn--white-outline">
                    Contact HVAC Engineers <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       8. RELATED SERVICES (QUERIED FROM HEADER)
       ========================================== -->
    <?php 
    $related_title = "Complementary Clean Energy Systems";
    $related_label = "Integrated Services";
    include 'includes/related-services.php'; 
    ?>

    <!-- ==========================================
       PROJECTS SECTION (8 PROJECTS SLIDER)
       ========================================== -->
    <?php
    $service_projects_title = "Hybrid Thermal Solar (HTS) Projects";
    $service_projects_subtitle = "Solar VRF &amp; Chiller HTS energy-saving retrofits and thermal optimization projects by Sustainergic Tech.";
    $service_projects = [
        [
            'title' => 'Hyatt Regency Dehradun Resort',
            'location' => 'Dehradun',
            'tag' => 'VRF HTS Solar Retrofit',
            'badge_type' => 'badge-leed',
            'description' => 'Deployed HTS solar thermal panels connected to central VRF outdoor units, cutting summer peak AC electrical power consumption by 36%.',
            'image' => 'assets/images/hero.png'
        ],
        [
            'title' => 'IOCL Commercial Infrastructure',
            'location' => 'Jalandhar',
            'tag' => 'Chiller Plant HTS Boost',
            'badge_type' => 'badge-igbc',
            'description' => 'Connected parabolic HTS panels to process chillers, achieving COP 6.2 and reducing annual electricity costs by ₹14.5 Lakhs.',
            'image' => 'assets/images/sustainable-architecture.png'
        ],
        [
            'title' => 'Chitkara University Auditorium Complex',
            'location' => 'Zirakpur',
            'tag' => 'Auditorium AC Optimization',
            'badge_type' => 'badge-igbc',
            'description' => 'Sun-tracking HTS panels retrofitted onto 30 HP VRF systems, eliminating peak summer cooling capacity deration.',
            'image' => 'assets/images/benefits-building.png'
        ],
        [
            'title' => 'Hotel Taj Panchkula Commercial Wing',
            'location' => 'Panchkula',
            'tag' => 'Chiller Refrigerant Boost',
            'badge_type' => 'badge-igbc',
            'description' => 'Integrated HTS panel solar concentrators into central chiller refrigeration loops, achieving a 2.8 year financial ROI.',
            'image' => 'assets/images/green-building-hero.png'
        ],
        [
            'title' => 'Vaibhav Global Corporate HQ',
            'location' => 'Jaipur',
            'tag' => 'Office VRF Solar Upgrade',
            'badge_type' => 'badge-igbc',
            'description' => 'Rooftop HTS panel array installed across 10 HP Daikin VRF units, cutting building summer AC power demand by 38%.',
            'image' => 'assets/images/daylight-simulation.png'
        ],
        [
            'title' => 'Eastman Cast & Forge Facility',
            'location' => 'Ludhiana',
            'tag' => 'Industrial Chiller Solar Loop',
            'badge_type' => 'badge-ea',
            'description' => 'HTS thermal panel collectors pre-heating process cooling refrigerant gas for heavy forge hydraulic chillers.',
            'image' => 'assets/images/audits-hero.png'
        ],
        [
            'title' => 'Advance Plastic Industries (Ecovia)',
            'location' => 'Ludhiana',
            'tag' => 'Molding Chiller Energy Saver',
            'badge_type' => 'badge-ea',
            'description' => 'HTS solar panel system retrofitted onto Carrier process chillers, lowering energy draw across 24/7 extrusion lines.',
            'image' => 'assets/images/cfd-simulation.png'
        ],
        [
            'title' => 'Platinum Mall Commercial Complex',
            'location' => 'Lucknow',
            'tag' => 'Commercial Mall HTS Array',
            'badge_type' => 'badge-igbc',
            'description' => 'Sun-tracking HTS panels installed on central mall chillers, saving over 35% in peak summer electrical billing.',
            'image' => 'assets/images/emissions-calculation.png'
        ]
    ];
    include 'includes/service-projects-section.php';
    ?>

    <!-- Global Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
