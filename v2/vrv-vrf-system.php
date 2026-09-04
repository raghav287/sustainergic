<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>VRV / VRF System Design & Engineering | Sustainergic Tech</title>
    <meta name="description" content="Sustainergic Tech designs customized VRV/VRF air conditioning solutions offering flexible multi-zone climate control, precise temperature regulation, and reduced energy consumption.">
    <meta name="keywords" content="VRV system, VRF air conditioning, variable refrigerant volume, multi-zone HVAC, commercial VRF installation, inverter AC system">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/green-building.css">
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
                        <li><a href="#">HVAC</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li class="text-black" aria-current="page">VRV / VRF System</li>
                    </ul>
                    
                    <h1 class="gb-hero-title">
                        VRV / VRF <span>Air Conditioning Systems</span>
                    </h1>
                    
                    <p class="gb-hero-subtitle">
                        High-efficiency Variable Refrigerant Volume / Flow climate control delivering independent multi-zone heating and cooling for modern commercial offices, hotels, and luxury residences.
                    </p>
                    
                    <div class="gb-hero-actions">
                        <a href="contact-us.php" class="gb-btn gb-btn--primary">
                            Request VRF Consultation <i class="fa-solid fa-calendar-check"></i>
                        </a>
                        <a href="#system-types" class="gb-btn gb-btn--outline">
                            Explore VRF Technologies <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Column -->
                <div class="gb-hero-visual">
                    <div class="gb-hero-img-wrapper">
                        <img src="assets/images/vrv-hero.png" alt="VRV VRF outdoor inverter condenser unit and sleek indoor air conditioning cassettes">
                        
                        <!-- Floating Badge 1 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--one">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-microchip"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>Inverter Variable Flow</h5>
                                <p>Precise Temperature Control</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--two">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-sliders"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>Multi-Zone Flexibility</h5>
                                <p>Up to 40% Energy Savings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       2. OVERVIEW SECTION (PARALLEL ALIGNED)
       ========================================== -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-grid-2">
                <!-- Left Column (Visual) -->
                <div class="gb-intro-visual-wrapper">
                    <img src="assets/images/vrv-about.png" class="gb-intro-img" alt="Multi-Zone VRF System Architecture Diagram">
                    <div class="gb-intro-badge">
                        <strong>VRV / VRF HVAC</strong>
                        <span>Multi-Zone Climate Control</span>
                    </div>
                </div>

                <!-- Right Column (Content) -->
                <div class="gb-intro-content">
                    <span class="gb-label">Multi-Zone HVAC Advisory</span>
                    <h2 class="gb-title-main">Flexible &amp; Energy-Efficient Climate Control for Modern Buildings</h2>
                    <p class="gb-text-lead">
                        VRV/VRF air-conditioning systems provide flexible and energy-efficient climate control for multiple zones. Sustainergic Tech designs customized VRV/VRF solutions that offer precise temperature control, reduced energy consumption, quiet operation, and easy scalability for modern buildings.
                    </p>
                    
                    <div class="gb-intro-capabilities">
                        <!-- Capability 1 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-microchip"></i></div>
                            <div class="gb-cap-text">
                                <h4>Variable Inverter Compressor Control</h4>
                                <p>Continuously adjusting refrigerant flow rates to match exact instantaneous cooling and heating demands per room.</p>
                            </div>
                        </div>
                        
                        <!-- Capability 2 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-arrows-spin"></i></div>
                            <div class="gb-cap-text">
                                <h4>Simultaneous Heat Recovery (3-Pipe VRF)</h4>
                                <p>Transferring waste heat from cooled zones (e.g. server rooms) to heat other zones or hot water simultaneously.</p>
                            </div>
                        </div>

                        <!-- Capability 3 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-border-all"></i></div>
                            <div class="gb-cap-text">
                                <h4>Multi-Type Indoor Unit Versatility</h4>
                                <p>Combining 4-way ceiling cassettes, slim ducted units, wall splits, and floor consoles on a single outdoor loop.</p>
                            </div>
                        </div>

                        <!-- Capability 4 -->
                        <div class="gb-cap-item">
                            <div class="gb-cap-icon"><i class="fa-solid fa-network-wired"></i></div>
                            <div class="gb-cap-text">
                                <h4>Central Touch Screen &amp; BMS Integration</h4>
                                <p>Integrating BACnet / Modbus BMS gateways, tenant power proportioning (PPD) billing, and remote app management.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Trust Highlights -->
                    <div class="gb-trust-highlights">
                        <div class="gb-trust-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Independent Room Thermostats</span>
                        </div>
                        <div class="gb-trust-item">
                            <i class="fa-solid fa-shield-halved"></i>
                            <span>Whisper-Quiet 19 dB(A)</span>
                        </div>
                        <div class="gb-trust-item">
                            <i class="fa-solid fa-bolt"></i>
                            <span>40% Lower Power Bills</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       3. SYSTEM CONFIGURATIONS
       ========================================== -->
    <section class="gb-section gb-section--light" id="system-types">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">VRV/VRF Technologies</span>
                <h2 class="gb-title-main">Customized VRF System Architecture</h2>
            </div>

            <div class="gb-services-grid">
                <!-- 1. Heat Pump VRF (2-Pipe) -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-arrows-left-right"></i>
                    </div>
                    <h3>Heat Pump VRV/VRF Systems (2-Pipe)</h3>
                    <p>
                        Delivers either cooling or heating to all connected indoor units simultaneously. Ideal for buildings with uniform seasonal climate requirements such as residential apartments and retail stores.
                    </p>
                </div>

                <!-- 2. Heat Recovery VRF (3-Pipe) -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-repeat"></i>
                    </div>
                    <h3>Heat Recovery VRV/VRF Systems (3-Pipe)</h3>
                    <p>
                        Allows simultaneous cooling in sunny/perimeter zones and heating in shaded/interior zones. Recycles heat within the building envelope, achieving industry-leading integrated COP ratings.
                    </p>
                </div>

                <!-- 3. Water-Cooled VRF -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-droplet"></i>
                    </div>
                    <h3>VRF Systems With HTS Panel</h3>
                    <p>
                        Uses water or geothermal ground loops for heat exchange instead of air, while integrating an HTS Panel with VRF systems to achieve a COP of up to 6. The compact indoor installation also eliminates outdoor condenser clutter, making it ideal for high-rise buildings.
                    </p>
                </div>

                <!-- 4. Fresh Air AHU Connection Kits -->
                <div class="gb-service-card">
                    <div class="gb-card-icon-wrapper">
                        <i class="fa-solid fa-wind"></i>
                    </div>
                    <h3>Fresh Air VRF AHU Integration</h3>
                    <p>
                        Connects VRF inverter outdoor units to central Air Handling Units (AHUs) or DOAS fresh air systems, providing 100% pre-conditioned outdoor air with inverter energy efficiency.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       4. KEY ADVANTAGES
       ========================================== -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">VRF Value</span>
                <h2 class="gb-title-main">Why Choose VRV/VRF Technology?</h2>
            </div>

            <div class="gb-why-grid" style="grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));">
                <!-- Advantage 1 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-gauge-high"></i></div>
                    <h4>Inverter Energy Savings (Up to 40%)</h4>
                    <p>Variable speed DC inverter scroll compressors adjust motor speeds continuously, eliminating the high current spikes and energy waste of traditional ON/OFF compressors.</p>
                </div>

                <!-- Advantage 2 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-sliders"></i></div>
                    <h4>Individual Multi-Zone Micro-Climates</h4>
                    <p>Every office, hotel room, or residential suite has its own independent digital thermostat, enabling personalized temperature setpoints without affecting adjacent zones.</p>
                </div>

                <!-- Advantage 3 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-arrows-up-down-left-right"></i></div>
                    <h4>Modular &amp; Compact Infrastructure</h4>
                    <p>Modular outdoor units fit into standard service elevators and small balcony spaces, reducing structural loads and eliminating massive roof duct shafts.</p>
                </div>

                <!-- Advantage 4 -->
                <div class="gb-why-card">
                    <div class="gb-why-icon"><i class="fa-solid fa-volume-xmark"></i></div>
                    <h4>Whisper-Quiet Operation (19 dB)</h4>
                    <p>Aerodynamically engineered indoor fans and electronic expansion valves (EEVs) deliver ultra-quiet sound levels, ensuring serene working and sleeping environments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       5. ENGINEERING PROCESS
       ========================================== -->
    <section class="gb-section gb-section--light">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Our Process</span>
                <h2 class="gb-title-main">A 4-Step VRV/VRF Engineering Roadmap</h2>
            </div>

            <div class="gb-process-timeline">
                <!-- Timeline connector line for desktop -->
                <div class="gb-process-line"></div>

                <div class="gb-process-grid gb-process-grid--4">
                    <!-- Step 1 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">01</div>
                        <div class="gb-process-step-content">
                            <h4>Multi-Zone Load Calculation</h4>
                            <p>Calculating room-by-room sensible and latent heat loads, diversity factors, and selecting appropriate indoor unit types (cassette/ducted).</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">02</div>
                        <div class="gb-process-step-content">
                            <h4>Refrigerant Piping &amp; Y-Joint Design</h4>
                            <p>Routing copper refrigerant lines, sizing Y-joints, calculating equivalent pipe lengths, vertical oil drops, and branch selectors using VRF selection software.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">03</div>
                        <div class="gb-process-step-content">
                            <h4>Controls &amp; Power Meter Wiring</h4>
                            <p>Wiring non-polar 2-core communication cables, central touch screen controllers, tenant kWh power meters (PPD), and BMS gateways.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="gb-process-step">
                        <div class="gb-process-num-wrapper">04</div>
                        <div class="gb-process-step-content">
                            <h4>Nitrogen Holding, Vacuum &amp; Charging</h4>
                            <p>Performing 24-hour 4.15 MPa nitrogen holding pressure tests, triple vacuum evacuation down to 500 microns, and precise R-410A / R-32 auto-charging.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       6. CALL-TO-ACTION SECTION
       ========================================== -->
    <section class="gb-cta-banner">
        <div class="gb-cta-overlay"></div>
        <div class="gb-cta-content">
            <h2>Ready to Upgrade to Smart, Multi-Zone VRV/VRF Comfort?</h2>
            <p>
                Partner with Sustainergic Tech to design, engineer, and commission high-performance VRV/VRF air conditioning systems for your facility.
            </p>
            <div class="gb-cta-buttons">
                <a href="contact-us.php" class="gb-btn gb-btn--gold">
                    Schedule VRF Consultation <i class="fa-solid fa-calendar-days"></i>
                </a>
                <a href="contact-us.php" class="gb-btn gb-btn--white-outline">
                    Contact HVAC Engineers <i class="fa-solid fa-envelope"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       7. RELATED HVAC SERVICES
       ========================================== -->
    <section class="gb-section">
        <div class="gb-container">
            <div class="gb-section-header">
                <span class="gb-label">Related HVAC Solutions</span>
                <h2 class="gb-title-main">Explore Other HVAC &amp; Energy Systems</h2>
            </div>

            <div class="gb-related-grid">
                <!-- Card 1 -->
                <div class="gb-related-card">
                    <div class="gb-related-img-box">
                        <img src="assets/images/benefits-building.png" alt="Chilled Water System">
                        <div class="gb-related-icon-box">
                            <i class="fa-solid fa-snowflake"></i>
                        </div>
                    </div>
                    <div class="gb-related-body">
                        <h3>Chilled Water System</h3>
                        <p>High-efficiency central chiller plants, secondary pumps, and AHU distribution for large commercial towers and campuses.</p>
                        <a href="chilled-water-system.php" class="gb-related-link">Explore Service <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="gb-related-card">
                    <div class="gb-related-img-box">
                        <img src="assets/images/green-building-hero.png" alt="Radiant Heating & Cooling">
                        <div class="gb-related-icon-box">
                            <i class="fa-solid fa-temperature-arrow-down"></i>
                        </div>
                    </div>
                    <div class="gb-related-body">
                        <h3>Radiant Heating &amp; Cooling</h3>
                        <p>Hydronic radiant floor and ceiling systems delivering draft-free, silent, and energy-efficient thermal comfort.</p>
                        <a href="radiant-heating-cooling-system.php" class="gb-related-link">Explore Service <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="gb-related-card">
                    <div class="gb-related-img-box">
                        <img src="assets/images/sustainable-architecture.png" alt="Fresh Air System">
                        <div class="gb-related-icon-box">
                            <i class="fa-solid fa-wind"></i>
                        </div>
                    </div>
                    <div class="gb-related-body">
                        <h3>Fresh Air System</h3>
                        <p>Continuous filtered outdoor air supply and energy recovery ventilation for healthy indoor air quality.</p>
                        <a href="fresh-air-system.php" class="gb-related-link">Explore Service <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       PROJECTS SECTION (8 PROJECTS SLIDER)
       ========================================== -->
    <?php
    $service_projects_title = "VRV / VRF HVAC System Projects";
    $service_projects_subtitle = "Variable Refrigerant Volume (VRV/VRF) heat recovery and multi-split cooling projects engineered by Sustainergic Tech.";
    $service_projects = [
        [
            'title' => '42 Works Digital Innovation Center',
            'location' => 'Mohali',
            'tag' => 'VRV Heat Recovery',
            'badge_type' => 'badge-igbc',
            'description' => 'Inverter-driven 3-pipe VRV IV heat recovery system allowing simultaneous heating and cooling across IT software development zones, transferring excess server room heat to office perimeter zones.',
            'image' => 'assets/images/benefits-building.png'
        ],
        [
            'title' => 'Window Tech India Headquarters',
            'location' => 'Jaipur',
            'tag' => 'Modular VRF System',
            'badge_type' => 'badge-igbc',
            'description' => 'Outdoor VRF heat pump modular units connected to 4-way cassette and slim ceiling duct indoor units across corporate office floors with central touch-screen energy management.',
            'image' => 'assets/images/hero.png'
        ],
        [
            'title' => 'The Crest Hills Faridabad Complex',
            'location' => 'Faridabad',
            'tag' => 'Residential VRF HVAC',
            'badge_type' => 'badge-igbc',
            'description' => 'High-efficiency residential VRF multi-split installation across luxury high-rise apartments, with quiet 22 dBA indoor acoustic operation and individual room temperature control.',
            'image' => 'assets/images/green-building-hero.png'
        ],
        [
            'title' => 'Sentro Technology Corporate HQ',
            'location' => 'Gurugram',
            'tag' => 'Water-Cooled VRF System',
            'badge_type' => 'badge-igbc',
            'description' => 'Water-cooled VRF heat pump system connected to a closed-loop cooling tower circuit, operating with superior seasonal part-load EER efficiency in dense urban commercial tower.',
            'image' => 'assets/images/cfd-simulation.png'
        ],
        [
            'title' => 'JREW Engineering Office Block',
            'location' => 'Rajpura, Punjab',
            'tag' => 'VRF Inverter Multi-Split',
            'badge_type' => 'badge-igbc',
            'description' => 'High-ambient VRF outdoor units engineered to operate seamlessly up to 52°C ambient temperatures, providing reliable cooling for industrial administrative offices.',
            'image' => 'assets/images/audits-hero.png'
        ],
        [
            'title' => 'Appworx Commercial IT Tower',
            'location' => 'Mohali',
            'tag' => 'BMS Integrated VRF',
            'badge_type' => 'badge-igbc',
            'description' => 'BACnet gateway connected VRF air conditioning network giving facility managers automated scheduling, tenant billing sub-metering, and remote setpoint adjustment.',
            'image' => 'assets/images/daylight-simulation.png'
        ],
        [
            'title' => 'Noida International University Admin Block',
            'location' => 'Noida',
            'tag' => 'Multi-Zone VRF System',
            'badge_type' => 'badge-ea',
            'description' => 'Multi-zone VRF system serving university administrative offices, boardrooms, and faculty suites with low refrigerant piping pressure drops and energy recovery ventilation.',
            'image' => 'assets/images/energy-audit.png'
        ],
        [
            'title' => 'Vaibhav Global Retail Showrooms',
            'location' => 'Jaipur',
            'tag' => 'Commercial VRF Air Conditioning',
            'badge_type' => 'badge-igbc',
            'description' => 'High-capacity commercial VRF units with duct-concealed ceiling indoor units providing draft-free customer comfort in high-traffic retail display areas.',
            'image' => 'assets/images/sustainable-architecture.png'
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
