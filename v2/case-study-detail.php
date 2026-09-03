<?php
/**
 * Sustainergic Tech - Case Study Deep-Dive Detail View
 * Dynamically renders full case study reports based on URL parameter ?id=...
 */

require_once __DIR__ . '/includes/case-studies-data.php';

$cs_id = isset($_GET['id']) ? trim($_GET['id']) : 'rockefeller-chitkara';
$cs = get_case_study_by_id($cs_id);

$all_studies = get_all_case_studies();
// Filter out current study for related section
$related_studies = array_filter($all_studies, function($item) use ($cs_id) {
    return $item['id'] !== $cs_id;
});
// Pick first 3 as related
$related_studies = array_slice($related_studies, 0, 3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title><?php echo htmlspecialchars($cs['title']); ?> | Sustainergic Tech Case Studies</title>
    <meta name="description" content="<?php echo htmlspecialchars($cs['tagline']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($cs['title']); ?>, <?php echo htmlspecialchars($cs['client']); ?>, Sustainergic Tech case study, green building analysis">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/green-building.css">

    <style>
        .cs-detail-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            padding: 170px 0 70px;
            position: relative;
            border-bottom: 1px solid #334155;
        }

        .cs-detail-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 18px;
            background: rgba(56, 189, 248, 0.15);
            color: #38bdf8;
            border: 1px solid rgba(56, 189, 248, 0.3);
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cs-detail-title {
            font-size: 38px;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 16px;
            color: #ffffff;
        }

        .cs-detail-subtitle {
            font-size: 17px;
            color: #cbd5e1;
            max-width: 850px;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .cs-detail-meta {
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
            font-size: 14.5px;
            color: #94a3b8;
            padding-top: 20px;
            border-top: 1px solid #334155;
        }

        .cs-detail-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Metrics Bar */
        .cs-detail-metrics-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }

        .cs-detail-metric-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 26px 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
            transition: transform 0.3s ease;
        }

        .cs-detail-metric-card:hover {
            transform: translateY(-4px);
            border-color: #047857;
        }

        .cs-detail-metric-card h3 {
            font-size: 34px;
            font-weight: 800;
            color: #047857;
            margin-bottom: 4px;
        }

        .cs-detail-metric-card p {
            font-size: 13px;
            font-weight: 700;
            color: #475569;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Content Sections */
        .cs-content-block {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.02);
        }

        .cs-section-heading {
            font-size: 22px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .cs-section-heading i {
            color: #047857;
        }

        /* Core Pillars Cards */
        .cs-pillars-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .cs-pillar-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 24px;
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .cs-pillar-icon-box {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: #ecfdf5;
            color: #047857;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
            border: 1px solid #a7f3d0;
        }

        .cs-pillar-info h4 {
            font-size: 17px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 6px;
        }

        .cs-pillar-info p {
            font-size: 14px;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }

        /* Sourcing Table */
        .cs-detail-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid #cbd5e1;
            margin-top: 16px;
        }

        .cs-detail-table th {
            background: #0f172a;
            color: #ffffff;
            padding: 16px 20px;
            font-size: 13.5px;
            font-weight: 700;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .cs-detail-table td {
            padding: 16px 20px;
            font-size: 14.5px;
            color: #334155;
            border-bottom: 1px solid #e2e8f0;
        }

        .cs-detail-table tr:nth-child(even) td {
            background: #f8fafc;
        }

        .cs-detail-table tr:last-child td {
            border-bottom: none;
        }

        /* Enquiry Banner */
        .cs-enquiry-banner {
            background: linear-gradient(135deg, #047857 0%, #065f46 100%);
            color: #ffffff;
            border-radius: 24px;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 24px;
            box-shadow: 0 16px 40px rgba(4, 120, 87, 0.25);
            margin-bottom: 60px;
        }

        .cs-enquiry-text h3 {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 8px;
            color: #ffffff;
        }

        .cs-enquiry-text p {
            font-size: 15px;
            color: #a7f3d0;
            margin: 0;
        }

        .cs-btn-gold {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 28px;
            background: #c5a880;
            color: #0f172a;
            font-weight: 800;
            font-size: 15px;
            border-radius: 14px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .cs-btn-gold:hover {
            background: #ffffff;
            color: #047857;
            transform: translateY(-2px);
        }

        /* Card grid for related case studies */
        .cs-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .cs-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.08);
            border-color: #10b981;
        }

        .cs-card-img-box {
            position: relative;
            height: 200px;
            overflow: hidden;
            background: #f1f5f9;
        }

        .cs-card-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .cs-card-badge {
            position: absolute;
            top: 16px;
            left: 16px;
            padding: 5px 14px;
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(4px);
            color: #34d399;
            font-size: 11.5px;
            font-weight: 700;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(52, 211, 153, 0.3);
        }

        .cs-card-body {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .cs-card-client {
            font-size: 12px;
            font-weight: 700;
            color: #047857;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .cs-card-title {
            font-size: 17px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.35;
            margin-bottom: 12px;
        }

        .cs-action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 100%;
            padding: 10px 18px;
            background: #047857;
            color: #ffffff;
            font-weight: 700;
            font-size: 13.5px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(4, 120, 87, 0.25);
            margin-top: auto;
        }

        .cs-action-btn:hover {
            background: #065f46;
            color: #ffffff;
        }

        @media (max-width: 991px) {
            .cs-detail-title { font-size: 28px; }
            .cs-detail-metrics-grid { grid-template-columns: repeat(2, 1fr); margin-top: 20px; }
            .cs-pillars-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>

<body class="page-green-building">

    <?php include 'includes/navbar.php'; ?>

    <!-- ==========================================
       1. HERO HEADER BANNER
       ========================================== -->
    <section class="cs-detail-hero">
        <div class="gb-container">
            
            <ul class="gb-breadcrumbs" aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <li><a href="index.php" style="color: #94a3b8;">Home</a></li>
                <li class="sep" style="color: #64748b;"><i class="fa-solid fa-chevron-right"></i></li>
                <li><a href="case-studies.php" style="color: #94a3b8;">Case Studies</a></li>
                <li class="sep" style="color: #64748b;"><i class="fa-solid fa-chevron-right"></i></li>
                <li style="color: #38bdf8;" aria-current="page"><?php echo htmlspecialchars($cs['client']); ?></li>
            </ul>

            <span class="cs-detail-badge">
                <i class="fa-solid fa-trophy"></i> <?php echo htmlspecialchars($cs['badge']); ?>
            </span>

            <h1 class="cs-detail-title"><?php echo htmlspecialchars($cs['title']); ?></h1>
            <p class="cs-detail-subtitle"><?php echo htmlspecialchars($cs['tagline']); ?></p>

            <div class="cs-detail-meta">
                <span><i class="fa-solid fa-building-columns" style="color: #34d399;"></i> Client: <strong><?php echo htmlspecialchars($cs['client']); ?></strong></span>
                <span><i class="fa-solid fa-location-dot" style="color: #34d399;"></i> Location: <strong><?php echo htmlspecialchars($cs['location']); ?></strong></span>
                <span><i class="fa-solid fa-user-gear" style="color: #34d399;"></i> Prepared by: <strong><?php echo htmlspecialchars($cs['prepared_by']); ?></strong></span>
            </div>

        </div>
    </section>

    <!-- ==========================================
       2. IMPACT METRICS BAR
       ========================================== -->
    <div class="gb-container">
        <?php if (!empty($cs['metrics'])): ?>
            <div class="cs-detail-metrics-grid">
                <div class="cs-detail-metric-card">
                    <h3><?php echo htmlspecialchars($cs['metrics']['waste_diversion']); ?></h3>
                    <p>Waste Diversion</p>
                </div>
                <div class="cs-detail-metric-card">
                    <h3><?php echo htmlspecialchars($cs['metrics']['water_savings']); ?></h3>
                    <p>Water Savings</p>
                </div>
                <div class="cs-detail-metric-card">
                    <h3><?php echo htmlspecialchars($cs['metrics']['energy_savings']); ?></h3>
                    <p>Energy Savings</p>
                </div>
                <div class="cs-detail-metric-card">
                    <h3><?php echo htmlspecialchars($cs['metrics']['solar_contribution']); ?></h3>
                    <p>Solar Offset</p>
                </div>
            </div>

            <?php if (!empty($cs['metrics']['baseline_note'])): ?>
                <p style="font-size: 12.5px; color: #64748b; font-style: italic; margin-top: 12px; text-align: center;">
                    * <?php echo htmlspecialchars($cs['metrics']['baseline_note']); ?>
                </p>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <!-- ==========================================
       3. CASE STUDY DETAILED ANALYSIS SECTIONS
       ========================================== -->
    <section class="gb-section" style="padding-top: 40px;">
        <div class="gb-container">

            <!-- Executive Summary & Scorecard Block -->
            <div class="cs-content-block">
                <h2 class="cs-section-heading">
                    <i class="fa-solid fa-award"></i> Certification Scorecard &amp; Executive Summary
                </h2>
                
                <?php if (!empty($cs['scorecard'])): ?>
                    <div style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); color: #ffffff; padding: 28px; border-radius: 18px; margin-bottom: 24px;">
                        <span style="color: #38bdf8; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
                            <?php echo htmlspecialchars($cs['scorecard']['rating_system']); ?>
                        </span>
                        <h3 style="font-size: 24px; font-weight: 800; color: #ffffff; margin-top: 4px; margin-bottom: 10px;">
                            <?php echo htmlspecialchars($cs['scorecard']['tier']); ?>
                        </h3>
                        <p style="font-size: 15.5px; color: #cbd5e1; margin: 0; line-height: 1.6;">
                            <?php echo htmlspecialchars($cs['scorecard']['summary']); ?>
                        </p>
                    </div>
                <?php endif; ?>

                <p style="font-size: 15.5px; color: #475569; line-height: 1.7; margin: 0;">
                    <?php echo htmlspecialchars($cs['tagline']); ?>
                </p>
            </div>

            <!-- Core Green Building Pillars -->
            <?php if (!empty($cs['pillars'])): ?>
                <div class="cs-content-block">
                    <h2 class="cs-section-heading">
                        <i class="fa-solid fa-cubes-stacked"></i> Core Green Building Pillars
                    </h2>
                    
                    <div class="cs-pillars-grid">
                        <?php foreach ($cs['pillars'] as $pillar): ?>
                            <div class="cs-pillar-box">
                                <div class="cs-pillar-icon-box">
                                    <i class="fa-solid <?php echo !empty($pillar['icon']) ? htmlspecialchars($pillar['icon']) : 'fa-leaf'; ?>"></i>
                                </div>
                                <div class="cs-pillar-info">
                                    <h4><?php echo htmlspecialchars($pillar['title']); ?></h4>
                                    <p><?php echo htmlspecialchars($pillar['desc']); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Energy Systems Section -->
            <?php if (!empty($cs['energy_systems'])): ?>
                <div class="cs-content-block">
                    <h2 class="cs-section-heading">
                        <i class="fa-solid fa-bolt"></i> Optimized Energy Systems
                    </h2>
                    <p style="font-size: 15px; color: #475569; margin-bottom: 20px;">
                        <?php echo htmlspecialchars($cs['energy_systems']['intro']); ?>
                    </p>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; margin-bottom: 24px;">
                        <?php foreach ($cs['energy_systems']['features'] as $feat): ?>
                            <div style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 16px 20px; border-radius: 14px; display: flex; align-items: center; gap: 12px;">
                                <i class="fa-solid fa-circle-check" style="color: #047857; font-size: 20px;"></i>
                                <span style="font-size: 14.5px; font-weight: 600; color: #334155;"><?php echo htmlspecialchars($feat); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if (!empty($cs['clean_energy'])): ?>
                        <div style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 18px; padding: 24px; display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap; gap: 20px;">
                            <div style="text-align: center;">
                                <span style="font-size: 28px; font-weight: 800; color: #16a34a;"><?php echo htmlspecialchars($cs['clean_energy']['renewable_offset']); ?></span>
                                <p style="font-size: 13px; font-weight: 700; color: #15803d; margin: 0;">Renewable Offset</p>
                            </div>
                            <div style="text-align: center;">
                                <span style="font-size: 28px; font-weight: 800; color: #475569;"><?php echo htmlspecialchars($cs['clean_energy']['utility_grid']); ?></span>
                                <p style="font-size: 13px; font-weight: 700; color: #64748b; margin: 0;">Utility Grid</p>
                            </div>
                            <div style="text-align: center;">
                                <span style="font-size: 26px; font-weight: 800; color: #047857;"><?php echo htmlspecialchars($cs['clean_energy']['co2_avoided']); ?></span>
                                <p style="font-size: 13px; font-weight: 700; color: #065f46; margin: 0;">CO₂ Avoided</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Water Neutrality -->
            <?php if (!empty($cs['water_neutrality'])): ?>
                <div class="cs-content-block">
                    <h2 class="cs-section-heading">
                        <i class="fa-solid fa-droplet"></i> Water Neutrality &amp; Resource Recovery
                    </h2>
                    <p style="font-size: 15px; color: #475569; margin-bottom: 20px;">
                        <?php echo htmlspecialchars($cs['water_neutrality']['intro']); ?>
                    </p>

                    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
                        <?php foreach ($cs['water_neutrality']['features'] as $idx => $feat): ?>
                            <div style="background: #e0f2fe; border: 1px solid #bae6fd; padding: 22px; border-radius: 18px;">
                                <div style="width: 36px; height: 36px; border-radius: 10px; background: #0284c7; color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; margin-bottom: 12px;">
                                    <?php echo ($idx + 1); ?>
                                </div>
                                <p style="font-size: 14.5px; font-weight: 600; color: #0369a1; margin: 0; line-height: 1.5;"><?php echo htmlspecialchars($feat); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Occupant Well-being & Green Sourcing Strategy Table -->
            <?php if (!empty($cs['occupant_wellbeing']) || !empty($cs['green_sourcing'])): ?>
                <div class="cs-content-block">
                    <?php if (!empty($cs['occupant_wellbeing'])): ?>
                        <h2 class="cs-section-heading">
                            <i class="fa-solid fa-heart-pulse"></i> Occupant Well-being &amp; Indoor Health
                        </h2>
                        
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px; margin-bottom: 32px;">
                            <?php foreach ($cs['occupant_wellbeing'] as $item): ?>
                                <div style="background: #f8fafc; border: 1px solid #e2e8f0; padding: 20px; border-radius: 16px;">
                                    <h4 style="font-size: 16px; font-weight: 800; color: #047857; margin-bottom: 6px;"><?php echo htmlspecialchars($item['title']); ?></h4>
                                    <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.5;"><?php echo htmlspecialchars($item['desc']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($cs['green_sourcing'])): ?>
                        <h2 class="cs-section-heading" style="margin-top: 20px;">
                            <i class="fa-solid fa-table"></i> Green Sourcing Strategy Data Table
                        </h2>
                        <table class="cs-detail-table">
                            <thead>
                                <tr>
                                    <th>Material Type</th>
                                    <th>Sustainability Attribute</th>
                                    <th>Project Metric</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cs['green_sourcing'] as $row): ?>
                                    <tr>
                                        <td style="font-weight: 700; color: #0f172a;"><?php echo htmlspecialchars($row['type']); ?></td>
                                        <td><?php echo htmlspecialchars($row['attribute']); ?></td>
                                        <td><span class="cs-pill"><?php echo htmlspecialchars($row['metric']); ?></span></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Architectural Vision & Legacy -->
            <?php if (!empty($cs['architectural_vision'])): ?>
                <div class="cs-content-block">
                    <h2 class="cs-section-heading">
                        <i class="fa-solid fa-landmark"></i> Architectural Vision &amp; Sustainability Legacy
                    </h2>
                    <p style="font-size: 16px; color: #334155; line-height: 1.7; background: #f8fafc; padding: 24px; border-radius: 16px; border-left: 4px solid #047857; margin-bottom: 24px;">
                        <?php echo htmlspecialchars($cs['architectural_vision']); ?>
                    </p>

                    <?php if (!empty($cs['sustainability_legacy'])): ?>
                        <h4 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 14px;">Building a Sustainable Future</h4>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px;">
                            <?php foreach ($cs['sustainability_legacy'] as $item): ?>
                                <div style="display: flex; align-items: center; gap: 10px; font-size: 14px; font-weight: 600; color: #047857; background: #ecfdf5; padding: 12px 18px; border-radius: 12px; border: 1px solid #a7f3d0;">
                                    <i class="fa-solid fa-shield-check"></i> <?php echo htmlspecialchars($item); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Certification Enquiry Card -->
            <div class="cs-enquiry-banner">
                <div class="cs-enquiry-text">
                    <h3><?php echo isset($cs['enquiries']['title']) ? htmlspecialchars($cs['enquiries']['title']) : 'Questions on the IGBC Platinum certification process?'; ?></h3>
                    <p><strong><?php echo isset($cs['enquiries']['company']) ? htmlspecialchars($cs['enquiries']['company']) : 'Sustainergic Tech Solutions'; ?></strong> &bull; <?php echo isset($cs['enquiries']['address']) ? htmlspecialchars($cs['enquiries']['address']) : 'D 5/24, Chitrakoot Scheme, Jaipur'; ?></p>
                </div>
                <a href="contact-us.php" class="cs-btn-gold">
                    Submit Project Inquiry <i class="fa-solid fa-paper-plane"></i>
                </a>
            </div>

            <!-- Related Case Studies Section -->
            <?php if (!empty($related_studies)): ?>
                <div style="margin-top: 60px;">
                    <div class="gb-section-header">
                        <span class="gb-label">More Projects</span>
                        <h2 class="gb-title-main">Explore Related Case Studies</h2>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 24px; margin-top: 30px;">
                        <?php foreach ($related_studies as $rel): ?>
                            <div class="cs-card">
                                <div class="cs-card-img-box">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>">
                                    <span class="cs-card-badge"><?php echo htmlspecialchars($rel['badge']); ?></span>
                                </div>
                                <div class="cs-card-body">
                                    <span class="cs-card-client">
                                        <i class="fa-solid fa-location-dot"></i> <?php echo htmlspecialchars($rel['client']); ?>
                                    </span>
                                    <h3 class="cs-card-title"><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <a href="case-study-detail.php?id=<?php echo htmlspecialchars($rel['id']); ?>" class="cs-action-btn">
                                        View Case Study <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- Global Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
