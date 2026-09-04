<?php
/**
 * Sustainergic Tech - Energy & Water Audits Services Page
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>Energy & Water Audits | Sustainergic Tech</title>
    <meta name="description" content="Comprehensive resource audits that identify inefficiencies, reduce operating costs, and support more sustainable building and facility performance.">
    <meta name="keywords" content="energy audit, water audit, facility energy assessment, ECM energy conservation measures, thermal image audit, power quality audit">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="page-audits">

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
                        <li class="text-black" aria-current="page">Audits</li>
                    </ul>
                    
                    <h1 class="aud-hero-title">
                        Energy & Water <span>Audits</span>
                    </h1>
                    
                    <p class="aud-hero-subtitle">
                        Comprehensive resource audits that identify inefficiencies, reduce operating costs, and support more sustainable building and facility performance.
                    </p>
                    
                    <div class="aud-hero-actions">
                        <a href="contact-us.php" class="aud-btn aud-btn--primary">
                            Request an Audit <i class="fa-solid fa-clipboard-check"></i>
                        </a>
                        <a href="#expertise" class="aud-btn aud-btn--outline">
                            Explore Audit Services <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Visual -->
                <div class="aud-hero-visual">
                    <div class="aud-hero-img-wrapper">
                        <img src="assets/images/audits-hero.png" alt="Commercial high-rise building with thermal and water consumption audit dashboard overlay">
                    </div>
                    
                    <!-- Floating Indicator cards -->
                    <div class="aud-hero-floating-card aud-hero-floating-card--one">
                        <div class="aud-hero-fc-icon">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <div class="aud-hero-fc-text">
                            <h5>Energy Audits</h5>
                            <p>HVAC & Systems</p>
                        </div>
                    </div>
                    
                    <div class="aud-hero-floating-card aud-hero-floating-card--two">
                        <div class="aud-hero-fc-icon">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                        <div class="aud-hero-fc-text">
                            <h5>Water Audits</h5>
                            <p>Leakage & Reuse</p>
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
                    <img src="assets/images/audits-intro.png" alt="Commercial facility 3D cutaway showing mechanical, lighting, and plumbing systems under audit" class="aud-intro-img">
                    <div class="aud-intro-badge">
                        <strong>ASHRAE</strong>
                        <span>Compliant Audits</span>
                    </div>
                </div>

                <!-- Right Copy Column -->
                <div class="aud-intro-content">
                    <span class="aud-label">Resource Efficiency Assessment</span>
                    <h2 class="aud-title-main">Turning Resource Data into <span>Practical Performance Improvements</span></h2>
                    <p class="aud-text-lead">
                        Sustainergic Tech conducts detailed audits to understand how energy and water are consumed, distributed, and potentially wasted across a facility. The findings are converted into practical recommendations for reducing consumption, operating expenses, and environmental impact.
                    </p>
                    
                    <!-- Core capabilities Grid -->
                    <div class="aud-intro-capabilities">
                        <!-- Cap 1 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-building-circle-check"></i></div>
                            <div class="aud-cap-text">
                                <h4>On-site System Assessment</h4>
                                <p>Comprehensive field testing of utilities and equipment.</p>
                            </div>
                        </div>
                        <!-- Cap 2 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-chart-pie"></i></div>
                            <div class="aud-cap-text">
                                <h4>Consumption & Utility Analysis</h4>
                                <p>Detailed reviews of historic billings and load profiles.</p>
                            </div>
                        </div>
                        <!-- Cap 3 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
                            <div class="aud-cap-text">
                                <h4>Loss & Inefficiency Identification</h4>
                                <p>Locating system leakage, friction, and heat loss.</p>
                            </div>
                        </div>
                        <!-- Cap 4 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-lightbulb"></i></div>
                            <div class="aud-cap-text">
                                <h4>Conservation Recommendations</h4>
                                <p>Practical and cost-effective improvement roadmaps.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Trust highlights -->
                    <div class="aud-trust-highlights">
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-magnifying-glass-chart"></i> Detailed Assessments
                        </div>
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-circle-nodes"></i> Actionable Recommendations
                        </div>
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-gauge-simple-high"></i> Performance-Focused
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       3. AUDIT SERVICES SECTION
       ========================================== -->
    <section class="aud-section aud-section--light" id="expertise">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">Our Audit Services</span>
                <h2 class="aud-title-main">Comprehensive Assessments for <span>Efficient Resource Management</span></h2>
            </div>

            <div class="aud-alternating-services">
                <!-- 1. Energy Audit -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/energy-audit.png" alt="Auditor checking circuit breakers with infrared thermal camera diagnostic screen">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box"><i class="fa-solid fa-gauge-high"></i></div>
                            <h3>Energy Audit</h3>
                        </div>
                        <p>
                           An Energy Audit identifies opportunities to reduce energy consumption and operating costs through detailed metered assessment of building systems and equipment. Sustainergic Tech evaluates HVAC, lighting, electrical systems, Hot Water Systems, utilities, distributions, and Electromechanical Equipment to recommend practical energy-saving measures. Our audits help improve efficiency, reduce carbon emissions, and enhance long-term building performance.
                        </p>
                        
                        <!-- Analysis & Outcomes splits -->
                        <div class="aud-results-grid">
                            <div class="aud-results-col">
                                <h4>Key Assessment Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Electricity bills & utilities</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> HVAC system performance</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Lighting systems & controls</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Electromechanical Equipments</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Expected Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Practical saving measures</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Reduced utility expenses</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Better system efficiency</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Lower carbon emissions</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--energy">
                            Discuss Your Audit Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Water Audit -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/water-audit.png" alt="Detailed water pipeline distribution flow chart showing levels, meters and tanks">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box"><i class="fa-solid fa-droplet"></i></div>
                            <h3>Water Audit</h3>
                        </div>
                        <p>
                            A Water Audit examines water consumption, distribution, losses, and reuse opportunities within a facility. Sustainergic Tech analyzes water balance, identifies leakages, and recommends conservation strategies to improve water efficiency. Our solutions help clients reduce freshwater demand, optimize resource utilization, and achieve sustainable water management. Additionally, we offer a structured framework designed to guide organizations toward achieving <strong>Net Zero Water Certification</strong>.
                        </p>
                        
                        <!-- Analysis & Outcomes splits -->
                        <div class="aud-results-grid">
                            <div class="aud-results-col">
                                <h4>Key Assessment Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Water supply & end-uses</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Preparation of Water Balance</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Leakage & loss detection</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Fixtures & recycling units</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Expected Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Avoided leakage and losses</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Lower freshwater demand</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i>  Reduce, Recycle & Reuse</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Innovative Technologies</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--water">
                            Discuss Your Audit Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       4. COMBINED RESOURCE ANALYSIS
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">Integrated Resource Management</span>
                <h2 class="aud-title-main">A Complete View of <span>Building Resource Performance</span></h2>
            </div>

            <div class="aud-comparison-grid">
                <!-- Energy Column -->
                <div class="aud-comp-card aud-comp-card--energy">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-bolt"></i></div>
                        <h3>Energy Performance</h3>
                    </div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> HVAC and lighting efficiency</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Electrical-system performance</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Equipment and operational loads</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Utility-consumption analysis</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Energy-saving measures</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Carbon-emission reduction</div>
                    </div>
                </div>

                <!-- Central Building Graphic -->
                <div class="aud-comp-divider">
                    <div class="aud-comp-divider-circle">
                        <i class="fa-solid fa-building-circle-check"></i>
                    </div>
                </div>

                <!-- Water Column -->
                <div class="aud-comp-card aud-comp-card--water">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-droplet"></i></div>
                        <h3>Water Performance</h3>
                    </div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Water balance and consumption</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Distribution-system efficiency</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Leakage and loss detection</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Fixture and equipment audits</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Reuse and recycling pathways</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-check"></i> Freshwater-demand reduction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       5. AUDIT PROCESS
       ========================================== -->
    <section class="aud-section aud-section--light">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">How We Work</span>
                <h2 class="aud-title-main">Our Audit and <span>Assessment Process</span></h2>
            </div>

            <div class="aud-process-timeline">
                <div class="aud-process-line"></div>
                <div class="aud-process-grid aud-process-grid--7">
                    <!-- Step 1 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">01</div>
                        <div class="aud-process-text">
                            <h4>Initial Consultation</h4>
                            <p>Understand the facility, operational profiles, constraints, and audit objectives.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">02</div>
                        <div class="aud-process-text">
                            <h4>Site Assessment</h4>
                            <p>Inspect relevant building infrastructure, utilities, systems, and equipment.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">03</div>
                        <div class="aud-process-text">
                            <h4>Data Collection</h4>
                            <p>Review utility bills, consumption logs, drawings, and operating cycles.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">04</div>
                        <div class="aud-process-text">
                            <h4>Instrument Data Acquisition</h4>
                            <p>Deploy calibrated instruments and meters for logging real-time system metrics.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">05</div>
                        <div class="aud-process-text">
                            <h4>Data Analysis</h4>
                            <p>Analyze performance patterns, HVAC loads, efficiency baselines, and losses.</p>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">06</div>
                        <div class="aud-process-text">
                            <h4>Recommendations</h4>
                            <p>Develop practical measures for improving efficiency and reducing consumption.</p>
                        </div>
                    </div>

                    <!-- Step 7 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">07</div>
                        <div class="aud-process-text">
                            <h4>Reporting & Support</h4>
                            <p>Present findings in a clear report and support implementation decisions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       6. AREAS WE ASSESS
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label">Systems We Evaluate</span>
                <h2 class="aud-title-main">Key Systems and <span>Areas Covered</span></h2>
            </div>

            <div class="aud-assess-grid">
                <!-- Energy Assessment Cards (8) -->
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-temperature-half"></i></div>
                    <h4>HVAC Systems</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4>Lighting & Controls</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-network-wired"></i></div>
                    <h4>Electrical Distribution</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-bolt"></i></div>
                    <h4>Power Factor Correction</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-industry"></i></div>
                    <h4>Electromechanical Equipment</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-solar-panel"></i></div>
                    <h4>Renewable Energy Integration</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h4>Utility Consumption</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--energy">
                    <div class="aud-assess-icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    <h4>Operating Practices</h4>
                </div>

                <!-- Water Assessment Cards (8) -->
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-faucet-drip"></i></div>
                    <h4>Water Supply & Grid</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-temperature-arrow-up"></i></div>
                    <h4>Hot Water Systems</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-shower"></i></div>
                    <h4>Plumbing Fixtures</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-gears"></i></div>
                    <h4>Pumps & Storage</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-triangle-exclamation"></i></div>
                    <h4>Leakage & Losses</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-soap"></i></div>
                    <h4>Wastewater Generation</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-arrows-spin"></i></div>
                    <h4>Water Recycling Systems</h4>
                </div>
                <div class="aud-assess-card aud-assess-card--water">
                    <div class="aud-assess-icon"><i class="fa-solid fa-cloud-showers-heavy"></i></div>
                    <h4>Rainwater Harvesting</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       7. FACILITIES WE SUPPORT
       ========================================== -->
    <section class="aud-section aud-section--light-blue">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label aud-label--blue">Supported Facilities</span>
                <h2 class="aud-title-main">Audit Solutions Across <span>Different Facilities</span></h2>
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
                    <div class="aud-fac-icon"><i class="fa-solid fa-hotel"></i></div>
                    <h4>Hotels & Hospitality</h4>
                </div>
                <!-- 4 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-hospital"></i></div>
                    <h4>Hospitals & Healthcare</h4>
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
       8. KEY BENEFITS SECTION
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-grid-2">
                <!-- Left: Benefits copy -->
                <div class="aud-benefits-content">
                    <span class="aud-label">Measurable Resource Efficiency</span>
                    <h2 class="aud-title-main">Benefits of Energy and <span>Water Audits</span></h2>
                    <p class="aud-text-lead">
                        Conducting structured audits allows facility operators to lower utility costs, extend equipment life, and establish strong pathways toward net-zero targets.
                    </p>
                    
                    <div class="aud-benefits-list">
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Reduced energy & water use</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Lower utility & operating costs</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Hidden losses identified</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved equipment performance</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Reduced freshwater demand</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Better resource planning</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Lower carbon footprint</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved operational reliability</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Support for ESG goals</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Ready for green certifications</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Roadmap for improvement</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Enhanced facility lifetime</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="aud-benefits-visual-wrapper">
                    <img src="assets/images/audits-intro.png" alt="Facility cutaway model highlighting mechanical and water utilities inspection">
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       9. WHY CHOOSE SUSTAINERGIC TECH
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
                    <h4>Integrated energy and water expertise</h4>
                    <p>We analyze energy and water flows simultaneously, identifying synergistic conservation opportunities.</p>
                </div>
                <!-- 2 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                    <h4>Detailed facility and system assessments</h4>
                    <p>Our engineers perform rigorous on-site measurements to construct true operational load profiles.</p>
                </div>
                <!-- 3 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h4>Data-driven performance analysis</h4>
                    <p>All recommendations are backed by calibrated consumption data and engineering energy-balance checks.</p>
                </div>
                <!-- 4 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4>Practical and achievable recommendations</h4>
                    <p>We design specific pay-back roadmaps that focus on low-cost high-impact adjustments first.</p>
                </div>
                <!-- 5 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-file-invoice"></i></div>
                    <h4>Clear technical reporting</h4>
                    <p>We provide easy-to-read technical summaries, payback charts, and implementation guidance notes.</p>
                </div>
                <!-- 6 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-globe"></i></div>
                    <h4>Support for long-term sustainability goals</h4>
                    <p>Active engineering partnership to help you execute adjustments, track savings, and secure green ratings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       10. CALL TO ACTION SECTION
       ========================================== -->
    <section class="aud-cta-banner">
        <div class="aud-cta-overlay"></div>
        <div class="aud-cta-content">
            <h2>Ready to Improve Your Facility’s Resource Efficiency?</h2>
            <p>
                Partner with Sustainergic Tech to identify energy and water inefficiencies, reduce operating costs, and build a practical roadmap for sustainable performance.
            </p>
            <div class="aud-cta-buttons">
                <a href="contact-us.php" class="aud-btn aud-btn--primary">Schedule an Audit <i class="fa-solid fa-calendar-check"></i></a>
                <a href="contact-us.php" class="aud-btn aud-btn--white-outline">Contact Our Experts <i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       11. RELATED SERVICES (QUERIED FROM HEADER)
       ========================================== -->
    <?php 
    $related_title = "Related Engineering & Consulting Services";
    $related_label = "Other Advisory Services";
    include 'includes/related-services.php'; 
    ?>

    <!-- ==========================================
       PROJECTS SECTION (8 PROJECTS SLIDER)
       ========================================== -->
    <?php
    $service_projects_title = "Audits & Energy Assessment Projects";
    $service_projects_subtitle = "Detailed energy, water, thermography, and IoT performance audits conducted by certified energy auditors at Sustainergic Tech.";
    $service_projects = [
        [
            'title' => 'Noida International University',
            'location' => 'Noida',
            'tag' => 'Campus Energy Audit',
            'badge_type' => 'badge-ea',
            'description' => 'Comprehensive multi-building educational campus energy audit, electrical safety assessment, transformer load logging, and HVAC power consumption optimization yielding 18% energy savings.',
            'image' => 'assets/images/energy-audit.png'
        ],
        [
            'title' => 'Havells India Manufacturing Plant',
            'location' => 'Alwar, Rajasthan',
            'tag' => 'Water & Energy Audit',
            'badge_type' => 'badge-ea',
            'description' => 'Industrial manufacturing plant energy conservation audit and water balance assessment. Identified cooling tower blowdown recovery and motor VFD retrofits saving 320 MWh annually.',
            'image' => 'assets/images/water-audit.png'
        ],
        [
            'title' => 'Advance Plastic Industries (Ecovia)',
            'location' => 'Ludhiana',
            'tag' => 'Power Quality Audit',
            'badge_type' => 'badge-ea',
            'description' => 'Polymer extrusion plant electrical power quality audit, harmonic analysis, power factor correction, and waste heat recovery feasibility study for process barrel heaters.',
            'image' => 'assets/images/audits-intro.png'
        ],
        [
            'title' => 'SBI Training Institute',
            'location' => 'Panchkula',
            'tag' => 'HVAC & Lighting Audit',
            'badge_type' => 'badge-ea',
            'description' => 'Banking officer academy facility energy audit evaluating central chiller COP, chilled water pumping efficiency, and smart LED fixture retrofits across residential hostel blocks.',
            'image' => 'assets/images/audits-hero.png'
        ],
        [
            'title' => 'JREW Engineering Heavy Works',
            'location' => 'Rajpura, Punjab',
            'tag' => 'Compressed Air Audit',
            'badge_type' => 'badge-ea',
            'description' => 'Ultrasonic compressed air leak audit and compressor sequencing assessment, detecting pneumatic line pressure drops and cutting compressor power draw by 22%.',
            'image' => 'assets/images/benefits-building.png'
        ],
        [
            'title' => 'IOCL Commercial Infrastructure',
            'location' => 'Jalandhar',
            'tag' => 'Thermal Imaging Audit',
            'badge_type' => 'badge-ea',
            'description' => 'Infrared thermography inspection of electrical switchgear panels, busducts, and cold-storage insulation envelopes, identifying high-resistance hot joints before system failure.',
            'image' => 'assets/images/green-building-hero.png'
        ],
        [
            'title' => 'Eastman Cast & Forge Facility',
            'location' => 'Ludhiana',
            'tag' => 'Furnace Thermal Audit',
            'badge_type' => 'badge-ea',
            'description' => 'Forging furnace flue-gas thermal efficiency audit, combustion air-fuel ratio tuning, and recuperator waste heat recovery system engineering.',
            'image' => 'assets/images/sustainable-architecture.png'
        ],
        [
            'title' => 'Venkateswara Wires Industrial Unit',
            'location' => 'Jaipur',
            'tag' => 'Water Balance & Conservation',
            'badge_type' => 'badge-ea',
            'description' => 'Industrial process water balance audit and rainwater harvesting potential mapping, helping achieve zero groundwater depletion targets.',
            'image' => 'assets/images/emissions-calculation.png'
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
