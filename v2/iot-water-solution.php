<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>IoT Water Automation &amp; Smart Water Management | Sustainergic Tech</title>
    <meta name="description" content="Aquasense delivers IoT water automation, smart ultrasonic flow metering, automated leak detection, AquaTank, and AquaCharge telemetry across India.">
    <meta name="keywords" content="IoT water solution, smart water automation, AquaTank, AquaCharge, ultrasonic flow meter, borewell monitoring, water quality analyzer, real-time leak detection">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .gb-services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        @media (max-width: 992px) {
            .gb-services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 640px) {
            .gb-services-grid {
                grid-template-columns: 1fr;
            }
        }
        .gb-service-card {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            height: 100%;
        }
        .gb-service-card h3 {
            min-height: 52px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
        }
        .gb-service-card p {
            flex-grow: 0 !important;
            margin-bottom: 16px !important;
            min-height: 48px;
        }
        .gb-feature-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .gb-feature-list li {
            position: relative;
            padding-left: 24px;
            margin-bottom: 10px;
            font-size: 0.92rem;
            color: #4a5568;
            line-height: 1.4;
        }
        .gb-feature-list li:last-child {
            margin-bottom: 0;
        }
        .gb-feature-list li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: #0d9488;
            font-size: 0.85rem;
        }
        .gb-param-badge {
            display: inline-block;
            background: #e6fffa;
            color: #0d9488;
            border: 1px solid #b2f5ea;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.88rem;
            font-weight: 600;
            margin: 5px;
            transition: all 0.2s ease;
        }
        .gb-param-badge:hover {
            background: #0d9488;
            color: #ffffff;
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
                        <li class="text-black" aria-current="page">IoT Water Solution</li>
                    </ul>
                    
                    <h1 class="gb-hero-title">
                      Iot Water Automation
                    </h1>
                    
                    <p class="gb-hero-subtitle">
                        Aquasense delivers IoT-enabled water solutions that connect sensors, meters, controllers, pumps, valves, and water infrastructure to provide real-time monitoring, intelligent automation, and remote control across the complete water lifecycle.
                    </p>
                    
                    <div class="gb-hero-actions">
                        <a href="contact-us.php" class="gb-btn gb-btn--primary">
                            Request IoT Water Audit <i class="fa-solid fa-droplet"></i>
                        </a>
                        <a href="#system-types" class="gb-btn gb-btn--outline">
                            Explore IoT Modules <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Column -->
                <div class="gb-hero-visual">
                    <div class="gb-hero-img-wrapper">
                        <img src="assets/images/iot-hero.png" alt="Aquasense IoT Water Management System Architecture">
                        
                        <!-- Floating Badge 1 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--one">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-faucet-drip"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>Aquasense Ecosystem</h5>
                                <p>Source-to-Sink Telemetry</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--two">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>Cloud Dashboard</h5>
                                <p>Real-Time Alerts &amp; Control</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       2. OVERVIEW SECTION
       ========================================== -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-grid-2">
                <!-- Left Column (Visual) -->
                <div class="gb-intro-visual-wrapper">
                    <img src="assets/images/iot-intro.png" class="gb-intro-img" alt="Smart IoT Water Management System Architecture">
                    <div class="gb-intro-badge">
                        <strong>Aquasense IoT</strong>
                        <span>Connected Water Lifecycle</span>
                    </div>
                </div>

                <!-- Right Column (Content) -->
                <div class="gb-intro-content">
                    <span class="gb-label">Connected Infrastructure</span>
                    <h2 class="gb-title-main">One Connected IoT Ecosystem Across the Water Lifecycle</h2>
                    <p class="gb-text-lead">
                        Aquasense connects water assets from source to sink. By uniting field sensors, smart ultrasonic meters, automated valves, and cloud analytics, we empower commercial facilities, residential complexes, and industrial plants with continuous visibility, reduced manual intervention, and automated operations.
                    </p>
                    
                    <div class="gb-intro-capabilities">
                        <!-- Capability 1 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-gauge-high"></i></div>
                            <div class="gb-cap-text">
                                <h4>Real-Time Water Visibility</h4>
                                <p>Continuous telemetry tracking water flow, storage capacities, consumption patterns, and system pressure.</p>
                            </div>
                        </div>
                        
                        <!-- Capability 2 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-gears"></i></div>
                            <div class="gb-cap-text">
                                <h4>Intelligent Operations &amp; Automation</h4>
                                <p>Automated pump ON/OFF, motorized valve operation, dry-run protection, and overflow prevention logic.</p>
                            </div>
                        </div>

                        <!-- Capability 3 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-flask-vial"></i></div>
                            <div class="gb-cap-text">
                                <h4>Online Water Quality Intelligence</h4>
                                <p>IoT-connected online analyzers monitoring essential physical, chemical, and biological water parameters 24/7.</p>
                            </div>
                        </div>

                        <!-- Capability 4 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                            <div class="gb-cap-text">
                                <h4>Cloud Platform &amp; Multi-Site Control</h4>
                                <p>Centralized live dashboards, historical analytics, automated digital reporting, and instant alarm triggers.</p>
                            </div>
                        </div>
                    </div>

                    <div class="gb-trust-highlight" style="margin-top: 30px;">
                        <div class="gb-th-item">
                            <span class="gb-th-num">100%</span>
                            <span class="gb-th-lbl">Automated Water Operations</span>
                        </div>
                        <div class="gb-th-item">
                            <span class="gb-th-num">24/7</span>
                            <span class="gb-th-lbl">Remote Telemetry &amp; Alerts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       3. SYSTEM MODULES & SOLUTIONS
       ========================================== -->
    <section class="gb-section gb-section--light" id="system-types">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Aquasense Solutions</span>
                <h2 class="gb-title-main">Comprehensive Smart Water Modules</h2>
            </div>

            <div class="gb-services-grid">
                <!-- Module 1: Smart Water Monitoring -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-desktop"></i>
                    </div>
                    <h3>Smart Water Monitoring</h3>
                    <p>Monitor water infrastructure in real time with connected IoT devices and sensors:</p>
                    <ul class="gb-feature-list">
                        <li>Tank-level monitoring</li>
                        <li>Water-flow measurement</li>
                        <li>Water-consumption monitoring</li>
                        <li>Borewell and groundwater monitoring</li>
                        <li>Pump and valve status tracking</li>
                        <li>Online water-quality monitoring</li>
                        <li>Real-time system visibility</li>
                    </ul>
                </div>

                <!-- Module 2: Automated Water Management (AquaTank) -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <h3>Automated Water Management (AquaTank)</h3>
                    <p><strong>AquaTank</strong> provides IoT-enabled monitoring and automated control of tanks, pumps, and valves:</p>
                    <ul class="gb-feature-list">
                        <li>Automated pump ON/OFF control</li>
                        <li>Automated valve operation</li>
                        <li>Overflow prevention &amp; dry-run protection</li>
                        <li>Water-flow control &amp; usage limits</li>
                        <li>Automated water distribution</li>
                    </ul>
                </div>

                <!-- Module 3: Smart Water Metering (AquaCharge) -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                    <h3>Smart Water Metering (AquaCharge)</h3>
                    <p><strong>AquaCharge</strong> enables real-time water measurement, tracking, and intelligent flow control:</p>
                    <ul class="gb-feature-list">
                        <li>Individual connection metering</li>
                        <li>Real-time consumption visibility</li>
                        <li>Automated billing &amp; digital records</li>
                        <li>Leak detection &amp; over-usage monitoring</li>
                        <li>Remote valve control</li>
                        <li>Prepaid and postpaid support</li>
                    </ul>
                </div>

                <!-- Module 4: Industrial IoT Water Intelligence -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-industry"></i>
                    </div>
                    <h3>Industrial IoT Water Intelligence</h3>
                    <p>Connects industrial water assets across the complete water lifecycle — from source to sink:</p>
                    <ul class="gb-feature-list">
                        <li>Borewell automation &amp; groundwater monitoring</li>
                        <li>Bulk water metering</li>
                        <li>Tank and pump automation</li>
                        <li>Real-time digital water audits</li>
                        <li>Treatment plant (STP/ETP) automation</li>
                        <li>Online water-quality monitoring</li>
                    </ul>
                </div>

                <!-- Module 5: Cloud-Based Monitoring Platform -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                    </div>
                    <h3>Cloud-Based Monitoring Platform</h3>
                    <p>Field devices transmit data to a centralized cloud platform for continuous monitoring and control:</p>
                    <ul class="gb-feature-list">
                        <li>Live dashboards &amp; real-time alerts</li>
                        <li>Historical data &amp; usage analytics</li>
                        <li>Remote control &amp; multi-site monitoring</li>
                        <li>Digital reports &amp; operational logs</li>
                    </ul>
                </div>

                <!-- Module 6: IoT Connectivity Protocols -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-network-wired"></i>
                    </div>
                    <h3>Multi-Protocol IoT Connectivity</h3>
                    <p>Aquasense solutions support flexible wireless architectures to match any field environment:</p>
                    <ul class="gb-feature-list">
                        <li><strong>4G/LTE:</strong> Remote and dispersed installations</li>
                        <li><strong>LoRaWAN:</strong> Dense deployments (campuses &amp; societies)</li>
                        <li><strong>Wi-Fi:</strong> Local network environments</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       4. WATER QUALITY INTELLIGENCE PARAMETERS
       ========================================== -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Water Quality Intelligence</span>
                <h2 class="gb-title-main">Online Water Parameters Monitored</h2>
                <p style="max-width: 700px; margin: 10px auto 0 auto; color: #718096; text-align: center;">
                    IoT-connected online analysers continuously monitor key physical, chemical, and biological water quality parameters:
                </p>
            </div>

            <div style="text-align: center; max-width: 900px; margin: 30px auto 0 auto;">
                <span class="gb-param-badge"><i class="fa-solid fa-vial"></i> pH Level</span>
                <span class="gb-param-badge"><i class="fa-solid fa-filter"></i> TDS (Total Dissolved Solids)</span>
                <span class="gb-param-badge"><i class="fa-solid fa-bolt"></i> EC (Electrical Conductivity)</span>
                <span class="gb-param-badge"><i class="fa-solid fa-bacteria"></i> BOD (Biochemical Oxygen Demand)</span>
                <span class="gb-param-badge"><i class="fa-solid fa-flask"></i> COD (Chemical Oxygen Demand)</span>
                <span class="gb-param-badge"><i class="fa-solid fa-eye-dropper"></i> Turbidity</span>
                <span class="gb-param-badge"><i class="fa-solid fa-layer-group"></i> TSS (Total Suspended Solids)</span>
                <span class="gb-param-badge"><i class="fa-solid fa-droplet"></i> Chlorine</span>
                <span class="gb-param-badge"><i class="fa-solid fa-leaf"></i> Nitrate</span>
                <span class="gb-param-badge"><i class="fa-solid fa-wind"></i> DO (Dissolved Oxygen)</span>
                <span class="gb-param-badge"><i class="fa-solid fa-plug-circle-bolt"></i> ORP (Oxidation-Reduction Potential)</span>
                <span class="gb-param-badge"><i class="fa-solid fa-temperature-three-quarters"></i> Temperature</span>
            </div>
        </div>
    </section>

    <!-- ==========================================
       5. KEY BENEFITS SECTION
       ========================================== -->
    <section class="gb-section gb-section--light">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Value &amp; Efficiency</span>
                <h2 class="gb-title-main">Key Benefits of Aquasense IoT Water Solutions</h2>
            </div>

            <div class="gb-why-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
                <!-- Benefit 1 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-eye"></i></div>
                    <h4>Real-Time Water Visibility</h4>
                    <p>Instant digital tracking of water levels, flow rates, and storage across all facility locations.</p>
                </div>

                <!-- Benefit 2 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-user-check"></i></div>
                    <h4>Reduced Manual Intervention</h4>
                    <p>Automated sensor-driven operations eliminate manual valve turns, pump switching, and logbook entries.</p>
                </div>

                <!-- Benefit 3 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-gears"></i></div>
                    <h4>Automated Water Operations</h4>
                    <p>Smart closed-loop control for tank filling, valve shutoff, overflow prevention, and dry-run protection.</p>
                </div>

                <!-- Benefit 4 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                    <h4>Remote Monitoring &amp; Control</h4>
                    <p>Control pumps, motorized valves, and distribution systems remotely via web and mobile interfaces.</p>
                </div>

                <!-- Benefit 5 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-chart-pie"></i></div>
                    <h4>Improved Water-Use Management</h4>
                    <p>Detailed consumption analytics empower facility teams to optimize water budgeting and reduce waste.</p>
                </div>

                <!-- Benefit 6 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <h4>Early Fault &amp; Leak Detection</h4>
                    <p>Instant notifications upon detecting abnormal flow surges, pressure drops, or dry-run conditions.</p>
                </div>

                <!-- Benefit 7 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-file-invoice"></i></div>
                    <h4>Digital Data &amp; Reporting</h4>
                    <p>Automated cloud logging, tenant billing statements, and regulatory compliance audit reports.</p>
                </div>

                <!-- Benefit 8 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-sitemap"></i></div>
                    <h4>Centralized Multi-Location Monitoring</h4>
                    <p>Manage dispersed infrastructure across campuses, townships, and industrial plants from a single pane of glass.</p>
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
                <h2 class="gb-title-main">Aquasense Implementation Roadmap</h2>
            </div>

            <div class="gb-process-timeline">
                <div class="gb-process-line"></div>

                <div class="gb-process-grid gb-process-grid--4">
                    <!-- Step 1 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">01</div>
                        <div class="gb-process-step-content">
                            <h4>Infrastructure Audit &amp; Sensor Mapping</h4>
                            <p>Mapping water sources, tanks, pumps, valves, and identifying communication network options (4G/LoRaWAN/Wi-Fi).</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">02</div>
                        <div class="gb-process-step-content">
                            <h4>Hardware &amp; Controller Installation</h4>
                            <p>Fitting AquaTank controllers, AquaCharge meters, motorized valves, and online quality analyzers.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">03</div>
                        <div class="gb-process-step-content">
                            <h4>Cloud Integration &amp; Automation Setup</h4>
                            <p>Configuring control logic, pump ON/OFF rules, billing rates, and connecting field gateways to the cloud platform.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">04</div>
                        <div class="gb-process-step-content">
                            <h4>Commissioning &amp; Real-Time Analytics</h4>
                            <p>Testing closed-loop automation, verifying alert notifications, and training staff on live dashboards.</p>
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
            <h2>One Connected IoT Ecosystem Across the Complete Water Lifecycle</h2>
            <p>
                Partner with Sustainergic Tech to deploy Aquasense for intelligent water monitoring, automated control, metering, and real-time quality intelligence.
            </p>
            <div class="gb-cta-buttons">
                <a href="contact-us.php" class="gb-btn gb-btn--gold">
                    Schedule Aquasense Demo <i class="fa-solid fa-calendar-days"></i>
                </a>
                <a href="contact-us.php" class="gb-btn gb-btn--white-outline">
                    Contact IoT Engineers <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       8. RELATED SERVICES (QUERIED FROM HEADER)
       ========================================== -->
    <?php 
    $related_title = "Complementary Sustainability Solutions";
    $related_label = "Integrated Services";
    include 'includes/related-services.php'; 
    ?>

    <!-- ==========================================
       PROJECTS SECTION (8 PROJECTS SLIDER)
       ========================================== -->
    <?php
    $service_projects_title = "Aquasense IoT Water Solution Projects";
    $service_projects_subtitle = "Real-time water telemetry, smart ultrasonic metering, automated leak detection, and ZLD compliance projects.";
    $service_projects = [
        [
            'title' => 'Hyatt Regency Dehradun Resort',
            'location' => 'Dehradun',
            'tag' => 'Hotel Smart Water Grid',
            'badge_type' => 'badge-leed',
            'description' => 'Deployed 42 LoRaWAN ultrasonic water flow meters across guest wings, kitchens, and laundry circuits, detecting underground pipe leaks and reducing monthly water draw by 28%.',
            'image' => 'assets/images/water-audit.png'
        ],
        [
            'title' => 'Havells India Manufacturing Plant',
            'location' => 'Alwar, Rajasthan',
            'tag' => 'Industrial ZLD Telemetry',
            'badge_type' => 'badge-igbc',
            'description' => 'Real-time STP/ETP effluent digital twin telemetry system with continuous pH, TDS, and flow rate sensors linked directly to Pollution Control Board servers.',
            'image' => 'assets/images/emissions-calculation.png'
        ],
        [
            'title' => 'Chitkara University Smart Campus',
            'location' => 'Zirakpur',
            'tag' => 'Campus Water Dashboard',
            'badge_type' => 'badge-igbc',
            'description' => 'Campus-wide IoT water monitoring network covering 15 academic blocks and hostels, integrating radar tank level sensors with automated pump controllers.',
            'image' => 'assets/images/audits-hero.png'
        ],
        [
            'title' => 'SBI Local Head Office Tower',
            'location' => 'Chandigarh',
            'tag' => 'Auto Leak Shutoff System',
            'badge_type' => 'badge-igbc',
            'description' => 'Motorized smart shutoff valves connected to acoustic leak sensors across 10 office floors, preventing weekend burst pipe flooding.',
            'image' => 'assets/images/hero.png'
        ],
        [
            'title' => 'Noida International University Campus',
            'location' => 'Noida',
            'tag' => 'Rainwater & Borewell Telemetry',
            'badge_type' => 'badge-ea',
            'description' => 'CGWA compliant borewell groundwater extraction digital telemetry with real-time piezometer level logging and automated flow reports.',
            'image' => 'assets/images/energy-audit.png'
        ],
        [
            'title' => 'Platinum Mall Commercial Complex',
            'location' => 'Lucknow',
            'tag' => 'Retail Sub-Metering',
            'badge_type' => 'badge-igbc',
            'description' => 'Sub-metered IoT water billing system for 120 retail tenants and food courts, resolving tenant billing disputes with automated cloud reports.',
            'image' => 'assets/images/benefits-building.png'
        ],
        [
            'title' => 'Advance Plastic Industries (Ecovia)',
            'location' => 'Ludhiana',
            'tag' => 'Process Water Quality Sensor',
            'badge_type' => 'badge-ea',
            'description' => 'Continuous pH, conductivity, and dissolved solids sensor telemetry for cooling tower water treatment and blowdown optimization.',
            'image' => 'assets/images/sustainable-architecture.png'
        ],
        [
            'title' => 'Avanta Greens Eco Township',
            'location' => 'Punjab',
            'tag' => 'Township Smart Water Metering',
            'badge_type' => 'badge-igbc',
            'description' => 'Smart AMR ultrasonic water meters installed in 250 eco-villas with mobile app water consumption tracking for residents.',
            'image' => 'assets/images/sbi-lho.png'
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
