<?php
/**
 * Sustainergic Tech - Related Services Component
 * Dynamically queries and renders related services from $header_services registry.
 * Self-contained styles ensure perfect layout on ALL pages.
 */

require_once __DIR__ . '/header-services.php';

$current_page_file = basename($_SERVER['PHP_SELF']);

if (isset($related_services_custom) && is_array($related_services_custom)) {
    $display_services = [];
    foreach ($related_services_custom as $key) {
        if (isset($header_services[$key])) {
            $display_services[] = $header_services[$key];
        }
    }
} else {
    // Exclude current page
    $available_services = array_filter($header_services, function($serv, $key) use ($current_page_file) {
        return $key !== $current_page_file;
    }, ARRAY_FILTER_USE_BOTH);

    $current_category = isset($header_services[$current_page_file]) ? $header_services[$current_page_file]['category'] : null;

    if ($current_category) {
        $same_category = array_values(array_filter($available_services, function($serv) use ($current_category) {
            return $serv['category'] === $current_category;
        }));
        $other_category = array_values(array_filter($available_services, function($serv) use ($current_category) {
            return $serv['category'] !== $current_category;
        }));

        $selected_same = array_slice($same_category, 0, 2);
        $selected_other = array_slice($other_category, 0, 1);
        $display_services = array_merge($selected_same, $selected_other);
    } else {
        $display_services = array_slice(array_values($available_services), 0, 3);
    }
}

$related_section_title = isset($related_title) ? $related_title : 'Explore Related Solutions';
$related_section_label = isset($related_label) ? $related_label : 'Integrated Engineering';
?>

<style>
/* Self-Contained Queried Related Services Section */
.related-services-queried-section {
    padding: 75px 0 85px;
    background-color: #ffffff;
    position: relative;
    font-family: 'Inter', 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
    clear: both;
    width: 100%;
}

.rsq-container {
    max-width: 1240px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box;
}

.rsq-header {
    text-align: center;
    margin-bottom: 44px;
}

.rsq-label {
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

.rsq-title-main {
    font-size: 32px;
    font-weight: 800;
    color: #0f172a;
    line-height: 1.3;
    margin: 0;
}

.rsq-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}

.rsq-card {
    background: #ffffff;
    border-radius: 20px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    display: flex;
    flex-direction: column;
    overflow: hidden;
    height: 100%;
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
    box-sizing: border-box;
}

.rsq-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 35px rgba(0, 0, 0, 0.09);
    border-color: #10b981;
}

.rsq-img-box {
    position: relative;
    width: 100%;
    height: 210px;
    overflow: hidden;
    background: #f1f5f9;
}

.rsq-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
    border: 0;
}

.rsq-card:hover .rsq-img-box img {
    transform: scale(1.07);
}

.rsq-icon-box {
    position: absolute;
    bottom: 14px;
    right: 14px;
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background-color: #f07b5e;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    box-shadow: 0 4px 14px rgba(240, 123, 94, 0.4);
    z-index: 10;
}

.rsq-body {
    padding: 24px 26px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    justify-content: space-between;
}

.rsq-body-top {
    margin-bottom: 16px;
}

.rsq-body h3 {
    font-size: 20px;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 10px 0;
    line-height: 1.35;
}

.rsq-body p {
    font-size: 14px;
    color: #475569;
    line-height: 1.6;
    margin: 0;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.rsq-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    font-weight: 700;
    color: #f07b5e;
    text-decoration: none;
    transition: color 0.25s ease, gap 0.25s ease;
    margin-top: 14px;
}

.rsq-link i {
    font-size: 12px;
    transition: transform 0.25s ease;
}

.rsq-card:hover .rsq-link {
    color: #047857;
    gap: 12px;
}

.rsq-card:hover .rsq-link i {
    transform: translateX(3px);
}

@media (max-width: 991px) {
    .rsq-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 640px) {
    .rsq-grid {
        grid-template-columns: 1fr;
    }
    .rsq-img-box {
        height: 190px;
    }
}
</style>

<!-- Related Services Section (Queried from Header Services) -->
<section class="related-services-queried-section">
    <div class="rsq-container">
        <div class="rsq-header">
            <span class="rsq-label">
                <i class="fa-solid fa-layer-group"></i> <?php echo htmlspecialchars($related_section_label); ?>
            </span>
            <h2 class="rsq-title-main"><?php echo htmlspecialchars($related_section_title); ?></h2>
        </div>

        <div class="rsq-grid">
            <?php foreach ($display_services as $rel_item): ?>
                <div class="rsq-card">
                    <div class="rsq-img-box">
                        <img src="<?php echo htmlspecialchars($rel_item['image']); ?>" alt="<?php echo htmlspecialchars($rel_item['title']); ?>" loading="lazy">
                        <div class="rsq-icon-box">
                            <i class="<?php echo htmlspecialchars(!empty($rel_item['icon']) ? $rel_item['icon'] : 'fa-solid fa-arrow-right'); ?>"></i>
                        </div>
                    </div>
                    <div class="rsq-body">
                        <div class="rsq-body-top">
                            <h3><?php echo htmlspecialchars($rel_item['title']); ?></h3>
                            <p><?php echo htmlspecialchars($rel_item['desc']); ?></p>
                        </div>
                        <a href="<?php echo htmlspecialchars($rel_item['url']); ?>" class="rsq-link">
                            Explore Service <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
