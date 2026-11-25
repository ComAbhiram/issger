<?php
/*
Template Name: Landing Web Design
*/

get_header();

/**
 * Global Data Source Setting
 */
$dataRegion = getenv('DATA_REGION') ?: 'germany';
$dataType   = getenv('DATA_TYPE') ?: 'data-dm';

$themePath    = get_stylesheet_directory();
$themeUri     = get_stylesheet_directory_uri(); // Use this for images/scripts in HTML

// Allow local overrides
$configPath = $themePath . '/config.local.php';
if (file_exists($configPath)) {
    include_once $configPath;
}

// Absolute paths for PHP file operations
$basePath   = $themePath . "/data/$dataRegion/$dataType";
$commonPath = $themePath . "/data/$dataRegion/common";

// Load JSON safely
$whyChoose_file = $commonPath . '/whyChoose.json';
$whyChoose_data = [];

if (file_exists($whyChoose_file)) {
    $whyChoose_json = file_get_contents($whyChoose_file);
    $whyChoose_data = json_decode($whyChoose_json, true);
}
?>




<div id="pageWrapper" class="landingPage">

    <link rel="stylesheet" href="<?php echo $themeUri; ?>/css/hero-quote.css?v=<?php echo filemtime($themePath . '/css/hero-quote.css'); ?>">

    <div class="hq-track" id="HeroTrack">
    <section id="HeroQuote">

        <div class="hq-bg" aria-hidden="true">
            <img src="<?php echo $themeUri; ?>/images/landing-banner-1.webp" width="1920" height="1010" alt="" fetchpriority="high" decoding="async">
            <video class="hq-bgvideo" muted loop playsinline preload="none" tabindex="-1" disablepictureinpicture disableremoteplayback data-src="<?php echo $themeUri; ?>/videos/hero-screen.mp4"></video>
        </div>

        <div class="container">

            <div class="hq-grid">

                <div class="hq-copy">
                    <p class="hq-eyebrow">Digital Marketing für Unternehmen in Düsseldorf</p>
                    <h1><span class="hq-line">Mehr Anfragen aus</span> <span class="hq-line"><em>Düsseldorf</em> und Umgebung</span></h1>
                    <p class="hq-sub">Wir sorgen dafür, dass Kunden aus Ihrer Region Sie bei Google finden – über Ihr Google-Unternehmensprofil, Ihre Website und gezielte Anzeigen.</p>
                    <ul class="hq-services">
                        <li>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path pathLength="1" d="M12 21s-6.5-5.6-6.5-11a6.5 6.5 0 0 1 13 0c0 5.4-6.5 11-6.5 11z"/><circle pathLength="1" cx="12" cy="10" r="2.3"/></svg>
                            <span>Lokales Marketing</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path pathLength="1" d="M3 10v4h3l7 4V6l-7 4H3zM16.5 9a4 4 0 0 1 0 6M19 6.5a7.5 7.5 0 0 1 0 11"/></svg>
                            <span>Google &amp; Meta Ads</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" aria-hidden="true"><circle pathLength="1" cx="10.5" cy="10.5" r="6.5"/><path pathLength="1" d="M15.5 15.5L21 21"/></svg>
                            <span>SEO</span>
                        </li>
                    </ul>
                    <div class="hq-actions">
                        <a class="hq-btn hq-btn-solid" href="#caseStudies">Erfolgsbeispiel ansehen <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
                    </div>
                </div>

                <div class="hq-visual">
                    <picture><source media="(min-width: 768px)" srcset="<?php echo $themeUri; ?>/images/hero-bg-art.webp"><img class="hq-art" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" width="1100" height="619" alt="" fetchpriority="high" decoding="async"></picture>
                    <div class="hq-laptop">
                        <div class="hq-rot">
                            <picture><source media="(min-width: 768px)" srcset="<?php echo $themeUri; ?>/images/hero-laptop-480.webp 480w, <?php echo $themeUri; ?>/images/hero-laptop-768.webp 768w, <?php echo $themeUri; ?>/images/hero-laptop.webp 1000w" sizes="(max-width: 991px) 340px, 600px"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" width="1536" height="1024" alt="Ein Inter Smart Webdesign auf einem Laptop" decoding="async"></picture>
                            <div class="hq-screen" aria-hidden="true" data-src="<?php echo $themeUri; ?>/videos/hero-screen.mp4">
                                <video class="hq-video" muted loop playsinline preload="none" width="960" height="540" tabindex="-1" disablepictureinpicture disableremoteplayback data-poster="<?php echo $themeUri; ?>/images/hero-screen-poster.webp">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hq-formcol">
                    <div class="hq-card">
                        <div class="hq-tag">&#10022; Sprechen wir</div>
                        <h2>Sprechen Sie mit uns</h2>
                        <div class="hq-person">
                            <img src="<?php echo $themeUri; ?>/images/maxim.jpeg" width="230" height="300" alt="Maxim Sartor, Digital Marketing">
                            <div>
                                <b>Maxim Sartor</b>
                                <span>Digital Marketing</span>
                                <em class="hq-online"><i></i>Gerade Online</em>
                            </div>
                        </div>
                        <div class="hq-contact">
                            <a href="tel:+4917672099455" id="hero-form-call" class="hq-cbtn">
                                <img src="<?php echo $themeUri; ?>/images/call-icon.svg" width="22" height="22" alt=""><span class="hq-clabel">Anrufen</span>
                            </a>
                            <a href="https://wa.me/4917672099455" id="hero-form-wtsp" target="_blank" rel="noopener noreferrer" class="hq-cbtn">
                                <img src="<?php echo $themeUri; ?>/images/whatsapp-icon.svg" width="22" height="22" alt=""><span class="hq-clabel">WhatsApp</span>
                            </a>
                        </div>
                        <div class="hq-formtitle">Erzählen Sie uns kurz, worum es geht. Wir melden uns innerhalb kurzer Zeit.</div>
                        <?php echo do_shortcode('[wpforms id="31" title="false"]'); ?>
                    </div>
                </div>

                <div class="hq-proof">
                    <div class="hq-award">
                        <img src="<?php echo $themeUri; ?>/images/home-banner-awards.webp" width="380" height="200" loading="lazy" decoding="async" alt="German Web Awards – Top-250-Agentur des Jahres 2025">
                    </div>
                    <div class="hq-rating">
                        <div class="hq-row">
                            <b>4,8</b>
                            <span class="hq-stars" role="img" aria-label="5 Sterne Bewertung">
                                <?php for ($s = 0; $s < 5; $s++) : ?><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.5l2.9 6.1 6.6.9-4.8 4.6 1.2 6.6L12 17.5l-5.9 3.2 1.2-6.6L2.5 9.5l6.6-.9z"/></svg><?php endfor; ?>
                            </span>
                        </div>
                        <span>Google-Bewertungen</span>
                    </div>
                </div>

            </div>
        </div>


        <script>
            (function () {
                var s = document.getElementById('HeroQuote');
                if (!s) return;

                var b = s.querySelector('.wpforms-submit');   /* form 31 */
                if (b) { b.textContent = 'Rückruf anfordern'; b.setAttribute('data-submit-text', 'Rückruf anfordern'); b.id = 'hero-form-sub'; }


                var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                var h = s.querySelector('h1');
                var chars = [];
                if (!h) return;

                /* split the title into word > letter spans (reveal + hover); screen readers get the full text */
                h.setAttribute('aria-label', h.textContent.replace(/\s+/g, ' ').trim());
                var idx = 0;
                h.querySelectorAll('.hq-line').forEach(function (line) {
                    var tw = document.createTreeWalker(line, NodeFilter.SHOW_TEXT), nodes = [], n;
                    while ((n = tw.nextNode())) nodes.push(n);
                    nodes.forEach(function (t) {
                        var inEm = !!t.parentElement.closest('em'), frag = document.createDocumentFragment();
                        t.textContent.split(/(\s+)/).forEach(function (part) {
                            if (!part) return;
                            if (/^\s+$/.test(part)) { frag.appendChild(document.createTextNode(' ')); return; }
                            var w = document.createElement('span');
                            w.className = 'hq-w';
                            w.setAttribute('aria-hidden', 'true');
                            part.split('').forEach(function (ch) {
                                var c = document.createElement('span');
                                c.className = 'hq-c';
                                c.textContent = ch;
                                c.style.setProperty('--i', idx++);
                                if (inEm) { c.style.setProperty('--base', '#ffcb02'); c.style.setProperty('--hov', '#ffffff'); }
                                w.appendChild(c);
                                chars.push(c);
                            });
                            frag.appendChild(w);
                        });
                        t.parentNode.replaceChild(frag, t);
                    });
                });
                s.classList.add('hq-js');

                /* once the reveal has settled, drop the line masks so hovered letters can lift freely */
                setTimeout(function () { h.classList.add('hq-done'); }, reduce ? 0 : 2600);

                /* hover: letters near the pointer rise, swell and swap colour, easing back like a wave */
                if (reduce || !window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;
                var R = 150, pos = [], cur = chars.map(function () { return 0; }), px = -1e5, py = -1e5, raf = 0;
                function measure() {
                    var sx = window.pageXOffset, sy = window.pageYOffset;
                    pos = chars.map(function (c) {
                        var r = c.getBoundingClientRect();
                        return { x: r.left + sx + r.width / 2, y: r.top + sy + r.height / 2 };
                    });
                }
                function tick() {
                    var busy = false;
                    for (var i = 0; i < chars.length; i++) {
                        var d = Math.hypot(px - pos[i].x, py - pos[i].y), k = Math.max(0, 1 - d / R);
                        k = k * k * (3 - 2 * k);
                        cur[i] += (k - cur[i]) * 0.14;
                        if (Math.abs(k - cur[i]) > 0.002) busy = true;
                        var c = chars[i];
                        c.style.setProperty('--ty', (-cur[i] * 18).toFixed(2));
                        c.style.setProperty('--sc', (1 + cur[i] * 0.09).toFixed(3));
                        c.style.setProperty('--m', cur[i].toFixed(3));
                    }
                    raf = busy ? requestAnimationFrame(tick) : 0;
                }
                function kick() { if (!raf) raf = requestAnimationFrame(tick); }
                h.addEventListener('pointerenter', function () { if (!raf) measure(); });
                h.addEventListener('pointermove', function (e) { px = e.pageX; py = e.pageY; kick(); });
                h.addEventListener('pointerleave', function () { px = py = -1e5; kick(); });
                window.addEventListener('resize', function () { if (!raf) measure(); });
            })();
        </script>

    </section>
        <div class="hq-spacer"></div>
    </div>
    <script src="<?php echo $themeUri; ?>/js/hero-screen.js?v=<?php echo filemtime($themePath . '/js/hero-screen.js'); ?>" defer></script>


    <section id="Partners">

        <div class="container">

            <div class="tleWrap center">

                <div class="title">Unternehmen, die uns vertrauen</div>

                <div class="loaderWrap">

                    <span></span>

                    <span></span>

                    <span></span>

                </div>

            </div>

            <div class="partnerWrapper">

                <div class="embla partnerSlider">

                    <div class="embla__viewport">

                        <div class="embla__container">

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reisemobilelogo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/reisemobilelogo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-1">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-innovation.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-innovation.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-2">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/byd-logo_.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/byd-logo_.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-3">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ford-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ford-logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-4">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Gems logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Gems logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-5">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/majid-al-futtaim logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/majid-al-futtaim logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-6">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yokohama-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/yokohama-logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-7">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ufc-gym-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/ufc-gym-logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-8">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lincon-Logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lincon-Logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-9">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reisemobilelogo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/reisemobilelogo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-10">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-innovation.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-innovation.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-11">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/byd-logo_.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/byd-logo_.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-12">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ford-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ford-logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-13">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Gems logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Gems logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-14">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/majid-al-futtaim logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/majid-al-futtaim logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-15">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yokohama-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/yokohama-logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-16">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ufc-gym-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/ufc-gym-logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-17">
                                    </div>
                                </div>
                            </div>

                            <div class="embla__slide">
                                <div class="partnerBx">
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lincon-Logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lincon-Logo.png" width="185"
                                            height="100" loading="lazy" class="lazy" alt="Partner-18">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section id="Holding">
        <?php
        $holding_json = file_get_contents($basePath . '/unlockSection.json');
        $holding_data = json_decode($holding_json, true);
        ?>
        <div class="container">
            <div class="dFlx">
                <div class="lSide">
                    <div class="tleWrap">
                        <div class="title">
                            <?php echo isset($holding_data['header']['title']) ? $holding_data['header']['title'] : 'Unlock <br> Your <br> Website’s <br> Potential'; ?>
                        </div>
                        <!-- <div class="txt">
                            <?php echo isset($holding_data['header']['text']) ? $holding_data['header']['text'] : ''; ?>
                        </div> -->
                    </div>
                </div>
                <div class="rgSide">
                    <div class="holdingWrapper">
                        <div class="swiper holdingSlider">
                            <div class="swiper-wrapper">
                                    <?php
                                if (isset($holding_data['items'])):
                                    foreach ($holding_data['items'] as $index => $item):
                                ?>
                                        <div class="swiper-slide">
                                            <div class="holdingBx">
                                                <div class="index">
                                                    <?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?>
                                                </div>
                                                <div class="title">
                                                    <?php echo $item['title']; ?>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="strategytxt">
                <?php echo $holding_data['strategyText']['title']; ?>
            </div>
            <!-- <div class="btnWrap">
                <a href="#!" class="viewMore" aria-label="ViewMore">
                    <span class="icon">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/black-btn.svg" width="55" height="55" alt="ViewMore">
                    </span>
                    <span class="txt">
                        Find out more
                    </span>
                </a>
            </div> -->
        </div>
    </section>


    <?php
    $services_json = file_get_contents($basePath . '/services.json');
    $services = json_decode($services_json, true);
    if ($services):
    ?>
        <section id="Services">
            <div class="overlayImg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service-overlay.svg" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/service-overlay.svg" width="1920" height="1090"
                    loading="lazy" class="lazy" alt="Overlay">
            </div>
            <div class="container">
                <div class="tleWrap">
                    <div class="loaderTitle">
                        <h2 class="mTle">Unsere Leistungen
                            <div class="loaderWrap">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </h2>
                    </div>
                    <div class="element">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-icon.svg" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/services-icon.svg" width="115" height="115"
                            loading="lazy" class="lazy" alt="Icon">
                    </div>
                </div>
                <div class="serviceWrapper">
                    <div class="lSide">
                        <div class="bxVideo">
                            <video muted loop playsinline preload="none" width="100%">
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/Unsere.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="rgSide">
                        <div class="serviceWrap">
                            <h3 class="title" id="MainTitle"></h3>
                            <div class="swiper serviceThumbSlider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($services as $service): ?>
                                        <div class="swiper-slide">
                                            <div class="ServiceThumbBx">
                                                <span class="icon">
                                                    <img src="<?php echo get_stylesheet_directory_uri() . '/' . $service['icon']; ?>" width="20" height="20"
                                                        loading="lazy" class="lazy"
                                                        alt="<?php echo htmlspecialchars($service['title']); ?>">
                                                </span>
                                                <span class="txt">
                                                    <?php echo $service['thumb_label']; ?>
                                                </span>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="swiper serviceMainSlider">
                                <div class="swiper-wrapper">
                                    <?php
                                    $services_json = file_get_contents($basePath . '/services.json');
                                    $services = json_decode($services_json, true);
                                    if ($services):
                                        foreach ($services as $service):
                                    ?>
                                            <div class="swiper-slide"
                                                data-title="<?php echo htmlspecialchars($service['title']); ?>">
                                                <div class="serviceMainBx">
                                                    <div class="featureWrap">
                                                        <?php if (!empty($service['features'])): ?>
                                                            <?php foreach ($service['features'] as $feature): ?>
                                                                <div class="item">
                                                                    <div class="featureBx">
                                                                        <div class="title">
                                                                            <?php echo $feature['title']; ?>
                                                                        </div>
                                                                        <div class="txt">
                                                                            <?php echo $feature['txt']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="technoloyWrapper">
                                                        <div class="techlogoWrap">
                                                            <div class="swiper technologylogoSlider">
                                                                <div class="swiper-wrapper">
                                                                    <?php if (!empty($service['technologies'])): ?>
                                                                        <?php foreach ($service['technologies'] as $tech): ?>
                                                                            <div class="swiper-slide">
                                                                                <div class="logoBx">
                                                                                    <img src="<?php echo get_stylesheet_directory_uri() . '/' . $tech['image']; ?>" width="50"
                                                                                        height="50" loading="lazy" class="lazy"
                                                                                        alt="<?php echo htmlspecialchars($tech['alt']); ?>">
                                                                                </div>
                                                                            </div>
                                                                        <?php endforeach; ?>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="counterWrap">
                                                            <?php if (!empty($service['counters'])): ?>
                                                                <?php foreach ($service['counters'] as $counter): ?>
                                                                    <div class="item">
                                                                        <div class="counterBx">
                                                                            <div class="bxCounter">
                                                                                <div class="num">
                                                                                    <?php echo $counter['number']; ?>
                                                                                </div>
                                                                                <div class="symbol">
                                                                                    <?php echo $counter['symbol']; ?>
                                                                                </div>
                                                                            </div>
                                                                            <div class="txt">
                                                                                <?php echo $counter['title']; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="btnWrap">
                                                        <button id="web-hireUs-3" class="talktoExpertToggle viewMore"
                                                            aria-label="ViewMore">
                                                            <span class="icon">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/black-btn.svg" width="55" height="55"
                                                                    alt="ViewMore">
                                                            </span>
                                                            <span class="txt">
                                                                <?php echo $service['button']['label']; ?>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    endif;
    ?>

    <section id="caseStudies">
        <?php
        $case_json = file_get_contents($basePath . '/caseStudy.json');
        $case_data = json_decode($case_json, true);
        ?>
        <div class="container">
            <div class="tleWrap">
                <div class="lftB">
                    <div class="loaderTitle">
                        <h2 class="mTle">
                            <?php echo isset($case_data['section']['smallTitle']) ? $case_data['section']['smallTitle'] : 'Case Studies'; ?>
                            <div class="loaderWrap">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </h2>
                    </div>
                </div>
                <div class="ritB">
                    <div class="txt">
                        <?php echo isset($case_data['section']['description']) ? $case_data['section']['description'] : ''; ?>
                    </div>
                </div>
            </div>
            <div class="portfolioBlock">
                <?php
                if (isset($case_data['items'])):
                    foreach ($case_data['items'] as $case):
                ?>
                        <div class="flexWrap">
                            <div class="lrtB">
                                <div class="custom-slider">
                                    <div class="swiper mainSwiper">
                                        <div class="swiper-wrapper">
                                             <?php foreach ($case['slides'] as $slide_index => $slide): ?>
                                                <div class="swiper-slide">
                                                    <img src="<?php echo get_stylesheet_directory_uri() . '/' . $slide; ?>" alt="<?php echo esc_attr(wp_strip_all_tags($case['title']) . ' – ' . ($slide_index + 1)); ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div class="thumbx">
                                        <div class="swiper thumbSwiper">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($case['thumbSlides'] as $slide): ?>
                                                    <div class="swiper-slide">
                                                        <div class="thumb-inner">
                                                            <img src="<?php echo get_stylesheet_directory_uri() . '/' . $slide; ?>" alt="">
                                                            <div class="thumb-progress">
                                                                <span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rltB">
                                <div class="brandCard">
                                    <div class="ttleFlx">
                                        <div class="ltB">
                                            <h3 class="title">
                                                <?php echo $case['title']; ?>
                                            </h3>
                                        </div>
                                        <?php if (!empty(trim($case['logo'] ?? ''))): ?>
                                            <div class="rtB">
                                                <div class="ico">
                                                    <img src="<?php echo get_stylesheet_directory_uri() . '/' . $case['logo']; ?>" alt="">
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="txt">
                                        <?php echo $case['description']; ?>
                                    </div>
                                    <div class="btmFlx">
                                        <div class="projectList">
                                            <?php if (!empty($case['projectIcon'])): ?>
                                            <div class="imgB">
                                                <img src="<?php echo get_stylesheet_directory_uri() . '/' . $case['projectIcon']; ?>" alt="">
                                            </div>
                                            <?php endif; ?>
                                            <div class="txtB">
                                                <div class="num">
                                                    <?php echo $case['projectsCompleted']; ?>
                                                </div>
                                                <p>
                                                    <?php echo $case['projectsLabel']; ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="yearList">
                                            <div class="txtB">
                                                <div class="cFlx">
                                                    <div class="num"> <?php echo rtrim($case['sharedYears'], '+'); ?></div>
                                                    <?php if (strpos($case['sharedYears'], '+') !== false): ?>
                                                        <div class="pls">+</div>
                                                    <?php endif; ?>
                                                </div>
                                                <p>
                                                    <?php echo $case['sharedYearsLabel']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!empty($case['startYear'])): ?>
                                    <div class="yearWrp">
                                        <div class="lineWrp">
                                            <div class="dot">
                                                <div class="crcle"></div>
                                            </div>
                                            <div class="dot">
                                                <div class="crcle"></div>
                                            </div>
                                            <div class="dot">
                                                <div class="crcle"></div>
                                            </div>
                                        </div>
                                        <div class="yrFlx">
                                            <div class="year">
                                                <?php echo $case['startYear']; ?>
                                            </div>
                                            <div class="year">
                                                <?php echo $case['endYear']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                    <!-- <div class="btnWrap">
                                        <button id="speak-with-expert" class="sheduleBtn talktoExpertToggle">
                                            <span class="txt">
                                                <?php echo $case['button']['text']; ?>
                                            </span>
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shedule-arrow-right.svg" width="15" height="15" alt="Right">
                                            </span>
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>

    <section id="WhyChoose">

        <div class="container">

            <div class="tleWrap center">

                <div class="loaderTitle">

                    <h2 class="mTle"><?php echo $whyChoose_data['mainTitle']; ?>

                        <div class="loaderWrap">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>

                    </h2>

                </div>

            </div>

            <div class="whyChooseWrapper">

                <div class="swiper whyChooseThumbSlider">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="chooseThumbBx">

                                <div class="title"><?php echo $whyChoose_data['testimonial']['title']; ?></div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="chooseThumbBx">

                                <div class="title"><?php echo $whyChoose_data['awards']['title']; ?></div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="chooseThumbBx">

                                <div class="title"><?php echo $whyChoose_data['technology']['title']; ?></div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="chooseThumbBx">

                                <div class="title"><?php echo $whyChoose_data['whywwedifferent']['title']; ?></div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="chooseThumbBx">

                                <div class="title"><?php echo $whyChoose_data['industries']['title']; ?></div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="swiper whyChooseMainSlider">

                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="chooseMainBx">

                                <div class="titleWrapper center">

                                    <div class="tleWrap">

                                        <h3 class="title"><?php echo $whyChoose_data['testimonial']['title']; ?></h3>

                                        <div class="txt"><?php echo $whyChoose_data['testimonial']['description']; ?>

                                        </div>

                                    </div>

                                    <div class="txtWrap">

                                        <div class="txt"><?php echo $whyChoose_data['testimonial']['sideTitle']; ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="dFlx">

                                    <div class="lSide">

                                        <div class="testimonialWrapper">

                                            <div class="swiper testimonialSlider">

                                                <div class="swiper-wrapper">

                                                    <?php foreach ($whyChoose_data['testimonial']['textTestimonials'] as $testimonial): ?>

                                                        <div class="swiper-slide">

                                                            <div class="testimonialBx">

                                                                <div class="txt">"<?php echo $testimonial['quote']; ?>"

                                                                </div>

                                                                <div class="profileWrap">

                                                                    <div class="bxImg">

                                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/' . $testimonial['image']; ?>"

                                                                            data-src="<?php echo get_stylesheet_directory_uri() . '/' . $testimonial['image']; ?>"

                                                                            width="30" height="30" loading="lazy"

                                                                            class="lazy" alt="testimonial">

                                                                    </div>

                                                                    <div class="bxInfo">

                                                                        <div class="name">

                                                                            <?php echo $testimonial['name']; ?>

                                                                        </div>

                                                                        <div class="designation">

                                                                            <?php echo $testimonial['designation']; ?>

                                                                        </div>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    <?php endforeach; ?>

                                                </div>

                                                <div class="swiperNavWrap">

                                                    <div class="swiper-button-prev testimonial-swiper-button-prev">

                                                    </div>

                                                    <div class="swiper-button-next testimonial-swiper-button-next">

                                                    </div>

                                                </div>

                                            </div>

                                            <?php if (!empty($whyChoose_data['testimonial']['videoTestimonials'])): ?>
                                            <div class="swiper testimonialVideoSlider">

                                                <div class="swiper-wrapper">

                                                    <?php foreach ($whyChoose_data['testimonial']['videoTestimonials'] as $video): ?>

                                                        <div class="swiper-slide">

                                                            <a href="<?php echo get_stylesheet_directory_uri() . '/' .  $video['video']; ?>"
                                                                class="testimonialVideoBx" data-fancybox="testimonialVideo">
                                                                <div class="bxVideo">
                                                                    <video preload="none" muted loop playsinline width="100%">
                                                                        <source src="<?php echo get_stylesheet_directory_uri() . '/' . $video['video']; ?>"
                                                                            type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                                <div class="profileWrap">
                                                                    <div class="bxImg">
                                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/' . $video['image']; ?>"
                                                                            data-src="<?php echo get_stylesheet_directory_uri() . '/' . $video['image']; ?>"
                                                                            width="30" height="30" loading="lazy"
                                                                            class="lazy" alt="testimonial">
                                                                    </div>
                                                                    <div class="bxInfo">
                                                                        <div class="name"><?php echo $video['name']; ?>
                                                                        </div>
                                                                        <div class="designation">
                                                                            <?php echo $video['designation']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>


                                                        </div>

                                                    <?php endforeach; ?>

                                                </div>

                                                <div class="swiperNavWrap">

                                                    <div class="swiper-button-prev testimonialVideo-swiper-button-prev">

                                                    </div>

                                                    <div class="swiper-button-next testimonialVideo-swiper-button-next">

                                                    </div>

                                                </div>

                                            </div>
                                            <?php endif; ?>

                                        </div>

                                    </div>

                                    <div class="rgSide">

                                        <div class="clientWrapper" id="ClientGrid">

                                            <?php foreach ($whyChoose_data['testimonial']['clients'] as $client): ?>

                                                <div class="item">

                                                    <div class="clientBx">

                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/' . $client; ?>" data-src="<?php echo get_stylesheet_directory_uri() . '/' . $client; ?>"

                                                            width="130" height="55" loading="lazy" class="lazy"

                                                            alt="client">

                                                    </div>

                                                </div>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="chooseMainBx">

                                <div class="titleWrapper">

                                    <div class="tleWrap">

                                        <h3 class="title"><?php echo $whyChoose_data['awards']['title']; ?></h3>

                                        <div class="txt"><?php echo $whyChoose_data['awards']['description']; ?>

                                        </div>

                                    </div>

                                    <div class="txtWrap">

                                        <div class="txt"><?php echo $whyChoose_data['awards']['sideTitle']; ?></div>

                                    </div>

                                </div>

                                <div class="swiper awardSlider">

                                    <div class="swiper-wrapper">

                                        <?php foreach ($whyChoose_data['awards']['items'] as $award): ?>

                                            <div class="swiper-slide">

                                                <div class="awardBx">

                                                    <div class="bxImg">

                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/' . $award['image']; ?>"

                                                            data-src="<?php echo get_stylesheet_directory_uri() . '/' . $award['image']; ?>" width="145"

                                                            height="155" loading="lazy" class="lazy"

                                                            alt="<?php echo $award['name']; ?>">

                                                    </div>

                                                    <div class="title"><?php echo $award['name']; ?></div>

                                                    <div class="txt"><?php echo $award['text']; ?></div>

                                                </div>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="chooseMainBx">

                                <div class="titleWrapper">

                                    <div class="tleWrap">

                                        <h3 class="title"><?php echo $whyChoose_data['technology']['title']; ?></h3>

                                        <div class="txt"><?php echo $whyChoose_data['technology']['description']; ?>

                                        </div>

                                    </div>

                                    <div class="txtWrap">

                                        <div class="txt"><?php echo $whyChoose_data['technology']['sideTitle']; ?></div>

                                    </div>

                                </div>

                                <div class="swiper technologySlider">

                                    <div class="swiper-wrapper">

                                        <?php foreach ($whyChoose_data['technology']['technologies'] as $tech): ?>

                                            <div class="swiper-slide">

                                                <div class="technologyBx">

                                                    <?php if (!empty($tech['icon'])): ?>
                                                    <div class="bxIcon">

                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/' . $tech['icon']; ?>"

                                                            data-src="<?php echo get_stylesheet_directory_uri() . '/' . $tech['icon']; ?>" width="70" height="40"

                                                            loading="lazy" alt="<?php echo $tech['name']; ?>">

                                                    </div>
                                                    <?php endif; ?>

                                                    <div class="txt">

                                                        <?php echo $tech['name']; ?>

                                                    </div>

                                                </div>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                                <div class="swiper technologyInfoSlider">

                                    <div class="swiper-wrapper">

                                        <?php foreach ($whyChoose_data['technology']['technologyInfo'] as $info): ?>

                                            <div class="swiper-slide">

                                                <div class="technologyInfoBx">

                                                    <div class="title"><?php echo $info['title']; ?></div>

                                                    <ul>

                                                        <?php foreach ($info['items'] as $item): ?>

                                                            <li><?php echo $item; ?></li>

                                                        <?php endforeach; ?>

                                                    </ul>

                                                </div>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="chooseMainBx">

                                <div class="titleWrapper">

                                    <div class="tleWrap">

                                        <h3 class="title"><?php echo $whyChoose_data['whywwedifferent']['title']; ?>

                                        </h3>

                                        <div class="txt">

                                            <?php echo $whyChoose_data['whywwedifferent']['description']; ?>

                                        </div>

                                    </div>

                                    <div class="txtWrap">

                                        <div class="txt"><?php echo $whyChoose_data['whywwedifferent']['sideTitle']; ?>

                                        </div>

                                    </div>

                                </div>

                                <div class="swiper detailSlider">

                                    <div class="swiper-wrapper">

                                        <?php foreach ($whyChoose_data['whywwedifferent']['items']['numberItems'] as $item): ?>

                                            <div class="swiper-slide">

                                                <div class="detailBx">

                                                    <div class="title"><?php echo $item['title']; ?></div>

                                                    <div class="txt"><?php echo $item['description']; ?></div>

                                                </div>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                                <div class="swiper detailInfoSlider">

                                    <div class="swiper-wrapper">

                                        <?php foreach ($whyChoose_data['whywwedifferent']['items']['textItems'] as $item): ?>

                                            <div class="swiper-slide">

                                                <div class="detailInfoBx">

                                                    <div class="title"><?php echo $item['title']; ?></div>

                                                    <div class="txt"><?php echo $item['description']; ?></div>

                                                </div>

                                            </div>

                                        <?php endforeach; ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="chooseMainBx">

                                <div class="titleWrapper">

                                    <div class="tleWrap">

                                        <h3 class="title"><?php echo $whyChoose_data['industries']['title']; ?></h3>

                                        <div class="txt"><?php echo $whyChoose_data['industries']['description']; ?>

                                        </div>

                                    </div>

                                    <div class="txtWrap">

                                        <div class="txt"><?php echo $whyChoose_data['industries']['sideTitle']; ?></div>

                                    </div>

                                </div>

                                <div class="industrySliderWrap">

                                    <div class="swiper industrySlider">

                                        <div class="swiper-wrapper">

                                            <?php foreach ($whyChoose_data['industries']['industries'] as $industry): ?>

                                                <div class="swiper-slide">

                                                    <div class="industryBx">

                                                        <div class="bxIcon">

                                                            <img src="<?php echo get_stylesheet_directory_uri() . '/' . $industry['icon']; ?>"

                                                                data-src="<?php echo get_stylesheet_directory_uri() . '/' . $industry['icon']; ?>" width="40"

                                                                height="40" loading="lazy" class="lazy"

                                                                alt="<?php echo $industry['name']; ?>">

                                                        </div>

                                                        <div class="txt"><?php echo $industry['name']; ?></div>

                                                    </div>

                                                </div>

                                            <?php endforeach; ?>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section id="Advantage">
        <?php
        $advantage_json = file_get_contents($basePath . '/ourAdvantage.json');
        $advantage_data = json_decode($advantage_json, true);
        ?>
        <div class="container">
            <div class="tleWrap">
                <div class="loaderTitle">
                    <h2 class="mTle">
                        <?php echo isset($advantage_data['sectionTitle']) ? $advantage_data['sectionTitle'] : 'Our Process'; ?>
                        <div class="loaderWrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </h2>
                </div>
            </div>
            <div class="advantageWrapper">
                <?php
                if (isset($advantage_data['items'])):
                    foreach ($advantage_data['items'] as $advantage):
                ?>
                        <div class="item">
                            <div class="processBx">
                                <div class="bxHead">
                                    <?php if (isset($advantage['highlight']) && !empty($advantage['highlight'])): ?>
                                        <div class="index">
                                            <?php echo $advantage['highlight']; ?>
                                        </div>
                                    <?php endif; ?>
                                    <h3 class="title">
                                        <?php echo $advantage['title']; ?>
                                    </h3>
                                </div>
                                <div class="txt">
                                    <?php echo $advantage['text']; ?>
                                </div>
                            </div>
                        </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
            <div class="embla advantageSlider">
                <div class="embla__viewport">
                    <div class="embla__container">
                        <?php
                        if (isset($advantage_data['items'])):
                            foreach ($advantage_data['items'] as $advantage):
                        ?>
                                <div class="embla__slide">
                                    <div class="processBx">
                                        <div class="bxHead">
                                            <?php if (isset($advantage['highlight']) && !empty($advantage['highlight'])): ?>
                                                <div class="index">
                                                    <?php echo $advantage['highlight']; ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="title">
                                                <?php echo $advantage['title']; ?>
                                            </div>
                                        </div>
                                        <div class="txt">
                                            <?php echo $advantage['text']; ?>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="SheduleMeeting" class="SpeakExperts">

        <div class="container">

            <div class="dFlx">

                <div class="lSide">

                    <div class="tleWrap">

                        <div class="loaderTitle">

                            <h2 class="mTle">Sprechen Sie mit uns

                                <div class="loaderWrap">

                                    <span></span>

                                    <span></span>

                                    <span></span>

                                </div>

                            </h2>

                        </div>

                        <div class="txt">Sagen Sie uns, wo Sie stehen – wir sagen Ihnen ehrlich, was sich lohnt.</div>

                    </div>

                    <div class="consultantWrapper">

                        <div class="consultantWrap">

                            <a href="#!" class="consultantBx" aria-label="Consultant">

                                <div class="bxImg">

                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/maxim.jpeg" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/maxim.jpeg" width="230"

                                        height="300" loading="lazy" class="lazy" alt="Conssultant">

                                </div>

                                <div class="bxInfo">

                                    <div class="infoWrap">

                                        <div class="name">Maxim Sartor</div>

                                        <div class="designation">Digital Marketing</div>

                                    </div>

                                    <!-- <div class="icon">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shedule-arrow-right.svg" width="15" height="15" alt="Arrow">

                                    </div> -->

                                </div>

                            </a>

                        </div>

                        <div class="supportWrap">
                            <div class="supportBx">
                                <div class="indicator">Gerade erreichbar</div>
                                <h3 class="title">Lassen Sie uns starten.</h3>
                                <div class="txt">Lieber direkt? Rufen Sie an oder schreiben Sie uns per WhatsApp.
                                </div>
                                <div class="btnWrap">
                                    <div class="item">
                                        <a href="https://wa.me/4917672099455"
                                            id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportChat' : 'web-expertSupportChat'); ?>"
                                            class="supportBtn chat"
                                            aria-label="Whatsapp"
                                            target="_blank"
                                            rel="noopener noreferrer">

                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp-icon.svg"
                                                    width="25"
                                                    height="25"
                                                    alt="Whatsapp">
                                            </span>

                                            <span class="txt">
                                                WhatsApp schreiben
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="tel:+4921154225212"
                                            id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportCall' : 'web-expertSupportCall'); ?>"
                                            class="supportBtn call" aria-label="Call">
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">
                                            </span>
                                            <span class="txt">
                                                Jetzt anrufen
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="overlayImg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/supportbx-overlay.svg" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/supportbx-overlay.svg"
                                        width="810" height="300" loading="lazy" class="lazy" alt="overlay">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="rgSide">

                    <div class="expertsBx" id="Expert">

                        <div class="tle">Unverbindliche Anfrage</div>

                        <div class="formOuter">

                            <?php echo do_shortcode('[wpforms id="8" title="false"]') ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section id="SpeakExpertMobile">
        <div class="overlayImg">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/speak-expert-mobile-overlay.svg" width="410" height="800" loading="lazy" class="lazy" alt="SpeakExpert">
        </div>
        <div class="container">
            <div class="tleWrap">
                <div class="loaderTitle">
                    <h2 class="mTle">Sprechen Sie mit uns
                        <div class="loaderWrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </h2>
                </div>
                <div class="txt">Sagen Sie uns, wo Sie stehen – wir sagen Ihnen ehrlich, was sich lohnt.</div>
            </div>
            <div class="profileWrap">
                <div class="bxImg">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/maxim.jpeg" width="180" height="100" loading="lazy" class="lazy" alt="Maxim Sartor">
                </div>
                <div class="infoWrap">
                    <div class="indicator">Gerade erreichbar</div>
                    <div class="name">Maxim Sartor</div>
                    <div class="designation">Digital Marketing</div>
                </div>
            </div>
            <div class="btnWrapper">
                <div class="item">
                    <a href="https://wa.me/4917672099455" class="supportBtn chat" aria-label="Whatsapp">
                        <span class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp-icon.svg" width="25" height="25" alt="Whatsapp">
                        </span>
                        <span class="txt">
                            WhatsApp schreiben
                        </span>
                    </a>
                </div>
                <div class="item">
                    <a href="tel:+4921154225212" class="supportBtn call" aria-label="Call">
                        <span class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">
                        </span>
                        <span class="txt">
                            Jetzt anrufen
                        </span>
                    </a>
                </div>
            </div>
            <div class="formWrap">

                <div class="title">Unverbindliche Anfrage</div>
                <?php echo do_shortcode('[wpforms id="8" title="false"]') ?>


            </div>
        </div>
    </section>


    <section id="Faq">

        <?php

        $faq_json = file_get_contents($basePath . '/faq.json');

        $faq_data = json_decode($faq_json, true);

        ?>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/landing-faq-bg.png" alt="Work-4" width="1280" height="623" loading="lazy">

        <div class="container">

            <div class="tleWrap">

                <div class="loaderTitle">

                    <h2 class="mTle">

                        <?php echo isset($faq_data['title']) ? $faq_data['title'] : 'Frequently<br /> Asked Questions'; ?>

                        <div class="loaderWrap">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>

                    </h2>

                </div>

            </div>

            <div class="faqAccordion" id="accordion">

                <?php

                if (isset($faq_data['items'])):

                    foreach ($faq_data['items'] as $faq):

                ?>

                        <div>

                            <div class="faqItem">

                                <div class="faq-question">

                                    <span class="faq-question-text"> <?php echo $faq['question']; ?>

                                    </span>

                                    <span class="faq-icon"></span>

                                </div>

                                <div class="faq-answer">

                                    <p>

                                        <?php echo $faq['answer']; ?>

                                    </p>

                                </div>

                            </div>

                        </div>

                <?php

                    endforeach;

                endif;

                ?>

            </div>

        </div>

    </section>



    <div class="LandingFixedNavigation">

        <div class="txt desktop">Mehr Anfragen aus Ihrer Region? Sprechen wir darüber.</div>
        <div class="txt mobile">Kostenloses Erstgespräch, unverbindlich.</div>

        <a href="https://wa.me/4917672099455" target="_blank" class="talkExpert" id="<?php echo ($dataType == 'data-dm' ? 'dm-talktoExpert' : 'web-talktoExpert'); ?>">

            <span class="icon">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">

            </span>

            <span class="txt desktop">

                Per WhatsApp schreiben

            </span>
            <span class="txt mobile">

                Per WhatsApp schreiben

            </span>

        </a>

    </div>



    <!-- WHATSAPP FLOATING WIDGET -->
    <script>
    // WhatsApp float: hidden over the hero (hero-quote.css), shown once the hero has scrolled away
    (function(){var h=document.getElementById('HeroQuote'),r=document.documentElement;
      if(!h||!('IntersectionObserver' in window)){r.classList.add('wa-show');return;}
      new IntersectionObserver(function(e){r.classList.toggle('wa-show',!e[0].isIntersecting);}).observe(h);})();
    </script>
    <div class="whatsapp-floating-container" id="WhatsappContainer">
        <a href="https://wa.me/+4917672099455?text=Hi, I'd like a free consultation regarding my website." target="_blank" class="whatsapp-floating-icon" aria-label="Chat on WhatsApp" rel="noopener noreferrer">
            <div class="whatsapp-icon-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L3 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
            </div>
        </a>
    </div>

    <div class="talktoExpertCard">
        <button id="web-getproposal-floating" class="talktoExpertToggle" aria-label="hireUs">
            ANFRAGE
        </button>
        <div class="TopStrip">
            <div class="Tag">
                ✦ Sprechen wir
            </div>
            <div class="CloseBtn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-btn.svg" alt="Close">
            </div>
        </div>
        <h3 class="CardTitle">
            Sprechen Sie mit uns
        </h3>
        <div class="ProfileBx">
            <div class="ProfileImg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/maxim.jpeg"
                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/maxim.jpeg" width="230" height="300" loading="lazy"
                    class="lazy" alt="Consultant">
                <div class="infoWrap">
                    <div class="name">Maxim Sartor</div>
                    <div class="designation">Digital Marketing</div>
                </div>
            </div>
            <div class="btnWrap">
                <div class="item">
                    <a href="tel:+49 176 720 994 55" id="letstalk-callsus" class="supportBtn call" aria-label="Call">
                        <span class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">
                        </span>
                        <span class="txt">
                            Anrufen
                        </span>
                    </a>
                </div>
                <div class="item">
                    <a href="https://wa.me/4917672099455" id="letstalk-whatsapp" target="_blank" class="supportBtn chat" aria-label="Chat on WhatsApp" rel="noopener noreferrer">
                        <span class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp-icon.svg" width="25" height="25" alt="Whatsapp">
                        </span>
                        <span class="txt">
                            WhatsApp
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="liveStatus">
            <div class="Dot"></div>
            <div class="txt">Heute erreichbar</div>
        </div>
        <div class="FormSec">
            <div class="FormTitle">Lassen Sie uns starten.</div>
            <?php echo do_shortcode('[wpforms id="31" title="false"]') ?>
        </div>
    </div>


     <section id="company" style="padding-top:30px;">
        <div class="container">
            <div class="center wow animate__fadeInDown" style="visibility: visible; animation-duration: 2s; animation-name: fadeInDown;" data-wow-duration="2s">
                <h1>Webdesign Agentur Düsseldorf & NRW – Professionelle Websites, die Kunden gewinnen</h1>
                <div id="company-text" style="padding-bottom:30px;">
                    <div class="description-wrapper">
                        <div class="description-content collapsed">

                            <p>
                                Als Webdesign Agentur für Düsseldorf und ganz NRW entwickeln wir professionelle Websites für Startups, Mittelstand und Konzerne. Mit über 15 Jahren Erfahrung und mehr als 1.500 betreuten Marken verbinden wir kreatives Webdesign mit moderner Webentwicklung. Ob Unternehmenswebsite, Online-Shop oder individuelle Webanwendung: Wir liefern skalierbare Lösungen, die Ihr Unternehmen online voranbringen.
                            </p>

                            <h2>Website erstellen lassen – individuell und maßgeschneidert</h2>
                            <p>
                                Sie möchten eine professionelle Website erstellen lassen? Als erfahrene Webentwicklung Agentur entwickeln wir individuelle Websites, die zu Ihren Unternehmenszielen passen. Von der Firmenwebsite über den Online-Shop bis zur komplexen Web-Applikation: Unsere Lösungen sind schnell, sicher, responsiv und auf Wachstum ausgelegt. Ob Sie eine Website agentur für ein Neuprojekt suchen oder einen Partner für skalierbare Web Development Projekte, unsere Webentwickler und Webdesigner begleiten Sie von der Idee bis zum Go-live.
                            </p>

                            <h2>Relaunch Website & Redesign Website</h2>
                            <p>
                                Ihre Website bringt nicht mehr die gewünschten Ergebnisse? Mit einem Website-Relaunch modernisieren wir veraltete Auftritte: kürzere Ladezeiten, bessere Nutzerführung und mehr Sichtbarkeit bei Google. Bei jedem Redesign Ihrer Website sichern wir Ihre bestehenden SEO-Rankings, damit Sie keine Reichweite verlieren. Als Web Agentur setzen wir auf Responsive Webdesign, sodass jede Seite auf Desktop, Tablet und Smartphone überzeugt.
                            </p>

                            <h2>Webdesign, das Besucher zu Kunden macht</h2>
                            <p>
                                Unser Webdesign setzt auf Nutzererlebnisse, die Besucher zu Anfragen und Verkäufen führen. Jede Website spiegelt Ihre Marke wider, stärkt das Vertrauen und unterstützt gezielt die Lead-Generierung, rund um die Uhr. Unsere Webdesigner und Webentwickler arbeiten in jeder Projektphase eng mit Ihnen zusammen, vom ersten Konzept bis zum Launch.
                            </p>

                            <h2>Ihre Webagentur in Düsseldorf und NRW</h2>
                            <p>
                                Wir sind Ihr Ansprechpartner für Webdesign in Düsseldorf, Köln, Essen, Dortmund und der gesamten Region NRW. Als Webdesign Firma mit langjähriger Branchenerfahrung betreuen wir Kunden aus Handel, Industrie, Dienstleistung und Gesundheitswesen, in Düsseldorf, in NRW, deutschlandweit und international. Wer Webdesign aus Düsseldorf sucht, bekommt von uns persönliche Beratung und messbare Ergebnisse.
                            </p>

                            <h2>Unsere Leistungen</h2>

                            <ul>
                                <li>Individuelles Webdesign</li>
                                <li>Webentwicklung</li>
                                <li>Website Relaunch & Redesign</li>
                                <li>Entwicklung von Webanwendungen</li>
                                <li>WordPress-Entwicklung</li>
                                <li>Shopify-Entwicklung</li>
                                <li>WooCommerce-Entwicklung</li>
                                <li>E-Commerce-Websites</li>
                                <li>UI/UX-Design</li>
                                <li>Website-Wartung & Support</li>
                            </ul>

                            <p>
                                Egal, ob Sie eine neue Website erstellen lassen oder Ihren bestehenden Auftritt verbessern wollen: Wir helfen Ihnen, eine starke Online-Präsenz aufzubauen, die Ihre langfristigen Geschäftsziele unterstützt.
                            </p>
                        </div>
                        <div class="read-more-wrapper">
                            <a href="javascript:void(0);" class="read-more-btn" onclick="toggleDescription(this)">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .description-content.collapsed {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            /* Number of lines to show */
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .description-content.expanded {
            display: block;
            overflow: visible;
        }

        .read-more-wrapper {
            margin-top: 8px;
        }

        .read-more-btn {
            color: #0073aa;
            /* Change to your theme color */
            cursor: pointer;
            font-weight: 600;
            text-decoration: none;
            font-size: 14px;
        }

        .read-more-btn:hover {
            text-decoration: underline;
        }

        .description-content ul {
            list-style: none;
            padding: 0;
            margin: 0 0 20px;
        }

        .description-content ul li {
            display: flex;
            align-items: baseline;
            gap: 12px;
            margin-bottom: 12px;
        }

        .description-content ul li::before {
            content: "";
            width: 10px;
            height: 10px;
            min-width: 10px;
            border-radius: 50%;
            background: #0d6efd;
            margin-top: 9px;
        }
    </style>

    <script>
        function toggleDescription(btn) {
            var content = btn.closest('.description-wrapper').querySelector('.description-content');
            if (content.classList.contains('collapsed')) {
                content.classList.remove('collapsed');
                content.classList.add('expanded');
                btn.textContent = 'Read Less';
            } else {
                content.classList.remove('expanded');
                content.classList.add('collapsed');
                btn.textContent = 'Read More';
                // Scroll back to section top on collapse
                content.closest('section').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }
    </script>



    <!-- <div class="modal fade CalculatorModal" id="stepCalculatorModal"
        tabindex="-1" aria-labelledby="stepCalculatorModalLabel" aria-hidden="true">
        <div class="stepCalculator">
            <div class="calculatorWrapper">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calculator-close-btn.svg" width="50" height="50" alt="Close">
                </button>
            
                <div class="lSide">
                    <div class="title desktop">Not&nbsp; Sure&nbsp; What&nbsp; Solution&nbsp; Fits&nbsp; Your&nbsp; Business?
                    </div>
                    <div class="txt desktop">Talk to our experts and get recommendations <br>tailored to your business
                        goals.
                    </div>
                    <ul class="desktop">
                        <li>Free Consultation</li>
                        <li>No Obligation Quote</li>
                        <li>Expert Guidance</li>
                    </ul>
                    <div class="onlineBx desktop">
                        <div class="bxImg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ann-business-development-manager-1.webp"
                                data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/ann-business-development-manager-1.webp" width="230" height="300"
                                loading="lazy" class="lazy" alt="Consultant">
                        </div>
                        <div class="infoWrap">
                            <div class="indicator">Online Now</div>
                            <div class="name">Maxim Sartor</div>
                            <div class="designation">Business Consultant</div>
                            <div class="btnWrap">
                                <div class="item">
                                    <a href="https://wa.me/+4917672099455?text=Hi, I'd like a free consultation regarding my website."
                                        id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportChat' : 'web-expertSupportChat'); ?>"
                                        class="supportBtn chat" aria-label="Whatsapp" target="_blank">
                                        <span class="icon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp-icon.svg" width="25" height="25" alt="Whatsapp">
                                        </span>
                                        <span class="txt">
                                            Jetzt chatten
                                        </span>
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="tel:+49 176 720 994 55"
                                        id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportCall' : 'web-expertSupportCall'); ?>"
                                        class="supportBtn call" aria-label="Call">
                                        <span class="icon">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">
                                        </span>
                                        <span class="txt">
                                            Jetzt Anrufen
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bxOnline mobile">
                        <div class="txt">Talk to our experts and get recommendations <br>tailored to your business
                            goals.
                        </div>
                        <div class="bxInfoWrap">
                            <div class="bxImg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ann-business-development-manager-1.webp"
                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/ann-business-development-manager-1.webp" width="230" height="300"
                                    loading="lazy" class="lazy" alt="Consultant">
                            </div>
                            <div class="infoWrapper">
                                <div class="info">
                                    <div class="indicator">Online Now</div>
                                    <div class="name">Maxim Sartor</div>
                                    <div class="designation">Business Consultant</div>
                                </div>
                                <div class="btnWrap">
                                    <div class="item">
                                        <a href="https://wa.me/+4917672099455?text=Hi, I'd like a free consultation regarding my website."
                                            id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportChat' : 'web-expertSupportChat'); ?>"
                                            class="supportBtn chat" aria-label="Whatsapp" target="_blank">
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp-icon.svg" width="25" height="25"
                                                    alt="Whatsapp">
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="tel:+49 176 720 994 55"
                                            id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportCall' : 'web-expertSupportCall'); ?>"
                                            class="supportBtn call" aria-label="Call">
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rgSide">
                    <div class="calculatorBx">
                        <div class="headWrap">
                            <div class="title">Cost Calculator</div>
                            <div class="txt">Answer a few simple questions and get recommendations tailored to your business goals.</div>
                            <div class="stepWrap">
                                <div class="count">
                                    Step <span id="currentStep">1</span> of 6
                                </div>
                                <button class="backBtn" id="backBtn">
                                    Back
                                </button>
                            </div>
                            <div class="progressWrap">
                                <div class="progress active"></div>
                                <div class="progress"></div>
                                <div class="progress"></div>
                                <div class="progress"></div>
                                <div class="progress"></div>
                                <div class="progress"></div>
                            </div>
                        </div>

                        <div class="questionAnswerWrapper">

                            <div class="item active">
                                <div class="questionBx">
                                    <div class="title">What are you looking to build?</div>
                                    <div class="optionsWrap">
                                        <div class="item">
                                            <label class="option" data-value="Website Design"><input type="radio" name="project_type">Website
                                                Design</label>
                                        </div>
                                        <div class="item">
                                            <label class="option" data-value="Corporate Website"><input type="radio" name="project_type">Corporate
                                                Website</label>
                                        </div>
                                        <div class="item">
                                            <label class="option" data-value="Ecommerce Store"><input type="radio" name="project_type">Ecommerce
                                                Store</label>
                                        </div>
                                        <div class="item">
                                            <label class="option" data-value="Shopify Store"><input type="radio" name="project_type">Shopify Store</label>
                                        </div>
                                        <div class="item">
                                            <label class="option" data-value="Mobile Application"><input type="radio" name="project_type">Mobile
                                                Application</label>
                                        </div>
                                        <div class="item">
                                            <label class="option" data-value="CRM / ERP Solution"><input type="radio" name="project_type">CRM / ERP
                                                Solution</label>
                                        </div>
                                        <div class="item">
                                            <label class="option" data-value="Other"><input type="radio" name="project_type">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="questionBx">
                                    <div class="title">Your business ecosystem</div>
                                    <div class="optionsWrap">
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step8">Startup /
                                                New
                                                Business</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step9">Freelancer /
                                                Self-Employed</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step10">Small Business (1-20
                                                Employees)</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step11">Growing Business
                                                (20-100
                                                Employees)</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step12">Enterprise /
                                                Corporate</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step13">Agency /
                                                Consultant</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step14">Non-Profit /
                                                Organization</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step15">Other</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item" id="pagesStep">
                                <div class="questionBx">
                                    <div class="title">How many pages do you expect?</div>
                                    <div class="optionsWrap">
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step16">Less than
                                                10
                                                Pages</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step17">10-15 Pages</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step18">15-25 Pages</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step19">More than 25
                                                Pages</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step20">Not Sure</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item" id="productsStep">
                                <div class="questionBx">
                                    <div class="title">Approximately how many products will you have?</div>
                                    <div class="optionsWrap">
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step21">Less than
                                                50
                                                Products</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step22">50-100
                                                Products</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step23">100-500
                                                Products</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step24">More than 500
                                                Products</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step25">Not Sure</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="questionBx">
                                    <div class="title">Tell us about your business</div>
                                    <div class="form-group">
                                        <label>Website / Name</label>
                                        <div class="formBx">
                                            <input type="mail" class="form-control" id="brandName"
                                                placeholder="www.example.com" required>
                                            <button class="nextBtn">
                                                Next
                                                <span>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/next-img.svg" width="25" height="25" alt="Next">
                                                </span>
                                            </button>
                                        </div>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="questionBx">
                                    <div class="title">How can we reach you?</div>
                                    <div class="form-group">
                                        <label>Ihre Email</label>
                                        <div class="formBx">
                                            <input type="tel" id="Mobile2" class="form-control"
                                                placeholder="9822182252" required>
                                            <button class="nextBtn">
                                                Next
                                                <span>
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/next-img.svg" width="25" height="25" alt="Next">
                                                </span>
                                            </button>
                                        </div>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="questionBx">
                                    <div class="title">Expected budget</div>
                                    <div class="optionsWrap">
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step26">Below ₹1
                                                Lakh</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step27">₹1 - ₹3
                                                Lakhs</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step28">₹3 - ₹5
                                                Lakhs</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step29">₹5 - ₹10
                                                Lakhs</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step30">₹10 Lakhs +</label>
                                        </div>
                                        <div class="item">
                                            <label class="option"><input type="radio" name="step31">Not Sure</label>
                                        </div>
                                    </div>
                                    <div class="btnWrap">
                                        <button type="button" class="estimateBtn" id="getEstimate">
                                            Get Estimate
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div class="modal fade thankYouModal" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel"
        aria-hidden="true">
        <div class="thankYouWrapper">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calculator-close-btn.svg" width="50" height="50" alt="Close">
            </button>
            <div class="thankYouBx">
                <div class="icon">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/thankyou-icon.svg" width="100" height="100" alt="ThankYou">
                </div>
                <div class="title">Looks like your project is something special!</div>
                <div class="title">Your business idea deserves more than a standard estimate.</div>
                <div class="txt">Based on the information you've provided, our analysts would like to review your business needs
                    in more detail to prepare a customized <br> solution and a project estimate that's tailored specifically to your goals.
                    We'll get in touch with you within the next few business hours.</div>
            </div>
            <div class="asssistanceBx">
                <div class="title">Need immediate assistance?</div>
                <div class="txt">Connect with our experts right away via phone or WhatsApp.</div>
                <div class="btnWrap">
                    <div class="item">
                        <a href="https://wa.me/+4917672099455?text=Hi, I'd like a free consultation regarding my website."
                            id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportChat' : 'web-expertSupportChat'); ?>"
                            class="supportBtn chat" aria-label="Whatsapp">
                            <span class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp-icon.svg" width="25" height="25" alt="Whatsapp">
                            </span>
                            <span class="txt">
                                WhatsApp us
                            </span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="tel:+49 176 720 994 55"
                            id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportCall' : 'web-expertSupportCall'); ?>"
                            class="supportBtn call" aria-label="Call">
                            <span class="icon">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">
                            </span>
                            <span class="txt">
                                Call Immediately
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


</div>

<!-- GSAP -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha384-g4NTh/Iv5PPU4xPyhEWqPcwtNXOvdaDI8LLnyYfyNZOjKJeYQyjzQ9X5275eBjpt" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha384-Z3REaz79l2IaAZqJsSABtTbhjgOUYyV3p90XNnAPCSHg3EMTz1fouunq9WZRtj3d" crossorigin="anonymous"></script>



<!-- SCROLL_MAGIC removed (PERFORMANCE_AUDIT.md P0-4.3): only used for one
     "animate the #caseStudies counters when the section scrolls into view" trigger,
     replaced below with a native IntersectionObserver, so the whole library is gone. -->



<!--EMBLA CAROUSEL-->

<script src="https://cdn.jsdelivr.net/npm/embla-carousel@8.6.0/embla-carousel.umd.min.js" integrity="sha384-KRgOYOf6tcn3k/Ng0fRrsCF3IvJNvLqiB4S3lpqvcmaJGUA/Oy8Ogut+M4oRk10W" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/embla-carousel-autoplay@8.6.0/embla-carousel-autoplay.umd.min.js" integrity="sha384-R2hoYhahxRftdfUa3jowArM0+39i5xaxEDmOua9nuyIaol/UyZdG9AFSwlaYBghl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/embla-carousel-auto-scroll@8.6.0/embla-carousel-auto-scroll.umd.js" integrity="sha384-5x3y2MLuLA5c1LQceYM+lo59GGkQmLzQGzbuHhDUDbnOJkFeTl5jUSdBy3JehMcM" crossorigin="anonymous"></script>

<!--<script src="https://unpkg.com/embla-carousel-class-names/embla-carousel-class-names.umd.js"></script>-->



<!--SWIPER-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.10/swiper-bundle.min.css" integrity="sha384-gAPqlBuTCdtVcYt9ocMOYWrnBZ4XSL6q+4eXqwNycOr4iFczhNKtnYhF3NEXJM51" crossorigin="anonymous" />

<script src="https://cdn.jsdelivr.net/npm/swiper@11.2.10/swiper-bundle.min.js" integrity="sha384-2UI1PfnXFjVMQ7/ZDEF70CR943oH3v6uZrFQGGqJYlvhh4g6z6uVktxYbOlAczav" crossorigin="anonymous" defer></script>



<!-- jquery-ui removed (PERFORMANCE_AUDIT.md P0-4.1): this loaded the entire jQuery
     UI bundle, render-blocking (no defer), just for .accordion() below. functions.php
     already enqueues WP core's own jquery-ui-accordion (+ its core/widget deps) via
     custom_scripts(), which is enough - confirmed .accordion() is the only jQuery UI
     widget used anywhere in this theme. -->



<!-- SELECT2 -->

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"

    integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="

    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"

    integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="

    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


<!--FANCY BOX-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1.15/dist/fancybox/fancybox.css" integrity="sha384-oOjnLKEcFZy/fmb/tXEU2ZKyVF+6ZSG3Fq40EWlBMaa7Rsdz+QmhRIUgvXe3el+1" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1.15/dist/fancybox/fancybox.umd.js" integrity="sha384-ThiZs7+W5OWR8IucGysN8RNoIOwhdPPkElaT26hqa1aeF76S49TRH9F2xZw9mWGp" crossorigin="anonymous"></script>


<!-- COUNTRY CODE SELECTION -->

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script> -->



<!-- LENIS SMOOTH SCROLL -->
<script src="https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.js" integrity="sha384-eD5ubmuCcvTdCADWuSchJYE7wcj2nzNr0itbrh6w/KJyBiltSZ8w3VFRBSWu5YQ8" crossorigin="anonymous"></script>

<script>
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const lenis = new Lenis({
        lerp: 0.08,
        smoothWheel: !prefersReducedMotion,
        // wheelMultiplier: 0.8,
        smoothTouch: !prefersReducedMotion,
        touchMultiplier: 1.5,
        infinite: false,
        autoResize: true,
    });
    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // FAQ ACCORDION

        jQuery(function($) {

            if ($.fn.accordion) {

                $(".faqAccordion").accordion({
                    header: ".faq-question",
                    collapsible: true,
                    active: false,
                    heightStyle: "content",
                    icons: false,
                    activate: function(event, ui) {
                        ui.oldHeader.closest(".faqItem").removeClass("ui-accordion-header-active");
                        ui.newHeader.closest(".faqItem").addClass("ui-accordion-header-active");
                    }
                });

            } else {
                console.warn('jQuery UI Accordion not loaded');
            }

        });


        
        //FANCY BOX
        Fancybox.bind('[data-fancybox="testimonialVideo"]', {});

        document.querySelectorAll('a[href="#Expert"]').forEach(btn => {
            btn.addEventListener("click", function(e) {
                e.preventDefault();

                document.querySelector("#Expert").scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });
            });
        });

        // BANNER REDIRECT
        document.querySelectorAll('a[href="#Serviceslist"]').forEach(btn => {
            btn.addEventListener("click", function(e) {
                e.preventDefault();

                document.querySelector("#Serviceslist").scrollIntoView({
                    behavior: "smooth",
                    block: "center"
                });
            });
        });

        // PARTNER SLIDER

        const partnerSlider = document.querySelector('.partnerSlider .embla__viewport');

        if (partnerSlider) {
            EmblaCarousel(partnerSlider, {
                loop: true,
                align: 'center',
                dragFree: true
            }, [
                EmblaCarouselAutoScroll({
                    speed: 1,
                    stopOnInteraction: false,
                    stopOnMouseEnter: false
                })
            ]);
        }



        // WORK SLIDER

        const workSlider = document.querySelector('.workSlider .embla__viewport');

        if (workSlider) {

            const autoplay = EmblaCarouselAutoplay({
                delay: 2500,
                stopOnInteraction: true,
                stopOnMouseEnter: true
            });

            const emblaApi = EmblaCarousel(workSlider, {
                loop: true,
                align: 'center',
                skipSnaps: false
            }, [autoplay]);

            emblaApi.on('init', toggleSelected);
            emblaApi.on('select', toggleSelected);
            emblaApi.on('reInit', toggleSelected);
        }



        // ADVANTAGE MOBILE SLIDER
        const advantageSlider = document.querySelector('.advantageSlider .embla__viewport');

        if (advantageSlider) {
            EmblaCarousel(advantageSlider, {
                loop: false,
                align: 'start'
            }, [
                EmblaCarouselAutoplay({
                    delay: 2000,
                    stopOnInteraction: false
                })
            ]);
        }


        // WHY CHOOSE THUMB AND MAIN SLIDER
        var whyChooseThumbSlider = new Swiper(".whyChooseThumbSlider", {
            slidesPerView: "auto",
            spaceBetween: 10,
            watchOverflow: false,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            //     pauseOnMouseEnter: true,
            // },
            breakpoints: {
                992: {
                    autoplay: false,
                    slideToClickedSlide: false,
                    spaceBetween: 20,
                },
                1551: {
                    spaceBetween: 25,
                },
                1771: {
                    spaceBetween: 35,
                }
            }
        });
        var whyChooseMainSlider = new Swiper(".whyChooseMainSlider", {
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
            allowTouchMove: false,
            speed: 400,
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            //     pauseOnMouseEnter: true,
            // },
            navigation: {
                nextEl: ".latest-swiper-button-next",
                prevEl: ".latest-swiper-button-prev",
            },
            thumbs: {
                swiper: whyChooseThumbSlider,
            },
            breakpoints: {
                992: {
                    autoplay: false,
                },
            }
        });
        whyChooseThumbSlider.on("click", function(swiper) {
            const clickedIndex = swiper.clickedIndex;
            if (clickedIndex === undefined) return;

            whyChooseMainSlider.slideTo(clickedIndex);
            swiper.slideTo(clickedIndex);
        });


        // TESTIMONIAL SLIDER

        var testimonialSlider = new Swiper(".testimonialSlider", {

            loop: true,

            loopedSlides: 5,

            speed: 400,

            watchSlidesProgress: true,

            effect: "creative",

            creativeEffect: {

                prev: {

                    translate: [0, -15, -1],

                    scale: 0.95,

                },

                next: {

                    translate: [0, -15, -1],

                    scale: 0.95,

                },

                limitProgress: 4,

            },

            autoplay: {

                delay: 1500,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },

            navigation: {

                nextEl: ".testimonial-swiper-button-next",

                prevEl: ".testimonial-swiper-button-prev",

            },

        });



        // TESTIMONIAL VIDEO SLIDER

        var testimonialVideoSlider = new Swiper(".testimonialVideoSlider", {

            slidesPerView: 1,

            speed: 400,

            loop: true,

            effect: "cube",

            grabCursor: true,

            cubeEffect: {

                shadow: false,

                slideShadows: false,

            },

            autoplay: {

                delay: 2500,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },

            navigation: {

                nextEl: ".testimonialVideo-swiper-button-next",

                prevEl: ".testimonialVideo-swiper-button-prev",

            },

        });



        // AWARDS SLIDER

        var awardSlider = new Swiper(".awardSlider", {

            slidesPerView: 2,

            spaceBetween: 5,

            speed: 400,

            autoplay: {

                delay: 2500,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },

            breakpoints: {

                576: {

                    slidesPerView: 3,

                    spaceBetween: 15,

                },

                768: {

                    slidesPerView: 3,

                    spaceBetween: 15,

                },

                992: {

                    slidesPerView: 4,

                    spaceBetween: 15,

                },

                1200: {

                    slidesPerView: 6,

                    spaceBetween: 15,

                },

                1551: {

                    slidesPerView: 6,

                    spaceBetween: 25,

                },

            },

        });



        // TECHNOLOGY SLIDER

        var technologySlider = new Swiper(".technologySlider", {

            slidesPerView: 2,

            spaceBetween: 20,

            grid: {

                rows: 2,

            },

            speed: 500,

            loop: false,

            autoplay: {

                delay: 1500,

                disableOnInteraction: false,

            },

            breakpoints: {

                576: {

                    slidesPerView: 3,

                    spaceBetween: 30,

                },

                768: {

                    slidesPerView: 4,

                    spaceBetween: 40,

                },

                1200: {

                    slidesPerView: 5,

                    spaceBetween: 60,

                },

                1551: {

                    slidesPerView: 5,

                    spaceBetween: 70,

                },

                1771: {

                    slidesPerView: 5,

                    spaceBetween: 80,

                }

            }

        });



        // TECHNOLOGY-INFO SLIDER

        var technologyInfoSlider = new Swiper(".technologyInfoSlider", {

            slidesPerView: 1,

            spaceBetween: 30,

            speed: 400,

            autoplay: {

                delay: 2500,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },

            breakpoints: {

                576: {

                    slidesPerView: 2,

                    spaceBetween: 15,

                },

                992: {

                    slidesPerView: 3,

                    spaceBetween: 15,

                },

                1200: {

                    slidesPerView: 4,

                    spaceBetween: 20,

                },

                1551: {

                    slidesPerView: 4,

                    spaceBetween: 40,

                },

            },

        });



        // DETAIL SLIDER

        var detailSlider = new Swiper(".detailSlider", {

            slidesPerView: 1,

            spaceBetween: 30,

            speed: 400,

            autoplay: {

                delay: 2500,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },

            breakpoints: {

                576: {

                    slidesPerView: 2,

                    spaceBetween: 15,

                },

                992: {

                    slidesPerView: 3,

                    spaceBetween: 15,

                },

                1200: {

                    slidesPerView: 3,

                    spaceBetween: 30,

                },

                1551: {

                    slidesPerView: 3,

                    spaceBetween: 40,

                },

                1771: {

                    slidesPerView: 3,

                    spaceBetween: 50,

                },

            },

        });



        // DETAIL-INFO SLIDER

        var detailInfoSlider = new Swiper(".detailInfoSlider", {

            slidesPerView: 1,

            spaceBetween: 30,

            speed: 400,

            autoplay: {

                delay: 2500,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },

            breakpoints: {

                576: {

                    slidesPerView: 2,

                    spaceBetween: 15,

                },

                992: {

                    slidesPerView: 3,

                    spaceBetween: 15,

                },

                1200: {

                    slidesPerView: 3,

                    spaceBetween: 30,

                },

                1551: {

                    slidesPerView: 3,

                    spaceBetween: 40,

                },

                1771: {

                    slidesPerView: 3,

                    spaceBetween: 50,

                },

            },

        });



        // INDUSTRY SLIDER

        var industrySlider = new Swiper(".industrySlider", {

            slidesPerView: 2,

            spaceBetween: 0,

            grid: {

                rows: 2,

                fill: 'row',

            },

            speed: 500,

            loop: false,

            autoplay: {

                delay: 2000,

                disableOnInteraction: false,

                pauseOnMouseEnter: true,

            },

            breakpoints: {

                576: {

                    slidesPerView: 3,

                },

                768: {

                    slidesPerView: 4,

                },

                1200: {

                    slidesPerView: 5,

                },

            },

        });



        // PROCESS BOX BLOB ANIMATION

        const processBoxes = document.querySelectorAll('.processBx');

        processBoxes.forEach(box => {

            const txt = box.querySelector('.txtt');

            if (txt) {

                txt.addEventListener('wheel', (e) => {

                    const scrollTop = txt.scrollTop;

                    const scrollHeight = txt.scrollHeight;

                    const height = txt.offsetHeight;

                    const delta = e.deltaY;

                    if ((delta > 0 && scrollTop + height >= scrollHeight) || (delta < 0 && scrollTop <= 0)) {

                    }

                    e.stopPropagation();

                }, {
                    passive: true
                });

            }

            let isHovering = false;

            gsap.set(box, {

                '--x': `${gsap.utils.random(-30, 93)}%`,

                '--y': `${gsap.utils.random(-30, 93)}%`,

                '--s': gsap.utils.random(1.1, 1.4),

                '--br1': `${gsap.utils.random(30, 80)}%`,

                '--br2': `${gsap.utils.random(30, 80)}%`,

                '--br3': `${gsap.utils.random(30, 80)}%`,

                '--br4': `${gsap.utils.random(30, 80)}%`,

                '--br5': `${gsap.utils.random(30, 80)}%`,

                '--br6': `${gsap.utils.random(30, 80)}%`,

                '--br7': `${gsap.utils.random(30, 80)}%`,

                '--br8': `${gsap.utils.random(30, 80)}%`,

            });



            const animateBlob = () => {

                if (!isHovering) return;



                gsap.to(box, {

                    '--x': `${gsap.utils.random(-30, 93)}%`,

                    '--y': `${gsap.utils.random(-30, 93)}%`,

                    '--s': gsap.utils.random(1.1, 1.4),

                    '--br1': `${gsap.utils.random(30, 80)}%`,

                    '--br2': `${gsap.utils.random(30, 80)}%`,

                    '--br3': `${gsap.utils.random(30, 80)}%`,

                    '--br4': `${gsap.utils.random(30, 80)}%`,

                    '--br5': `${gsap.utils.random(30, 80)}%`,

                    '--br6': `${gsap.utils.random(30, 80)}%`,

                    '--br7': `${gsap.utils.random(30, 80)}%`,

                    '--br8': `${gsap.utils.random(30, 80)}%`,

                    duration: 1.2,

                    ease: "power1.inOut",

                    onComplete: animateBlob

                });

            };



            box.addEventListener('mouseenter', () => {

                isHovering = true;

                animateBlob();

            });



            box.addEventListener('mouseleave', () => {

                isHovering = false;

                gsap.killTweensOf(box, {

                    '--x': true,

                    '--y': true,

                    '--s': true,

                    '--br1': true,

                    '--br2': true,

                    '--br3': true,

                    '--br4': true,

                    '--br5': true,

                    '--br6': true,

                    '--br7': true,

                    '--br8': true

                });

                gsap.to(box, {

                    '--x': `${gsap.utils.random(-30, 93)}%`,

                    '--y': `${gsap.utils.random(-30, 93)}%`,

                    '--s': 1.1,

                    '--br1': `${gsap.utils.random(30, 80)}%`,

                    '--br2': `${gsap.utils.random(30, 80)}%`,

                    '--br3': `${gsap.utils.random(30, 80)}%`,

                    '--br4': `${gsap.utils.random(30, 80)}%`,

                    '--br5': `${gsap.utils.random(30, 80)}%`,

                    '--br6': `${gsap.utils.random(30, 80)}%`,

                    '--br7': `${gsap.utils.random(30, 80)}%`,

                    '--br8': `${gsap.utils.random(30, 80)}%`,

                    duration: 1.5,

                    ease: "power2.out"

                });

            });

        });



        // OURWORK HOVER VIDEO PLAY LOGIC
        const workBoxes = document.querySelectorAll('.workBx');
        workBoxes.forEach(box => {
            const video = box.querySelector('video');
            const slide = box.closest('.embla__slide');

            box.addEventListener('mouseenter', () => {
                if (video) {
                    video.play().catch(error => {});
                }
            });
            box.addEventListener('mouseleave', () => {
                if (video) {
                    const isMobile = window.innerWidth <= 576;
                    if (!isMobile || (slide && !slide.classList.contains('is-selected'))) {
                        video.pause();
                        video.currentTime = 0;
                    }
                }
            });
        });

        // CASESTUDIES HOVER VIDEO PLAY LOGIC
        const caseBoxes = document.querySelectorAll('.caseBx');
        caseBoxes.forEach(box => {
            const video = box.querySelector('video');
            const img = box.querySelector('img');

            box.addEventListener('mouseenter', () => {
                if (video) {
                    video.play().catch(error => {
                        console.log("Video play interrupted", error);
                    });
                }
            });
            box.addEventListener('mouseleave', () => {
                if (video) {
                    video.pause();
                    video.currentTime = 0;
                }
            });
        });

    });

    // MAIN BANNER ANIMATED HOVER EFFECT

    class TitleAnimation {

        constructor(element) {

            this.element = element;

            this.letters = [];

            this.currentIndex = 0;

            this.isHovered = false;

            this.hoveredLetters = new Set();

            this.animationRunning = false;

            this.animationTimeout = null;

            this.activeColor = '#FFCB02';

            this.defaultColor = '#FFFF';

            this.init();

        }



        init() {

            this.splitText();

            this.setResponsiveDistance();

            this.setupHoverEffects();

            this.setupResizeHandler();

            this.setupVisibilityHandler();

            this.startInfiniteAnimation();

        }



        setResponsiveDistance() {

            const width = window.innerWidth;

            if (width >= 1551) {

                this.translateDistance = -40;

            } else if (width >= 992) {

                this.translateDistance = -15;

            } else if (width >= 576) {

                this.translateDistance = -0;

            } else {

                this.translateDistance = -0;

            }

        }



        setupResizeHandler() {

            let resizeTimer;

            window.addEventListener('resize', () => {

                clearTimeout(resizeTimer);

                resizeTimer = setTimeout(() => {

                    this.setResponsiveDistance();

                }, 250);

            });

        }



        setupVisibilityHandler() {

            document.addEventListener('visibilitychange', () => {

                if (document.hidden) {

                    if (this.animationTimeout) {

                        clearTimeout(this.animationTimeout);

                        this.animationTimeout = null;

                    }

                    this.animationRunning = false;

                    this.letters.forEach(letter => {

                        gsap.killTweensOf(letter);

                        gsap.set(letter, {

                            y: 0,

                            color: this.defaultColor,

                            clearProps: 'all'

                        });

                    });

                } else {

                    if (!this.isHovered) {

                        this.startInfiniteAnimation();

                    }

                }

            });

        }



        splitText() {

            const text = this.element.textContent;

            this.element.innerHTML = '';

            text.split('').forEach((char, index) => {

                const span = document.createElement('span');

                span.classList.add('letter');

                span.dataset.index = index;

                if (char === ' ') {

                    span.classList.add('space');

                    span.innerHTML = '&nbsp;';

                } else {

                    span.textContent = char;

                }

                this.element.appendChild(span);

                this.letters.push(span);

            });

        }



        startInfiniteAnimation() {

            if (this.animationTimeout) {

                clearTimeout(this.animationTimeout);

                this.animationTimeout = null;

            }

            this.animationRunning = false;

            const animateLetter = () => {

                if (this.isHovered) {

                    this.animationRunning = false;

                    this.animationTimeout = null;

                    return;

                }

                this.animationRunning = true;

                const letter = this.letters[this.currentIndex];

                if (!this.hoveredLetters.has(this.currentIndex)) {

                    gsap.to(letter, {

                        y: this.translateDistance,

                        color: this.activeColor,

                        duration: 0.7,

                        ease: 'power3.inOut',

                        onComplete: () => {

                            gsap.to(letter, {

                                y: 0,

                                duration: 0.7,

                                ease: 'power2.in',

                                color: this.defaultColor,

                                ease: 'power3.inOut'

                            });

                        }

                    });

                }

                this.currentIndex = (this.currentIndex + 1) % this.letters.length;

                this.animationTimeout = setTimeout(animateLetter, 120);

            };

            animateLetter();

        }



        setupHoverEffects() {

            this.letters.forEach((letter, index) => {

                letter.addEventListener('mouseenter', () => {

                    this.hoveredLetters.add(index);

                    this.currentIndex = index;

                    gsap.killTweensOf(letter);

                    gsap.to(letter, {

                        y: this.translateDistance,

                        color: this.defaultColor,

                        duration: 0.6,

                        ease: 'power2.out'

                    });

                });

                letter.addEventListener('mouseleave', () => {

                    this.hoveredLetters.delete(index);

                    gsap.to(letter, {

                        y: 0,

                        color: this.defaultColor,

                        duration: 0.6,

                        ease: 'power2.in'

                    });

                });

            });

            this.element.addEventListener('mouseenter', () => {

                this.isHovered = true;

            });

            this.element.addEventListener('mouseleave', () => {

                this.isHovered = false;

                this.currentIndex = (this.currentIndex + 1) % this.letters.length;

                if (!this.animationRunning) {

                    this.startInfiniteAnimation();

                }

            });

        }

    }

    document.addEventListener('DOMContentLoaded', () => {

        const titleElement = document.getElementById('titleText');

        if (titleElement) new TitleAnimation(titleElement);



        // CLIENT IMAGE CHANGE ANIMATION
        const grid = document.getElementById('ClientGrid');
        if (grid) {
            const getImgSrc = (img) =>
                img.getAttribute('data-src') || img.getAttribute('src');
            let initialItems = Array.from(grid.querySelectorAll('.item'));
            const masterPool = Array.from(
                new Set(
                    initialItems.map(item =>
                        getImgSrc(item.querySelector('img'))
                    )
                )
            );
            const setVisibleItems = () => {
                const isMobile = window.innerWidth < 468;
                const limit = isMobile ? 10 : 9;
                grid.innerHTML = '';
                initialItems.forEach(item => grid.appendChild(item));

                const currentItems = Array.from(grid.querySelectorAll('.item'));

                if (currentItems.length > limit) {
                    currentItems.slice(limit).forEach(item => item.remove());
                }
            };
            setVisibleItems();
            let resizeTimeout;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(setVisibleItems, 200);
            });
            const performButterSmoothSwap = () => {
                if (document.hidden) return;
                const allVisibleImgNodes = Array.from(grid.querySelectorAll('.item img'));
                const visibleImgNodes = allVisibleImgNodes.filter(img => !img.classList.contains('is-animating'));
                if (visibleImgNodes.length === 0) return;

                const randomBox =
                    visibleImgNodes[Math.floor(Math.random() * visibleImgNodes.length)];
                randomBox.classList.add('is-animating');
                const visibleNow = allVisibleImgNodes.map(img => getImgSrc(img));
                const candidates = masterPool.filter(
                    src => !visibleNow.includes(src)
                );
                const finalPool =
                    candidates.length > 0 ?
                    candidates :
                    masterPool.filter(src => src !== getImgSrc(randomBox));
                if (finalPool.length === 0) {
                    randomBox.classList.remove('is-animating');
                    return;
                }
                const nextLogo =
                    finalPool[Math.floor(Math.random() * finalPool.length)];

                randomBox.setAttribute('data-src', nextLogo);

                gsap.to(randomBox, {
                    opacity: 0,
                    scale: 0.7,
                    duration: 0.5,
                    ease: "power2.inOut",
                    onComplete: () => {
                        randomBox.src = nextLogo;

                        gsap.to(randomBox, {
                            opacity: 1,
                            scale: 1,
                            duration: 0.5,
                            ease: "power2.out",
                            onComplete: () => {
                                randomBox.classList.remove('is-animating');
                            }
                        });
                    }
                });
            };
            if (masterPool.length > 1) {
                setTimeout(performButterSmoothSwap, 500);
                setInterval(performButterSmoothSwap, 3000);
            }
        }



        // FIXED NAVIGATION
        // PERFORMANCE_AUDIT.md P1-9: this used to read offsetTop/offsetHeight for
        // every hideSection on every scroll event tick (layout thrash) on a plain,
        // non-passive 'scroll' listener. The "are we over a hide section" check is
        // now an IntersectionObserver (no per-scroll layout reads); the scroll
        // listener only reads scrollY and is passive.
        const fixedNav = document.querySelector('.LandingFixedNavigation');
        const hideSectionIds = [
            '#LandingFooter',
            '#SheduleMeeting',
        ];
        const hideSections = document.querySelectorAll(hideSectionIds.join(','));
        const intersectingHideSections = new Set();
        if (hideSections.length) {
            const hideSectionObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        intersectingHideSections.add(entry.target);
                    } else {
                        intersectingHideSections.delete(entry.target);
                    }
                });
            });
            hideSections.forEach((section) => hideSectionObserver.observe(section));
        }

        window.addEventListener('scroll', () => {
            const scrollHeight = document.documentElement.scrollHeight;
            const windowHeight = window.innerHeight;
            const scrollY = window.scrollY;
            const threshold = (scrollHeight - windowHeight) * 0.02;

            if (scrollY >= threshold && intersectingHideSections.size === 0) {
                fixedNav.classList.add('show');
            } else {
                fixedNav.classList.remove('show');
            }
        }, { passive: true });

    });
</script>

<script>
    // GSAP ANIMATIONS: HOLDING, SERVICES & CASE STUDIES

    gsap.registerPlugin(ScrollTrigger);



    function initGSAP() {

        ScrollTrigger.getAll().forEach(st => st.kill());

        gsap.killTweensOf("#Services .element, #SheduleMeeting .element");

        const isDesktop = window.innerWidth >= 992;



        if (isDesktop) {

            // HOLDING ANIMATION

            const holdingSection = document.getElementById("Holding");

            const holdingWrapper = document.querySelector(".holdingWrapper");

            const holdingItems = gsap.utils.toArray(".holdingWrapper .item");



            if (holdingSection && holdingWrapper && holdingItems.length > 0) {

                const getCenterY = (item) => {

                    const itemOffset = item.offsetTop;

                    const itemHeight = item.offsetHeight;

                    const viewHeight = window.innerHeight;

                    return -(itemOffset - (viewHeight - itemHeight) / 2);

                };

                gsap.set(holdingItems, {
                    autoAlpha: 0
                });

                gsap.set(holdingItems[0], {
                    autoAlpha: 1
                });

                gsap.set(holdingWrapper, {
                    y: getCenterY(holdingItems[0])
                });

                const holdingTl = gsap.timeline({

                    scrollTrigger: {

                        trigger: holdingSection,

                        start: "top top",

                        end: () => "+=" + (holdingItems.length * 40) + "%",

                        pin: true,

                        scrub: 1.5,

                        invalidateOnRefresh: true,

                        id: "holding"

                    }

                });

                holdingItems.forEach((item, i) => {

                    if (i > 0) {

                        const prevItem = holdingItems[i - 1];

                        const startTime = i - 1;

                        holdingTl.to(holdingWrapper, {

                            y: () => getCenterY(item),

                            duration: 1,

                            ease: "none"

                        }, startTime);

                        holdingTl.to(prevItem, {

                            autoAlpha: 0,

                            duration: 0.4,

                            ease: "power1.inOut"

                        }, startTime + 0.4);

                        holdingTl.to(item, {

                            autoAlpha: 1,

                            duration: 0.4,

                            ease: "power1.inOut"

                        }, startTime + 0.4);

                    }

                });

            }



            const serviceItems = gsap.utils.toArray("#Services .serviceWrap > .item");

            if (serviceItems.length > 0) {

                serviceItems.forEach((item, i) => {
                    gsap.set(item, {
                        opacity: i === 0 ? 1 : 0,
                        visibility: i === 0 ? "visible" : "hidden",
                        filter: i === 0 ? "blur(0px)" : "blur(10px)",
                        zIndex: serviceItems.length - i
                    });
                });

                const sectionScroll = window.innerHeight * 0.9;

                ScrollTrigger.create({
                    trigger: "#Services .servicePinContainer",
                    start: "top top",
                    end: `+=${sectionScroll * serviceItems.length}`,
                    pin: false,
                    scrub: 2,
                    invalidateOnRefresh: true,

                    onUpdate: (self) => {

                        let progress = self.progress;
                        let index = Math.floor(progress * serviceItems.length);

                        index = Math.min(index, serviceItems.length - 1);

                        serviceItems.forEach((item, i) => {

                            if (i === index) {

                                gsap.to(item, {
                                    opacity: 1,
                                    visibility: "visible",
                                    filter: "blur(0px)",
                                    duration: 0.6,
                                    ease: "power2.out",
                                    overwrite: true
                                });

                            } else {

                                gsap.to(item, {
                                    opacity: 0,
                                    visibility: "hidden",
                                    filter: "blur(10px)",
                                    duration: 0.6,
                                    ease: "power2.out",
                                    overwrite: true
                                });

                            }

                        });

                    }

                });

            }


            // CASESTUDIES ANIMATION

            const cards = gsap.utils.toArray(".caseWrapper .itemWrap");

            if (cards.length > 0) {

                const caseTL = gsap.timeline({

                    defaults: {
                        ease: "power2.out"
                    }

                });

                const cardHeight = window.innerHeight;

                cards.forEach((card, i) => {

                    gsap.set(card, {

                        y: i === 0 ? 0 : cardHeight,

                        scale: 1,

                        opacity: i === 0 ? 1 : 1,

                        zIndex: i + 1

                    });

                    if (i > 0) {

                        caseTL.to(cards[i - 1], {

                            scale: 0.85,

                            opacity: 0,

                            y: 0,

                            duration: 1

                        });

                        caseTL.to(card, {

                            y: 0,

                            scale: 1,

                            duration: 1

                        }, "<");

                    }

                });

                ScrollTrigger.create({

                    trigger: ".caseWrapper",

                    start: "top top",

                    end: () => "+=" + (window.innerHeight * (cards.length - 1) * 0.8),

                    pin: ".caseWrapper",

                    scrub: 2,

                    animation: caseTL,

                    invalidateOnRefresh: true,

                    id: "casestudies"

                });

            }



            // DECORATIVE ELEMENT

            const entranceElements = gsap.utils.toArray("#Services .element, #SheduleMeeting .element");

            entranceElements.forEach(el => {

                gsap.from(el, {

                    scrollTrigger: {

                        trigger: el,

                        start: "top 90%",

                        toggleActions: "play none none none",

                    },

                    x: 100,

                    rotation: 20,

                    opacity: 0,

                    duration: 1.2,

                    ease: "back.out(1.7)",

                    onComplete: () => {

                        gsap.to(el, {

                            y: "15px",

                            duration: 3,

                            repeat: -1,

                            yoyo: true,

                            ease: "sine.inOut"

                        });

                        gsap.to(el, {

                            rotation: "+=5",

                            duration: 4,

                            repeat: -1,

                            yoyo: true,

                            ease: "sine.inOut"

                        });

                    }

                });

            });

        } else {

            gsap.set(".holdingWrapper, .holdingWrapper .item, #Services .serviceWrap > .item, .caseWrapper, .caseWrapper .itemWrap, #Services .element, #SheduleMeeting .element", {

                clearProps: "all"

            });

        }

        ScrollTrigger.refresh();

    }



    window.addEventListener("load", initGSAP);

    let resizeTimeout;

    window.addEventListener("resize", () => {

        clearTimeout(resizeTimeout);

        resizeTimeout = setTimeout(initGSAP, 300);

    });

    window.onbeforeunload = function() {

        window.scrollTo(0, 0);

    };
</script>

<script>
    // WHATSAPP TOOLTIP REVEAL
    setTimeout(function() {
        $("#WhatsappTooltip").addClass("active");
    }, 2500);

    $("#WhatsappTooltipClose").on("click", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $("#WhatsappTooltip").removeClass("active");
    });
</script>

<script>
    //FORM LABEL RISE ANIMATION
    $('.form-control').on('focusin', function() {
        $(this).prev('label').addClass('active');
    });

    $('.form-control').on('focusout', function() {
        if (!this.value) {
            $(this).prev('label').removeClass('active');
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        // VIDEO AUTO PLAY
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const video = entry.target;

                if (entry.isIntersecting) {
                    video.play();
                } else {
                    video.pause();
                }
            });
        }, {
            threshold: 0.2
        });

        document.querySelectorAll("video").forEach(video => {
            observer.observe(video);
        });




        // BANNER TITLE FIT TEXT
        function fitText(selector) {
            document.querySelectorAll(selector).forEach(el => {
                const parent = el.parentElement;
                let size = 200;
                el.style.fontSize = size + 'px';
                while (el.scrollWidth > parent.clientWidth && size > 10) {
                    size--;
                    el.style.fontSize = size + 'px';
                }
            });
        }
        window.addEventListener('load', () => fitText('.titleAnimated'));
        window.addEventListener('resize', () => fitText('.titleAnimated'));


        // BANNER SLIDER
        if (document.querySelector(".globalAddressSlider")) new Swiper(".globalAddressSlider", {
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 400,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: ".banner-swiper-bullets",
                clickable: true,
            },
            on: {
                init: updateFraction,
                slideChange: updateFraction,
            }
        });

        function updateFraction(swiper) {
            const current = String(swiper.realIndex + 1).padStart(2, "0");
            const total = String(swiper.slides.length).padStart(2, "0");
            const paginationEl = document.querySelector(".banner-swiper-pagination");
            if (paginationEl) {
                paginationEl.innerHTML = `${current}/${total}`;
            }
        }

        // HOLDING SLIDER
        var holdingSlider = new Swiper(".holdingSlider", {
            slidesPerView: 2,
            spaceBetween: 0,
            speed: 400,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                },
                992: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },
            }
        });

        // TECHNOLOGY LOGO SLIDER
        document.querySelectorAll('.technologylogoSlider').forEach((slider) => {
            new Swiper(slider, {
                slidesPerView: 5,
                spaceBetween: 15,
                loop: true,
                speed: 1000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                }
            });
        });

        // SERVICES SLIDER
        var serviceThumbSlider = new Swiper(".serviceThumbSlider", {
            slidesPerView: "auto",
            spaceBetween: 5,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            breakpoints: {
                992: {
                    spaceBetween: 8,
                },
                1551: {
                    spaceBetween: 15,
                },
            }
        });
        var serviceMainSlider = new Swiper(".serviceMainSlider", {
            slidesPerView: 1,
            speed: 800,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            allowTouchMove: false,
            thumbs: {
                swiper: serviceThumbSlider
            }
        });
        const mainTitle = document.getElementById("MainTitle");

        function setMainTitle(title) {
            mainTitle.classList.add("fade-out");
            setTimeout(() => {
                mainTitle.innerHTML = title;
                mainTitle.classList.remove("fade-out");
            }, 250);
        }
        mainTitle.innerHTML =
            serviceMainSlider.slides[
                serviceMainSlider.activeIndex
            ].dataset.title;
        serviceMainSlider.on("slideChangeTransitionStart", function() {
            const title =
                this.slides[this.activeIndex]
                .dataset.title;
            setMainTitle(title);
            serviceThumbSlider.slideTo(this.activeIndex);
        });

        // TALK TO EXPERT TOGGLE
        const talktoExpertCard = document.querySelector('.talktoExpertCard');
        const talktoExpertToggles = document.querySelectorAll('.talktoExpertToggle');
        const talktoExpertClose = document.querySelector('.talktoExpertCard .CloseBtn');

        if (talktoExpertCard) {
            talktoExpertToggles.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    talktoExpertCard.classList.toggle('Show');
                    toggleScroll();
                });
            });

            if (talktoExpertClose) {
                talktoExpertClose.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    talktoExpertCard.classList.remove('Show');
                    toggleScroll();
                });
            }
        }

        // Only show the selected button (#web-getproposal-floating) if window.scrollY more than 200 threshold
        const scrollToggleButton = document.getElementById('web-getproposal-floating');
        if (scrollToggleButton) {
            function handleToggleVisibility() {
                if (window.scrollY > 200) {
                    scrollToggleButton.classList.add('active');
                } else {
                    scrollToggleButton.classList.remove('active');
                }
            }
            handleToggleVisibility();
            window.addEventListener('scroll', handleToggleVisibility, { passive: true });
        }

        // Dynamic right positioning of talktoExpertCard relative to the header button
        function updateCardPosition() {
            const headerToggle = document.querySelector('#LandingHeader .talktoExpertToggle');
            const talktoExpertCard = document.querySelector('.talktoExpertCard');
            if (headerToggle && talktoExpertCard) {
                const rect = headerToggle.getBoundingClientRect();
                const rightOffset = window.innerWidth - rect.right;
                talktoExpertCard.style.setProperty('--right-offset', rightOffset + 'px');
                talktoExpertCard.style.opacity = '1';
            }
        }
        updateCardPosition();
        window.addEventListener('resize', updateCardPosition);
        // PERFORMANCE_AUDIT.md P1-9: this called getBoundingClientRect() (a layout
        // read) on every raw scroll event; rAF-throttling caps it at once per
        // painted frame instead, same end result, far fewer reads.
        let updateCardPositionQueued = false;
        window.addEventListener('scroll', () => {
            if (updateCardPositionQueued) return;
            updateCardPositionQueued = true;
            requestAnimationFrame(() => {
                updateCardPositionQueued = false;
                updateCardPosition();
            });
        }, { passive: true });
        window.addEventListener('load', updateCardPosition);
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', () => {

        document.querySelectorAll('.custom-slider').forEach((slider) => {

            const thumbSwiperEl = slider.querySelector('.thumbSwiper');
            const mainSwiperEl = slider.querySelector('.mainSwiper');

            if (!thumbSwiperEl || !mainSwiperEl) return;

            const thumbsSwiper = new Swiper(thumbSwiperEl, {
                slidesPerView: 4,
                watchSlidesProgress: true,

                breakpoints: {
                    0: {
                        slidesPerView: 4,
                        spaceBetween: 7
                    },
                    1551: {
                        slidesPerView: 4,
                        spaceBetween: 9
                    },
                    1771: {
                        slidesPerView: 4,
                        spaceBetween: 11
                    }
                }
            });

            const mainSwiper = new Swiper(mainSwiperEl, {
                effect: "fade",
                speed: 800,

                autoplay: {
                    delay: 4300,
                    disableOnInteraction: false
                },

                thumbs: {
                    swiper: thumbsSwiper
                },

                on: {
                    init() {
                        restartAnimation();
                    },
                    slideChange() {
                        restartAnimation();
                    }
                }
            });

            function restartAnimation() {
                slider.querySelectorAll('.thumb-progress span').forEach((el) => {
                    el.style.animation = 'none';
                    void el.offsetWidth; // force reflow
                    el.style.animation = '';
                });
            }

        });

    });

    // height function
    function setSliderHeight() {
        $('.flexWrap').each(function() {
            var $slider = $(this).find('.lrtB .custom-slider');

            if ($(window).width() > 1200) {
                $slider.css(
                    'height',
                    $(this).find('.rltB').outerHeight() + 'px'
                );
            } else {
                $slider.css('height', '');
            }
        });
    }

    $(window).on('load resize', setSliderHeight);


   // counter (PERFORMANCE_AUDIT.md P0-4.3: native IntersectionObserver instead of
    // ScrollMagic; triggerHook 0.7 ~= element's top crossing 70% of the viewport
    // height, i.e. a -30% bottom rootMargin, and .reverse(false) ~= fire once)
    var caseStudiesEl = document.querySelector("#caseStudies");
    if (caseStudiesEl) {
        var caseStudiesObserver = new IntersectionObserver(function(entries, obs) {
            entries.forEach(function(entry) {
                if (!entry.isIntersecting) return;

                caseStudiesEl.classList.add("isVisible");

                $("#caseStudies .flexWrap .rltB .brandCard .txtB .num").each(function() {
                    // only plain integers count up; formatted values ("232.799 €", "40x", "4,49 Mio.") stay as written
                    if (!/^\s*\d+\s*$/.test($(this).text())) return;
                    $(this)
                        .prop("Counter", 0)
                        .animate({
                            Counter: $(this).text()
                        }, {
                            duration: 4000,
                            easing: "swing",
                            step: function(now) {
                                $(this).text(
                                    Math.ceil(now)
                                    .toString()
                                    .replace(/(\d)(?=(\d\d\d)+(?!\d))/g,
                                        "$1,")
                                );
                            },
                        });
                });

                obs.unobserve(caseStudiesEl);
            });
        }, {
            rootMargin: "0px 0px -30% 0px"
        });

        caseStudiesObserver.observe(caseStudiesEl);
    }
</script>



<style>
    .grecaptcha-badge {
        display: none !important;
    }
</style>


<?php
get_footer();
?>