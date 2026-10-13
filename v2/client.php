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
        /* CLIENT LOGO CARDS GRID */
        .client-cards-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            margin-bottom: 40px;
        }

        .client-card-item {
            background: #ffffff;
            border-radius: 18px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
            padding: 24px 20px;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 130px;
            position: relative;
            overflow: hidden;
        }

        .client-card-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            border-color: #10b981;
        }

        /* Logo Header Banner inside Card */
        .client-logo-header {
            width: 100%;
            height: 80px;
            background: transparent;
            border-radius: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            margin: 0;
            border: none;
            box-shadow: none;
            overflow: hidden;
        }

        .client-logo-header img,
        .client-logo-img {
            max-height: 65px;
            max-width: 200px;
            width: auto;
            height: auto;
            object-fit: contain;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.04));
            transition: transform 0.3s ease;
        }

        .client-card-item:hover .client-logo-img,
        .client-card-item:hover .client-logo-header img {
            transform: scale(1.08);
        }

        @media (max-width: 1024px) {
            .client-cards-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 18px;
            }
        }

        @media (max-width: 768px) {
            .client-cards-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 16px;
            }
            .client-card-item {
                padding: 18px 14px;
                min-height: 110px;
            }
            .client-logo-header {
                height: 70px;
            }
            .client-logo-header img,
            .client-logo-img {
                max-height: 55px;
                max-width: 150px;
            }
        }

        @media (max-width: 480px) {
            .client-cards-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 12px;
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

            <!-- ==========================================
               PROMINENT LOGO CARDS GRID
               ========================================== -->
            <div class="client-cards-grid" id="clientCardsGrid">
                
                <!-- 1. Hyatt Regency -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/hyatt-logo.png" alt="Hyatt Regency Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 2. Hotel Taj -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/taj.png" alt="Taj Hotels Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 3. Reserve Bank of India (RBI) -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/rbi.png" alt="Reserve Bank of India Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 4. AIIMS New Delhi -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/aiims.png" alt="AIIMS Delhi Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 5. Holiday Inn -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/holiday.png" alt="Holiday Inn Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 6. Hindustan Coca-Cola Beverages -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/hindustan-coca.png" alt="Hindustan Coca-Cola Beverages Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 7. Honda Motorcycle & Scooter India -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/honda-logo.png" alt="Honda Motorcycle &amp; Scooter India Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 8. Havells India -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/havells-logo.png" alt="Havells India Ltd Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 9. State Bank of India (SBI) -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/sbi-logo.png" alt="State Bank of India Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 10. Indian Railways -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/indian-railways-logo.png" alt="Indian Railways - Patiala Locomotive Works Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 11. IOCL COCO -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/iocl-logo.png" alt="Indian Oil Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 12. KIMS Hospitals -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/kims.png" alt="KIMS Hospitals Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 13. Unity Group -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/unity.png" alt="Unity Group Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 14. St. Xavier's -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/st-xavier.png" alt="St. Xavier's Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 15. SPJ Group -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/spj.png" alt="SPJ Group Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 16. Sentro Technology -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/sentro-tech-logo.png" alt="Sentro Technology Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 17. Core Metal Krafts (IEC Group) -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/core-metal-logo.png" alt="Core Metal Krafts IEC Group Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/iec.png" alt="IEC Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 18. Durian -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/durian.png" alt="Durian Furniture Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 19. The Doksa -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/the-doksha.png" alt="The Doksa Eco Resort Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 20. Apex Group -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/apex.png" alt="Apex Group Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 21. Gulnaar Meadows (Dewcrest) -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/gulnaar-meadows.png" alt="Dewcrest Gulnaar Meadows Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 22. Netsmartz Tower -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/netsmartz-logo.png" alt="Netsmartz Tower Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 23. VRS Fintech Square -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/vrs-fintech-logo.png" alt="VRS Fintech Square Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 24. 42 Works -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/42works-logo.png" alt="42 Works Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 25. Chitkara University -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/chitkara-logo.png" alt="Chitkara University Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 26. Noida International University -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/noida-uni-logo.png" alt="Noida International University Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 27. Leh Assembly -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/leh-assembly-logo.png" alt="Leh Assembly Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 28. Venkateswara Wires -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/venkateswara-logo.png" alt="Venkateswara Wires Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 29. JREW Engineering -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/jrew-logo.png" alt="JREW Engineering Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 30. Window Tech India -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/windowtech-logo.png" alt="Window Tech India Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 31. Appworx IT Tower -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/appworx-logo.png" alt="Appworx IT Tower Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 32. Vaibhav Global Limited -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/vaibhav-logo.png" alt="Vaibhav Global Limited Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 33. Vedatam Commercial Mall -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/vedatam-logo.png" alt="Vedatam Commercial Mall Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

              

                <!-- 35. The Crest Hills -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/crest-hills-logo.png" alt="The Crest Hills Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 36. Eastman Cast & Forge -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/eastman-logo.png" alt="Eastman Cast &amp; Forge Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 37. Citizen Auto Component -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/citizen-auto-logo.png" alt="Citizen Auto Component Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 38. Crown 5 - Trishla City -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/trishla-city-logo.png" alt="Crown 5 Trishla City Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

                <!-- 39. Avanta Greens -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/avanta-greens-logo.png" alt="Avanta Greens Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>


         
                <!-- 43. Sukhavas Residence -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/sukhavas-logo.png" alt="Sukhavas Residence Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>
                   <!-- 44. max-logo Residence -->
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/max-logo.png" alt="Sukhavas Residence Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>
                
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/General-health-care.png" alt="Sukhavas Residence Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>
                
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/pinegroove.png" alt="Sukhavas Residence Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/mnit.png" alt="Sukhavas Residence Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>
                <div class="client-card-item">
                    <div class="client-logo-header">
                        <img src="assets/images/clients/iit.png" alt="Sukhavas Residence Logo" width="300" height="100" class="client-logo-img">
                    </div>
                </div>

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

</body>

</html>
