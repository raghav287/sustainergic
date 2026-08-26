<?php
/**
 * Sustainergic Tech - Carbon Accounting & Advisory Services Page
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>Carbon Accounting & Advisory | Sustainergic Tech</title>
    <meta name="description" content="Comprehensive carbon measurement, lifecycle assessment, emissions reporting, and mitigation support to help organizations understand and reduce their climate impact.">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/audits.css">

    <!-- Localized style overrides to reuse audits.css without writing a new CSS file -->
    <style>
        /* Color Accent Overrides for Carbon Accounting */
        .aud-label--carbon {
            color: var(--accent-green);
        }
        .aud-label--carbon::before {
            background-color: var(--accent-green);
        }
        
        /* Scope 1, Scope 2, Scope 3 Colors */
        :root {
            --carb-scope1: var(--accent-green); /* Deep Green */
            --carb-scope1-light: var(--accent-green-light);
            --carb-scope2: #0284c7; /* Teal */
            --carb-scope2-light: #e0f2fe;
            --carb-scope3: #3b82f6; /* Soft Blue */
            --carb-scope3-light: #eff6ff;
        }
        
        /* Comparison grid overriding to 3 columns */
        .carbon-comparison-grid {
            grid-template-columns: repeat(3, 1fr) !important;
            gap: 30px !important;
        }
        
        .aud-comp-card--scope1 {
            border-top: 5px solid var(--carb-scope1) !important;
        }
        .aud-comp-card--scope1 .aud-comp-icon {
            background-color: var(--carb-scope1-light) !important;
            color: var(--carb-scope1) !important;
        }
        .aud-comp-card--scope1 .aud-comp-item i {
            color: var(--carb-scope1) !important;
        }
        
        .aud-comp-card--scope2 {
            border-top: 5px solid var(--carb-scope2) !important;
        }
        .aud-comp-card--scope2 .aud-comp-icon {
            background-color: var(--carb-scope2-light) !important;
            color: var(--carb-scope2) !important;
        }
        .aud-comp-card--scope2 .aud-comp-item i {
            color: var(--carb-scope2) !important;
        }
        
        .aud-comp-card--scope3 {
            border-top: 5px solid var(--carb-scope3) !important;
        }
        .aud-comp-card--scope3 .aud-comp-icon {
            background-color: var(--carb-scope3-light) !important;
            color: var(--carb-scope3) !important;
        }
        .aud-comp-card--scope3 .aud-comp-item i {
            color: var(--carb-scope3) !important;
        }
        
        /* Alternating services image hover overlays and styling */
        .aud-alt-row:nth-child(2) .aud-alt-icon-box {
            background-color: var(--carb-scope2-light) !important;
            color: var(--carb-scope2) !important;
        }
        .aud-alt-row:nth-child(2) .aud-results-item i {
            color: var(--carb-scope2) !important;
        }
        .aud-btn--carbon-teal {
            background-color: var(--carb-scope2) !important;
            color: var(--aud-white) !important;
            box-shadow: 0 4px 14px rgba(2, 132, 199, 0.25) !important;
        }
        .aud-btn--carbon-teal:hover {
            background-color: #0369a1 !important;
            transform: translateY(-3px) !important;
        }

        .aud-alt-row:nth-child(4) .aud-alt-icon-box {
            background-color: var(--carb-scope3-light) !important;
            color: var(--carb-scope3) !important;
        }
        .aud-alt-row:nth-child(4) .aud-results-item i {
            color: var(--carb-scope3) !important;
        }
        .aud-btn--carbon-blue {
            background-color: var(--carb-scope3) !important;
            color: var(--aud-white) !important;
            box-shadow: 0 4px 14px rgba(59, 130, 246, 0.25) !important;
        }
        .aud-btn--carbon-blue:hover {
            background-color: #2563eb !important;
            transform: translateY(-3px) !important;
        }
        
        /* Localized Assess and support card overrides */
        .aud-assess-card--scope1:hover {
            border-color: var(--carb-scope1) !important;
        }
        .aud-assess-card--scope1:hover .aud-assess-icon {
            background-color: var(--carb-scope1) !important;
            color: var(--aud-white) !important;
        }
        .aud-assess-card--scope2:hover {
            border-color: var(--carb-scope2) !important;
        }
        .aud-assess-card--scope2:hover .aud-assess-icon {
            background-color: var(--carb-scope2) !important;
            color: var(--aud-white) !important;
        }
        .aud-assess-card--scope3:hover {
            border-color: var(--carb-scope3) !important;
        }
        .aud-assess-card--scope3:hover .aud-assess-icon {
            background-color: var(--carb-scope3) !important;
            color: var(--aud-white) !important;
        }
        
        .aud-assess-card--scope1 .aud-assess-icon {
            background-color: var(--carb-scope1-light) !important;
            color: var(--carb-scope1) !important;
        }
        .aud-assess-card--scope2 .aud-assess-icon {
            background-color: var(--carb-scope2-light) !important;
            color: var(--carb-scope2) !important;
        }
        .aud-assess-card--scope3 .aud-assess-icon {
            background-color: var(--carb-scope3-light) !important;
            color: var(--carb-scope3) !important;
        }
        .carb-banner {
            background-image: url('assets/images/carbon-hero.png') !important;
        }
    </style>
</head>

<body class="page-carbon">

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
                        <li class="text-black" aria-current="page">Carbon Accounting & Advisory</li>
                    </ul>
                    
                    <h1 class="aud-hero-title">
                        Carbon Accounting & <span>Advisory Services</span>
                    </h1>
                    
                    <p class="aud-hero-subtitle">
                        Comprehensive carbon measurement, lifecycle assessment, emissions reporting, and mitigation support to help organizations understand and reduce their climate impact.
                    </p>
                    
                    <div class="aud-hero-actions">
                        <a href="contact-us.php" class="aud-btn aud-btn--primary">
                            Request a Carbon Assessment <i class="fa-solid fa-calculator"></i>
                        </a>
                        <a href="#expertise" class="aud-btn aud-btn--outline">
                            Explore Our Services <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Visual -->
                <div class="aud-hero-visual">
                    <div class="aud-hero-img-wrapper">
                        <img src="assets/images/carbon-hero.png" alt="Corporate facility showing floating paths for Scope 1 direct, Scope 2 indirect, and Scope 3 supply-chain emissions">
                    </div>
                    
                    <!-- Floating Scope Indicator cards -->
                    <div class="aud-hero-floating-card aud-hero-floating-card--one" style="top: 10%;">
                        <div class="aud-hero-fc-icon" style="background-color: var(--carb-scope1-light); color: var(--carb-scope1);">
                            <i class="fa-solid fa-industry"></i>
                        </div>
                        <div class="aud-hero-fc-text">
                            <h5>Scope 1 & 2</h5>
                            <p>Direct & Utility</p>
                        </div>
                    </div>
                    
                    <div class="aud-hero-floating-card aud-hero-floating-card--two" style="bottom: 10%;">
                        <div class="aud-hero-fc-icon" style="background-color: var(--carb-scope3-light); color: var(--carb-scope3);">
                            <i class="fa-solid fa-truck-ramp-box"></i>
                        </div>
                        <div class="aud-hero-fc-text">
                            <h5>Scope 3</h5>
                            <p>Value Chain</p>
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
            <div class="aud-grid-2 aud-intro-grid">
                <!-- Left Visual Column -->
                <div class="aud-intro-visual-wrapper">
                    <img src="assets/images/carbon-intro.png" alt="Clean energy commercial facility showing supply chain logistics, electricity meters, and emissions logs" class="aud-intro-img">
                    <div class="aud-intro-badge" style="background-color: var(--carb-scope1);">
                        <strong style="color: var(--aud-white);">GHG</strong>
                        <span style="color: rgba(255, 255, 255, 0.85);">Protocol Method</span>
                    </div>
                </div>

                <!-- Right Copy Column -->
                <div class="aud-intro-content">
                    <span class="aud-label aud-label--carbon">Climate Measurement & Strategy</span>
                    <h2 class="aud-title-main">Turning Emissions Data into <span>Meaningful Climate Action</span></h2>
                    <p class="aud-text-lead">
                        Sustainergic Tech helps organizations measure, understand, report, and reduce greenhouse gas emissions across their operations, products, projects, and value chains. Our advisory services support ESG disclosure, product transparency, regulatory preparedness, and long-term decarbonization.
                    </p>
                    
                    <!-- Core capabilities Grid -->
                    <div class="aud-intro-capabilities" style="margin: 24px 0;">
                        <!-- Cap 1 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-globe"></i></div>
                            <div class="aud-cap-text">
                                <h4>Scope 1, 2, and 3 Calculation</h4>
                                <p>Rigorous direct and value-chain carbon inventory mapping.</p>
                            </div>
                        </div>
                        <!-- Cap 2 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-arrows-spin"></i></div>
                            <div class="aud-cap-text">
                                <h4>Life Cycle Assessment (LCA)</h4>
                                <p>Cradle-to-grave environmental impact studies for products.</p>
                            </div>
                        </div>
                        <!-- Cap 3 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-file-shield"></i></div>
                            <div class="aud-cap-text">
                                <h4>Environmental Product Declarations</h4>
                                <p>Technical preparation of verified, transparent EPD reports.</p>
                            </div>
                        </div>
                        <!-- Cap 4 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-chart-line"></i></div>
                            <div class="aud-cap-text">
                                <h4>GHG Emissions Reporting</h4>
                                <p>Framework compliance reporting (CDP, BRSR, GRI, etc.).</p>
                            </div>
                        </div>
                        <!-- Cap 5 -->
                        <div class="aud-cap-item">
                            <div class="aud-cap-icon"><i class="fa-solid fa-seedling"></i></div>
                            <div class="aud-cap-text">
                                <h4>Carbon Mitigation Strategy</h4>
                                <p>Practical roadmap development to execute real carbon reductions.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Trust highlights -->
                    <div class="aud-trust-highlights" style="padding-top: 18px;">
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-square-check" style="color: var(--carb-scope1);"></i> Recognized Methodologies
                        </div>
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-square-check" style="color: var(--carb-scope1);"></i> Transparent Documentation
                        </div>
                        <div class="aud-trust-item">
                            <i class="fa-solid fa-square-check" style="color: var(--carb-scope1);"></i> Actionable Roadmaps
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       3. CARBON ACCOUNTING SERVICES SECTION
       ========================================== -->
    <section class="aud-section aud-section--light" id="expertise">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label aud-label--carbon">Our Carbon Services</span>
                <h2 class="aud-title-main">End-to-End Support for Measuring and <span>Managing Carbon Impact</span></h2>
            </div>

            <div class="aud-alternating-services">
                <!-- 1. Scope 1, Scope 2 & Scope 3 Calculation -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/emissions-calculation.png" alt="Schematic showing organization boundaries connected to fuel combustion, purchased electricity, and logistics distribution">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box" style="background-color: var(--carb-scope1-light); color: var(--carb-scope1);"><i class="fa-solid fa-circle-nodes"></i></div>
                            <h3>Scope 1, Scope 2 & Scope 3 Calculation</h3>
                        </div>
                        <p>
                            Sustainergic Tech calculates Scope 1, Scope 2, and Scope 3 greenhouse gas emissions using internationally accepted methodologies. Our assessments provide organizations with a clear understanding of their direct and indirect emissions, enabling effective carbon management, ESG reporting, and informed sustainability planning.
                        </p>
                        
                        <div style="background-color: var(--aud-white); padding: 16px; border-radius: 12px; border: 1px solid var(--aud-border); margin-bottom: 20px;">
                            <div style="font-size: 13px; margin-bottom: 6px;"><strong>Scope 1 — Direct Emissions:</strong> Fuel combustion, company-owned vehicles, processes.</div>
                            <div style="font-size: 13px; margin-bottom: 6px;"><strong>Scope 2 — Utility Indirect:</strong> Purchased electricity, heating, cooling, or steam.</div>
                            <div style="font-size: 13px;"><strong>Scope 3 — Value-Chain Indirect:</strong> Upstream materials, downstream use, distribution.</div>
                        </div>

                        <div class="aud-results-grid" style="margin-bottom: 20px;">
                            <div class="aud-results-col">
                                <h4>Key Service Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Boundary definition</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Data validation & factors</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Scope-wise calculation</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Carbon inventory logs</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Practical Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Clear emissions inventory</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Identified hotspots</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Ready for ESG reporting</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Reduction baseline setup</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--primary">
                            Discuss Your Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 2. Life Cycle Assessment (LCA) -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/lca-stages.png" alt="Circular lifecycle cradle-to-grave diagram mapping raw extraction to reuse and recycling">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box"><i class="fa-solid fa-arrows-spin"></i></div>
                            <h3>Life Cycle Assessment (LCA)</h3>
                        </div>
                        <p>
                            Life Cycle Assessment evaluates the environmental impacts of a product, material, or building throughout its entire lifecycle—from raw material extraction to disposal. Sustainergic Tech performs LCA studies to identify opportunities for reducing environmental impacts and supporting sustainable design and procurement decisions.
                        </p>
                        
                        <div class="aud-results-grid" style="margin-bottom: 20px;">
                            <div class="aud-results-col">
                                <h4>Key Assessment Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Raw materials & processing</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Manufacturing stages</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Transportation & usage</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> End-of-life disposal</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Practical Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Identified impact hotspots</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Optimized design parameters</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Environmental transparency</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Basis for EPD creation</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--carbon-teal">
                            Discuss Your Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 3. Environmental Product Declaration (EPD) -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/epd-product.png" alt="A green product sample with material specs and EPD declaration checklist indicators">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box" style="background-color: var(--carb-scope1-light); color: var(--carb-scope1);"><i class="fa-solid fa-file-invoice"></i></div>
                            <h3>Environmental Product Declaration (EPD)</h3>
                        </div>
                        <p>
                            Environmental Product Declarations provide verified environmental information about products based on life cycle assessment. Sustainergic Tech assists manufacturers in preparing technical documentation, conducting assessments, and developing EPDs that improve product transparency, sustainability credentials, and market competitiveness.
                        </p>
                        
                        <div class="aud-results-grid" style="margin-bottom: 20px;">
                            <div class="aud-results-col">
                                <h4>Key Service Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Product data collection</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> LCA compilation support</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Environmental indicators</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Verification coordination</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Practical Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Verified EPD documentation</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Increased green credibility</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Procurement compatibility</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Product differentiation</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--primary">
                            Discuss Your Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 4. GHG Emission Reporting -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/ghg-reporting.png" alt="Emissions-reporting dashboard tracking Scope 1, 2, and 3 logs against disclosure compliance targets">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box"><i class="fa-solid fa-chart-pie"></i></div>
                            <h3>GHG Emission Reporting</h3>
                        </div>
                        <p>
                            GHG Emission Reporting enables organizations to quantify, monitor, and disclose greenhouse gas emissions in accordance with recognized reporting frameworks. Sustainergic Tech prepares accurate emissions inventories and reporting documentation that support regulatory compliance, sustainability initiatives, and ESG commitments.
                        </p>
                        
                        <div class="aud-results-grid" style="margin-bottom: 20px;">
                            <div class="aud-results-col">
                                <h4>Key Service Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Emissions data validation</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Framework-aligned grids</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Multi-period comparison</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Transparency audits preparation</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Practical Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Standardized carbon reports</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Streamlined ESG filing inputs</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Tracked emissions trends</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check"></i> Enhanced climate trust</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--carbon-blue">
                            Discuss Your Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- 5. Carbon Footprinting & Mitigation Strategies -->
                <div class="aud-alt-row">
                    <div class="aud-alt-visual">
                        <img src="assets/images/carbon-mitigation.png" alt="Transition graphic showing high-emission industrial baseline moving toward wind, solar, and optimized HVAC efficiency">
                    </div>
                    <div class="aud-alt-content">
                        <div class="aud-alt-content-header">
                            <div class="aud-alt-icon-box" style="background-color: var(--carb-scope1-light); color: var(--carb-scope1);"><i class="fa-solid fa-leaf"></i></div>
                            <h3>Carbon Footprinting & Mitigation Strategies</h3>
                        </div>
                        <p>
                            Carbon Footprinting measures the total greenhouse gas emissions associated with an organization, product, or project. Sustainergic Tech identifies major emission sources and develops practical mitigation strategies, including energy efficiency, renewable energy integration, and carbon reduction initiatives, to support long-term climate goals.
                        </p>
                        
                        <div class="aud-results-grid" style="margin-bottom: 20px;">
                            <div class="aud-results-col">
                                <h4>Key Service Areas:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Organizational footprinting</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Hotspot mitigation planning</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Clean energy integration</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Supply chain engagement</div>
                                </div>
                            </div>
                            <div class="aud-results-col">
                                <h4>Practical Outcomes:</h4>
                                <div class="aud-results-list">
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Actionable reduction roadmap</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Energy-efficiency savings</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Practical footprint baselines</div>
                                    <div class="aud-results-item"><i class="fa-solid fa-check" style="color: var(--carb-scope1);"></i> Structured carbon pathways</div>
                                </div>
                            </div>
                        </div>

                        <a href="contact-us.php" class="aud-btn aud-btn--primary">
                            Discuss Your Requirements <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       4. EMISSION SCOPES EXPLAINED
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label aud-label--carbon">Understanding Your Emissions</span>
                <h2 class="aud-title-main">A Complete View Across <span>Scope 1, Scope 2 and Scope 3</span></h2>
            </div>

            <!-- Overridden using carbon-comparison-grid layout -->
            <div class="aud-comparison-grid carbon-comparison-grid">
                <!-- Scope 1 Column -->
                <div class="aud-comp-card aud-comp-card--scope1">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-industry"></i></div>
                        <h3>Scope 1</h3>
                    </div>
                    <div style="font-size: 13.5px; font-weight: 700; text-transform: uppercase; margin-bottom: 12px; color: var(--carb-scope1);">Direct Emissions</div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Fuel combustion</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Company vehicles</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Industrial processes</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Refrigerant leaks</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> On-site equipment</div>
                    </div>
                </div>

                <!-- Scope 2 Column -->
                <div class="aud-comp-card aud-comp-card--scope2">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-plug-circle-bolt"></i></div>
                        <h3>Scope 2</h3>
                    </div>
                    <div style="font-size: 13.5px; font-weight: 700; text-transform: uppercase; margin-bottom: 12px; color: var(--carb-scope2);">Purchased Energy</div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Purchased electricity</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Purchased heating</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Purchased cooling</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Purchased steam</div>
                    </div>
                </div>

                <!-- Scope 3 Column -->
                <div class="aud-comp-card aud-comp-card--scope3">
                    <div class="aud-comp-card-header">
                        <div class="aud-comp-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <h3>Scope 3</h3>
                    </div>
                    <div style="font-size: 13.5px; font-weight: 700; text-transform: uppercase; margin-bottom: 12px; color: var(--carb-scope3);">Value-Chain Emissions</div>
                    <div class="aud-comp-list">
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Purchased goods & services</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Supply transport & logistics</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Business travel & commute</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Waste generated in operations</div>
                        <div class="aud-comp-item"><i class="fa-solid fa-circle-chevron-right"></i> Use of sold products</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       5. CARBON ACCOUNTING PROCESS
       ========================================== -->
    <section class="aud-section aud-section--light">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label aud-label--carbon">How We Work</span>
                <h2 class="aud-title-main">Our Carbon Accounting and <span>Advisory Process</span></h2>
            </div>

            <div class="aud-process-timeline">
                <div class="aud-process-line"></div>
                <div class="aud-process-grid">
                    <!-- Step 1 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">01</div>
                        <h4>Objective & Boundary</h4>
                        <p>Understand the organization, reporting limits, and boundary profiles.</p>
                    </div>

                    <!-- Step 2 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">02</div>
                        <h4>Data Collection</h4>
                        <p>Gather activity records, logistics logs, and raw energy bills.</p>
                    </div>

                    <!-- Step 3 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">03</div>
                        <h4>Data Validation</h4>
                        <p>Review raw logs for complete datasets, consistency, and alignment.</p>
                    </div>

                    <!-- Step 4 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">04</div>
                        <h4>Emissions Calculation</h4>
                        <p>Apply suitable emission factors and protocol formulas to raw values.</p>
                    </div>

                    <!-- Step 5 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">05</div>
                        <h4>Impact & Hotspots</h4>
                        <p>Identify major emissions spikes and optimization targets.</p>
                    </div>

                    <!-- Step 6 -->
                    <div class="aud-process-step">
                        <div class="aud-process-num-wrapper">06</div>
                        <h4>Reporting Roadmap</h4>
                        <p>Prepare ESG advisory files and define practical mitigation paths.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       6. CARBON MITIGATION PATHWAYS
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label aud-label--carbon">From Measurement to Reduction</span>
                <h2 class="aud-title-main">Practical Pathways for <span>Reducing Carbon Emissions</span></h2>
            </div>

            <div class="aud-assess-grid">
                <!-- Card 1 -->
                <div class="aud-assess-card aud-assess-card--scope1">
                    <div class="aud-assess-icon"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                    <h4>Energy-Efficiency Improvements</h4>
                </div>
                <!-- Card 2 -->
                <div class="aud-assess-card aud-assess-card--scope1">
                    <div class="aud-assess-icon"><i class="fa-solid fa-solar-panel"></i></div>
                    <h4>Renewable-Energy Integration</h4>
                </div>
                <!-- Card 3 -->
                <div class="aud-assess-card aud-assess-card--scope1">
                    <div class="aud-assess-icon"><i class="fa-solid fa-fire-burner"></i></div>
                    <h4>Cleaner Fuels & Technologies</h4>
                </div>
                <!-- Card 4 -->
                <div class="aud-assess-card aud-assess-card--scope1">
                    <div class="aud-assess-icon"><i class="fa-solid fa-power-off"></i></div>
                    <h4>Building-System Optimization</h4>
                </div>
                <!-- Card 5 -->
                <div class="aud-assess-card aud-assess-card--scope2">
                    <div class="aud-assess-icon"><i class="fa-solid fa-recycle"></i></div>
                    <h4>Sustainable Material Selection</h4>
                </div>
                <!-- Card 6 -->
                <div class="aud-assess-card aud-assess-card--scope2">
                    <div class="aud-assess-icon"><i class="fa-solid fa-truck-pickup"></i></div>
                    <h4>Low-Carbon Transportation</h4>
                </div>
                <!-- Card 7 -->
                <div class="aud-assess-card aud-assess-card--scope2">
                    <div class="aud-assess-icon"><i class="fa-solid fa-handshake"></i></div>
                    <h4>Supply-Chain Engagement</h4>
                </div>
                <!-- Card 8 -->
                <div class="aud-assess-card aud-assess-card--scope2">
                    <div class="aud-assess-icon"><i class="fa-solid fa-trash-arrow-up"></i></div>
                    <h4>Waste Reduction & Circularity</h4>
                </div>
                <!-- Card 9 -->
                <div class="aud-assess-card aud-assess-card--scope3">
                    <div class="aud-assess-icon"><i class="fa-solid fa-droplet-slash"></i></div>
                    <h4>Water & Resource Efficiency</h4>
                </div>
                <!-- Card 10 -->
                <div class="aud-assess-card aud-assess-card--scope3">
                    <div class="aud-assess-icon"><i class="fa-solid fa-industry"></i></div>
                    <h4>Operational Process Audits</h4>
                </div>
                <!-- Card 11 -->
                <div class="aud-assess-card aud-assess-card--scope3">
                    <div class="aud-assess-icon"><i class="fa-solid fa-users"></i></div>
                    <h4>Employee Awareness</h4>
                </div>
                <!-- Card 12 -->
                <div class="aud-assess-card aud-assess-card--scope1">
                    <div class="aud-assess-icon"><i class="fa-solid fa-gauge"></i></div>
                    <h4>Carbon Performance Monitoring</h4>
                </div>
            </div>
            
            <p style="text-align: center; margin-top: 30px; font-size: 14px; color: var(--aud-text-muted);">
                * Note: Direct emissions reduction is the priority path. Offset mechanisms are positioned solely as a supplementary option for residual emissions.
            </p>
        </div>
    </section>

    <!-- ==========================================
       7. SECTORS WE SUPPORT
       ========================================== -->
    <section class="aud-section aud-section--light-blue">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label aud-label--carbon">Diverse Sectors</span>
                <h2 class="aud-title-main">Carbon Advisory Across <span>Diverse Sectors</span></h2>
            </div>

            <!-- Mapped exactly like facilities grid -->
            <div class="aud-fac-grid">
                <!-- 1 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-building"></i></div>
                    <h4>Commercial Buildings</h4>
                </div>
                <!-- 2 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-city"></i></div>
                    <h4>Real Estate Developments</h4>
                </div>
                <!-- 3 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-industry"></i></div>
                    <h4>Manufacturing Industries</h4>
                </div>
                <!-- 4 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-box-open"></i></div>
                    <h4>Product Manufacturers</h4>
                </div>
                <!-- 5 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-hotel"></i></div>
                    <h4>Hotels & Hospitality</h4>
                </div>
                <!-- 6 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-hospital"></i></div>
                    <h4>Healthcare Facilities</h4>
                </div>
                <!-- 7 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h4>Educational Institutions</h4>
                </div>
                <!-- 8 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-bridge"></i></div>
                    <h4>Infrastructure Projects</h4>
                </div>
                <!-- 9 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-store"></i></div>
                    <h4>Retail & Mixed-Use</h4>
                </div>
                <!-- 10 -->
                <div class="aud-fac-card">
                    <div class="aud-fac-icon"><i class="fa-solid fa-briefcase"></i></div>
                    <h4>Corporate Offices</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       8. KEY BENEFITS SECTION
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-grid-2 aud-benefits-grid">
                <!-- Left: Benefits copy -->
                <div class="aud-benefits-content">
                    <span class="aud-label aud-label--carbon">Better Climate Decision-Making</span>
                    <h2 class="aud-title-main">Benefits of Carbon <span>Accounting and Advisory</span></h2>
                    <p class="aud-text-lead">
                        Quantifying your greenhouse gas inventory establishes reliable carbon baselines, reduces climate regulatory risk, and increases environmental transparency.
                    </p>
                    
                    <div class="aud-benefits-list">
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Clear view of direct & indirect footprint</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Reliable organizational carbon baseline</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Major emission hotspot identification</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved ESG & sustainability reports</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Regulatory & compliance readiness</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Increased environmental transparency</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Stronger stakeholder confidence</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Informed procurement decisions</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Practical carbon-reduction pathways</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Improved resource & energy efficiency</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Support for net-zero targets</span>
                        </div>
                        <div class="aud-benefit-item">
                            <div class="aud-benefit-check"><i class="fa-solid fa-check"></i></div>
                            <span>Structured roadmap for governance</span>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual -->
                <div class="aud-benefits-visual-wrapper">
                    <img src="assets/images/carbon-mitigation.png" alt="Clean energy solar fields and office complex showing carbon footprint reduction baseline tracking">
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
                <span class="aud-label aud-label--carbon">Why Choose Us</span>
                <h2 class="aud-title-main">Why Choose <span>Sustainergic Tech?</span></h2>
            </div>

            <div class="aud-why-grid">
                <!-- 1 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <h4>Integrated carbon and sustainability expertise</h4>
                    <p>We connect carbon mapping with site energy audits and simulation tools, uncovering practical reduction synergies.</p>
                </div>
                <!-- 2 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-sitemap"></i></div>
                    <h4>Support across organizational & product levels</h4>
                    <p>Rigorous calculations spanning organization boundaries, materials systems, and individual product lifecycle stages.</p>
                </div>
                <!-- 3 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-square-check"></i></div>
                    <h4>Recognized calculation methodologies</h4>
                    <p>All inventories are developed strictly in accordance with the GHG Protocol, ISO standards, and EPD rules.</p>
                </div>
                <!-- 4 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                    <h4>Detailed and transparent documentation</h4>
                    <p>We compile audit-ready worksheets and fully traceable factor calculations that simplify ESG verification audits.</p>
                </div>
                <!-- 5 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4>Practical mitigation recommendations</h4>
                    <p>We focus on direct emissions mitigation, including HVAC optimization, electrification, and on-site clean power.</p>
                </div>
                <!-- 6 -->
                <div class="aud-why-card">
                    <div class="aud-why-icon"><i class="fa-solid fa-globe"></i></div>
                    <h4>End-to-end technical advisory support</h4>
                    <p>From initial scopes boundaries mapping to verified ESG disclosure support, we are your long-term decarbonization partner.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       10. CALL TO ACTION SECTION
       ========================================== -->
    <section class="aud-cta-banner carb-banner">
        <div class="aud-cta-overlay"></div>
        <div class="aud-cta-content">
            <h2>Ready to Measure and Reduce Your Carbon Impact?</h2>
            <p>
                Partner with Sustainergic Tech to build a reliable carbon inventory, strengthen environmental reporting, and develop practical strategies for long-term emissions reduction.
            </p>
            <div class="aud-cta-buttons">
                <a href="contact-us.php" class="aud-btn aud-btn--primary">Request a Carbon Assessment <i class="fa-solid fa-calculator"></i></a>
                <a href="contact-us.php" class="aud-btn aud-btn--white-outline">Contact Our Experts <i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </section>

    <!-- ==========================================
       11. RELATED SERVICES
       ========================================== -->
    <section class="aud-section">
        <div class="aud-container">
            <div class="aud-section-header">
                <span class="aud-label aud-label--carbon">Other Advisory Services</span>
                <h2 class="aud-title-main">Related Engineering & <span>Consulting Services</span></h2>
            </div>

            <div class="aud-related-grid">
                <!-- Service 1 -->
                <div class="aud-related-card">
                    <div class="aud-related-img-box">
                        <img src="assets/images/energy-audit.png" alt="Building mechanical room dashboard audit">
                        <div class="aud-related-icon-box">
                            <i class="fa-solid fa-magnifying-glass-chart"></i>
                        </div>
                    </div>
                    <div class="aud-related-body">
                        <h3>Audits</h3>
                        <p>Comprehensive energy and water assessments that locate direct utility leaks, heat dissipation, and friction inefficiencies across facilities.</p>
                        <a href="audits.php" class="aud-related-link">Explore Service <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="aud-related-card">
                    <div class="aud-related-img-box">
                        <img src="assets/images/simulation-hero.png" alt="Building performance simulation model">
                        <div class="aud-related-icon-box">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                    </div>
                    <div class="aud-related-body">
                        <h3>Simulation & Modeling Services</h3>
                        <p>Advanced building-performance simulations that support informed design decisions, regulatory compliance, and occupant comfort.</p>
                        <a href="simulation-modeling.php" class="aud-related-link">Explore Service <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="aud-related-card">
                    <div class="aud-related-img-box">
                        <img src="assets/images/green-building-hero.png" alt="Green building structure certifications USGBC LEED and IGBC">
                        <div class="aud-related-icon-box">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                    </div>
                    <div class="aud-related-body">
                        <h3>Green Building Certification Services</h3>
                        <p>End-to-end consulting for IGBC, USGBC LEED, GRIHA, and WELL certifications to achieve gold and platinum ratings.</p>
                        <a href="green-building-certification.php" class="aud-related-link">Explore Service <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       PROJECTS SECTION (8 PROJECTS SLIDER)
       ========================================== -->
    <?php
    $service_projects_title = "Carbon Accounting & Advisory Projects";
    $service_projects_subtitle = "Scope 1, 2 & 3 emissions calculations, LCA product EPDs, and net-zero roadmap advisory projects.";
    $service_projects = [
        [
            'title' => 'Vaibhav Global Corporate HQ',
            'location' => 'Jaipur',
            'tag' => 'Scope 1, 2 & 3 Carbon Footprint',
            'badge_type' => 'badge-ea',
            'description' => 'Corporate carbon footprint calculation, supply chain Scope 3 inventorying, GHG Protocol corporate accounting compliance, and decarbonization strategy development target setting.',
            'image' => 'assets/images/carbon-intro.png'
        ],
        [
            'title' => 'Eastman Cast & Forge Facility',
            'location' => 'Ludhiana',
            'tag' => 'Product Life Cycle (LCA)',
            'badge_type' => 'badge-ea',
            'description' => 'ISO 14040/44 compliant Environmental Product Declaration (EPD) and embodied carbon life-cycle assessment (LCA) for hand tools and forged automotive components export compliance.',
            'image' => 'assets/images/lca-stages.png'
        ],
        [
            'title' => 'SBI Local Head Office Campus',
            'location' => 'Chandigarh',
            'tag' => 'GHG Emissions Reporting',
            'badge_type' => 'badge-igbc',
            'description' => 'Facility GHG inventory accounting and science-based carbon reduction strategy for regional banking headquarters, identifying Scope 2 electricity reduction pathways.',
            'image' => 'assets/images/ghg-reporting.png'
        ],
        [
            'title' => 'Havells India Industrial Plants',
            'location' => 'Alwar, Rajasthan',
            'tag' => 'BRSR & ESG Carbon Reporting',
            'badge_type' => 'badge-ea',
            'description' => 'Business Responsibility and Sustainability Reporting (BRSR) carbon accounting for electrical appliance manufacturing facilities under SEBI mandates.',
            'image' => 'assets/images/emissions-calculation.png'
        ],
        [
            'title' => 'Honda Automotive Manufacturing',
            'location' => 'Vithalapur, Gujarat',
            'tag' => 'Net Zero Decarbonization Plan',
            'badge_type' => 'badge-ea',
            'description' => '2030 Net-Zero operational carbon roadmap, modeling renewable solar power purchase agreements (PPA) and process heating electrification options.',
            'image' => 'assets/images/carbon-hero.png'
        ],
        [
            'title' => 'Advance Plastic Industries (Ecovia)',
            'location' => 'Ludhiana',
            'tag' => 'Circular Product Carbon LCA',
            'badge_type' => 'badge-ea',
            'description' => 'Cradle-to-gate embodied carbon LCA comparison between virgin polymers and recycled eco-plastic resin products for European sustainability certification.',
            'image' => 'assets/images/sustainable-architecture.png'
        ],
        [
            'title' => 'Netsmartz IT Tower',
            'location' => 'Mohali',
            'tag' => 'Corporate Scope 2 Carbon Audit',
            'badge_type' => 'badge-ea',
            'description' => 'Annual Scope 2 market-based carbon accounting for commercial IT office space, tracking green energy attributes and carbon offset certificates.',
            'image' => 'assets/images/benefits-building.png'
        ],
        [
            'title' => 'Chitkara University Campus',
            'location' => 'Zirakpur',
            'tag' => 'Campus Carbon Neutrality',
            'badge_type' => 'badge-igbc',
            'description' => 'University-wide carbon footprint benchmark assessment establishing baseline emissions and campus forestry sequestration credits.',
            'image' => 'assets/images/green-building-hero.png'
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
