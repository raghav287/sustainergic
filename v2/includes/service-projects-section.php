<?php
/**
 * Sustainergic Tech - Service Projects Section Component (Self-Contained Slider)
 * Usage: Define $service_projects, $service_projects_title, and $service_projects_subtitle before including this file.
 */

if (!isset($service_projects) || !is_array($service_projects)) {
    return;
}

$section_title = isset($service_projects_title) ? $service_projects_title : 'Featured Projects Portfolio';
$section_subtitle = isset($service_projects_subtitle) ? $service_projects_subtitle : 'Explore our recent certified installations, engineering accomplishments, and real-world results.';
$unique_id = 'sp_swiper_' . uniqid();
?>

<style>
/* Self-Contained Service Projects Section Styles */
.service-projects-section {
    padding: 75px 0 85px;
    background-color: #f8fafc;
    position: relative;
    border-bottom: 1px solid #e2e8f0;
    font-family: 'Inter', 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
    overflow: hidden;
    width: 100%;
    box-sizing: border-box;
}

.sp-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box;
    width: 100%;
}

.sp-header {
    text-align: center;
    margin-bottom: 40px;
}

.sp-label {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 18px;
    background-color: #ecfdf5;
    color: #047857;
    font-size: 13px;
    font-weight: 700;
    border-radius: 20px;
    margin-bottom: 14px;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    border: 1px solid #a7f3d0;
}

.sp-title-main {
    font-size: 34px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    line-height: 1.25;
}

.sp-subtitle {
    font-size: 16px;
    color: #64748b;
    max-width: 720px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Side-by-Side Horizontal Card */
.sp-horizontal-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    display: flex;
    overflow: hidden;
    height: 100%;
    min-height: 290px;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    box-sizing: border-box;
}

.sp-horizontal-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 14px 35px rgba(0, 0, 0, 0.09);
    border-color: #10b981;
}

.sp-card-img-wrapper {
    width: 44%;
    min-width: 44%;
    position: relative;
    overflow: hidden;
    background: #f1f5f9;
}

.sp-card-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.sp-horizontal-card:hover .sp-card-img-wrapper img {
    transform: scale(1.07);
}

/* Badge Tags (Styled Self-Contained) */
.sp-badge-tag {
    position: absolute;
    top: 14px;
    left: 14px;
    z-index: 5;
    max-width: calc(100% - 28px);
}

.cert-tag-box {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
    letter-spacing: 0.3px;
    white-space: nowrap;
    max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
}

.badge-igbc {
    background-color: #ecfdf5 !important;
    color: #047857 !important;
    border: 1px solid #a7f3d0 !important;
}

.badge-leed {
    background-color: #f0fdf4 !important;
    color: #15803d !important;
    border: 1px solid #bbf7d0 !important;
}

.badge-ea {
    background-color: #f0f9ff !important;
    color: #0369a1 !important;
    border: 1px solid #bae6fd !important;
}

/* Card Content Area */
.sp-card-content {
    width: 56%;
    padding: 26px 28px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    box-sizing: border-box;
}

.sp-location-badge {
    font-size: 12.5px;
    font-weight: 700;
    color: #047857;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 8px;
}

.sp-card-content h4 {
    font-size: 19px;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.35;
    margin-bottom: 12px;
}

.sp-description {
    font-size: 14px;
    color: #475569;
    line-height: 1.65;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Swiper Navigation & Pagination Controls */
.sp-swiper-controls-bar {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 16px !important;
    margin-top: 36px !important;
    position: relative !important;
    z-index: 10 !important;
    width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
    padding: 0 10px !important;
    clear: both !important;
}

.sp-nav-btn {
    width: 44px !important;
    height: 44px !important;
    min-width: 44px !important;
    min-height: 44px !important;
    border-radius: 50% !important;
    background: #ffffff !important;
    border: 1px solid #cbd5e1 !important;
    color: #1e293b !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    transition: all 0.25s ease !important;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06) !important;
    position: static !important;
    margin: 0 !important;
    flex-shrink: 0 !important;
}

.sp-nav-btn:hover {
    background: #10b981 !important;
    color: #ffffff !important;
    border-color: #10b981 !important;
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.35) !important;
}

.sp-pagination-wrapper {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 28px;
    max-width: 160px;
    overflow: hidden;
    padding: 2px 0;
}

/* Swiper Pagination Elements */
.sp-pagination-dots,
.sp-pagination-dots.swiper-pagination {
    position: relative !important;
    width: auto !important;
    height: auto !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;
    margin: 0 !important;
    padding: 0 !important;
    transform: none !important;
    left: auto !important;
    right: auto !important;
    top: auto !important;
    bottom: auto !important;
    z-index: 10 !important;
}

.sp-pagination-dots.swiper-pagination-bullets-dynamic {
    display: inline-block !important;
    overflow: hidden !important;
    white-space: nowrap !important;
    font-size: 0 !important;
    vertical-align: middle !important;
    gap: 0 !important;
}

.sp-pagination-dots .swiper-pagination-bullet {
    width: 10px !important;
    height: 10px !important;
    background: #cbd5e1 !important;
    opacity: 1 !important;
    border-radius: 50% !important;
    transition: all 0.3s ease !important;
    cursor: pointer !important;
    margin: 0 4px !important;
    display: inline-block !important;
    vertical-align: middle !important;
}

/* Static pills for small project counts */
.sp-pagination-dots:not(.swiper-pagination-bullets-dynamic) .swiper-pagination-bullet-active {
    width: 28px !important;
    border-radius: 12px !important;
    background: #10b981 !important;
}

/* Dynamic bullets active state */
.sp-pagination-dots.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active,
.sp-pagination-dots.swiper-pagination-bullets-dynamic .swiper-pagination-bullet-active-main {
    background: #10b981 !important;
    opacity: 1 !important;
}

@media (max-width: 991px) {
    .service-projects-section {
        padding: 60px 0 70px;
    }
    .sp-header {
        margin-bottom: 30px;
    }
    .sp-title-main {
        font-size: 28px;
    }
    .sp-subtitle {
        font-size: 15px;
    }
    .sp-horizontal-card {
        flex-direction: column;
        min-height: auto;
    }
    .sp-card-img-wrapper {
        width: 100%;
        min-width: 100%;
        height: 220px;
    }
    .sp-card-content {
        width: 100%;
        padding: 22px;
    }
}

@media (max-width: 768px) {
    .service-projects-section {
        padding: 50px 0 60px;
    }
    .sp-title-main {
        font-size: 26px;
    }
}

@media (max-width: 576px) {
    .sp-container {
        padding: 0 16px;
    }
    .sp-header {
        margin-bottom: 24px;
    }
    .sp-title-main {
        font-size: 23px;
        line-height: 1.3;
    }
    .sp-subtitle {
        font-size: 14px;
        line-height: 1.55;
    }
    .sp-card-img-wrapper {
        height: 200px;
    }
    .sp-card-content {
        padding: 18px 16px;
    }
    .sp-card-content h4 {
        font-size: 17px;
        line-height: 1.35;
        margin-bottom: 8px;
    }
    .sp-description {
        font-size: 13.5px;
        line-height: 1.6;
        -webkit-line-clamp: 4;
    }
    .sp-swiper-controls-bar {
        gap: 12px !important;
        margin-top: 24px !important;
    }
    .sp-nav-btn {
        width: 40px !important;
        height: 40px !important;
        min-width: 40px !important;
        min-height: 40px !important;
        font-size: 13px !important;
    }
}

@media (max-width: 380px) {
    .sp-card-img-wrapper {
        height: 185px;
    }
    .sp-card-content {
        padding: 16px 14px;
    }
    .sp-card-content h4 {
        font-size: 16px;
    }
    .sp-location-badge {
        font-size: 11.5px;
    }
    .cert-tag-box {
        font-size: 11px;
        padding: 5px 10px;
    }
}
</style>

<!-- ==========================================
   SERVICE PROJECTS SECTION (SELF-CONTAINED SLIDER)
   ========================================== -->
<section class="service-projects-section" id="projects">
    <div class="sp-container">
        
        <div class="sp-header">
            <span class="sp-label">
                <i class="fa-solid fa-briefcase"></i> Featured Projects Portfolio
            </span>
            <h2 class="sp-title-main">
                <?php echo htmlspecialchars($section_title); ?>
            </h2>
            <p class="sp-subtitle">
                <?php echo htmlspecialchars($section_subtitle); ?>
            </p>
        </div>

        <!-- Swiper Container -->
        <div class="swiper <?php echo $unique_id; ?>" style="padding: 10px 4px 10px; <?php if (count($service_projects) === 1) echo 'max-width: 780px; margin: 0 auto;'; ?>">
            <div class="swiper-wrapper">
                <?php foreach ($service_projects as $proj): ?>
                    <div class="swiper-slide" style="height: auto;">
                        <div class="sp-horizontal-card">
                            <!-- Left Side: Image -->
                            <div class="sp-card-img-wrapper">
                                <img src="<?php echo htmlspecialchars($proj['image']); ?>" alt="<?php echo htmlspecialchars($proj['title']); ?>" loading="lazy">
                                <?php if (!empty($proj['tag'])): ?>
                                    <div class="sp-badge-tag">
                                        <span class="cert-tag-box <?php echo isset($proj['badge_type']) ? htmlspecialchars($proj['badge_type']) : 'badge-igbc'; ?>">
                                            <?php echo htmlspecialchars($proj['tag']); ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Right Side: Content -->
                            <div class="sp-card-content">
                                <div>
                                    <span class="sp-location-badge">
                                        <i class="fa-solid fa-location-dot"></i> <?php echo htmlspecialchars($proj['location']); ?>
                                    </span>
                                    <h4><?php echo htmlspecialchars($proj['title']); ?></h4>
                                    <p class="sp-description" style="margin-bottom: 0;">
                                        <?php echo htmlspecialchars($proj['description']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Custom Swiper Navigation Controls (Only shown when multiple projects exist) -->
        <?php if (count($service_projects) > 1): ?>
        <div class="sp-swiper-controls-bar">
            <div class="sp-nav-btn <?php echo $unique_id; ?>-prev" aria-label="Previous Slide">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="sp-pagination-wrapper">
                <div class="sp-pagination-dots <?php echo $unique_id; ?>-pag"></div>
            </div>
            <div class="sp-nav-btn <?php echo $unique_id; ?>-next" aria-label="Next Slide">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper !== 'undefined') {
        var projCount = <?php echo count($service_projects); ?>;
        new Swiper('.<?php echo $unique_id; ?>', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: projCount > 2,
            autoplay: projCount > 1 ? {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            } : false,
            pagination: {
                el: '.<?php echo $unique_id; ?>-pag',
                clickable: true,
                dynamicBullets: projCount > 5,
                dynamicMainBullets: 3,
            },
            navigation: {
                nextEl: '.<?php echo $unique_id; ?>-next',
                prevEl: '.<?php echo $unique_id; ?>-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: projCount === 1 ? 1 : 2,
                    spaceBetween: 24
                }
            }
        });
    }
});
</script>
