<?php
/**
 * Reusable Call-To-Action (CTA) Section Include Template
 * 
 * You can customize the CTA content by defining variables before including this file:
 * 
 * $cta_title = "Custom CTA Title";
 * $cta_desc = "Custom CTA description paragraph.";
 * $cta_btn_text = "Custom Button Text";
 * $cta_btn_link = "custom-page.php";
 * include 'includes/cta.php';
 */

$title = isset($cta_title) ? $cta_title : 'Ready to Transition to Sustainable Solutions?';
$desc = isset($cta_desc) ? $cta_desc : 'Partner with Sustainergic Tech for certified green buildings, optimized HVAC design, and low-carbon energy systems.';
$btn_text = isset($cta_btn_text) ? $cta_btn_text : 'Get Free Consultation';
$btn_link = isset($cta_btn_link) ? $cta_btn_link : 'contact-us.php';
?>

<!-- =========================
    CTA SECTION
========================= -->
<section class="cta-section">
    <div class="cta-card">
        <div class="cta-inner">
            <div class="cta-text">
                <h2><?php echo htmlspecialchars($title); ?></h2>
                <p><?php echo htmlspecialchars($desc); ?></p>
            </div>
            <div class="cta-action">
                <a href="<?php echo htmlspecialchars($btn_link); ?>" class="btn-cta">
                    <?php echo htmlspecialchars($btn_text); ?> <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
// Reset variables to prevent side effects in subsequent inclusions
unset($cta_title, $cta_desc, $cta_btn_text, $cta_btn_link);
?>
