<?php
/**
 * Projects Page displaying all services as project categories.
 */

$sustainability_categories = [
    [
        'title' => 'Green Certification',
        'url' => 'green-building-certification.php',
        'image' => 'assets/images/green-building-hero.png',
    ],
    [
        'title' => 'Simulation/Modeling',
        'url' => 'simulation-modeling.php',
        'image' => 'assets/images/daylight-simulation.png',
    ],
    [
        'title' => 'Audits',
        'url' => 'audits.php',
        'image' => 'assets/images/audits-hero.png',
    ],
    [
        'title' => 'Commissioning Authority',
        'url' => 'commissioning-authority.php',
        'image' => 'assets/images/commissioning-hero.png',
    ],
    [
        'title' => 'ECSBC Compliance',
        'url' => 'ecsbc-compliance.php',
        'image' => 'assets/images/ecbc-compliance.png',
    ],
    [
        'title' => 'Carbon Accounting & Advisory',
        'url' => 'carbon-accounting-advisory.php',
        'image' => 'assets/images/carbon-hero.png',
    ],
    [
        'title' => 'IoT Water Solution',
        'url' => 'iot-water-solution.php',
        'image' => 'assets/images/water-audit.png',
    ],
    [
        'title' => 'Hybrid Thermal Solar (HTS) Panel',
        'url' => 'hybrid-thermal-solar-panel.php',
        'image' => 'assets/images/hero.png',
    ],
    [
        'title' => 'ESG and EHS',
        'url' => 'esg-and-ehs.php',
        'image' => 'assets/images/emissions-calculation.png',
    ]
];

$hvac_categories = [
    [
        'title' => 'Radiant Heating & Cooling System',
        'url' => 'radiant-heating-cooling-system.php',
        'image' => 'assets/images/benefits-building.png',
    ],
    [
        'title' => 'Underfloor Electric Heating System',
        'url' => 'underfloor-electric-heating-system.php',
        'image' => 'assets/images/sustainable-architecture.png',
    ],
    [
        'title' => 'Geothermal System',
        'url' => 'geothermal-system.php',
        'image' => 'assets/images/cfd-simulation.png',
    ],
    [
        'title' => 'Fresh Air System',
        'url' => 'fresh-air-system.php',
        'image' => 'assets/images/energy-simulation.png',
    ],
    [
        'title' => 'Chilled Water System',
        'url' => 'chilled-water-system.php',
        'image' => 'assets/images/fundamental-commissioning.png',
    ],
    [
        'title' => 'VRV/VRF System',
        'url' => 'vrv-vrf-system.php',
        'image' => 'assets/images/enhanced-commissioning.png',
    ],
    [
        'title' => 'Heat Pumps',
        'url' => 'heat-pumps.php',
        'image' => 'assets/images/tab-services.png',
    ],
    [
        'title' => 'Radiators',
        'url' => 'radiators.php',
        'image' => 'assets/images/retro-commissioning.png',
    ],
    [
        'title' => 'Industrial HVAC Solutions',
        'url' => 'industrial-hvac-solutions.php',
        'image' => 'assets/images/monitoring-based-commissioning.png',
    ],
    [
        'title' => 'Precision Medical Cooling Solution',
        'url' => 'precision-medical-cooling-solution.php',
        'image' => 'assets/images/lca-stages.png',
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore Sustainergic Tech's sustainability and energy efficiency projects organized by service category, including LEED certifications and advanced HVAC installations.">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <title>Projects | Sustainergic Tech</title>
    <meta name="keywords" content="Sustainergic projects, sustainability engineering portfolio, LEED IGBC certified projects, commercial HVAC installations">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="page-projects">

    <?php include 'includes/navbar.php'; ?>

    <!-- =========================
        PAGE BANNER
    ========================= -->
    <section class="page-banner">

        <div class="page-banner-inner">

            <h1>Projects</h1>

            <ul class="page-banner-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="sep">/</li>
                <li>Projects</li>
            </ul>

        </div>

    </section>

    <!-- =========================
        PROJECT CATEGORIES GRID
    ========================= -->
    <section class="projects-section">

        <div class="container">

            <!-- Sustainability Services Section -->
            <div class="section-heading">
                <h2>Sustainability <span>Services</span></h2>
                <p>Explore our projects across green certifications, advanced simulations, and carbon accounting advisory.</p>
            </div>

            <div class="projects-grid" style="margin-bottom: 80px;">

                <?php foreach ($sustainability_categories as $category): ?>
                    <a href="<?php echo htmlspecialchars($category['url']); ?>#projects" class="project-category-card">
                        
                        <div class="project-category-image">
                            <img src="<?php echo htmlspecialchars($category['image']); ?>" alt="<?php echo htmlspecialchars($category['title']); ?>" loading="lazy">
                        </div>
                        
                        <div class="project-category-body">
                            <h3><?php echo htmlspecialchars($category['title']); ?></h3>
                        </div>

                    </a>
                <?php endforeach; ?>

            </div>

            <!-- HVAC Solutions Section -->
            <div class="section-heading">
                <h2>HVAC <span>Solutions</span></h2>
                <p>Innovative radiant cooling, heating systems, heat pumps, and solar thermal engineering.</p>
            </div>

            <div class="projects-grid">

                <?php foreach ($hvac_categories as $category): ?>
                    <a href="<?php echo htmlspecialchars($category['url']); ?>#projects" class="project-category-card">
                        
                        <div class="project-category-image">
                            <img src="<?php echo htmlspecialchars($category['image']); ?>" alt="<?php echo htmlspecialchars($category['title']); ?>" loading="lazy">
                        </div>
                        
                        <div class="project-category-body">
                            <h3><?php echo htmlspecialchars($category['title']); ?></h3>
                        </div>

                    </a>
                <?php endforeach; ?>

            </div>

        </div>

    </section>

    <?php 
    // Setup customized text for CTA inclusion on the Projects page
    $cta_title = "Need Custom Engineering Solutions?";
    $cta_desc = "Get in touch with our certified engineers today to explore how we can optimize your project.";
    $cta_btn_text = "Talk to an Expert";
    $cta_btn_link = "contact-us.php";
    include 'includes/cta.php'; 
    ?>

    <?php include 'includes/testimonials.php'; ?>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
