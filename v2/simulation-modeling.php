<?php
/**
 * Sustainergic Tech - Simulation & Modeling Services Page
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>Simulation & Modeling Services | Sustainergic Tech</title>
    <meta name="description" content="Advanced building-performance simulations that support informed design decisions, regulatory compliance, improved occupant comfort, and greater energy efficiency.">
    <meta name="keywords" content="building energy simulation, CFD airflow modeling, eQUEST energy model, EnergyPlus modeling, daylight simulation, thermal comfort analysis">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="page-simulation-modeling">

    <!-- Global Header -->
    <?php include 'includes/navbar.php'; ?>

    <!-- ==========================================
       1. HERO BANNER
       ========================================== -->
    <section class="sm-hero">
        <div class="sm-container">
            <div class="sm-hero-grid">
                <!-- Left Column: Content -->
                <div class="sm-hero-content">
                    <ul class="sm-breadcrumbs" aria-label="Breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li><a href="#">Services</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li class="text-black" aria-current="page">Simulation & Modeling</li>
                    </ul>
                    
                    <h1 class="sm-hero-title">
                        Simulation & <span>Modeling</span> Services
                    </h1>
                    
                    <p class="sm-hero-subtitle">
                        Advanced building-performance simulations that support informed design decisions, regulatory compliance, improved occupant comfort, and greater energy efficiency.
                    </p>
                    
                    <div class="sm-hero-actions">
                        <a href="contact-us.php" class="sm-btn sm-btn--primary">
                            Request a Simulation <i class="fa-solid fa-laptop-code"></i>
                        </a>
                        <a href="#expertise" class="sm-btn sm-btn--outline">
                            Explore Our Services <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Visual -->
                <div class="sm-hero-visual">
                    <div class="sm-hero-img-wrapper">
                        <img src="assets/images/simulation-hero.png" alt="Modern building with digital performance simulation overlay">
                    </div>
                    
                    <!-- Floating Indicator cards -->
                    <div class="sm-hero-floating-card sm-hero-floating-card--one">
                        <div class="sm-hero-fc-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <div class="sm-hero-fc-text">
                            <h5>98% Accuracy</h5>
                            <p>Calibration Models</p>
                        </div>
                    </div>
                    
                    <div class="sm-hero-floating-card sm-hero-floating-card--two">
                        <div class="sm-hero-fc-icon">
                            <i class="fa-solid fa-wind"></i>
                        </div>
                        <div class="sm-hero-fc-text">
                            <h5>CFD & Daylight</h5>
                            <p>Integrated Studies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       2. INTRODUCTION SECTION
       ========================================== -->
    <section class="sm-section">
        <div class="sm-container">
            <div class="sm-grid-2">
                <!-- Left Visual Column -->
                <div class="sm-intro-visual-wrapper">
                    <img src="assets/images/simulation-intro.png" alt="3D CAD model rendering showing thermal and airflow simulation overlays" class="sm-intro-img">
                    <div class="sm-intro-badge">
                        <strong>500+</strong>
                        <span>Simulations Run</span>
                    </div>
                </div>

                <!-- Right Copy Column -->
                <div class="sm-intro-content">
                    <span class="sm-label">Performance-Driven Building Design</span>
                    <h2 class="sm-title-main">Transforming Building Data into <span>Better Design Decisions</span></h2>
                    <p class="sm-text-lead">
                        Sustainergic Tech uses advanced simulation and modeling techniques to evaluate building performance before construction or renovation. Our analyses help design teams reduce risks, improve operational efficiency, enhance occupant comfort, and secure green-building certifications.
                    </p>
                    
                    <!-- Core capabilities Grid -->
                    <div class="sm-intro-capabilities">
                        <!-- Cap 1 -->
                        <div class="sm-cap-item">
                            <div class="sm-cap-icon"><i class="fa-solid fa-temperature-half"></i></div>
                            <div class="sm-cap-text">
                                <h4>Energy Performance</h4>
                                <p>Envelope, lighting, and HVAC load evaluations.</p>
                            </div>
                        </div>
                        <!-- Cap 2 -->
                        <div class="sm-cap-item">
                            <div class="sm-cap-icon"><i class="fa-solid fa-lightbulb"></i></div>
                            <div class="sm-cap-text">
                                <h4>Daylight & Glare</h4>
                                <p>Natural light distribution and shading analyses.</p>
                            </div>
                        </div>
                        <!-- Cap 3 -->
                        <div class="sm-cap-item">
                            <div class="sm-cap-icon"><i class="fa-solid fa-wind"></i></div>
                            <div class="sm-cap-text">
                                <h4>Airflow CFD Studies</h4>
                                <p>Internal and external fluid dynamics.</p>
                            </div>
                        </div>
                        <!-- Cap 4 -->
                        <div class="sm-cap-item">
                            <div class="sm-cap-icon"><i class="fa-solid fa-arrows-spin"></i></div>
                            <div class="sm-cap-text">
                                <h4>LCA Analysis</h4>
                                <p>Embodied carbon and lifecycle impact assessments.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Trust indicators band -->
                    <div class="sm-sm-trust-highlights sm-trust-highlights">
                        <div class="sm-trust-item">
                            <i class="fa-solid fa-square-poll-vertical"></i> Data-Driven Analysis
                        </div>
                        <div class="sm-trust-item">
                            <i class="fa-solid fa-screwdriver-wrench"></i> Advanced Simulation Tools
                        </div>
                        <div class="sm-trust-item">
                            <i class="fa-solid fa-file-invoice"></i> Actionable Recommendations
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       3. SIMULATION SERVICES SECTION
       ========================================== -->
    <section class="sm-section sm-section--light" id="expertise">
        <div class="sm-container">
            <div class="sm-section-header">
                <span class="sm-label">Our Simulation Expertise</span>
                <h2 class="sm-title-main">Advanced Analysis for <span>High-Performance Buildings</span></h2>
            </div>

            <div class="sm-alternating-services">
                <!-- 1. Energy Simulation -->
                <div class="sm-alt-row">
                    <div class="sm-alt-visual">
                        <img src="assets/images/energy-simulation.png" alt="Building energy model showcasing HVAC airflow paths and temperature zones">
                    </div>
                    <div class="sm-alt-content">
                        <div class="sm-alt-content-header">
                            <div class="sm-alt-icon-box"><i class="fa-solid fa-gauge-high"></i></div>
                            <h3>Energy Simulation</h3>
                        </div>
                        <p>
                            Energy Simulation evaluates the predicted energy performance of a building before construction or renovation. Sustainergic Tech develops detailed energy models to analyze HVAC systems, lighting, building envelope, and operational patterns. 
                            Our simulations help optimize energy consumption, reduce operating costs, support green building certifications, and enable informed design decisions for high-performance buildings. Our expert energy modelers provide calibrated energy building models for NET ZERO Energy Projects 
                        </p>
                        <h4 class="sm-alt-analysis-title">Key Analysis Areas:</h4>
                        <div class="sm-alt-list">
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> HVAC system performance</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Lighting energy consumption</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Building-envelope efficiency</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Equipment & operational loads</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Annual energy-use prediction</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Conservation measures</div>
                        </div>
                        <a href="contact-us.php" class="sm-btn sm-btn--gold">
                            Discuss Your Project <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Daylight Simulation -->
                <div class="sm-alt-row">
                    <div class="sm-alt-visual">
                        <img src="assets/images/daylight-simulation.png" alt="Daylight and glare analysis grid on office floor layout">
                    </div>
                    <div class="sm-alt-content">
                        <div class="sm-alt-content-header">
                            <div class="sm-alt-icon-box"><i class="fa-solid fa-sun"></i></div>
                            <h3>Daylight Simulation</h3>
                        </div>
                        <p>
                            Daylight Simulation assesses the availability and distribution of natural daylight within building spaces. Using advanced simulation tools, Sustainergic Tech helps optimize window placement, glazing, and shading devices to maximize daylight while minimizing glare and heat gain. This improves occupant comfort, reduces lighting energy consumption, and supports sustainable building design.
                        </p>
                        <h4 class="sm-alt-analysis-title">Key Analysis Areas:</h4>
                        <div class="sm-alt-list">
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Daylight availability</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Spatial daylight distribution</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Glare assessment</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Glazing optimization</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Shading-device evaluation</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Artificial-light reduction</div>
                        </div>
                        <a href="contact-us.php" class="sm-btn sm-btn--gold">
                            Discuss Your Project <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. CFD Simulation -->
                <div class="sm-alt-row">
                    <div class="sm-alt-visual">
                        <img src="assets/images/cfd-simulation.png" alt="Computational Fluid Dynamics showing vector wind streamlines around building">
                    </div>
                    <div class="sm-alt-content">
                        <div class="sm-alt-content-header">
                            <div class="sm-alt-icon-box"><i class="fa-solid fa-wind"></i></div>
                            <h3>Internal & External CFD Simulation</h3>
                        </div>
                        <p>
                            Computational Fluid Dynamics (CFD) Simulation evaluates airflow, temperature distribution, ventilation efficiency, and wind movement within and around buildings. Sustainergic Tech performs internal and external CFD studies to optimize occupant comfort, smoke management, natural ventilation, and wind performance. These analyses support safer, healthier, and more energy-efficient building environments.
                        </p>
                        
                        <div class="sm-cfd-split">
                            <div class="sm-cfd-box">
                                <h5>Internal CFD</h5>
                                <p>Air movement, temperature, mechanical ventilation, and smoke behaviour inside buildings.</p>
                            </div>
                            <div class="sm-cfd-box">
                                <h5>External CFD</h5>
                                <p>Wind pressure, turbulence, surrounding airflow, and pedestrian comfort around structures.</p>
                            </div>
                        </div>

                        <h4 class="sm-alt-analysis-title" style="margin-top: 20px;">Key Analysis Areas:</h4>
                        <div class="sm-alt-list">
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Indoor airflow distribution</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Thermal comfort analysis</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Natural & mechanical ventilation</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Smoke management</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> External wind pressure</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Pedestrian wind comfort</div>
                        </div>
                        <a href="contact-us.php" class="sm-btn sm-btn--gold">
                            Discuss Your Project <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 4. LCA Analysis -->
                <div class="sm-alt-row">
                    <div class="sm-alt-visual">
                        <img src="assets/images/lca-stages.png" alt="Life Cycle Assessment lifecycle diagram mapping embodied carbon and environmental impacts">
                    </div>
                    <div class="sm-alt-content">
                        <div class="sm-alt-content-header">
                            <div class="sm-alt-icon-box"><i class="fa-solid fa-arrows-spin"></i></div>
                            <h3>LCA Analysis</h3>
                        </div>
                        <p>
                            Life Cycle Assessment (LCA) evaluates the environmental impacts of buildings and materials across their entire lifespan—from raw material extraction and manufacturing to construction, operation, and end-of-life disposal. Sustainergic Tech provides whole-building LCA and embodied carbon modeling to quantify environmental footprints, optimize material selection, and support green building certification requirements.
                        </p>
                        <h4 class="sm-alt-analysis-title">Key Analysis Areas:</h4>
                        <div class="sm-alt-list">
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Whole-building embodied carbon modeling</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Material lifecycle impact assessment</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Low-carbon material optimization</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Environmental Product Declaration (EPD) integration</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Carbon reduction & mitigation strategies</div>
                            <div class="sm-alt-list-item"><i class="fa-solid fa-check"></i> Green building certification compliance</div>
                        </div>
                        <a href="contact-us.php" class="sm-btn sm-btn--gold">
                            Discuss Your Project <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       4. SIMULATION WORKFLOW
       ========================================== -->
    <section class="sm-section">
        <div class="sm-container">
            <div class="sm-section-header">
                <span class="sm-label">How We Work</span>
                <h2 class="sm-title-main">Our Simulation and <span>Modeling Process</span></h2>
            </div>

            <div class="sm-process-timeline">
                <div class="sm-process-line"></div>
                <div class="sm-process-grid">
                    <!-- Step 1 -->
                    <div class="sm-process-step">
                        <div class="sm-process-num-wrapper">01</div>
                        <div class="sm-process-text">
                            <h4>Project Understanding</h4>
                            <p>Review the project scope, drawings, design requirements, and performance objectives.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="sm-process-step">
                        <div class="sm-process-num-wrapper">02</div>
                        <div class="sm-process-text">
                            <h4>Data Collection</h4>
                            <p>Collect architectural, mechanical, electrical, climatic, and operational details.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="sm-process-step">
                        <div class="sm-process-num-wrapper">03</div>
                        <div class="sm-process-text">
                            <h4>Digital Model Development</h4>
                            <p>Develop an accurate simulation model based on the available project data.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="sm-process-step">
                        <div class="sm-process-num-wrapper">04</div>
                        <div class="sm-process-text">
                            <h4>Performance Analysis</h4>
                            <p>Run simulations to evaluate energy, daylight, airflow, thermal comfort, or compliance.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="sm-process-step">
                        <div class="sm-process-num-wrapper">05</div>
                        <div class="sm-process-text">
                            <h4>Design Optimization</h4>
                            <p>Compare alternatives and recommend practical performance improvements.</p>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="sm-process-step">
                        <div class="sm-process-num-wrapper">06</div>
                        <div class="sm-process-text">
                            <h4>Reporting & Coordination</h4>
                            <p>Deliver technical reports, visual findings, and coordination support to the team.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       5. APPLICATIONS GRID
       ========================================== -->
    <section class="sm-section sm-section--light-blue">
        <div class="sm-container">
            <div class="sm-section-header">
                <span class="sm-label sm-label--blue">Where We Add Value</span>
                <h2 class="sm-title-main">Simulation Applications across <span>Sector Segments</span></h2>
            </div>

            <div class="sm-app-grid">
                <!-- Card 1 -->
                <div class="sm-app-card">
                    <div class="sm-app-icon"><i class="fa-solid fa-building"></i></div>
                    <h4>Commercial Buildings</h4>
                </div>
                <!-- Card 2 -->
                <div class="sm-app-card">
                    <div class="sm-app-icon"><i class="fa-solid fa-house-chimney"></i></div>
                    <h4>Residential Developments</h4>
                </div>
                <!-- Card 3 -->
                <div class="sm-app-card">
                    <div class="sm-app-icon"><i class="fa-solid fa-hospital"></i></div>
                    <h4>Hospitals & Healthcare</h4>
                </div>
                <!-- Card 4 -->
                <div class="sm-app-card">
                    <div class="sm-app-icon"><i class="fa-solid fa-hotel"></i></div>
                    <h4>Hotels & Hospitality</h4>
                </div>
                <!-- Card 5 -->
                <div class="sm-app-card">
                    <div class="sm-app-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h4>Educational Institutions</h4>
                </div>
                <!-- Card 6 -->
                <div class="sm-app-card">
                    <div class="sm-app-icon"><i class="fa-solid fa-industry"></i></div>
                    <h4>Industrial Facilities</h4>
                </div>
                <!-- Card 7 -->
                <div class="sm-app-card">
                    <div class="sm-app-icon"><i class="fa-solid fa-plane-departure"></i></div>
                    <h4>Airports & Infrastructure</h4>
                </div>
                <!-- Card 8 -->
                <div class="sm-app-card">
                    <div class="sm-app-icon"><i class="fa-solid fa-city"></i></div>
                    <h4>Mixed-Use Developments</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       6. KEY OUTCOMES SECTION
       ========================================== -->
    <section class="sm-section">
        <div class="sm-container">
            <div class="sm-grid-2">
                <!-- Left: Outcomes -->
                <div class="sm-outcomes-content">
                    <span class="sm-label">Key Outcomes</span>
                    <h2 class="sm-title-main">Better Performance Through <span>Informed Analysis</span></h2>
                    <p class="sm-text-lead">
                        Integrating simulation software into the design workflow results in quantifiable operational benefits and smoother statutory compliance reviews.
                    </p>
                    
                    <div class="sm-outcomes-list">
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Reduced building energy use</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Lower operational & life costs</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved indoor thermal comfort</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Better daylight availability</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Reduced glare & unwanted heat</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved ventilation performance</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Safer smoke-management</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved Natural Ventilation </span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Support for green certifications</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Compliance with energy codes</span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Lower Carbon Footprint </span>
                        </div>
                        <div class="sm-outcome-item">
                            <div class="sm-outcome-check"><i class="fa-solid fa-check"></i></div>
                            <span>Confident design decisions</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="sm-outcomes-visual-wrapper">
                    <img src="assets/images/simulation-intro.png" alt="Analytical cutaway design model showing airflow and solar light vector coordinates">
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       7. WHY CHOOSE SUSTAINERGIC TECH
       ========================================== -->
    <section class="sm-section sm-why-choose-section">
        <div class="sm-container">
            <div class="sm-section-header">
                <span class="sm-label">Why Choose Us</span>
                <h2 class="sm-title-main">Why Choose <span>Sustainergic Tech?</span></h2>
            </div>

            <div class="sm-why-grid">
                <!-- 1 -->
                <div class="sm-why-card">
                    <div class="sm-why-icon"><i class="fa-solid fa-gears"></i></div>
                    <h4>Integrated building-performance expertise</h4>
                    <p>We blend engineering physics, architecture, and regulatory standards to deliver accurate diagnostic feedback.</p>
                </div>
                <!-- 2 -->
                <div class="sm-why-card">
                    <div class="sm-why-icon"><i class="fa-solid fa-bullseye"></i></div>
                    <h4>Detailed and accurate simulation models</h4>
                    <p>Our models represent true microclimates, thermal patterns, and operational systems to ensure reliable calculations.</p>
                </div>
                <!-- 3 -->
                <div class="sm-why-card">
                    <div class="sm-why-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4>Practical design-oriented recommendations</h4>
                    <p>We do not just report numbers; we propose cost-effective design refinements for structural elements and systems.</p>
                </div>
                <!-- 4 -->
                <div class="sm-why-card">
                    <div class="sm-why-icon"><i class="fa-solid fa-sitemap"></i></div>
                    <h4>Support across multiple project stages</h4>
                    <p>From early concept envelope choices to final system testing and commissioning reviews.</p>
                </div>
                <!-- 5 -->
                <div class="sm-why-card">
                    <div class="sm-why-icon"><i class="fa-solid fa-chart-line"></i></div>
                    <h4>Clear technical reports and visual outputs</h4>
                    <p>We deliver interactive plots, visual charts, and straightforward executive summaries for client stakeholders.</p>
                </div>
                <!-- 6 -->
                <div class="sm-why-card">
                    <div class="sm-why-icon"><i class="fa-solid fa-users"></i></div>
                    <h4>Coordination with design project teams</h4>
                    <p>Active support working side-by-side with architects, MEP consultants, contractors, and project managers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       8. CALL TO ACTION SECTION
       ========================================== -->
    <section class="sm-cta-banner">
        <div class="sm-cta-overlay"></div>
        <div class="sm-cta-content">
            <h2>Make Better Building Decisions Before Construction Begins</h2>
            <p>
                Partner with Sustainergic Tech to evaluate, optimize, and improve your building’s energy, daylight, airflow, and code performance.
            </p>
            <div class="sm-cta-buttons">
                <a href="contact-us.php" class="sm-btn sm-btn--primary">Discuss Your Simulation Requirements <i class="fa-solid fa-calendar-check"></i></a>
                <a href="contact-us.php" class="sm-btn sm-btn--white-outline">Contact Our Experts <i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       9. RELATED SERVICES (QUERIED FROM HEADER)
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
    $service_projects_title = "Building Simulation & Modeling Projects";
    $service_projects_subtitle = "High-fidelity thermal, daylighting, energy, and Computational Fluid Dynamics (CFD) simulation projects executed by Sustainergic Tech.";
    $service_projects = [
        [
            'title' => 'Netsmartz IT Tower',
            'location' => 'Mohali',
            'tag' => 'CFD & Thermal Model',
            'badge_type' => 'badge-ea',
            'description' => 'Whole-building energy simulation and thermal comfort analysis for high-density IT workstation floors. Predicted indoor air velocity and mean radiant temperatures to prevent hot-spots and cut AC sizing.',
            'image' => 'assets/images/cfd-simulation.png'
        ],
        [
            'title' => 'Appworx Commercial Tower',
            'location' => 'Mohali',
            'tag' => 'Daylight & Energy Model',
            'badge_type' => 'badge-ea',
            'description' => 'Comprehensive daylight simulation and solar heat gain coefficient (SHGC) glass optimization modeling. Calculated Spatial Daylight Autonomy (sDA) to maximize natural illumination while reducing solar radiation.',
            'image' => 'assets/images/daylight-simulation.png'
        ],
        [
            'title' => 'VRS Fintech Square',
            'location' => 'Mohali',
            'tag' => 'Energy Simulation',
            'badge_type' => 'badge-ea',
            'description' => 'Energy simulation modeling for envelope optimization, HVAC chiller sizing, and peak electrical demand reduction. Achieved 24% lower annual energy consumption against baseline ASHRAE 90.1 models.',
            'image' => 'assets/images/energy-simulation.png'
        ],
        [
            'title' => 'Vaibhav Global Head Office',
            'location' => 'Jaipur',
            'tag' => 'Whole Building Simulation',
            'badge_type' => 'badge-ea',
            'description' => 'Whole-building energy modeling evaluating multi-glazed facade options, roof thermal insulation, and variable refrigerant flow performance in arid desert climate conditions.',
            'image' => 'assets/images/simulation-intro.png'
        ],
        [
            'title' => '42 Works Digital Center',
            'location' => 'Mohali',
            'tag' => 'Airflow & Microclimate CFD',
            'badge_type' => 'badge-ea',
            'description' => 'Advanced 3D CFD airflow simulation for server room heat dissipation and open-office ventilation distribution, mitigating stagnant air zones and optimizing supply diffuser placements.',
            'image' => 'assets/images/simulation-hero.png'
        ],
        [
            'title' => 'Vedatam Commercial Mall',
            'location' => 'Gurugram',
            'tag' => 'Atrium Daylight Simulation',
            'badge_type' => 'badge-ea',
            'description' => 'Atrium glass daylighting simulation and glare analysis for retail common walkways, guiding high-performance glass specification and shading louver angles.',
            'image' => 'assets/images/sustainable-architecture.png'
        ],
        [
            'title' => 'Chitkara University Rockefeller Block',
            'location' => 'Zirakpur',
            'tag' => 'Thermal Comfort Model',
            'badge_type' => 'badge-ea',
            'description' => 'PMV/PPD thermal comfort simulation modeling for university lecture halls and computer laboratories, ensuring compliance with NBC 2016 adaptive thermal comfort bands.',
            'image' => 'assets/images/benefits-building.png'
        ],
        [
            'title' => 'The Crest Hills Complex',
            'location' => 'Faridabad',
            'tag' => 'Solar Shading Analysis',
            'badge_type' => 'badge-ea',
            'description' => 'Sun-path solar radiation and shading analysis for residential high-rise towers, evaluating window overhangs and vertical fins to lower summer cooling loads.',
            'image' => 'assets/images/sbi-lho.png'
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
