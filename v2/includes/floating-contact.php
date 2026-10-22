<?php
/**
 * Sustainergic Tech - Floating Quick Contact Widget
 * Includes Direct WhatsApp Chat and One-Click Call functionality.
 */
?>
<style>
/* Floating Quick Contact Widget */
.floating-contact-widget {
    position: fixed;
    bottom: 28px;
    right: 28px;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 14px;
    align-items: flex-end;
}

.floating-btn {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff !important;
    text-decoration: none !important;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    position: relative;
    cursor: pointer;
}

.floating-btn i {
    font-size: 24px;
    line-height: 1;
}

/* WhatsApp Button */
.floating-btn-whatsapp {
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    box-shadow: 0 8px 25px rgba(37, 211, 102, 0.35);
}

.floating-btn-whatsapp:hover {
    transform: translateY(-4px) scale(1.08);
    box-shadow: 0 14px 30px rgba(37, 211, 102, 0.5);
    color: #ffffff !important;
}

/* Pulse animation on WhatsApp */
.floating-btn-whatsapp::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    border-radius: 50%;
    border: 2px solid rgba(37, 211, 102, 0.7);
    animation: wa-pulse 2.2s infinite;
    pointer-events: none;
}

@keyframes wa-pulse {
    0% { transform: scale(1); opacity: 0.9; }
    70% { transform: scale(1.35); opacity: 0; }
    100% { transform: scale(1.4); opacity: 0; }
}

/* Call Button */
.floating-btn-call {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    border: 1px solid rgba(255, 255, 255, 0.15);
}

.floating-btn-call:hover {
    background: #EE775A;
    transform: translateY(-4px) scale(1.08);
    box-shadow: 0 14px 30px rgba(238, 119, 90, 0.45);
    color: #ffffff !important;
}

/* Tooltip Badge */
.floating-tooltip {
    position: absolute;
    right: 68px;
    background: #0f172a;
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
    padding: 6px 14px;
    border-radius: 20px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transform: translateX(10px);
    transition: all 0.25s ease;
    box-shadow: 0 4px 14px rgba(0,0,0,0.15);
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.floating-tooltip::after {
    content: '';
    position: absolute;
    right: -5px;
    top: 50%;
    transform: translateY(-50%);
    border-width: 5px 0 5px 6px;
    border-style: solid;
    border-color: transparent transparent transparent #0f172a;
}

.floating-btn:hover .floating-tooltip {
    opacity: 1;
    transform: translateX(0);
}

@media (max-width: 768px) {
    .floating-contact-widget {
        bottom: 20px;
        right: 18px;
        gap: 10px;
    }
    .floating-btn {
        width: 48px;
        height: 48px;
    }
    .floating-btn i {
        font-size: 21px;
    }
    .floating-tooltip {
        display: none; /* Hide hover tooltip on touch devices */
    }
}
</style>

<div class="floating-contact-widget" id="floatingContact">
    <!-- Click-to-Call -->
    <a href="tel:+919785749960" class="floating-btn floating-btn-call" aria-label="Call Sustainergic Engineers" title="Call Our Engineers">
        <i class="fa-solid fa-phone-volume"></i>
        <span class="floating-tooltip">Call +91 97857 49960</span>
    </a>

    <!-- WhatsApp Chat -->
    <a href="https://wa.me/919785749960?text=Hello%20Sustainergic%20Tech%2C%20I%20would%20like%20to%20consult%20on%20a%20Green%20Building%20%2F%20HVAC%20Engineering%20project." target="_blank" rel="noopener noreferrer" class="floating-btn floating-btn-whatsapp" aria-label="Chat on WhatsApp" title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="floating-tooltip">Chat with us on WhatsApp</span>
    </a>
</div>
