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
}

.sp-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 20px;
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
    float: none !important;
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
    top: auto !important;
    bottom: auto !important;
    left: auto !important;
    right: auto !important;
    float: none !important;
}

.sp-nav-btn:hover {
    background: #10b981 !important;
    color: #ffffff !important;
    border-color: #10b981 !important;
    box-shadow: 0 4px 12px rgba(16, 185, 129, 0.35) !important;
}

/* Force Swiper Pagination to remain inline flex in center bar */
.sp-pagination-dots,
.sp-pagination-dots.swiper-pagination,
.sp-pagination-dots.swiper-pagination-horizontal {
    position: static !important;
    width: auto !important;
    height: auto !important;
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 8px !important;
    margin: 0 8px !important;
    padding: 0 !important;
    transform: none !important;
    left: auto !important;
    right: auto !important;
    top: auto !important;
    bottom: auto !important;
    z-index: 10 !important;
}

.sp-pagination-dots .swiper-pagination-bullet {
    width: 10px !important;
    height: 10px !important;
    background: #cbd5e1 !important;
    opacity: 1 !important;
    border-radius: 50% !important;
    transition: all 0.3s ease !important;
    cursor: pointer !important;
    margin: 0 !important;
    display: inline-block !important;
}

.sp-pagination-dots .swiper-pagination-bullet-active {
    width: 28px !important;
    border-radius: 12px !important;
    background: #10b981 !important;
}

@media (max-width: 991px) {
    .sp-horizontal-card {
        flex-direction: column;
        min-height: auto;
    }
    .sp-card-img-wrapper {
        width: 100%;
        height: 220px;
    }
    .sp-card-content {
        width: 100%;
        padding: 22px;
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
        <div class="swiper <?php echo $unique_id; ?>" style="padding: 10px 4px 10px;">
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

        <!-- Custom Swiper Navigation Controls (Placed Outside Swiper for Perfect Centering) -->
        <div class="sp-swiper-controls-bar">
            <div class="sp-nav-btn <?php echo $unique_id; ?>-prev">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="sp-pagination-dots <?php echo $unique_id; ?>-pag"></div>
            <div class="sp-nav-btn <?php echo $unique_id; ?>-next">
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper !== 'undefined') {
        new Swiper('.<?php echo $unique_id; ?>', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            pagination: {
                el: '.<?php echo $unique_id; ?>-pag',
                clickable: true,
            },
            navigation: {
                nextEl: '.<?php echo $unique_id; ?>-next',
                prevEl: '.<?php echo $unique_id; ?>-prev',
            },
            breakpoints: {
                992: {
                    slidesPerView: 2,
                    spaceBetween: 24
                }
            }
        });
    }
});
</script>
