<?php
/**
 * Sustainergic Tech - Commissioning Authority Services Page
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>Commissioning Authority | Sustainergic Tech</title>
    <meta name="description" content="Independent verification, testing, and performance optimization to ensure building systems operate reliably, efficiently, and in accordance with the project's design intent.">
    <meta name="keywords" content="commissioning authority, CxA consultant, building commissioning, HVAC TAB testing, LEED commissioning, functional performance testing">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="page-commissioning">

    <!-- Global Header -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ==========================================
       1. HERO BANNER
       ========================================== -->
    <section class="aud-hero">
        <div class="aud-container">
            <div class="aud-hero-grid">
                <!-- Left Column: Content -->
                <div class="aud-hero-content">
                    <ul class="aud-breadcrumbs" aria-label="Breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="#">Services</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li class="text-black" aria-current="page">Commissioning Authority Services</li>
                    </ul>
                    
                    <h1 class="aud-hero-title">
                        Commissioning <span>Authority Services</span>
                    </h1>
                    
                    <p class="aud-hero-subtitle">
                        Independent verification, testing, and performance optimization to ensure building systems operate reliably, efficiently, and in accordance with the project’s design intent.
                    </p>
                    
                    <div class="aud-hero-actions">
                        <a href="contact-us.php" class="aud-btn aud-btn--primary">
                            Request a Consultation <i class="fa-solid fa-comments"></i>
                        </a>
                        <a href="#expertise" class="aud-btn aud-btn--outline">
                            Explore Our Services <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Visual -->
                <div class="aud-hero-visual">
                    <div class="aud-hero-img-wrapper">
                        <img src="assets/images/commissioning-hero.png" alt="Commissioning engineer checking mechanical control valves and review sheets">
                    </div>
                    
                    <!-- Floating Indicator cards -->
                    <div class="aud-hero-floating-card aud-hero-floating-card--one">
                        <div class="aud-hero-fc-icon">
                            <i class="fa-solid fa-clipboard-check"></i>
                        </div>
                        <div class="aud-hero-fc-text">
                            <h5>Fundamental Cx</h5>
                            <p>Installation Verification</p>
                        </div>
                    </div>
                    
                    <div class="aud-hero-floating-card aud-hero-floating-card--two">
                        <div class="aud-hero-fc-icon">
                            <i class="fa-solid fa-sliders"></i>
                        </div>
                        <div class="aud-hero-fc-text">
                            <h5>Enhanced Cx</h5>
                            <p>Sequence Tuning</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       2. INTRODUCTION SECTION
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-grid-2">
                <!-- Left Visual Column -->
                <div class="aud-intro-visual-wrapper">
                    <img src="assets/images/commissioning-intro.png" alt="Engineering review of mechanical systems, controls, and parameters" class="aud-intro-img">
                    <div class="aud-intro-badge">
                        <strong>CxA</strong>
                        <span>Authority Verification</span>
                    </div>
                </div>

                <!-- Right Copy Column -->
                <div class="aud-intro-content">
                    <span class="aud-label">Building Performance Verification</span>
                    <h2 class="aud-title-main">Ensuring Building Systems <span>Perform as Designed</span></h2>
                    <p class="aud-text-lead">
                        Sustainergic Tech provides independent commissioning and system-performance services throughout design, construction, testing, and project handover. The process helps identify installation issues, verify system operation, improve energy efficiency, and support dependable long-term performance.
                    </p>
                    
                    <!-- Core capabilities Grid -->
                    <div class="aud-intro-capabilities">
                        <!-- Cap 1 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-file-pen"></i></div>
                            <div class="aud-cap-text">
                                <h4>Design & Documentation Review</h4>
                                <p>Checking project specifications and sequence descriptions.</p>
                            </div>
                        </div>
                        <!-- Cap 2 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                            <div class="aud-cap-text">
                                <h4>Installation Verification</h4>
                                <p>On-site inspection to confirm components meet design.</p>
                            </div>
                        </div>
                        <!-- Cap 3 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-gauge-simple"></i></div>
                            <div class="aud-cap-text">
                                <h4>Functional Performance Testing</h4>
                                <p>Operating and testing systems under active control sequences.</p>
                            </div>
                        </div>
                        <!-- Cap 4 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-chart-line"></i></div>
                            <div class="aud-cap-text">
                                <h4>Optimization & Handover</h4>
                                <p>Tuning parameters and supporting the facility operations team.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Trust highlights -->
                    <div class="aud-trust-highlights">
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-circle-check"></i> Independent Verification
                        </div>
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-circle-check"></i> Performance-Focused Testing
                        </div>
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-circle-check"></i> Reliable Building Operations
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       3. COMMISSIONING SERVICES SECTION
       ========================================== -->
    <section class="aud-section aud-section--light" id="expertise">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">Our Commissioning Services</span>
                <h2 class="aud-title-main">Complete Verification and <span>Optimization of Building Systems</span></h2>
            </div>

            <div class="aud-alternating-services">
                <!-- 1. Fundamental Commissioning -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/fundamental-commissioning.png" alt="Commissioning engineer checking HVAC electrical wiring and checklists">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box"><i class="fa-solid fa-clipboard-check"></i></div>
                            <h3>Fundamental Commissioning</h3>
                        </div>
                        <p>
                            Fundamental Commissioning verifies that building systems are installed, tested, and operating in accordance with the design intent. Sustainergic Tech conducts inspections, performance testing, and documentation to ensure efficient, reliable, and high-quality building operations from project handover.
                        </p>
                        
                        <div class="aud-results-grid">
                            <div class="aud-results-col">
                                <h4>Key Service Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Design requirements review</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Commissioning-plan setup</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Installation verification</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Functional performance testing</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Expected Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Systems matching design intent</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Early issues identification</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Efficient building handover</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Operational readiness</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--energy">
                            Discuss Your Commissioning Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Enhanced Commissioning -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/enhanced-commissioning.png" alt="Technician calibrating control loops and analyzing parameters on energy dashboard">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box"><i class="fa-solid fa-sliders"></i></div>
                            <h3>Enhanced Commissioning</h3>
                        </div>
                        <p>
                            Enhanced Commissioning builds upon the fundamental process by incorporating detailed design reviews, advanced performance verification, seasonal testing, and operational optimization. Sustainergic Tech helps clients achieve higher levels of building performance, energy efficiency, and long-term operational reliability.
                        </p>
                        
                        <div class="aud-results-grid">
                            <div class="aud-results-col">
                                <h4>Key Service Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Design-stage detailed review</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Equipment submittals review</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Seasonal and deferred testing</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Post-occupancy assessment</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Expected Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Optimized control sequences</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Better energy performance</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Enhanced operational safety</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Long-term system reliability</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--water">
                            Discuss Your Commissioning Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. Testing, Adjusting & Balancing (TAB) Services -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/tab-services.png" alt="Balancing air flow dampers and measuring duct pressure using balometer instruments">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box"><i class="fa-solid fa-arrows-spin"></i></div>
                            <h3>Testing, Adjusting & Balancing (TAB) Services</h3>
                        </div>
                        <p>
                            TAB Services ensure that HVAC air and water systems operate according to design specifications. Sustainergic Tech measures, adjusts, and balances airflow and water flow to optimize comfort, indoor air quality, and energy efficiency. Proper TAB improves system performance, occupant satisfaction, and equipment reliability.
                        </p>
                        
                        <div class="aud-results-grid">
                            <div class="aud-results-col">
                                <h4>Key Service Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Airflow balancing & testing</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Water-flow hydronic audits</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Fan & pump performance TAB</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> System reports generation</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Expected Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Balanced air distribution</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Optimum water-flow rates</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Improved occupant comfort</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Reduced HVAC operational noise</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--energy">
                            Discuss Your Commissioning Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       4. COMPARISON SECTION
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">Levels of Commissioning</span>
                <h2 class="aud-title-main">Choosing the Appropriate <span>Commissioning Scope</span></h2>
            </div>

            <div class="aud-comparison-grid">
                <!-- Fundamental Cx Column -->
                <div class="aud-comp-card aud-comp-card--energy">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                        <h3>Fundamental Commissioning</h3>
                    </div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Project-requirement review</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Commissioning planning</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Installation verification</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Functional performance testing</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Issue tracking & correction</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Documentation review</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Handover support</div>
                    </div>
                </div>

                <!-- Central node divider -->
                <div class="aud-comp-divider">
                    <div class="aud-comp-divider-circle">
                        <i class="fa-solid fa-building-shield"></i>
                    </div>
                </div>

                <!-- Enhanced Cx Column -->
                <div class="aud-comp-card aud-comp-card--water">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-sliders"></i></div>
                        <h3>Enhanced Commissioning</h3>
                    </div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Detailed design reviews</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Submittal reviews</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Advanced system testing</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Seasonal & deferred testing</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Control-sequence verification</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Post-occupancy assessment</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Operational optimization</div>
                    </div>
                </div>
            </div>

            <p style="text-align: center; margin-top: 30px; font-size: 14px; color: var(--aud-text-muted);">
                * Note: The appropriate commissioning scope depends on the project requirements, performance objectives, certification goals, and operational needs.
            </p>
        </div>
    </section>

    <!-- ==========================================
       5. COMMISSIONING PROCESS
       ========================================== -->
    <section class="aud-section aud-section--light">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">How We Work</span>
                <h2 class="aud-title-main">Our Commissioning and <span>Verification Process</span></h2>
            </div>

            <div class="aud-process-timeline">
                <div class="aud-process-line"></div>
                <div class="aud-process-grid">
                    <!-- Step 1 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">01</div>
                        <h4>Project Requirements</h4>
                        <p>Understand project scope, design intent, performance objectives, and requirements.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">02</div>
                        <h4>Commissioning Planning</h4>
                        <p> Data Collection, Define responsibilities, systems to test, procedures, and coordination logs.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">03</div>
                        <h4>Design & Document Review</h4>
                        <p>Review design drawings, sequence narratives, and technical submissions.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">04</div>
                        <h4>Installation Verification</h4>
                        <p>Inspect physical equipment to verify compliant mechanical and electrical installation.</p>
                    </div>

                    <!-- Step 5 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">05</div>
                        <h4>Functional Testing</h4>
                        <p>Verify active system operation, control loops, and performance cycles.</p>
                    </div>

                    <!-- Step 6 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">06</div>
                        <h4>Reporting & Handover</h4>
                        <p>Document findings, resolve issue logs, and support facility team training.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       6. SYSTEMS WE COMMISSION
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">Building Systems Covered</span>
                <h2 class="aud-title-main">System Verification <span>Scope of Work</span></h2>
            </div>

            <div class="aud-assess-grid">
                <!-- Card 1 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-temperature-half"></i></div>
                    <h4>HVAC Systems</h4>
                </div>
                <!-- Card 2 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-sliders"></i></div>
                    <h4>Building Management (BMS)</h4>
                </div>
                <!-- Card 3 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-bolt"></i></div>
                    <h4>Electrical Systems</h4>
                </div>
                <!-- Card 4 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4>Lighting & Controls</h4>
                </div>
                
                <!-- Card 7 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-wind"></i></div>
                    <h4>Ventilation & Exhaust</h4>
                </div>
                <!-- Card 8 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-house-laptop"></i></div>
                    <h4>Indoor Env. Controls</h4>
                </div>
                <!-- Card 9 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-solar-panel"></i></div>
                    <h4>Renewable Energy</h4>
                </div>
                <!-- Card 10 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h4>Life-Safety Interfaces</h4>
                </div>
                <!-- Card 11 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-gauge-high"></i></div>
                    <h4>Metering & Monitoring</h4>
                </div>
                <!-- Card 12 -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-circle-nodes"></i></div>
                    <h4>Integrated System Operations</h4>
                </div>
                <!-- Card 5 -->
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-droplet"></i></div>
                    <h4>Plumbing & Water</h4>
                </div>
                <!-- Card 6 -->
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-gears"></i></div>
                    <h4>Pumps & Hydronics</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       7. TAB PERFORMANCE AREAS
       ========================================== -->
    <section class="aud-section aud-section--light-blue">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label aud-label--blue">Testing, Adjusting & Balancing</span>
                <h2 class="aud-title-main">Optimizing Air and Water <span>Distribution Performance</span></h2>
            </div>

            <div class="aud-grid-2">
                <!-- Air-System Balancing -->
                <div class="aud-comp-card aud-comp-card--energy">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-wind"></i></div>
                        <h3>Air-System Balancing</h3>
                    </div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Supply-air measurement</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Return & exhaust-air assessment</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Diffuser and grille balancing</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Fan-performance verification</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Duct pressure assessment</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Ventilation-performance testing</div>
                    </div>
                </div>

                <!-- Water-System Balancing -->
                <div class="aud-comp-card aud-comp-card--water">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-droplet"></i></div>
                        <h3>Water-System Balancing</h3>
                    </div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Chilled & hot-water measurement</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Pump-performance verification</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Hydronic-system balancing</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Equipment-flow assessment</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Valve and circuit adjustment</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Final flow-performance reports</div>
                    </div>
                </div>
            </div>

            <p style="text-align: center; margin-top: 30px; font-size: 14px; color: var(--aud-text-muted);">
                * Note: Balanced air and water distribution supports comfort, efficiency, indoor-air quality, and dependable equipment operation.
            </p>
        </div>
    </section>

    <!-- ==========================================
       8. FACILITIES WE SUPPORT
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">Supported Properties</span>
                <h2 class="aud-title-main">Commissioning Solutions Across <span>Building Types</span></h2>
            </div>

            <div class="aud-fac-grid">
                <!-- 1 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-building"></i></div>
                    <h4>Commercial Buildings</h4>
                </div>
                <!-- 2 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-house-chimney"></i></div>
                    <h4>Residential Developments</h4>
                </div>
                <!-- 3 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-hospital"></i></div>
                    <h4>Hospitals & Healthcare</h4>
                </div>
                <!-- 4 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid font-awesome"></i><i class="fa-solid fa-hotel"></i></div>
                    <h4>Hotels & Hospitality</h4>
                </div>
                <!-- 5 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h4>Educational Institutions</h4>
                </div>
                <!-- 6 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-industry"></i></div>
                    <h4>Industrial Facilities</h4>
                </div>
                <!-- 7 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-store"></i></div>
                    <h4>Retail & Mixed-Use</h4>
                </div>
                <!-- 8 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-landmark"></i></div>
                    <h4>Public Buildings</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       9. KEY BENEFITS SECTION
       ========================================== -->
    <section class="aud-section aud-section--light">
        <div class="aud-container">
            <div class="aud-grid-2">
                <!-- Left: Benefits copy -->
                <div class="aud-benefits-content">
                    <span class="aud-label">Verified Building Performance</span>
                    <h2 class="aud-title-main">Benefits of Professional <span>Commissioning</span></h2>
                    <p class="aud-text-lead">
                        Professional commissioning reduces building lifecycle costs, prevents design conflicts, and provides a clear operational roadmap for the facilities team.
                    </p>
                    
                    <div class="aud-benefits-list">
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Verified installation and operation</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved building energy efficiency</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Better indoor comfort and air quality</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Reduced operational & issue logs</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Balanced air and water distribution</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Better system integration and control</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Increased equipment lifetime</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>More effective project handover</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved operations-team understanding</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Early identification of design faults</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Support for green certifications</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved long-term performance</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="aud-benefits-visual-wrapper">
                    <img src="assets/images/commissioning-benefits.png" alt="Commissioning checklist validation and energy efficiency inspection visual">
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       10. WHY CHOOSE SUSTAINERGIC TECH
       ========================================== -->
    <section class="aud-section aud-why-choose-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">Why Choose Us</span>
                <h2 class="aud-title-main">Why Choose <span>Sustainergic Tech?</span></h2>
            </div>

            <div class="aud-why-grid">
                <!-- 1 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h4>Independent commissioning expertise</h4>
                    <p>We provide objective verification free of contractor or supplier influence, safeguarding project interests.</p>
                </div>
                <!-- 2 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                    <h4>Detailed system inspections and testing</h4>
                    <p>Our engineers perform systematic installation checks and operational functional testing on all active equipment.</p>
                </div>
                <!-- 3 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-gears"></i></div>
                    <h4>Integrated HVAC and performance knowledge</h4>
                    <p>Deep expertise in thermal plants, ventilation, and energy modeling to detect hidden system failures.</p>
                </div>
                <!-- 4 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-bug"></i></div>
                    <h4>Clear issue tracking and documentation</h4>
                    <p>Calibrated worksheets and detailed issue logs make resolution items transparent and easy to track.</p>
                </div>
                <!-- 5 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h4>Practical system-optimization recommendations</h4>
                    <p>We don't just report issues—we suggest actionable setpoints and sequence adjustments to maximize efficiency.</p>
                </div>
                <!-- 6 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-circle-nodes"></i></div>
                    <h4>Coordination through testing and project handover</h4>
                    <p>Active hand-holding of project developers, contractors, and operators to achieve seamless building launch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       11. CALL TO ACTION SECTION
       ========================================== -->
    <section class="aud-cta-banner">
        <div class="aud-cta-overlay"></div>
        <div class="aud-cta-content">
            <h2>Ready to Verify and Optimize Your Building Systems?</h2>
            <p>
                Partner with Sustainergic Tech to improve system reliability, energy efficiency, occupant comfort, and long-term building performance through professional commissioning and TAB services.
            </p>
            <div class="aud-cta-buttons">
                <a href="contact-us.php" class="aud-btn aud-btn--primary">Discuss Your Commissioning Requirements <i class="fa-solid fa-comments-dollar"></i></a>
                <a href="contact-us.php" class="aud-btn aud-btn--white-outline">Contact Our Experts <i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       12. RELATED SERVICES (QUERIED FROM HEADER)
       ========================================== -->
    <?php 
    $related_title = "Related Building Performance Services";
    $related_label = "Other Engineering Services";
    include 'includes/related-services.php'; 
    ?>

    <!-- ==========================================
       PROJECTS SECTION (8 PROJECTS SLIDER)
       ========================================== -->
    <?php
    $service_projects_title = "Commissioning Authority Projects";
    $service_projects_subtitle = "Third-party commissioning, fundamental & enhanced Cx, retro-commissioning, and TAB verification for complex building infrastructure.";
    $service_projects = [
        [
            'title' => 'Patiala Locomotive Works',
            'location' => 'Patiala',
            'tag' => 'Enhanced Cx & TAB',
            'badge_type' => 'badge-igbc',
            'description' => 'Third-party commissioning authority and testing, adjusting, and balancing (TAB) of heavy industrial ventilation plants, fume extraction systems, and central chiller units.',
            'image' => 'assets/images/fundamental-commissioning.png'
        ],
        [
            'title' => 'Honda Automotive Manufacturing Facility',
            'location' => 'Vithalapur, Gujarat',
            'tag' => 'Fundamental Cx',
            'badge_type' => 'badge-igbc',
            'description' => 'Fundamental commissioning authority verification for central plant cooling towers, AHUs, compressed air networks, and electrical substation protection relays.',
            'image' => 'assets/images/enhanced-commissioning.png'
        ],
        [
            'title' => 'Sentro Technology Facility',
            'location' => 'Gurugram',
            'tag' => 'Building Enclosure Cx',
            'badge_type' => 'badge-ea',
            'description' => 'Comprehensive commissioning of critical HVAC systems, BMS automation logic, and building envelope thermal tightness testing via infrared thermography and blower door tests.',
            'image' => 'assets/images/tab-services.png'
        ],
        [
            'title' => 'Hyatt Regency Dehradun Resort',
            'location' => 'Dehradun',
            'tag' => 'LEED Enhanced Commissioning',
            'badge_type' => 'badge-leed',
            'description' => 'LEED v4 Enhanced Commissioning Authority services covering thermal energy plants, hot water heat pumps, emergency power generator transfer, and fire-life safety systems.',
            'image' => 'assets/images/retro-commissioning.png'
        ],
        [
            'title' => 'Noida International University Campus',
            'location' => 'Noida',
            'tag' => 'Retro-Commissioning (RCx)',
            'badge_type' => 'badge-ea',
            'description' => 'Existing building retro-commissioning (RCx) across 8 academic blocks, recalibrating faulty BMS temperature sensors and correcting hydronic valve hunting.',
            'image' => 'assets/images/monitoring-based-commissioning.png'
        ],
        [
            'title' => 'Havells India Manufacturing Plant',
            'location' => 'Alwar, Rajasthan',
            'tag' => 'HVAC & TAB Verification',
            'badge_type' => 'badge-igbc',
            'description' => 'Systematic TAB airflow traverses and hydronic pump head verification across manufacturing assembly halls to ensure balanced air distribution.',
            'image' => 'assets/images/tab-services.png'
        ],
        [
            'title' => 'SBI Local Head Office Tower',
            'location' => 'Chandigarh',
            'tag' => 'BMS & Controls Commissioning',
            'badge_type' => 'badge-igbc',
            'description' => 'Point-by-point digital input/output functional performance testing of building management system (BMS) controllers and VFD drive sequences.',
            'image' => 'assets/images/commissioning-hero.png'
        ],
        [
            'title' => 'Appworx Commercial IT Center',
            'location' => 'Mohali',
            'tag' => 'Re-Commissioning Verification',
            'badge_type' => 'badge-ea',
            'description' => 'Re-commissioning of tenant floor VAV boxes and fresh air dampers to restore initial green building design efficiency after tenant space alterations.',
            'image' => 'assets/images/audits-hero.png'
        ]
    ];
    include 'includes/service-projects-section.php';
    ?>

    <!-- Global Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Swiper JS & custom animations -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
