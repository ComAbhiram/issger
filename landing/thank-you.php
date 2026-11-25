<?php
/* Enquiry success page, served by functions.php for /?enquiry=success (conversion URL for ads/analytics) */
get_header();
$themeUri = get_stylesheet_directory_uri();
$formId   = isset($_GET['form']) ? absint($_GET['form']) : 0;
?>
<script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({ event: 'enquiry_success', form_id: <?php echo (int) $formId; ?> });
</script>
<main id="EnquiryThanks">
    <video class="et-bg" muted loop playsinline autoplay preload="metadata" aria-hidden="true" tabindex="-1" disablepictureinpicture poster="<?php echo esc_url($themeUri); ?>/images/hero-screen-poster.webp">
        <source src="<?php echo esc_url($themeUri); ?>/videos/hero-screen.mp4" type="video/mp4">
    </video>
    <div class="et-card">
        <img class="et-icon" src="<?php echo esc_url($themeUri); ?>/images/thankyou-icon.svg" width="72" height="72" alt="">
        <h1><span>Vielen Dank!</span> Wir haben Ihre Anfrage erhalten.</h1>
        <p>Wir melden uns innerhalb kurzer Zeit telefonisch oder per WhatsApp bei Ihnen.</p>
        <div class="et-actions">
            <a class="et-btn et-solid" href="tel:+4917672099455" id="thankyou-call">+49 176 720 994 55</a>
            <a class="et-btn et-line" href="https://wa.me/4917672099455" id="thankyou-whatsapp" target="_blank" rel="noopener noreferrer">WhatsApp schreiben</a>
        </div>
        <a class="et-back" href="<?php echo esc_url(home_url('/')); ?>">&larr; Zur Startseite</a>
    </div>
</main>
<style>
    #EnquiryThanks { position: relative; isolation: isolate; overflow: hidden; min-height: 100vh; min-height: 100svh; display: grid; place-items: center; padding: 130px 20px 60px; background: #0b0b0c; color: #fff; font-family: 'Neue Haas Grotesk', 'Helvetica Neue', Arial, sans-serif; }
    #EnquiryThanks .et-bg { position: absolute; inset: 0; z-index: -2; width: 100%; height: 100%; object-fit: cover; }
    #EnquiryThanks::before { content: ''; position: absolute; inset: 0; z-index: -1; background: rgba(11, 11, 12, .68); }
    @media (prefers-reduced-motion: reduce) { #EnquiryThanks .et-bg { display: none; } }
    #EnquiryThanks .et-card { width: 100%; max-width: 580px; padding: 44px 40px 36px; text-align: center; border-radius: 24px; background: linear-gradient(150deg, rgba(255, 255, 255, .14), rgba(255, 255, 255, .04) 55%, rgba(255, 255, 255, .09)), rgba(16, 16, 18, .5); -webkit-backdrop-filter: blur(22px) saturate(1.4); backdrop-filter: blur(22px) saturate(1.4); border: 1px solid rgba(255, 255, 255, .22); box-shadow: 0 32px 70px -22px rgba(0, 0, 0, .7); }
    #EnquiryThanks .et-icon { display: block; width: 72px; height: 72px; margin: 0 auto 22px; }
    #EnquiryThanks h1 { margin: 0 0 12px; font-family: inherit; font-size: clamp(1.5rem, 4.4vw, 2.125rem); line-height: 1.2; font-weight: 500; letter-spacing: -.015em; color: #fff; }
    #EnquiryThanks h1 span { display: block; margin-bottom: 6px; font-size: clamp(2.25rem, 7vw, 3.5rem); line-height: 1.05; font-weight: 700; letter-spacing: -.025em; color: #ffcb02; }
    #EnquiryThanks p { max-width: 36ch; margin: 0 auto 28px; font-size: 1.0625rem; line-height: 1.5; color: rgba(255, 255, 255, .84); }
    #EnquiryThanks .et-actions { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
    #EnquiryThanks .et-btn { display: inline-flex; align-items: center; justify-content: center; height: 52px; padding: 0 18px; border-radius: 10px; font-size: 1rem; font-weight: 700; line-height: 1; text-decoration: none; transition: background-color .2s, border-color .2s, transform .25s; }
    #EnquiryThanks .et-btn:hover { transform: translateY(-1px); }
    #EnquiryThanks .et-solid { background: #ffcb02; color: #0b0b0c; }
    #EnquiryThanks .et-solid:hover { background: #ffd62e; }
    #EnquiryThanks .et-line { border: 1px solid rgba(255, 255, 255, .45); color: #fff; }
    #EnquiryThanks .et-line:hover { border-color: #fff; background: rgba(255, 255, 255, .08); }
    #EnquiryThanks .et-btn:focus-visible, #EnquiryThanks .et-back:focus-visible { outline: 3px solid #ffcb02; outline-offset: 3px; }
    #EnquiryThanks .et-back { display: inline-block; margin-top: 24px; font-size: .9375rem; color: rgba(255, 255, 255, .72); text-decoration: none; }
    #EnquiryThanks .et-back:hover { color: #fff; }
    @media (max-width: 575.98px) {
        #EnquiryThanks { padding: 110px 16px 40px; }
        #EnquiryThanks .et-card { padding: 32px 22px 28px; border-radius: 20px; }
        #EnquiryThanks .et-actions { grid-template-columns: 1fr; }
    }
</style>
<?php wp_footer(); ?>
</body>
</html>
