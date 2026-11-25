/*
 * Hero laptop screen video.
 *  - keeps every .hq-screen scaled to its laptop image (--k = image width / 1536) so the video never drifts;
 *  - plays the intro laptop's video first, hands over to the hero laptop's video (same timestamp) at the swap;
 *  - plays only while visible, never for reduced motion or data-saver (the poster frame stays).
 */
(function () {
    var root = document.documentElement;
    /* skeleton: the backdrop, laptop and screen poster are revealed together once all three have loaded (or after 3.5 s) */
    (function () {
        var vis = document.querySelector('#HeroQuote .hq-visual');
        if (!vis || window.innerWidth < 768) return;
        var done = false;
        function ready() { if (!done) { done = true; vis.classList.add('hq-ready'); } }
        var waits = [].map.call(vis.querySelectorAll('img'), function (img) {
            return img.decode ? img.decode().catch(function () {}) : new Promise(function (r) { img.complete ? r() : (img.onload = img.onerror = r); });
        });
        var v = vis.querySelector('video[data-poster]');
        if (v) waits.push(new Promise(function (r) { var i = new Image(); i.onload = i.onerror = r; i.src = v.getAttribute('data-poster'); }));
        Promise.all(waits).then(ready);
        setTimeout(ready, 3500);
    })();
    /* phones: the office video plays behind the whole hero. It starts after the page has loaded (never competes with first paint),
       and not for reduced motion, Data Saver or 2G/3G. */
    (function () {
        var bg = document.querySelector('#HeroQuote .hq-bgvideo');
        if (!bg || window.innerWidth >= 768) return;
        var c = navigator.connection || {};
        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || c.saveData || /(^|-)(2g|3g)$/.test(c.effectiveType || '')) return;
        function go() {
            setTimeout(function () {
                var s = document.createElement('source');
                s.src = bg.getAttribute('data-src'); s.type = 'video/mp4';
                bg.appendChild(s); bg.preload = 'auto'; bg.load();
                var pr = bg.play();
                bg.addEventListener('playing', function () { bg.classList.add('is-playing'); }, { once: true });
                if (pr && pr.catch) pr.catch(function () {});
            }, 1200);
        }
        if (document.readyState === 'complete') go(); else window.addEventListener('load', go, { once: true });
        document.addEventListener('visibilitychange', function () {
            if (document.hidden) bg.pause(); else if (bg.classList.contains('is-playing')) { var p = bg.play(); if (p && p.catch) p.catch(function () {}); }
        });
    })();
    var screens = [].slice.call(document.querySelectorAll('.hq-screen'));
    if (!screens.length) return;
    /* the laptop is not shown below 768px: do not download its poster there */
    if (window.innerWidth >= 768) [].forEach.call(document.querySelectorAll('video[data-poster]'), function (v) { v.poster = v.getAttribute('data-poster'); });

    /* ---- alignment: scale each screen with the width of the laptop image it sits on ---- */
    function fit(sc) {
        var img = sc.parentElement && sc.parentElement.querySelector('img');
        if (!img) return;
        var w = img.clientWidth;
        if (w > 0) { sc.style.setProperty('--k', (w / 1536).toFixed(5)); sc.setAttribute('data-ready', ''); }
    }
    screens.forEach(function (sc) {
        var img = sc.parentElement.querySelector('img');
        fit(sc);
        if (img) {
            if (!img.complete) img.addEventListener('load', function () { fit(sc); });
            if ('ResizeObserver' in window) new ResizeObserver(function () { fit(sc); }).observe(img);
        }
    });
    window.addEventListener('resize', function () { screens.forEach(fit); });
    window.addEventListener('load', function () { screens.forEach(fit); });

    /* ---- playback ----
       One <video> element and one download. It starts on the first screen (the intro laptop) just after first paint, then the same element is moved into the hero laptop's screen at the swap,
       so it keeps playing without a second request. Skipped for reduced motion, Data Saver and 2G/3G. */
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var conn = navigator.connection || {};
    var slow = !!conn.saveData || /(^|-)(2g|3g)$/.test(conn.effectiveType || '');
    if (reduce || slow) return;

    var root = document.documentElement;
    var introScreen = document.querySelector('#HeroIntro .hq-screen'),
        heroScreen = document.querySelector('#HeroQuote .hq-screen');
    var introOn = root.classList.contains('hq-intro-on') && !!introScreen;
    var vid = (introOn ? introScreen : heroScreen).querySelector('video');
    var spare = introOn ? heroScreen.querySelector('video') : null;     /* the hero's empty placeholder */
    if (!vid) return;

    var visible = true, started = false;

    function attachSource() {
        if (vid.querySelector('source')) return;
        var src = (vid.closest('.hq-screen') || heroScreen).getAttribute('data-src') || heroScreen.getAttribute('data-src');
        var so = document.createElement('source');
        so.src = src; so.type = 'video/mp4';
        vid.appendChild(so);
        vid.preload = 'auto';
        vid.load();
    }
    function sync() {
        if (!started) return;
        if (visible && document.visibilityState !== 'hidden') {
            var pr = vid.play();
            if (pr && pr.catch) pr.catch(function () { /* autoplay refused: the poster frame stays */ });
        } else if (!vid.paused) { vid.pause(); }
    }
    function start() {
        if (started) return;
        started = true;
        attachSource();
        sync();
    }

    var io = null;
    function watch() {
        if (!('IntersectionObserver' in window)) return;
        if (io) io.disconnect();
        io = new IntersectionObserver(function (en) { visible = en[0].isIntersecting; sync(); }, { threshold: 0.2 });
        io.observe(vid);
    }
    watch();
    document.addEventListener('visibilitychange', sync);

    /* hand the playing element over to the hero laptop */
    var handed = false;
    function handover() {
        if (handed || !introOn || !spare) return;
        handed = true;
        var t = vid.currentTime, wasPlaying = !vid.paused;
        heroScreen.replaceChild(vid, spare);
        try { if (t) vid.currentTime = t; } catch (e) {}
        watch();
        if (wasPlaying || started) { var pr = vid.play(); if (pr && pr.catch) pr.catch(function () {}); }
    }
    if (introOn) {
        var compactIntro = window.innerWidth < 992;
        var mo = new MutationObserver(function () {
            if (root.classList.contains(compactIntro ? 'hq-intro-done' : 'hq-lap-show')) { mo.disconnect(); handover(); }
        });
        mo.observe(root, { attributes: true, attributeFilter: ['class'] });
    }

    /* Start only after the first real interaction, and only on wide screens: the 3 MB video must never compete with first paint
       (or be downloaded by a phone). Until then the poster frame stays. */
    if (window.innerWidth < 992) return;
    var evs = ['pointerdown', 'pointermove', 'touchstart', 'wheel', 'scroll', 'keydown'];
    function onFirst() {
        evs.forEach(function (e) { window.removeEventListener(e, onFirst, true); });
        (window.requestIdleCallback || function (f) { setTimeout(f, 200); })(start, { timeout: 1200 });
    }
    evs.forEach(function (e) { window.addEventListener(e, onFirst, { capture: true, passive: true }); });
})();
