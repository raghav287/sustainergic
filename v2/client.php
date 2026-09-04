<?php
/**
 * Sustainergic Tech - Valued Clients & Projects Directory Page
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    
    <title>Our Clients &amp; Project Portfolio | Sustainergic Tech</title>
    <meta name="description" content="Explore Sustainergic Tech's extensive portfolio of green building certifications, energy assessments, LEED, and IGBC certified projects for corporate, industrial, hospitality, and residential clients.">
    <meta name="keywords" content="Sustainergic clients, green building project portfolio, LEED certified building projects, corporate HVAC clients India">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* Client Page Styling */
        .client-hero {
            background-color: var(--gb-sage-ultra-light);
            padding: 60px 0 40px;
            position: relative;
        }

        .client-stats-bar {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 36px;
            background: var(--gb-white);
            padding: 24px;
            border-radius: 20px;
            box-shadow: var(--gb-shadow-sm);
            border: 1px solid var(--gb-border-light);
        }

        .client-stat-item {
            text-align: center;
            padding: 12px;
            border-right: 1px solid var(--gb-border-light);
        }

        .client-stat-item:last-child {
            border-right: none;
        }

        .client-stat-number {
            font-size: 32px;
            font-weight: 800;
            color: var(--accent-green);
            line-height: 1;
            margin-bottom: 6px;
        }

        .client-stat-label {
            font-size: 13px;
            font-weight: 600;
            color: var(--gb-text-muted);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Filter Controls Bar */
        .client-controls-bar {
            background: var(--gb-white);
            padding: 20px 24px;
            border-radius: 20px;
            box-shadow: var(--gb-shadow-sm);
            border: 1px solid var(--gb-border-light);
            margin-bottom: 30px;
        }

        .client-filter-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .filter-btn {
            padding: 9px 20px;
            font-size: 14px;
            font-weight: 600;
            border-radius: 30px;
            border: 1px solid var(--gb-border);
            background: var(--gb-white);
            color: var(--gb-text-dark);
            cursor: pointer;
            transition: all 0.25s ease;
        }

        .filter-btn:hover,
        .filter-btn:focus,
        .filter-btn.active,
        .filter-btn.active:hover {
            background: var(--accent-green) !important;
            color: #ffffff !important;
            border-color: var(--accent-green) !important;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25);
        }

        /* CLIENT LOGO CARDS GRID */
        .client-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
            margin-bottom: 30px;
        }

        .client-card-item {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid var(--gb-border-light);
            box-shadow: var(--gb-shadow-sm);
            padding: 24px;
            transition: var(--gb-transition);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .client-card-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--gb-shadow-lg);
            border-color: var(--accent-green);
        }

        /* Logo Header Banner inside Card */
        .client-logo-header {
            height: 115px;
            background: #ffffff;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 18px 22px;
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
            position: relative;
            box-shadow: inset 0 0 0 1px rgba(0,0,0,0.02);
            overflow: hidden;
        }

        .client-logo-header img,
        .client-logo-img {
            max-height: 75px;
            max-width: 240px;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: drop-shadow(0 2px 5px rgba(0,0,0,0.06));
            transition: transform 0.3s ease;
        }

        .client-card-item:hover .client-logo-img,
        .client-card-item:hover .client-logo-header img {
            transform: scale(1.06);
        }

        .client-logo-badge {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .client-logo-icon {
            width: 56px;
            height: 56px;
            border-radius: 14px;
            background: var(--gb-white);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            color: var(--accent-green);
            flex-shrink: 0;
            border: 1px solid var(--gb-border-light);
        }

        .client-logo-text {
            font-size: 16px;
            font-weight: 800;
            color: #1e293b;
            letter-spacing: -0.3px;
            line-height: 1.2;
        }

        .client-card-body h4 {
            font-size: 16px;
            font-weight: 700;
            color: var(--gb-text-dark);
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .client-card-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 14px;
            padding-top: 14px;
            border-top: 1px solid #f1f5f9;
        }

        .client-location {
            font-size: 13px;
            color: #64748b;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Certification Logo Badges */
        .cert-tag-box {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .cert-tag-box img {
            height: 16px;
            object-fit: contain;
        }

        .badge-igbc {
            background-color: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
        }

        .badge-leed {
            background-color: #f0fdf4;
            color: #15803d;
            border: 1px solid #bbf7d0;
        }

        .badge-ea {
            background-color: #f0f9ff;
            color: #0369a1;
            border: 1px solid #bae6fd;
        }

        .no-results-message {
            display: none;
            padding: 60px 20px;
            text-align: center;
            color: #64748b;
            font-size: 15px;
        }

        @media (max-width: 991px) {
            .client-cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .client-stats-bar {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .client-cards-grid {
                grid-template-columns: 1fr;
            }
            .client-stats-bar {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body class="page-green-building">

    <!-- Global Header -->
    <?php include 'includes/navbar.php'; ?>

    <!-- =========================
        PAGE BANNER
    ========================= -->

    <section class="page-banner">

        <div class="page-banner-inner">

            <h1>Our Clients</h1>

            <ul class="page-banner-breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="sep">/</li>
                <li>Our Clients</li>
            </ul>

        </div>

    </section>

    <!-- ==========================================
       2. CLIENT DIRECTORY & LOGO SHOWCASE
       ========================================== -->
    <section class="gb-section gb-section--light" style="padding-top: 50px;">
        <div class="gb-container">
            
            <div class="gb-section-header">
                <span class="gb-label">Client Portfolio</span>
                <h2 class="gb-title-main">Explore Our Certified Projects</h2>
            </div>

            <!-- Filter Controls -->
            <div class="client-controls-bar">
                <!-- Category Filters -->
                <div class="client-filter-buttons">
                    <button class="filter-btn active" onclick="setCategoryFilter('all', this)">All Projects (39)</button>
                    <button class="filter-btn" onclick="setCategoryFilter('hospitality', this)">Hospitality &amp; Retail</button>
                    <button class="filter-btn" onclick="setCategoryFilter('industrial', this)">Industrial &amp; Automotive</button>
                    <button class="filter-btn" onclick="setCategoryFilter('corporate', this)">Corporate &amp; IT Parks</button>
                    <button class="filter-btn" onclick="setCategoryFilter('institutional', this)">Institutional &amp; Govt</button>
                    <button class="filter-btn" onclick="setCategoryFilter('residential', this)">Residential</button>
                    <button class="filter-btn" onclick="setCategoryFilter('leed', this)">USGBC LEED</button>
                    <button class="filter-btn" onclick="setCategoryFilter('igbc', this)">IGBC Certified</button>
                </div>
            </div>

            <!-- ==========================================
               PROMINENT LOGO CARDS GRID
               ========================================== -->
            <div class="client-cards-grid" id="clientCardsGrid">
                
                <!-- 1. Hyatt Regency Dehradun -->
                <div class="client-card-item" data-category="hospitality leed">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/hyatt-logo.png" alt="Hyatt Regency Dehradun Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Hyatt Regency Dehradun</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">5-Star Luxury Resort &amp; Convention Center</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Dehradun</span>
                        <span class="cert-tag-box badge-leed">
                            <img src="assets/images/certifications/leed-logo.png" alt="LEED"> USGBC LEED
                        </span>
                    </div>
                </div>

                <!-- 2. Hyatt Regency Delhi -->
                <div class="client-card-item" data-category="hospitality igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/hyatt-logo.png" alt="Hyatt Regency Delhi Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Hyatt Regency Delhi</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Flagship Luxury Commercial Hotel</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Delhi</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 3. Hotel Taj Panchkula -->
                <div class="client-card-item" data-category="hospitality igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/taj-panchkula-logo.png" alt="Hotel Taj Panchkula Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Hotel Taj Panchkula</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Heritage Luxury Hospitality Property</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Panchkula</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 4. Honda Motorcycle -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/honda-logo.png" alt="Honda Motorcycle &amp; Scooter India Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Honda Motorcycle &amp; Scooter India</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Automotive Manufacturing Facility</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Vithalapur, Gujarat</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 5. Havells India -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/havells-logo.png" alt="Havells India Ltd Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Havells India Ltd., Alwar</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Electrical Manufacturing Campus</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Alwar, Rajasthan</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 6. Venkateswara Wires -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/venkateswara-logo.png" alt="Venkateswara Wires Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Venkateswara Wires Pvt. Ltd.</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Mahindra World City Unit</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Jaipur</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 7. Netsmartz Tower -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/netsmartz-logo.png" alt="Netsmartz Tower Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Netsmartz Tower</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">IT Park &amp; Technology Center</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Mohali</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 8. JREW Engineering -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/jrew-logo.png" alt="JREW Engineering Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>JREW Engineering Ltd.</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Heavy Engineering Plant</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Rajpura, Punjab</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 9. Window Tech India -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/windowtech-logo.png" alt="Window Tech India Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Window Tech India Pvt. Ltd.</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Fenestration &amp; Building Systems</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Jaipur</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 10. Appworx IT Tower -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/appworx-logo.png" alt="Appworx IT Tower Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Appworx IT Tower</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Commercial IT Office Tower</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Mohali</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 11. Vaibhav Global Limited -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/vaibhav-logo.png" alt="Vaibhav Global Limited Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Vaibhav Global Limited</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Multinational Retail &amp; E-commerce</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Jaipur</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 12. Vaibhav Global Head Office -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/vaibhav-logo.png" alt="Vaibhav HQ Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Vaibhav Global Limited - Head Office</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Corporate Headquarters</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Jaipur</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 13. Platinum Mall -->
                <div class="client-card-item" data-category="hospitality igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/platinum-mall-logo.png" alt="Platinum Mall Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Platinum Mall</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Commercial Retail Destination</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Lucknow</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 14. VRS Fintech Square -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/vrs-fintech-logo.png" alt="VRS Fintech Square Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>VRS Fintech Square</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Financial Services Hub</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Mohali</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 15. 42 Works -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/42works-logo.png" alt="42 Works Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>42 Works</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Digital Innovation Center</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Mohali</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 16. Dewcrest Gulnaar Meadows -->
                <div class="client-card-item" data-category="residential igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/dewcrest-logo.png" alt="Dewcrest Gulnaar Meadows Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Dewcrest - Gulnaar Meadows</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Sustainable Residential Township</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Zirakpur</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 17. Sentro Technology -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/sentro-tech-logo.png" alt="Sentro Technology Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Sentro Technology Pvt. Ltd.</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Corporate Tech Facility</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Gurugram</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 18. Kotler Block Chitkara -->
                <div class="client-card-item" data-category="institutional igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/chitkara-logo.png" alt="Chitkara University Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Kotler Block, Chitkara University</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Academic Campus Block</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Zirakpur</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 19. Rockefeller Block Chitkara -->
                <div class="client-card-item" data-category="institutional igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/chitkara-logo.png" alt="Chitkara University Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Rockefeller Block, Chitkara University</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Academic Research Block</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Zirakpur</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 20. SBI LHO Chandigarh -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/sbi-logo.png" alt="SBI Local Head Office Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>SBI Local Head Office</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">State Bank of India LHO</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Chandigarh</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 21. SBI LHO Mohali -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/sbi-logo.png" alt="SBI Local Head Office Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>SBI Local Head Office</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">State Bank of India Regional HQ</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Mohali</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 22. SBI Training Institute -->
                <div class="client-card-item" data-category="institutional igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/sbi-academy-logo.png" alt="SBI Training Institute Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>SBI Training Institute</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Banking Officers Training Center</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Panchkula</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 23. IOCL COCO -->
                <div class="client-card-item" data-category="corporate igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/iocl-logo.png" alt="Indian Oil Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>IOCL COCO</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Indian Oil Corporation Facility</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Jalandhar</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 24. Advance Plastic Industries -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/ecovia-logo.png" alt="Advance Plastic Industries Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Advance Plastic Industries (Ecovia)</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Sustainable Polymer Manufacturing</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Ludhiana</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 25. ASKK Ltd. -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/askk-logo.png" alt="ASKK Ltd Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>ASKK Ltd.</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Industrial Manufacturing Unit</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Jalandhar</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 26. Core Metal Krafts -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/core-metal-logo.png" alt="Core Metal Krafts Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Core Metal Krafts Limited (IEC Group)</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Metal Fabrication &amp; Krafts</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Dera Bassi, Punjab</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 27. Vedatam Commercial Mall -->
                <div class="client-card-item" data-category="hospitality igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/vedatam-logo.png" alt="Vedatam Commercial Mall Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Vedatam Commercial Mall</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Commercial Retail &amp; Entertainment</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Gurugram</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 28. The Crest Hills Faridabad -->
                <div class="client-card-item" data-category="residential igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/crest-hills-logo.png" alt="The Crest Hills Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>The Crest Hills</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Luxury Residential Complex</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Faridabad</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 29. The Crest Hills Panchkula -->
                <div class="client-card-item" data-category="residential igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/crest-hills-logo.png" alt="The Crest Hills Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>The Crest Hills</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Green Residential Community</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Panchkula</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 30. Patiala Locomotive Works -->
                <div class="client-card-item" data-category="institutional igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/indian-railways-logo.png" alt="Patiala Locomotive Works Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Patiala Locomotive Works</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Indian Railways Manufacturing Workshop</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Patiala</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 31. Patiala Locomotive Works Recert -->
                <div class="client-card-item" data-category="institutional igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/indian-railways-logo.png" alt="Patiala Locomotive Works Recert Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Patiala Locomotive Works - Recertification</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Green Workshop Recertification</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Patiala</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 32. Eastman Cast & Forge -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/eastman-logo.png" alt="Eastman Cast &amp; Forge Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Eastman Cast &amp; Forge Limited</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Hand Tools &amp; Forging Plant</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Ludhiana</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 33. Citizen Auto Component -->
                <div class="client-card-item" data-category="industrial igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/citizen-auto-logo.png" alt="Citizen Auto Component Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Citizen Auto Component Ltd.</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Precision Auto Components</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Ludhiana</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 34. Leh Assembly -->
                <div class="client-card-item" data-category="institutional igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/leh-assembly-logo.png" alt="Leh Assembly Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Leh Assembly</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Government Infrastructure Complex</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Leh &amp; Ladakh</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 35. Noida International University -->
                <div class="client-card-item" data-category="institutional ea">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/noida-uni-logo.png" alt="Noida International University Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Noida International University</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Comprehensive Campus Energy Audit</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Noida</span>
                        <span class="cert-tag-box badge-ea">
                            <i class="fa-solid fa-bolt"></i> Energy Assessment
                        </span>
                    </div>
                </div>

                <!-- 36. Crown 5 Trishla City -->
                <div class="client-card-item" data-category="residential igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/trishla-city-logo.png" alt="Crown 5 Trishla City Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Crown - 5, Trishla City</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">High-Rise Green Housing</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Zirakpur</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 37. Avanta Greens -->
                <div class="client-card-item" data-category="residential igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/avanta-greens-logo.png" alt="Avanta Greens Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Avanta Greens</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Eco-Residential Township</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Punjab</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 38. The Residence -->
                <div class="client-card-item" data-category="residential igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/the-residence-logo.png" alt="The Residence Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>The Residence</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Premium Green Apartments</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Gurugram</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

                <!-- 39. Sukhavas Residence -->
                <div class="client-card-item" data-category="residential igbc">
                    <div>
                        <div class="client-logo-header">
                            <img src="assets/images/clients/sukhavas-logo.png" alt="Sukhavas Residence Logo" width="300" height="100" class="client-logo-img">
                        </div>
                        <div class="client-card-body">
                            <h4>Sukhavas Residence</h4>
                            <p style="font-size: 13px; color: #64748b; margin: 0;">Luxury Sustainable Living</p>
                        </div>
                    </div>
                    <div class="client-card-meta">
                        <span class="client-location"><i class="fa-solid fa-location-dot"></i> Panchkula</span>
                        <span class="cert-tag-box badge-igbc">
                            <img src="assets/images/certifications/igbc-logo.png" alt="IGBC"> IGBC
                        </span>
                    </div>
                </div>

            </div>

            <!-- No Results Found Box -->
            <div id="noResultsMsg" class="no-results-message">
                <i class="fa-solid fa-folder-open" style="font-size: 32px; color: #cbd5e1; margin-bottom: 12px;"></i>
                <p>No matching client projects found in this category filter.</p>
            </div>

        </div>
    </section>

    <!-- ==========================================
       3. TESTIMONIALS / TRUST SECTION
       ========================================== -->
    <?php include 'includes/testimonials.php'; ?>

    <!-- ==========================================
       4. CALL-TO-ACTION BANNER
       ========================================== -->
    <section class="gb-cta-banner">
        <div class="gb-cta-overlay"></div>
        <div class="gb-cta-content">
            <h2>Ready to Elevate Your Building's Sustainability Standards?</h2>
            <p>
                Partner with Sustainergic Tech to achieve USGBC LEED, IGBC, or Energy Performance Certifications efficiently for your commercial, industrial, or residential developments.
            </p>
            <div class="gb-cta-buttons">
                <a href="contact-us.php" class="gb-btn gb-btn--gold">
                    Request a Consultation <i class="fa-solid fa-calendar-days"></i>
                </a>
                <a href="green-building-certification.php" class="gb-btn gb-btn--white-outline">
                    Explore Certifications <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Global Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        let currentCategory = 'all';

        function filterClients() {
            let visibleCount = 0;
            const cards = document.querySelectorAll('.client-card-item');
            cards.forEach(card => {
                const categories = card.getAttribute('data-category') || '';
                const matchesCategory = currentCategory === 'all' || categories.includes(currentCategory);

                if (matchesCategory) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            const noResultsMsg = document.getElementById('noResultsMsg');
            if (noResultsMsg) {
                if (visibleCount === 0) {
                    noResultsMsg.style.display = 'block';
                } else {
                    noResultsMsg.style.display = 'none';
                }
            }
        }

        function setCategoryFilter(category, btnElement) {
            currentCategory = category;
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => btn.classList.remove('active'));
            btnElement.classList.add('active');

            filterClients();
        }
    </script>

</body>

</html>
