<?php
/**
 * Projects Page displaying all services as project categories.
 */

$project_categories = [
    [
        'title' => 'Green Building Certification',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Energy Simulation',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Daylight Simulation',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'CFD Simulation',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'ECBC Compliance',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Building Commissioning',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Energy Audit',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1513828742140-ccaa34f3158e?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Water Audit',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1600845941397-6644d50c2a7c?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'HVAC Design & Installation',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Radiant Cooling System',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Heat Pump',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1585338107529-13afc5f02586?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Geothermal Energy System',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1532601224476-15c79f2f7a51?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Variable Refrigerant Flow (VRF)',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1527018601619-a508a2be00cd?auto=format&fit=crop&w=800&q=80',
    ],
    [
        'title' => 'Hybrid Thermal Solar Panel (HTS)',
        'url' => '#',
        'image' => 'https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?auto=format&fit=crop&w=800&q=80',
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

            <div class="projects-grid">

                <?php foreach ($project_categories as $category): ?>
                    <a href="<?php echo htmlspecialchars($category['url']) . '#projects'; ?>" class="project-category-card">
                        
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
