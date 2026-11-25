<!DOCTYPE html>

<html lang="en" dir="ltr">



<head>

    <noscript>

        <style type="text/css">

            .no-js {

                display: none !important;

            }

        </style>

    </noscript>

    <title>Intersmart Solutions</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="mobile-web-app-capable" content="yes">

    <meta name="robots" content="noindex, nofollow, max-image-preview:large">



    <meta name="author" content="INTER SMART | Web Design &amp; Development Company | Kerala">

    <meta name="keywords" content="Home">

    <meta name="description" content="InterSmart is the best Kerala based web design">

    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#091c3a">

    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#091c3a">

    <meta name="msapplication-TileColor" content="#091c3a">

    <meta name="msapplication-navbutton-color" content="#091c3a">

    <meta name="apple-mobile-web-app-status-bar-style" content="#091c3a">



    <meta property="og:locale" content="en_US">

    <meta property="og:type" content="website">

    <meta property="og:site_name" content="Inter Smart">

    <meta property="og:title" content="Web Design & Development Company Kerala">

    <meta property="og:description" content="InterSmart is the best Kerala based web design">

    <meta property="og:image" content="">

    <meta property="og:url" content="">



    <link rel="canonical" href="">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">

    <link rel="manifest" href="site.webmanifest">



    <style>

        .owl-carousel:not(.owl-loaded),

        .swiper:not(.swiper-initialized),

        .splide:not(.is-initialized) {

            opacity: 0;

        }



        figure {

            margin: 0 !important;

        }

    </style>



    <script>

        // VIEWPORT_HEIGHT

        const appHeight = () => document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`)

        window.addEventListener('resize', function () {

            appHeight();

        });

        document.addEventListener("DOMContentLoaded", function () {

            appHeight();

        });

        // NO_JS

        (function () {

            document.querySelectorAll('.no-js').forEach(function (element) {

                element.classList.remove('no-js');

            });

        })();

    </script>



    <!-- PRECONNECTING MOST USED DOMAIN --->

    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <link rel="preconnect" href="https://ux.intersmarthosting.in">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>



    <!-- FONTS -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"

        rel="stylesheet">



    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"

        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"

        referrerpolicy="no-referrer">



    <!-- ANIMATE_CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"

        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="

        crossorigin="anonymous" referrerpolicy="no-referrer">



    <!-- SELECT2 -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">



    <!-- FLAG_CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">



    <!-- JQUERY -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>



    <!-- LAZYLOAD -->

    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js" defer

        onload="initializeLazyLoad()"></script>

    <script>

        function initializeLazyLoad() {

            var lazyLoadInstance = new LazyLoad({});

        }

    </script>

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/app.min.css?v=1.0.0" rel="stylesheet">

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/lang.min.css?v=1.0.0" rel="stylesheet">

</head>



<body class="no-js <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'index1' ? 'isHome' : '' ?>">



<?php get_template_part('includes/landing', 'header'); ?>