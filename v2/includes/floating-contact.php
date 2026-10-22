<?php
/**
 * Sustainergic Tech - Floating Quick Contact Widget
 * Authentic Official WhatsApp Button & Click-to-Call Functionality
 * Fully Responsive with Mobile Optimization
 */
?>
<style>
/* ==========================================================================
   FLOATING QUICK CONTACT WIDGET (AUTHENTIC WHATSAPP & PHONE)
   ========================================================================== */
.floating-contact-widget {
    position: fixed;
    bottom: 28px;
    right: 28px;
    z-index: 99999;
    display: flex;
    flex-direction: column;
    gap: 14px;
    align-items: flex-end;
    pointer-events: none; /* Only children accept clicks */
}

.floating-contact-widget a,
.floating-contact-widget button,
.floating-contact-widget .wa-chat-bubble {
    pointer-events: auto;
}

/* Base Floating Action Button */
.floating-btn {
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #ffffff !important;
    text-decoration: none !important;
    transition: transform 0.28s cubic-bezier(0.16, 1, 0.3, 1), 
                box-shadow 0.28s cubic-bezier(0.16, 1, 0.3, 1),
                background-color 0.25s ease;
    position: relative;
    cursor: pointer;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
}

/* ==========================================================================
   AUTHENTIC WHATSAPP FLOATING BUTTON (#25D366)
   ========================================================================== */
.floating-btn-whatsapp {
    width: 60px;
    height: 60px;
    background-color: #25D366;
    box-shadow: 0 8px 24px rgba(37, 211, 102, 0.42), 0 2px 8px rgba(0, 0, 0, 0.12);
    border: none;
    animation: wa-pulse-ring 2.4s cubic-bezier(0.25, 0, 0, 1) infinite;
}

.floating-btn-whatsapp:hover {
    background-color: #22bf5b;
    transform: scale(1.08) translateY(-3px);
    box-shadow: 0 14px 32px rgba(37, 211, 102, 0.55), 0 4px 12px rgba(0, 0, 0, 0.16);
    color: #ffffff !important;
}

.floating-btn-whatsapp:active {
    transform: scale(0.94);
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
}

/* Exact SVG WhatsApp icon sizing and alignment */
.floating-btn-whatsapp .wa-icon-svg {
    width: 34px;
    height: 34px;
    fill: #ffffff;
    display: block;
    transition: transform 0.25s ease;
}

.floating-btn-whatsapp:hover .wa-icon-svg {
    transform: scale(1.05);
}

/* Continuous Authentic Radar Pulse Wave */
@keyframes wa-pulse-ring {
    0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7), 0 8px 24px rgba(37, 211, 102, 0.42);
    }
    70% {
        box-shadow: 0 0 0 16px rgba(37, 211, 102, 0), 0 10px 28px rgba(37, 211, 102, 0.42);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0), 0 8px 24px rgba(37, 211, 102, 0.42);
    }
}

/* Live Online Status Badge Dot */
.wa-status-badge {
    position: absolute;
    top: 2px;
    right: 2px;
    width: 14px;
    height: 14px;
    background: #10b981;
    border: 2.5px solid #ffffff;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    animation: wa-dot-blink 2s infinite ease-in-out;
}

@keyframes wa-dot-blink {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.75; transform: scale(1.15); }
}

/* ==========================================================================
   DESKTOP CHAT INVITATION BUBBLE (SPEECH BALLOON)
   ========================================================================== */
.wa-bubble-container {
    position: relative;
    display: flex;
    align-items: center;
}

.wa-chat-bubble {
    position: absolute;
    right: 76px;
    bottom: 4px;
    background: #ffffff;
    color: #1e293b;
    width: 250px;
    padding: 14px 16px;
    border-radius: 18px 18px 4px 18px;
    box-shadow: 0 12px 36px rgba(15, 23, 42, 0.16), 0 2px 8px rgba(15, 23, 42, 0.08);
    border: 1px solid #e2e8f0;
    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    transform-origin: bottom right;
    animation: waBubbleIn 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    cursor: pointer;
    text-decoration: none;
    display: block;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}

.wa-chat-bubble:hover {
    transform: translateY(-2px);
    box-shadow: 0 16px 40px rgba(15, 23, 42, 0.2);
}

@keyframes waBubbleIn {
    0% {
        opacity: 0;
        transform: scale(0.85) translateX(12px);
    }
    100% {
        opacity: 1;
        transform: scale(1) translateX(0);
    }
}

.wa-bubble-close {
    position: absolute;
    top: 8px;
    right: 10px;
    background: transparent;
    border: none;
    color: #94a3b8;
    font-size: 16px;
    line-height: 1;
    cursor: pointer;
    padding: 2px 4px;
    transition: color 0.2s ease;
}

.wa-bubble-close:hover {
    color: #0f172a;
}

.wa-bubble-header {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
}

.wa-bubble-avatar {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #25D366;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.wa-bubble-avatar svg {
    width: 14px;
    height: 14px;
    fill: #ffffff;
}

.wa-bubble-name {
    font-size: 12.5px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
}

.wa-bubble-online {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    color: #10b981;
    font-weight: 600;
}

.wa-bubble-online-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #10b981;
    display: inline-block;
}

.wa-bubble-msg {
    font-size: 12px;
    color: #475569;
    line-height: 1.45;
    margin: 0 0 8px;
}

.wa-bubble-cta {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 11.5px;
    font-weight: 700;
    color: #075e54;
}

.wa-bubble-cta i {
    font-size: 10px;
    transition: transform 0.2s ease;
}

.wa-chat-bubble:hover .wa-bubble-cta i {
    transform: translateX(3px);
}

/* Speech bubble arrow pointer */
.wa-chat-bubble::after {
    content: '';
    position: absolute;
    right: -7px;
    bottom: 20px;
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-left: 8px solid #ffffff;
}

/* ==========================================================================
   PHONE / CLICK-TO-CALL BUTTON (SAME SIZE AS WHATSAPP BUTTON)
   ========================================================================== */
.floating-btn-call {
    width: 60px;
    height: 60px;
    background-color: #0f172a;
    border: 1.5px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 24px rgba(15, 23, 42, 0.25), 0 2px 8px rgba(0, 0, 0, 0.12);
}

.floating-btn-call svg,
.floating-btn-call i {
    font-size: 24px;
    width: 24px;
    height: 24px;
    line-height: 1;
    color: #ffffff;
    fill: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.25s ease;
}

.floating-btn-call:hover {
    background-color: #EE775A;
    border-color: #EE775A;
    transform: scale(1.08) translateY(-3px);
    box-shadow: 0 14px 30px rgba(238, 119, 90, 0.48), 0 4px 12px rgba(0, 0, 0, 0.16);
    color: #ffffff !important;
}

.floating-btn-call:hover i,
.floating-btn-call:hover svg {
    transform: scale(1.08);
}

.floating-btn-call:active {
    transform: scale(0.94);
}

/* Tooltip on Call button */
.floating-call-tooltip {
    position: absolute;
    right: 76px;
    background: #0f172a;
    color: #ffffff;
    font-size: 12px;
    font-weight: 600;
    padding: 7px 16px;
    border-radius: 20px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transform: translateX(10px);
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.18);
    font-family: 'Poppins', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.floating-call-tooltip::after {
    content: '';
    position: absolute;
    right: -5px;
    top: 50%;
    transform: translateY(-50%);
    border-width: 5px 0 5px 6px;
    border-style: solid;
    border-color: transparent transparent transparent #0f172a;
}

.floating-btn-call:hover .floating-call-tooltip {
    opacity: 1;
    transform: translateX(0);
}

/* ==========================================================================
   RESPONSIVE DESIGN (TABLETS & SMARTPHONES)
   ========================================================================== */
@media (max-width: 768px) {
    .floating-contact-widget {
        bottom: 22px;
        right: 18px;
        gap: 12px;
    }

    /* WhatsApp & Call Buttons: Exactly Same Dimensions */
    .floating-btn-whatsapp,
    .floating-btn-call {
        width: 54px;
        height: 54px;
    }

    .floating-btn-whatsapp .wa-icon-svg {
        width: 30px;
        height: 30px;
    }

    .floating-btn-call svg,
    .floating-btn-call i {
        font-size: 21px;
        width: 21px;
        height: 21px;
    }

    .wa-status-badge {
        width: 13px;
        height: 13px;
        top: 2px;
        right: 2px;
        border-width: 2px;
    }

    /* Hide desktop speech bubble and tooltips on touch devices */
    .wa-chat-bubble,
    .floating-call-tooltip {
        display: none !important;
    }
}

@media (max-width: 480px) {
    .floating-contact-widget {
        bottom: calc(16px + env(safe-area-inset-bottom, 0px));
        right: 14px;
        gap: 10px;
    }

    /* WhatsApp & Call Buttons: Exactly Same Dimensions on Mobile */
    .floating-btn-whatsapp,
    .floating-btn-call {
        width: 50px;
        height: 50px;
    }

    .floating-btn-whatsapp .wa-icon-svg {
        width: 28px;
        height: 28px;
    }

    .floating-btn-call svg,
    .floating-btn-call i {
        font-size: 19px;
        width: 19px;
        height: 19px;
    }

    .wa-status-badge {
        width: 12px;
        height: 12px;
    }
}
</style>

<div class="floating-contact-widget" id="floatingContact" role="region" aria-label="Quick Contact Options">

    <!-- 1. Click-to-Call Button -->
    <a href="tel:+919785749960" 
       class="floating-btn floating-btn-call" 
       aria-label="Call Sustainergic Engineers at +91 97857 49960" 
       title="Call Our Engineers">
        <i class="fa-solid fa-phone" aria-hidden="true"></i>
        <span class="floating-call-tooltip">Call +91 97857 49960</span>
    </a>

    <!-- 2. Authentic WhatsApp Button with Bubble Prompt -->
    <div class="wa-bubble-container">
        
        <!-- Desktop Interactive Welcome Bubble (Click to Open WhatsApp) -->
        <a href="https://wa.me/919785749960?text=Hello%20Sustainergic%20Tech%2C%20I%20would%20like%20to%20consult%20on%20a%20Green%20Building%20%2F%20HVAC%20Engineering%20project." 
           target="_blank" 
           rel="noopener noreferrer" 
           class="wa-chat-bubble" 
           id="waChatBubble"
           aria-label="Chat with Sustainergic Support on WhatsApp">
            <button type="button" class="wa-bubble-close" id="waBubbleClose" aria-label="Dismiss chat prompt" onclick="event.preventDefault(); event.stopPropagation(); document.getElementById('waChatBubble').style.display='none';">&times;</button>
            <div class="wa-bubble-header">
                <span class="wa-bubble-avatar">
                    <svg viewBox="0 0 448 512" aria-hidden="true"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                </span>
                <div>
                    <div class="wa-bubble-name">Sustainergic Support</div>
                    <div class="wa-bubble-online">
                        <span class="wa-bubble-online-dot"></span> Online Now
                    </div>
                </div>
            </div>
            <p class="wa-bubble-msg">Need expert advice on LEED, IGBC, or HVAC engineering? Chat with us!</p>
            <span class="wa-bubble-cta">Open WhatsApp <i class="fa-solid fa-arrow-right"></i></span>
        </a>

        <!-- Official Circular WhatsApp Button -->
        <a href="https://wa.me/919785749960?text=Hello%20Sustainergic%20Tech%2C%20I%20would%20like%20to%20consult%20on%20a%20Green%20Building%20%2F%20HVAC%20Engineering%20project." 
           target="_blank" 
           rel="noopener noreferrer" 
           class="floating-btn floating-btn-whatsapp" 
           aria-label="Chat with Sustainergic Tech on WhatsApp" 
           title="Chat on WhatsApp">
            <!-- Official White WhatsApp Icon (Speech bubble + handset) -->
            <svg class="wa-icon-svg" viewBox="0 0 448 512" aria-hidden="true">
                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
            </svg>
            <!-- Real-time Online Indicator Dot -->
            <span class="wa-status-badge" title="Online now"></span>
        </a>

    </div>

</div>
