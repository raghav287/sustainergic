<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <title>Green Building &amp; HVAC Consultants India | Sustainergic Tech</title>
    <meta name="description" content="Sustainergic Tech provides expert Green Building Certification (LEED, IGBC), HVAC engineering, IoT water management, and energy audits across India.">
    <meta name="keywords" content="green building consultant, HVAC engineering India, LEED certification, IGBC certification, energy audit, IoT water management, sustainable building design, Sustainergic Tech">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <?php include 'includes/navbar.php'; ?>

    <!-- ================= HERO SECTION (STATIC REDESIGN - #EE775A BRAND COLOR) ================= -->
    <style>
    /* Scoped Hero Section Styles */
    .hero {
        position: relative;
        padding-top: 180px;
        padding-bottom: 80px;
        overflow: hidden;
        background: #EE775A;
        color: #ffffff;
        min-height: auto;
        display: flex;
        align-items: center;
    }

    /* Completely hide global hero::before circle from style.css */
    .hero::before {
        display: none !important;
        content: none !important;
    }

    /* Ambient subtle watermark */
    .hero-watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: clamp(70px, 12vw, 160px);
        font-weight: 900;
        color: rgba(255, 255, 255, 0.08);
        letter-spacing: 16px;
        white-space: nowrap;
        pointer-events: none;
        user-select: none;
        z-index: 1;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
    }

    .hero-glow-effect {
        display: none;
    }

    .hero .container {
        max-width: 1280px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 50px;
        position: relative;
        z-index: 3;
        padding: 0 24px;
        width: 100%;
    }

    /* Left Content Column */
    .hero-content {
        width: 50%;
        max-width: 580px;
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 18px;
        background: rgba(255, 255, 255, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.38);
        border-radius: 40px;
        color: #ffffff;
        font-size: 12.5px;
        font-weight: 700;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
        backdrop-filter: blur(8px);
    }

    .hero h1 {
        font-size: clamp(28px, 3.2vw, 42px);
        font-weight: 800;
        color: #ffffff;
        line-height: 1.22;
        margin-bottom: 18px;
        letter-spacing: -0.3px;
    }

    .hero h1 span {
        color: #ffffff;
    }

    .hero-content > p {
        font-size: 15px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.92);
        max-width: 520px;
        margin-bottom: 30px;
    }

    /* Action Buttons */
    .hero-buttons {
        display: flex;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        margin-top: 0;
    }

    .btn-primary {
        padding: 14px 30px;
        background: #0f172a;
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
        transition: all 0.3s ease;
        letter-spacing: 0.3px;
        border: none;
        text-decoration: none;
    }

    .btn-primary:hover {
        background: #000000;
        transform: translateY(-2px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.28);
        color: #ffffff;
    }

    .btn-outline {
        padding: 14px 28px;
        background: rgba(255, 255, 255, 0.16);
        border: 1.5px solid rgba(255, 255, 255, 0.45);
        color: #ffffff;
        font-weight: 600;
        font-size: 14px;
        border-radius: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        backdrop-filter: blur(8px);
        text-decoration: none;
    }

    .btn-outline:hover {
        background: rgba(255, 255, 255, 0.3);
        border-color: #ffffff;
        color: #ffffff;
        transform: translateY(-2px);
    }

    /* Right Framed Image Container */
    .hero-image {
        width: 46%;
        position: relative;
        display: flex;
        justify-content: center;
    }

    .hero-image-frame {
        position: relative;
        padding: 12px;
        background: rgba(255, 255, 255, 0.18);
        border: 1.5px solid rgba(255, 255, 255, 0.38);
        border-radius: 28px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
        backdrop-filter: blur(12px);
        width: 100%;
        max-width: 480px;
    }

    .hero-image-frame img {
        width: 100%;
        height: 380px;
        object-fit: cover;
        border-radius: 20px;
        display: block;
    }

    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .hero {
            padding-top: 160px;
            padding-bottom: 60px;
        }
        .hero .container {
            flex-direction: column;
            gap: 36px;
        }
        .hero-content {
            width: 100%;
            max-width: 100%;
            text-align: center;
        }
        .hero-content > p {
            margin-left: auto;
            margin-right: auto;
        }
        .hero-buttons {
            justify-content: center;
        }
        .hero-image {
            width: 100%;
            max-width: 460px;
        }
        .hero-image-frame img {
            height: 340px;
        }
    }

    @media (max-width: 576px) {
        .hero {
            padding-top: 140px;
            padding-bottom: 50px;
        }
        .hero h1 {
            font-size: 28px;
        }
        .hero-image-frame img {
            height: 280px;
        }
        .btn-primary, .btn-outline {
            width: 100%;
        }
    }
    </style>

    <section class="hero">
        <!-- Ambient Watermark & Glow Background -->
        <div class="hero-watermark">SUSTAINABILITY</div>
        <div class="hero-glow-effect"></div>

        <div class="container">
            <!-- Left Content Column -->
            <div class="hero-content">
                <span class="hero-badge">
                    🌱 Sustainable Engineering Solutions
                </span>

                <h1>
                    Building a
                    <span>Greener Future</span>
                    Through Smart Engineering
                </h1>

                <p>
                    Sustainergic Tech provides Green Building Certification,
                    Energy Simulation, HVAC Design, Renewable Energy Solutions,
                    Building Commissioning and Sustainability Consulting to help
                    organizations create energy-efficient and environmentally
                    responsible buildings.
                </p>

                <div class="hero-buttons">
                    <a href="contact-us.php" class="btn-primary">
                        Get a Consultation
                    </a>
                    <a href="#services" class="btn-outline">
                        Explore Services
                    </a>
                </div>
            </div>

            <!-- Right Image Framed Container -->
            <div class="hero-image">
                <div class="hero-image-frame">
                    <img src="assets/images/hero.png" alt="Green Building Engineering">
                </div>
            </div>
        </div>
    </section>

    <!--==========================
        SERVICES SECTION
    ===========================-->

    <section class="services-section">

        <div class="container">

            <div class="services-heading">

                <h2>
                    Our <span>Services</span>
                </h2>

            </div>

            <div class="services-swiper-container">
                <div class="swiper services-swiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1: Green Certification -->
                        <div class="swiper-slide">
                            <a href="green-building-certification.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/green-building.png" alt="Green Certification">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-leaf"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>Green Certification</h3>
                                    <p>
                                        IGBC, LEED, BREEAM,  WELL and GRIHA certification expertise to help your project achieve the highest sustainability ratings.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 2: Audits -->
                        <div class="swiper-slide">
                            <a href="audits.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/energy-audit.png" alt="Audits">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-clipboard-check"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>Audits</h3>
                                    <p>
                                        Comprehensive Energy, Water, and Waste audits to identify inefficiencies, reduce consumption, and optimize resource performance.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 3: HTS -->
                        <div class="swiper-slide">
                            <a href="hybrid-thermal-solar-panel.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/hts-hero.png" alt="Hybrid Thermal Solar (HTS) Panel">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-solar-panel"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>Hybrid Thermal Solar (HTS) Panel</h3>
                                    <p>
                                        Innovative dual-generation HTS panels producing both clean electricity and thermal energy from a single integrated solar collector.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 4: IoT Water Solutions -->
                        <div class="swiper-slide">
                            <a href="iot-water-solution.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/water-audit.png" alt="IoT Water Solution">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-droplet"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>IoT Water Solution</h3>
                                    <p>
                                        Smart, real-time water monitoring, flow tracking, and automated analytics powered by IoT sensors to prevent leakages and waste.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                        <!-- Slide 5: Radiant Heating & Cooling System -->
                        <div class="swiper-slide">
                            <a href="radiant-heating-cooling-system.php" class="service-card">
                                <div class="service-image">
                                    <img src="assets/images/radiant-hero.png" alt="Radiant Heating & Cooling System">
                                    <div class="service-image-icon">
                                        <i class="fa-solid fa-temperature-arrow-down"></i>
                                    </div>
                                </div>
                                <div class="service-body">
                                    <h3>Radiant Heating &amp; Cooling System</h3>
                                    <p>
                                        Advanced hydronic solutions delivering 30–40% energy savings, silent draft-free comfort, and uniform temperature distribution.
                                    </p>
                                    <span class="service-link">
                                        Learn More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="services-swiper-pagination"></div>

                </div>

                <!-- Navigation Arrows -->
                <div class="services-swiper-btn services-swiper-prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </div>
                <div class="services-swiper-btn services-swiper-next">
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>

            <div class="services-cta">

                <a href="#" class="btn-primary">
                    <i class="fa-solid fa-layer-group"></i> View All  Services
                </a>

            </div>

        </div>

    </section>



    <!--==========================
        HVAC SERVICES SECTION
    ===========================-->
    <section class="hvac-split-section">
        <div class="container">
            <div class="hvac-split-wrapper">
                
                <!-- Left Side: Information Panel -->
                <div class="hvac-info-panel">
                    <div class="panel-content">
                        <span class="hvac-accent-badge">
                            <i class="fa-solid fa-bolt-lightning"></i> Smart HVAC Engineering
                        </span>
                        <h2>Intelligent <span>Climate Systems</span></h2>
                        <p>
                            We engineer next-generation HVAC solutions designed for net-zero performance, optimal air quality, and maximum thermal comfort.
                        </p>
                        
                        <div class="hvac-stats-row">
                            <div class="stat-box">
                                <span class="stat-number">40%</span>
                                <span class="stat-label">Energy Saved</span>
                            </div>
                            <div class="stat-box">
                                <span class="stat-number">Zero</span>
                                <span class="stat-label">Carbon Goal</span>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#" class="hvac-panel-btn">
                        Explore All Services <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
                
                <!-- Right Side: 2x2 Grid of Custom Cards -->
                <div class="hvac-services-grid">
                    
                    <!-- Card 1 -->
                    <div class="hvac-grid-card">
                        <div class="card-header">
                            <div class="card-icon-box">
                                <i class="fa-solid fa-temperature-half"></i>
                            </div>
                            <span class="card-number">01</span>
                        </div>
                        <div class="card-body">
                            <h3>Radiant Heating & Cooling</h3>
                            <p>Hydronic piping embedded in building surfaces for energy-efficient, draft-free thermal comfort.</p>
                        </div>
                        <div class="card-footer">
                            <span class="card-tag">30% Saved</span>
                            <span class="card-tag">Draft-Free</span>
                            <span class="card-tag">Hydronic</span>
                        </div>
                        <a href="#" class="card-overlay-link" aria-label="Radiant Heating & Cooling"></a>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="hvac-grid-card">
                        <div class="card-header">
                            <div class="card-icon-box">
                                <i class="fa-solid fa-earth-americas"></i>
                            </div>
                            <span class="card-number">02</span>
                        </div>
                        <div class="card-body">
                            <h3>Geothermal Systems</h3>
                            <p>Ground-source thermal loop integration for high-performance, renewable heating and cooling.</p>
                        </div>
                        <div class="card-footer">
                            <span class="card-tag">Renewable</span>
                            <span class="card-tag">COP 4.5+</span>
                            <span class="card-tag">Low OPEX</span>
                        </div>
                        <a href="#" class="card-overlay-link" aria-label="Geothermal Energy Systems"></a>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="hvac-grid-card">
                        <div class="card-header">
                            <div class="card-icon-box">
                                <i class="fa-solid fa-wind"></i>
                            </div>
                            <span class="card-number">03</span>
                        </div>
                        <div class="card-body">
                            <h3>Variable Refrigerant (VRF)</h3>
                            <p>Zoned climate control systems offering high partial-load efficiency and compact footprints.</p>
                        </div>
                        <div class="card-footer">
                            <span class="card-tag">Zoned Comfort</span>
                            <span class="card-tag">High SEER</span>
                            <span class="card-tag">Flexible</span>
                        </div>
                        <a href="#" class="card-overlay-link" aria-label="Variable Refrigerant Flow"></a>
                    </div>
                    
                    <!-- Card 4 -->
                    <div class="hvac-grid-card">
                        <div class="card-header">
                            <div class="card-icon-box">
                                <i class="fa-solid fa-fan"></i>
                            </div>
                            <span class="card-number">04</span>
                        </div>
                        <div class="card-body">
                            <h3>Mechanical Ventilation</h3>
                            <p>Fresh air circulation with thermal energy recovery and filtration for pristine indoor air quality.</p>
                        </div>
                        <div class="card-footer">
                            <span class="card-tag">ERVs / HRVs</span>
                            <span class="card-tag">Fresh Air</span>
                            <span class="card-tag">HEPA Filter</span>
                        </div>
                        <a href="#" class="card-overlay-link" aria-label="Mechanical Ventilation & IAQ"></a>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--==========================
        WORKING PROCESS
    ===========================-->
    <section class="process-section">
        <div class="container">
            <div class="process-split-wrapper">
                
                <!-- Left Sticky Heading Panel -->
                <div class="process-left-col">
                    <div class="process-sticky-panel">
                        <!-- <span class="process-badge">
                            <i class="fa-solid fa-gears"></i> Our Methodology
                        </span> -->
                        <h2>Our <span>Working Process</span></h2>
                        <p>
                            A structured, data-driven methodology that ensures every engineering and sustainability project delivers measurable, certifiable results.
                        </p>
                        <div class="process-cta-box">
                            <a href="contact-us.php" class="btn-primary">
                                Partner With Us <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Right Vertical Timeline -->
                <div class="process-timeline">
                    
                    <!-- Timeline Node 1 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">01</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Project Understanding</h3>
                            <p>Deep-dive stakeholder workshops and site feasibility analysis to align sustainability goals with business objectives and regulatory compliance.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Node 2 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">02</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-database"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Data Acquisition</h3>
                            <p>Comprehensive on-site surveys, utility audits, BIM extraction and historical consumption analysis to build an accurate performance baseline.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Node 3 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">03</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-cube"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Process Modeling</h3>
                            <p>Scientific energy simulation, thermal modeling and CFD analysis using industry-leading tools to design and validate every engineering decision.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Node 4 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">04</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Compare & Validate</h3>
                            <p>Side-by-side comparison of simulation outputs against real-world site data to calibrate models and close any performance gaps before implementation.</p>
                        </div>
                    </div>
                    
                    <!-- Timeline Node 5 -->
                    <div class="timeline-node">
                        <div class="node-number-marker">
                            <span class="node-num">05</span>
                            <div class="node-icon-glow">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                        </div>
                        <div class="node-card">
                            <h3>Final Results</h3>
                            <p>Commissioning, handover and certification support with post-occupancy monitoring to ensure promised energy savings and green ratings are achieved.</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>


    <!--==========================
        ABOUT US
===========================-->

    <section class="about-section">

        <div class="container">

            <div class="about-image">
                <img src="assets/images/home-about.png" alt="About Sustainergic Tech">
                <div class="about-experience-badge">
                    <span class="abt-num">15+</span>
                    <span class="abt-lbl">Years Experience</span>
                </div>
            </div>

            <div class="about-content">

                <span class="section-badge">About Sustainergic</span>

                <h2>We Engineer Energy and Water Optimization in the Built Environment</h2>

                <p>
                    Sustainergic Tech is a leading sustainability engineering and
                    green building consultancy delivering innovative solutions in
                    Green Building Certification, Energy Simulation, HVAC Design,
                    Renewable Energy Systems and more.
                </p>

                <ul class="about-features">
                    <li><i class="fas fa-check-circle"></i> Green Building Certification</li>
                    <li><i class="fas fa-check-circle"></i> Energy Efficient Design</li>
                    <li><i class="fas fa-check-circle"></i> Hybrid Thermal Solar Panels </li>
                    <li><i class="fas fa-check-circle"></i> Expert Engineering Team</li>
                </ul>

                <a href="about.php" class="about-btn">Learn More</a>

            </div>

        </div>

    </section>


    <!--==========================
        WHY CHOOSE US
===========================-->

    <section class="why-choose-section">

        <div class="container">

            <div class="why-choose-heading">

                <span class="section-badge">
                    Why Choose Us
                </span>

                <h2>
                    Reasons to <span>Partner</span> With Sustainergic
                </h2>

                <p>
                    We combine deep engineering expertise with a genuine passion for
                    sustainability to deliver outcomes that exceed expectations.
                </p>

            </div>

            <div class="why-choose-grid">

                <div class="why-choose-card">

                    <div class="why-choose-icon">
                        <i class="fa-solid fa-award"></i>
                    </div>

                    <h3>Certified Experts</h3>

                    <p>
                        LEED, BREEAM, IGBC, WELL and GRIHA accredited professionals
                        delivering globally recognized certification standards.
                    </p>

                </div>

                <div class="why-choose-card">

                    <div class="why-choose-icon">
                        <i class="fa-solid fa-chart-column"></i>
                    </div>

                    <h3>Data-Driven Approach</h3>

                    <p>
                        Advanced energy simulation, thermal modeling and lifecycle
                        analysis ensure every decision is backed by rigorous data.
                    </p>

                </div>

                <div class="why-choose-card">

                    <div class="why-choose-icon">
                        <i class="fa-solid fa-diagram-project"></i>
                    </div>

                    <h3>End-to-End Delivery</h3>

                    <p>
                        From concept design and documentation to on-site commissioning
                        and post-occupancy evaluation, we manage every phase.
                    </p>

                </div>

                <div class="why-choose-card">

                    <div class="why-choose-icon">
                        <i class="fa-solid fa-bolt-lightning"></i>
                    </div>

                    <h3>Proven Energy/Water Savings</h3>

                    <p>
                        500+ completed projects with an average 40% reduction in energy
                        consumption and measurable operational cost savings.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!--==========================
        PROJECTS
===========================-->

    <section class="projects-section">

        <div class="projects-container">

            <div class="projects-heading">
                <h2>Our Projects</h2>
            </div>

            <div class="projects-swiper-container">
                <div class="swiper projects-swiper">
                    <div class="swiper-wrapper">

                        <!-- Project 1: Green Building Certification -->
                        <div class="swiper-slide">
                            <article class="project-card">
                                <div class="project-image">
                                    <img src="assets/images/energy-hyatt.png" alt="Hyatt Regency, Dehradun">
                                    <span class="project-tag">Green Certification</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Dehradun, UK</span>
                                        <span><i class="fa-solid fa-building-shield"></i> IGBC Platinum</span>
                                    </div>
                                    <h3>Hyatt Regency, Dehradun</h3>
                                    <p>
                                        Comprehensive green building certification, thermal envelope optimization, and energy reduction strategies for a luxury resort.
                                    </p>
                                </div>
                            </article>
                        </div>

                        <!-- Project 2: Energy & Safety Audits -->
                        <div class="swiper-slide">
                            <article class="project-card">
                                <div class="project-image">
                                    <img src="assets/images/energy-holiday.png" alt="Holiday Inn, Jaipur">
                                    <span class="project-tag project-tag--sage">Energy Audit</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Jaipur, RJ</span>
                                        <span><i class="fa-solid fa-chart-line"></i> Energy & HVAC</span>
                                    </div>
                                    <h3>Holiday Inn, Jaipur</h3>
                                    <p>
                                        Detailed electrical safety and HVAC thermal performance audit delivering actionable energy conservation measures.
                                    </p>
                                </div>
                            </article>
                        </div>

                        <!-- Project 3: ECSBC Compliance -->
                        <div class="swiper-slide">
                            <article class="project-card">
                                <div class="project-image">
                                    <img src="assets/images/ecsbc-spj.png" alt="SPJ Vedatam Mall">
                                    <span class="project-tag project-tag--coral">ECSBC Compliance</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Gurugram, HR</span>
                                        <span><i class="fa-solid fa-shield-halved"></i> ECBC Code</span>
                                    </div>
                                    <h3>SPJ Vedatam Mall</h3>
                                    <p>
                                        Energy Conservation Building Code (ECSBC) compliance modeling, glass specification, and efficient HVAC integration.
                                    </p>
                                </div>
                            </article>
                        </div>

                        <!-- Project 4: Commissioning Authority -->
                        <div class="swiper-slide">
                            <article class="project-card">
                                <div class="project-image">
                                    <img src="assets/images/comission-martin.png" alt="Martin Luther Block, Chitkara">
                                    <span class="project-tag">Building Commissioning</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Rajpura, PB</span>
                                        <span><i class="fa-solid fa-clipboard-check"></i> Third-Party Cx</span>
                                    </div>
                                    <h3>Martin Luther Block, Chitkara</h3>
                                    <p>
                                        Comprehensive third-party commissioning of MEP systems, air balancing, and BMS controls for optimal operational performance.
                                    </p>
                                </div>
                            </article>
                        </div>

                        <!-- Project 5: Precision Medical Cooling -->
                        <div class="swiper-slide">
                            <article class="project-card">
                                <div class="project-image">
                                    <img src="assets/images/medical-aims.png" alt="AIIMS, Delhi">
                                    <span class="project-tag project-tag--sage">Precision Medical</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> New Delhi</span>
                                        <span><i class="fa-solid fa-hospital"></i> Medical Cooling</span>
                                    </div>
                                    <h3>AIIMS, Delhi</h3>
                                    <p>
                                        Specialized ultra-precise temperature and humidity control cooling systems for critical medical equipment and research labs.
                                    </p>
                                </div>
                            </article>
                        </div>

                        <!-- Project 6: Industrial HVAC Solutions -->
                        <div class="swiper-slide">
                            <article class="project-card">
                                <div class="project-image">
                                    <img src="assets/images/industry-hindustan.png" alt="Hindustan Unilever Facility">
                                    <span class="project-tag project-tag--coral">Industrial HVAC</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Northern Region</span>
                                        <span><i class="fa-solid fa-industry"></i> Cleanroom Air</span>
                                    </div>
                                    <h3>Hindustan Unilever Facility</h3>
                                    <p>
                                        High-efficiency industrial ventilation, cleanroom environmental control, and waste heat recovery for manufacturing plant.
                                    </p>
                                </div>
                            </article>
                        </div>

                        <!-- Project 7: Energy Simulation & Modeling -->
                        <div class="swiper-slide">
                            <article class="project-card">
                                <div class="project-image">
                                    <img src="assets/images/ecsbc-42.png" alt="42 Works Campus">
                                    <span class="project-tag">Energy Simulation</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Mohali, PB</span>
                                        <span><i class="fa-solid fa-vr-cardboard"></i> 3D Modeling</span>
                                    </div>
                                    <h3>42 Works Campus</h3>
                                    <p>
                                        Advanced 3D building energy simulation, solar shade analysis, and CFD airflow modeling for optimized daylighting and efficiency.
                                    </p>
                                </div>
                            </article>
                        </div>

                        <!-- Project 8: IoT Water Solution -->
                        <div class="swiper-slide">
                            <article class="project-card">
                                <div class="project-image">
                                    <img src="assets/images/energy-gold.png" alt="Gold Plus Glass Plant">
                                    <span class="project-tag project-tag--sage">IoT Water Solution</span>
                                </div>
                                <div class="project-body">
                                    <div class="project-meta">
                                        <span><i class="fa-solid fa-map-location-dot"></i> Roorkee, UK</span>
                                        <span><i class="fa-solid fa-droplet"></i> Smart Water IoT</span>
                                    </div>
                                    <h3>Gold Plus Glass Plant</h3>
                                    <p>
                                        Real-time IoT sensor network deployment for industrial water management, consumption auditing, and automated flow optimization.
                                    </p>
                                </div>
                            </article>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="projects-swiper-pagination"></div>

                </div>

                <!-- Navigation Arrows -->
                <div class="projects-swiper-btn projects-swiper-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
                <div class="projects-swiper-btn projects-swiper-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>

            <div class="projects-cta-bottom">
                <a href="#" class="projects-view-all">
                    View All Projects <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>

    </section>

    <?php include 'includes/cta.php'; ?>
    <?php include 'includes/testimonials.php'; ?>


    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
