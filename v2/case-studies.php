<?php
/**
 * Sustainergic Tech - Case Studies Portfolio Listing Page
 * Horizontal Card Design with Dynamic Category Filtering & Pagination.
 */

require_once __DIR__ . '/includes/case-studies-data.php';

$all_case_studies = get_all_case_studies();

// Category Filter Handling via URL or Default 'all'
$current_category = isset($_GET['category']) ? trim($_GET['category']) : 'all';

$filtered_case_studies = [];
if ($current_category === 'all') {
    $filtered_case_studies = array_values($all_case_studies);
} else {
    foreach ($all_case_studies as $cs) {
        if ($cs['category'] === $current_category) {
            $filtered_case_studies[] = $cs;
        }
    }
}

// Pagination Configuration
$items_per_page = 3; // 3 items per page for clear pagination demonstration
$total_items = count($filtered_case_studies);
$total_pages = max(1, (int)ceil($total_items / $items_per_page));

$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) $current_page = 1;
if ($current_page > $total_pages) $current_page = $total_pages;

$offset = ($current_page - 1) * $items_per_page;
$paginated_studies = array_slice($filtered_case_studies, $offset, $items_per_page);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>Case Studies &amp; Decarbonization Portfolio | Sustainergic Tech</title>
    <meta name="description" content="Explore real-world green building certifications, net-zero HVAC, IoT water management, and ESG case studies executed by Sustainergic Tech across India.">
    <meta name="keywords" content="sustainability case studies, Rockefeller Block Chitkara University, IGBC Platinum case study, HVAC project reports India">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .cs-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            background: rgba(4, 120, 87, 0.1);
            color: #047857;
            border: 1px solid rgba(4, 120, 87, 0.25);
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 16px;
        }

        /* Filter Controls */
        .cs-filter-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 30px;
        }

        .cs-filter-btn {
            padding: 11px 26px;
            border-radius: 30px;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            color: #475569;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
        }

        .cs-filter-btn:hover,
        .cs-filter-btn.active {
            background: #047857;
            color: #ffffff;
            border-color: #047857;
            box-shadow: 0 6px 20px rgba(4, 120, 87, 0.25);
        }

        /* Horizontal Layout Grid */
        .cs-grid {
            display: flex;
            flex-direction: column;
            gap: 36px;
            margin-top: 44px;
        }

        /* Horizontal Card: Left Image, Right Text */
        .cs-card {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease, border-color 0.4s ease;
            display: grid;
            grid-template-columns: 440px 1fr;
            min-height: 340px;
        }

        .cs-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 50px rgba(15, 23, 42, 0.12);
            border-color: #047857;
        }

        /* Left Side High-Definition Image Box */
        .cs-card-img-box {
            position: relative;
            height: 100%;
            min-height: 320px;
            overflow: hidden;
            background: #0f172a;
        }

        .cs-card-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .cs-card:hover .cs-card-img-box img {
            transform: scale(1.06);
        }

        /* Glassmorphism Badge Overlay */
        .cs-card-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 6px 16px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            color: #34d399;
            font-size: 12px;
            font-weight: 700;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(52, 211, 153, 0.35);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* Right Side Content Body */
        .cs-card-body {
            padding: 36px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .cs-card-client {
            font-size: 13px;
            font-weight: 700;
            color: #047857;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 10px;
        }

        .cs-card-title {
            font-size: 24px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.3;
            margin-bottom: 12px;
            transition: color 0.2s ease;
        }

        .cs-card:hover .cs-card-title {
            color: #047857;
        }

        .cs-card-desc {
            font-size: 15px;
            color: #475569;
            line-height: 1.65;
            margin-bottom: 24px;
        }

        .cs-card-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 28px;
        }

        .cs-pill {
            padding: 6px 14px;
            background: #ecfdf5;
            color: #047857;
            font-size: 12.5px;
            font-weight: 700;
            border-radius: 12px;
            border: 1px solid #a7f3d0;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .cs-card-footer {
            margin-top: auto;
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .cs-action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 13px 26px;
            background: #047857;
            color: #ffffff;
            font-weight: 700;
            font-size: 14.5px;
            border-radius: 14px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(4, 120, 87, 0.25);
            width: fit-content;
        }

        .cs-action-btn:hover {
            background: #065f46;
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(4, 120, 87, 0.38);
            color: #ffffff;
        }

        /* Pagination Bar Controls */
        .cs-pagination {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .cs-page-btn {
            min-width: 44px;
            height: 44px;
            padding: 0 16px;
            border-radius: 12px;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            color: #475569;
            font-size: 14.5px;
            font-weight: 700;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.25s ease;
            text-decoration: none;
        }

        .cs-page-btn:hover,
        .cs-page-btn.active {
            background: #047857;
            color: #ffffff;
            border-color: #047857;
            box-shadow: 0 6px 18px rgba(4, 120, 87, 0.25);
        }

        .cs-page-btn.disabled {
            opacity: 0.45;
            cursor: not-allowed;
            pointer-events: none;
            background: #f1f5f9;
            border-color: #e2e8f0;
            color: #94a3b8;
        }

        .cs-page-arrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 0 20px;
        }

        @media (max-width: 991px) {
            .cs-card {
                grid-template-columns: 1fr;
            }
            .cs-card-img-box {
                height: 260px;
                min-height: 260px;
            }
            .cs-card-body {
                padding: 28px;
            }
            .cs-card-title {
                font-size: 20px;
            }
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
                        <li><a href="#">Resources</a></li>
                        <li class="sep"><i class="fa-solid fa-chevron-right"></i></li>
                        <li class="text-black" aria-current="page">Case Studies</li>
                    </ul>

                    <span class="cs-hero-badge">
                        <i class="fa-solid fa-folder-open"></i> Sustainergic Engineering Portfolio
                    </span>
                    
                    <h1 class="gb-hero-title">
                        Engineering <span>Impact &amp; Case Studies</span>
                    </h1>
                    
                    <p class="gb-hero-subtitle">
                        Discover how Sustainergic Tech delivers net-zero decarbonization, high-COP HVAC engineering, smart IoT water management, and LEED/IGBC Platinum certifications across India.
                    </p>
                    
                    <div class="gb-hero-actions">
                        <a href="#case-studies-grid" class="gb-btn gb-btn--primary">
                            Explore All Case Studies <i class="fa-solid fa-arrow-down"></i>
                        </a>
                        <a href="contact-us.php" class="gb-btn gb-btn--outline">
                            Submit Project RFP <i class="fa-solid fa-paper-plane"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Visual Column -->
                <div class="gb-hero-visual">
                    <div class="gb-hero-img-wrapper">
                        <img src="assets/images/case-study.png" alt="Sustainergic Tech Certified Case Studies Portfolio">
                        
                        <!-- Floating Badge 1 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--one">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-trophy"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>150+ Certified Projects</h5>
                                <p>LEED &amp; IGBC Platinum</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2 -->
                        <div class="gb-hero-floating-card gb-hero-floating-card--two">
                            <div class="gb-hero-fc-icon">
                                <i class="fa-solid fa-leaf"></i>
                            </div>
                            <div class="gb-hero-fc-text">
                                <h5>45 GWh / Year Saved</h5>
                                <p>Clean Energy Reduction</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       2. CASE STUDIES HORIZONTAL GRID WITH PAGINATION
       ========================================== -->
    <section class="gb-section gb-section--light" id="case-studies-grid">
        <div class="gb-container">
            
            <div class="gb-section-header text-center">
                <span class="gb-label">Verified Case Studies</span>
                <h2 class="gb-title-main">Browse Projects by Engineering Discipline</h2>

                <!-- Category Filter Buttons (with URL state & JS support) -->
                <div class="cs-filter-bar">
                    <a href="case-studies.php?category=all&page=1#case-studies-grid" class="cs-filter-btn <?php echo ($current_category === 'all') ? 'active' : ''; ?>" data-filter="all">
                        All Case Studies (<?php echo count($all_case_studies); ?>)
                    </a>
                    <a href="case-studies.php?category=green-building&page=1#case-studies-grid" class="cs-filter-btn <?php echo ($current_category === 'green-building') ? 'active' : ''; ?>" data-filter="green-building">
                        Green Building &amp; IGBC
                    </a>
                    <a href="case-studies.php?category=hvac&page=1#case-studies-grid" class="cs-filter-btn <?php echo ($current_category === 'hvac') ? 'active' : ''; ?>" data-filter="hvac">
                        HVAC &amp; Energy
                    </a>
                    <a href="case-studies.php?category=iot-water&page=1#case-studies-grid" class="cs-filter-btn <?php echo ($current_category === 'iot-water') ? 'active' : ''; ?>" data-filter="iot-water">
                        IoT Water Neutrality
                    </a>
                    <a href="case-studies.php?category=esg&page=1#case-studies-grid" class="cs-filter-btn <?php echo ($current_category === 'esg') ? 'active' : ''; ?>" data-filter="esg">
                        ESG &amp; Carbon Advisory
                    </a>
                </div>
            </div>

            <!-- Horizontal Cards Layout Grid -->
            <div class="cs-grid" id="csGridContainer">
                
                <?php if (!empty($paginated_studies)): ?>
                    <?php foreach ($paginated_studies as $cs): ?>
                        <div class="cs-card" data-category="<?php echo htmlspecialchars($cs['category']); ?>">
                            
                            <!-- Left Column: High-Definition Image Box -->
                            <div class="cs-card-img-box">
                                <img src="<?php echo htmlspecialchars($cs['image']); ?>" alt="<?php echo htmlspecialchars($cs['title']); ?>" loading="lazy">
                                <span class="cs-card-badge">
                                    <i class="fa-solid fa-award"></i> <?php echo htmlspecialchars($cs['badge']); ?>
                                </span>
                            </div>

                            <!-- Right Column: Content Body Details -->
                            <div class="cs-card-body">
                                <span class="cs-card-client">
                                    <i class="fa-solid fa-location-dot"></i> <?php echo htmlspecialchars($cs['client']); ?> &bull; <?php echo htmlspecialchars($cs['location']); ?>
                                </span>
                                
                                <h3 class="cs-card-title"><?php echo htmlspecialchars($cs['title']); ?></h3>
                                <p class="cs-card-desc"><?php echo htmlspecialchars($cs['tagline']); ?></p>

                                <!-- Impact Metrics Highlights Row -->
                                <div class="cs-card-pills">
                                    <?php if (!empty($cs['metrics'])): ?>
                                        <span class="cs-pill"><i class="fa-solid fa-recycle"></i> <?php echo $cs['metrics']['waste_diversion']; ?> Waste Diverted</span>
                                        <span class="cs-pill"><i class="fa-solid fa-droplet"></i> <?php echo $cs['metrics']['water_savings']; ?> Water Saved</span>
                                        <span class="cs-pill"><i class="fa-solid fa-bolt"></i> <?php echo $cs['metrics']['energy_savings']; ?> Energy Saved</span>
                                    <?php endif; ?>
                                </div>

                                <!-- Action Button Row -->
                                <div class="cs-card-footer">
                                    <a href="case-study-detail.php?id=<?php echo htmlspecialchars($cs['id']); ?>" class="cs-action-btn">
                                        Read Case Study Analysis <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div style="text-align: center; padding: 60px 20px; background: #ffffff; border-radius: 24px; border: 1px solid #e2e8f0;">
                        <i class="fa-solid fa-folder-open" style="font-size: 48px; color: #94a3b8; margin-bottom: 16px;"></i>
                        <h3 style="font-size: 20px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">No Case Studies Found</h3>
                        <p style="font-size: 14.5px; color: #64748b;">No projects available under this category currently. Check back soon or select another category.</p>
                        <a href="case-studies.php?category=all&page=1#case-studies-grid" class="gb-btn gb-btn--primary" style="margin-top: 20px;">View All Case Studies</a>
                    </div>
                <?php endif; ?>

            </div>

            <!-- Pagination Bar Controls -->
            <?php if ($total_pages > 1): ?>
                <div class="cs-pagination">
                    
                    <!-- Previous Button -->
                    <?php if ($current_page > 1): ?>
                        <a href="case-studies.php?category=<?php echo urlencode($current_category); ?>&page=<?php echo ($current_page - 1); ?>#case-studies-grid" class="cs-page-btn cs-page-arrow">
                            <i class="fa-solid fa-chevron-left"></i> Previous
                        </a>
                    <?php else: ?>
                        <span class="cs-page-btn cs-page-arrow disabled">
                            <i class="fa-solid fa-chevron-left"></i> Previous
                        </span>
                    <?php endif; ?>

                    <!-- Numbered Page Buttons -->
                    <?php for ($p = 1; $p <= $total_pages; $p++): ?>
                        <?php if ($p == $current_page): ?>
                            <span class="cs-page-btn active"><?php echo $p; ?></span>
                        <?php else: ?>
                            <a href="case-studies.php?category=<?php echo urlencode($current_category); ?>&page=<?php echo $p; ?>#case-studies-grid" class="cs-page-btn">
                                <?php echo $p; ?>
                            </a>
                        <?php endif; ?>
                    <?php endfor; ?>

                    <!-- Next Button -->
                    <?php if ($current_page < $total_pages): ?>
                        <a href="case-studies.php?category=<?php echo urlencode($current_category); ?>&page=<?php echo ($current_page + 1); ?>#case-studies-grid" class="cs-page-btn cs-page-arrow">
                            Next <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    <?php else: ?>
                        <span class="cs-page-btn cs-page-arrow disabled">
                            Next <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    <?php endif; ?>

                </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- ==========================================
       3. AGGREGATED IMPACT TRACK RECORD
       ========================================== -->
    <section class="gb-section" style="background: #0f172a; color: #ffffff;">
        <div class="gb-container">
            <div class="gb-section-header text-center">
                <span class="gb-label" style="background: rgba(16,185,129,0.15); color: #34d399; border-color: rgba(52,211,153,0.3);">Proven Track Record</span>
                <h2 class="gb-title-main" style="color: #ffffff;">Decarbonization &amp; Engineering Excellence</h2>
            </div>

            <div class="gb-trust-highlights" style="margin-top: 40px; justify-content: center; gap: 30px; flex-wrap: wrap;">
                <div class="gb-th-item" style="background: rgba(255,255,255,0.05); border: 1px solid #334155; padding: 24px 36px; border-radius: 20px;">
                    <span class="gb-th-num" style="color: #34d399; font-size: 42px;">150+</span>
                    <span class="gb-th-lbl" style="color: #cbd5e1;">Green Certified Projects</span>
                </div>
                <div class="gb-th-item" style="background: rgba(255,255,255,0.05); border: 1px solid #334155; padding: 24px 36px; border-radius: 20px;">
                    <span class="gb-th-num" style="color: #34d399; font-size: 42px;">45 GWh</span>
                    <span class="gb-th-lbl" style="color: #cbd5e1;">Annual Energy Saved</span>
                </div>
                <div class="gb-th-item" style="background: rgba(255,255,255,0.05); border: 1px solid #334155; padding: 24px 36px; border-radius: 20px;">
                    <span class="gb-th-num" style="color: #34d399; font-size: 42px;">120 ML</span>
                    <span class="gb-th-lbl" style="color: #cbd5e1;">Water Saved via IoT</span>
                </div>
                <div class="gb-th-item" style="background: rgba(255,255,255,0.05); border: 1px solid #334155; padding: 24px 36px; border-radius: 20px;">
                    <span class="gb-th-num" style="color: #34d399; font-size: 42px;">100%</span>
                    <span class="gb-th-lbl" style="color: #cbd5e1;">Audit Approval Success</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
       4. CALL TO ACTION BANNER
       ========================================== -->
    <section class="gb-cta-banner">
        <div class="gb-cta-overlay"></div>
        <div class="gb-cta-content">
            <h2>Have a Complex Facility Challenge? Let's Build Your Success Story.</h2>
            <p>
                Partner with Sustainergic Tech to engineer high-performance HVAC, smart IoT water, and green certified infrastructure.
            </p>
            <div class="gb-cta-buttons">
                <a href="contact-us.php" class="gb-btn gb-btn--gold">
                    Schedule Engineering Consultation <i class="fa-solid fa-calendar-days"></i>
                </a>
                <a href="contact-us.php" class="gb-btn gb-btn--white-outline">
                    Request IGBC Certification RFP <i class="fa-solid fa-paper-plane"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Global Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
