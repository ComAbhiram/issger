<?php
/*
Template Name: Landing Digital Marketing
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

    <section id="LandingBanner">

        <div class="bgImgWrap">

            <picture>

                <source rel="preload" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/landing-banner-1.webp" media="(min-width:768px)" width="1920"

                    height="1080">

                <img rel="preload" src="<?php echo get_stylesheet_directory_uri(); ?>/images/landing-banner-1.webp" width="1920" height="1010" alt="banner"

                    fetchpriority="high" decoding="async">

            </picture>

        </div>

        <div class="container">

            <div class="bxContentWrapper">

                <div class="title">
                    <span class="titleAnimated" id="titleText">Growth Starts Here</span>
                    <span class="text">For Brands Ready to Scale</span>
                </div>

                <div class="txtWrap">
                    <div class="item">
                        <div class="txt" aria-label="Web-development"><span>Web Designing &
                                Development</span></div>
                    </div>
                    <div class="item">
                        <div class="txt" aria-label="digital-marketing"><span>Ecommerce</span></div>
                    </div>
                    <div class="item">
                        <div class="txt" aria-label="mobile-app-development"><span>Web Applications</span></div>
                    </div>
                </div>

                <div class="soltionsWrap">

                    <div class="item">

                        <div class="solutionBx">
                            <div class="bxImg">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-family.webp" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-family.webp" width="380"
                                    height="85" alt="Experts">
                            </div>
                            <div class="txt">Grow With <span>150+</span>Experts</div>
                            <div class="growthWrapper">
                                <div class="loaderWrap">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <a href="https://wa.me/919048444322?text=Hi" class="txt">Let’s Talk Growth</a>
                            </div>
                        </div>

                    </div>

                    <div class="item">

                        <div class="bxImg">

                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-banner-awards.webp" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-banner-awards.webp"

                                width="380" height="200" alt="Awards">

                        </div>

                    </div>

                    <div class="item">

                        <div class="reviewWrapper">
                            <div class="item">
                                <div class="swiper globalAddressSlider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="globalAddressBx">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-india.webp"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-india.webp" width="270" height="225"
                                                    loading="lazy" class="lazy" alt="inter-india">
                                                <!-- <div class="title">Global Offices</div> -->
                                                <div class="headWrap">
                                                    <div class="profileWrap">
                                                        <div class="bxIcon">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/india-flag.png" width="40" height="40"
                                                                alt="India Flag">
                                                        </div>
                                                        <div class="name">India</div>
                                                    </div>
                                                    <div class="txt">Ernakulam, Kerala</div>
                                                </div>
                                                <a href="tel:+919048444322" class="link">
                                                    <span class="icon">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-call-icon.svg" width="20" height="20"
                                                            alt="Call">
                                                    </span>
                                                    <span class="txt">
                                                        Call Now
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="globalAddressBx">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-uae.webp"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-uae.webp" width="270" height="225"
                                                    loading="lazy" class="lazy" alt="inter-uae">
                                                <!-- <div class="title">Global Offices</div> -->
                                                <div class="headWrap">
                                                    <div class="profileWrap">
                                                        <div class="bxIcon">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ft-ad-2.png" width="40" height="40"
                                                                alt="Germany Flag">
                                                        </div>
                                                        <div class="name">UAE</div>
                                                    </div>
                                                    <div class="txt">Sheikh Zayed Rd, Dubai</div>
                                                </div>
                                                <a href="tel:+919048444322" class="link">
                                                    <span class="icon">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-call-icon.svg" width="20" height="20"
                                                            alt="Call">
                                                    </span>
                                                    <span class="txt">
                                                        Call Now
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="globalAddressBx">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-germany.webp"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-germany.webp" width="270" height="225"
                                                    loading="lazy" class="lazy" alt="inter-germany">
                                                <!-- <div class="title">Global Offices</div> -->
                                                <div class="headWrap">
                                                    <div class="profileWrap">
                                                        <div class="bxIcon">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ft-ad-3.png" width="40" height="40"
                                                                alt="Germany Flag">
                                                        </div>
                                                        <div class="name">Germany</div>
                                                    </div>
                                                    <div class="txt">Königsalle 19, Düsseldorf</div>
                                                </div>
                                                <a href="tel:+919048444322" class="link">
                                                    <span class="icon">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-call-icon.svg" width="20" height="20"
                                                            alt="Call">
                                                    </span>
                                                    <span class="txt">
                                                        Call Now
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div class="globalAddressBx">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-maldives.webp"
                                                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-maldives.webp" width="270" height="225"
                                                    loading="lazy" class="lazy" alt="inter-maldives">
                                                <!-- <div class="title">Global Offices</div> -->
                                                <div class="headWrap">
                                                    <div class="profileWrap">
                                                        <div class="bxIcon">
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/maldives-flag.png" width="40" height="40"
                                                                alt="Maldives Flag">
                                                        </div>
                                                        <div class="name">Maldives</div>
                                                    </div>
                                                    <div class="txt">Majeedhee Magu, K. Male'</div>
                                                </div>
                                                <a href="tel:+919048444322" class="link">
                                                    <span class="icon">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-call-icon.svg" width="20" height="20"
                                                            alt="Call">
                                                    </span>
                                                    <span class="txt">
                                                        Call Now
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="banner-swiper-pagination"></div>
                                    <div class="banner-swiper-bullets"></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="counterBx">
                                    <!-- <div class="counter">
                                        <span>></span>
                                        <div class="num">95</div>
                                        <div class="symbol">%</div>
                                    </div>
                                    <div class="txt">Satisfaction Rate Across Clients</div> -->
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-review-1.svg" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-review-1.svg"
                                            width="215" height="220" loading="lazy" class="lazy" alt="Google review">
                                    </div>
                                    <div class="bxImg">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-review-2.svg" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-review-2.svg"
                                            width="215" height="220" loading="lazy" class="lazy" alt="Google review">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section id="MobileBanner">
        <div class="bgImgWrap">
            <img rel="preload" src="<?php echo get_stylesheet_directory_uri(); ?>/images/landing-banner.jpg" width="410" height="800" alt="banner">
        </div>
        <div class="container">
            <div class="bannerWrapper">
                <div class="titleAnimated">Growth Starts<span>Here</span></div>
                <div class="subtxt">Web Designing & Development</div>
                <div class="expertWrapper">
                    <div class="item">
                        <div class="growthWrap">
                            <div class="growthBx">
                                <div class="bxImg">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mobile-banner.webp" width="170" height="95" alt="Banner">
                                </div>
                                <div class="txt">Grow With <span>150+</span> Experts</div>
                            </div>
                            <div class="awardBx">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/award-banner.webp" width="170" height="90" alt="award">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="swiper globalAddressSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="globalAddressBx">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-india.webp"
                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-india.webp" width="270" height="225"
                                            loading="lazy" class="lazy" alt="inter-india">
                                        <!-- <div class="title">Global Offices</div> -->
                                        <div class="headWrap">
                                            <div class="profileWrap">
                                                <div class="bxIcon">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/india-flag.png" width="40" height="40"
                                                        alt="India Flag">
                                                </div>
                                                <div class="name">India</div>
                                            </div>
                                            <div class="txt">Ernakulam, Kerala</div>
                                        </div>
                                        <a href="tel:+919048444322" class="link">
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-call-icon.svg" width="20" height="20"
                                                    alt="Call">
                                            </span>
                                            <span class="txt">
                                                Call Now
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="globalAddressBx">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-uae.webp"
                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-uae.webp" width="270" height="225"
                                            loading="lazy" class="lazy" alt="inter-uae">
                                        <!-- <div class="title">Global Offices</div> -->
                                        <div class="headWrap">
                                            <div class="profileWrap">
                                                <div class="bxIcon">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ft-ad-2.png" width="40" height="40"
                                                        alt="Germany Flag">
                                                </div>
                                                <div class="name">UAE</div>
                                            </div>
                                            <div class="txt">Sheikh Zayed Rd, Dubai</div>
                                        </div>
                                        <a href="tel:+919048444322" class="link">
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-call-icon.svg" width="20" height="20"
                                                    alt="Call">
                                            </span>
                                            <span class="txt">
                                                Call Now
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="globalAddressBx">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-germany.webp"
                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-germany.webp" width="270" height="225"
                                            loading="lazy" class="lazy" alt="inter-germany">
                                        <!-- <div class="title">Global Offices</div> -->
                                        <div class="headWrap">
                                            <div class="profileWrap">
                                                <div class="bxIcon">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ft-ad-3.png" width="40" height="40"
                                                        alt="Germany Flag">
                                                </div>
                                                <div class="name">Germany</div>
                                            </div>
                                            <div class="txt">Königsalle 19, Düsseldorf</div>
                                        </div>
                                        <a href="tel:+919048444322" class="link">
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-call-icon.svg" width="20" height="20"
                                                    alt="Call">
                                            </span>
                                            <span class="txt">
                                                Call Now
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="globalAddressBx">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-maldives.webp"
                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/inter-maldives.webp" width="270" height="225"
                                            loading="lazy" class="lazy" alt="inter-maldives">
                                        <!-- <div class="title">Global Offices</div> -->
                                        <div class="headWrap">
                                            <div class="profileWrap">
                                                <div class="bxIcon">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/maldives-flag.png" width="40" height="40"
                                                        alt="Maldives Flag">
                                                </div>
                                                <div class="name">Maldives</div>
                                            </div>
                                            <div class="txt">Majeedhee Magu, K. Male'</div>
                                        </div>
                                        <a href="tel:+919048444322" class="link">
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-call-icon.svg" width="20" height="20"
                                                    alt="Call">
                                            </span>
                                            <span class="txt">
                                                Call Now
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="banner-swiper-pagination"></div>
                            <div class="banner-swiper-bullets"></div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="reviewBx">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-review-mobile.webp" width="125" height="100" alt="Review">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="Partners">

        <div class="container">

            <div class="tleWrap center">

                <div class="title">We partner with some incredible brands, take a look.</div>

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

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/byd-logo_.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/byd-logo_.png" width="185"

                                            height="100" loading="lazy" class="lazy" alt="Partner-1">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ford-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Ford-logo.png" width="185"

                                            height="100" loading="lazy" class="lazy" alt="Partner-2">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wipro_logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/wipro_logo.png" width="185"

                                            height="100" loading="lazy" class="lazy" alt="Partner-3">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Gems logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Gems logo.png" width="185"

                                            height="100" loading="lazy" class="lazy" alt="Partner-4">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/muthoot-group_11zon1-1.webp" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/muthoot-group_11zon1-1.webp"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-5">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/majid-al-futtaim logo.png"

                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/majid-al-futtaim logo.png" width="185" height="100"

                                            loading="lazy" class="lazy" alt="Partner-6">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pandhal logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Pandhal logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-7">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bharatamatacollege.webp"

                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/bharatamatacollege.webp" width="185" height="100"

                                            loading="lazy" class="lazy" alt="Partner-8">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yokohama-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/yokohama-logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-9">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ufc-gym-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/ufc-gym-logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Spice-Board-of-India logo.png"

                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Spice-Board-of-India logo.png" width="185" height="100"

                                            loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Synthite_logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Synthite_logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/RS-camp-logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/RS-camp-logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/rajagiri-business-school logo.png"

                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/rajagiri-business-school logo.png" width="185" height="100"

                                            loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rajagiri logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rajagiri logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lincon-Logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Lincon-Logo.png" width="185"

                                            height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Synthite_logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Synthite_logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jayalakshmi logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/jayalakshmi logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Indel-Money-Logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/Indel-Money-Logo.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cochin-shipyard logo.png"

                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/cochin-shipyard logo.png" width="185" height="100"

                                            loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dlife logo.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/dlife logo.png" width="185"

                                            height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apollo hospital logo.png"

                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/apollo hospital logo.png" width="185" height="100"

                                            loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/willywhyte.png" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/willywhyte.png"

                                            width="185" height="100" loading="lazy" class="lazy" alt="Partner-10">

                                    </div>

                                </div>

                            </div>

                            <div class="embla__slide">

                                <div class="partnerBx">

                                    <div class="bxImg">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/autobahn trucking logo.png"

                                            data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/autobahn trucking logo.png" width="185" height="100"

                                            loading="lazy" class="lazy" alt="Partner-10">

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
                        <div class="mTle">Our Services
                            <div class="loaderWrap">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
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
                                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/InterSmart-Fin1-1 (1).mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="rgSide">
                        <div class="serviceWrap">
                            <div class="title" id="MainTitle"></div>
                            <div class="swiper serviceThumbSlider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($services as $service): ?>
                                        <div class="swiper-slide">
                                            <div class="ServiceThumbBx">
                                                <!-- <span class="icon">
                                                    <img src="<?php echo get_stylesheet_directory_uri() . '/' . $service['icon']; ?>" width="20" height="20"
                                                        loading="lazy" class="lazy"
                                                        alt="<?php echo htmlspecialchars($service['title']); ?>">
                                                </span> -->
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
                        <div class="mTle">
                            <?php echo isset($case_data['section']['smallTitle']) ? $case_data['section']['smallTitle'] : 'Case Studies'; ?>
                            <div class="loaderWrap">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
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
                                            <div class="title">
                                                <?php echo $case['title']; ?>
                                            </div>
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
                                            <div class="imgB">
                                                <img src="<?php echo get_stylesheet_directory_uri() . '/' . $case['projectIcon']; ?>" alt="">
                                            </div>
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

                    <div class="mTle"><?php echo $whyChoose_data['mainTitle']; ?>

                        <div class="loaderWrap">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>

                    </div>

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

                                        <div class="title"><?php echo $whyChoose_data['testimonial']['title']; ?></div>

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

                                        <div class="title"><?php echo $whyChoose_data['awards']['title']; ?></div>

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

                                        <div class="title"><?php echo $whyChoose_data['technology']['title']; ?></div>

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

                                                    <div class="bxIcon">

                                                        <img src="<?php echo get_stylesheet_directory_uri() . '/' . $tech['icon']; ?>"

                                                            data-src="<?php echo get_stylesheet_directory_uri() . '/' . $tech['icon']; ?>" width="70" height="40"

                                                            loading="lazy" alt="<?php echo $tech['name']; ?>">

                                                    </div>

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

                                        <div class="title"><?php echo $whyChoose_data['whywwedifferent']['title']; ?>

                                        </div>

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

                                        <div class="title"><?php echo $whyChoose_data['industries']['title']; ?></div>

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
                    <div class="mTle">
                        <?php echo isset($advantage_data['sectionTitle']) ? $advantage_data['sectionTitle'] : 'Our Process'; ?>
                        <div class="loaderWrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
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

                            <div class="mTle">Speak to <br> Experts

                                <div class="loaderWrap">

                                    <span></span>

                                    <span></span>

                                    <span></span>

                                </div>

                            </div>

                        </div>

                        <div class="txt">Turning expertise into measurable business growth.</div>

                    </div>

                    <div class="consultantWrapper">

                        <div class="consultantWrap">

                            <a href="#!" class="consultantBx" aria-label="Consultant">

                                <div class="bxImg">

                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ann business development managerr.webp" data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/ann business development managerr.webp" width="230"

                                        height="300" loading="lazy" class="lazy" alt="Conssultant">

                                </div>

                                <div class="bxInfo">

                                    <div class="infoWrap">

                                        <div class="name">Ann Mary</div>

                                        <div class="designation">Business Consultant</div>

                                    </div>

                                    <!-- <div class="icon">

                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shedule-arrow-right.svg" width="15" height="15" alt="Arrow">

                                    </div> -->

                                </div>

                            </a>

                        </div>

                        <div class="supportWrap">
                            <div class="supportBx">
                                <div class="indicator">Online Now</div>
                                <div class="title">Let's get your project started.</div>
                                <div class="txt">In a hurry? Give us a call or chat with us instantly on WhatsApp.
                                </div>
                                <div class="btnWrap">
                                    <div class="item">
                                        <a href="https://wa.me/919048444322?text=Hi, I'd like a free consultation regarding my website."
                                            id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportChat' : 'web-expertSupportChat'); ?>"
                                            class="supportBtn chat"
                                            target="_blank"
                                            rel="noopener noreferrer">

                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp-icon.svg"
                                                    width="25"
                                                    height="25"
                                                    alt="Whatsapp">
                                            </span>

                                            <span class="txt">
                                                Chat Now
                                            </span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="tel:+919048444322"
                                            id="<?php echo ($dataType == 'data-dm' ? 'dm-expertSupportCall' : 'web-expertSupportCall'); ?>"
                                            class="supportBtn call">
                                            <span class="icon">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">
                                            </span>
                                            <span class="txt">
                                                Call Now
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

                        <div class="tle">Speak With Our Experts</div>

                        <div class="formOuter">

                            <?php echo do_shortcode('[wpforms id="8" title="false"]') ?>

                        </div>

                    </div>

                </div>

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

                    <div class="mTle">

                        <?php echo isset($faq_data['title']) ? $faq_data['title'] : 'Frequently<br /> Asked Questions'; ?>

                        <div class="loaderWrap">

                            <span></span>

                            <span></span>

                            <span></span>

                        </div>

                    </div>

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

        <div class="txt desktop">Get Expert Support to Grow Your Business Online </div>
        <div class="txt mobile">Grow Online with Expert Support</div>

        <a href="https://wa.me/919048444322?text=Hi, I'd like a free consultation regarding my website." target="_blank" rel="noopener noreferrer" class="talkExpert" id="<?php echo ($dataType == 'data-dm' ? 'dm-talktoExpert' : 'web-talktoExpert'); ?>">

            <span class="icon">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">

            </span>

            <span class="txt desktop">

                Chat With An Expert

            </span>
            <span class="txt mobile">

                Chat Now

            </span>

        </a>

    </div>



    <!-- WHATSAPP FLOATING WIDGET -->
    <div class="whatsapp-floating-container" id="WhatsappContainer">
        <a href="https://wa.me/919048444322?text=Hi, I'd like a free consultation regarding my website." target="_blank" class="whatsapp-floating-icon" aria-label="Chat on WhatsApp" rel="noopener noreferrer">
            <div class="whatsapp-icon-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L3 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
            </div>
        </a>
    </div>

    <div class="talktoExpertCard">
        <button id="web-getproposal-floating" class="talktoExpertToggle" aria-label="hireUs">
            GET PROPOSAL
        </button>
        <div class="TopStrip">
            <div class="Tag">
                ✦ Let's Talk
            </div>
            <div class="CloseBtn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close-btn.svg" alt="Close">
            </div>
        </div>
        <h3 class="CardTitle">
            Speak With Our Expert
        </h3>
        <div class="ProfileBx">
            <div class="ProfileImg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ann-business-development-manager.webp"
                    data-src="<?php echo get_stylesheet_directory_uri(); ?>/images/ann-business-development-manager.webp" width="230" height="300" loading="lazy"
                    class="lazy" alt="Consultant">
                <div class="infoWrap">
                    <div class="name">Ann Mary</div>
                    <div class="designation">Business Consultant</div>
                </div>
            </div>
            <div class="btnWrap">
                <div class="item">
                    <a href="tel:+919048444322" id="letstalk-callsus" class="supportBtn call">
                        <span class="icon">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call-icon.svg" width="25" height="25" alt="Call">
                        </span>
                        <span class="txt">
                            Call Now
                        </span>
                    </a>
                </div>
                <div class="item">
                    <a href="https://wa.me/919048444322?text=Hi, I'd like a free consultation regarding my website." id="letstalk-whatsapp" target="_blank" class="supportBtn chat" aria-label="Chat on WhatsApp" rel="noopener noreferrer">
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
            <div class="txt">Online Now</div>
        </div>
        <div class="FormSec">
            <div class="FormTitle">Let's get your project started.</div>
            <?php echo do_shortcode('[wpforms id="31" title="false"]') ?>
        </div>
    </div>

</div>








<!-- GSAP -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha384-g4NTh/Iv5PPU4xPyhEWqPcwtNXOvdaDI8LLnyYfyNZOjKJeYQyjzQ9X5275eBjpt" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha384-Z3REaz79l2IaAZqJsSABtTbhjgOUYyV3p90XNnAPCSHg3EMTz1fouunq9WZRtj3d" crossorigin="anonymous"></script>



<!-- SCROLL_MAGIC -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha384-9ysFU+GMF+8dfTnODlHLPeQz4plB4XIashPE7ZLQRHbtGzkjKdvXnJkwJTkBn9G1" crossorigin="anonymous"></script>



<!--EMBLA CAROUSEL-->

<script src="https://cdn.jsdelivr.net/npm/embla-carousel@8.6.0/embla-carousel.umd.min.js" integrity="sha384-KRgOYOf6tcn3k/Ng0fRrsCF3IvJNvLqiB4S3lpqvcmaJGUA/Oy8Ogut+M4oRk10W" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/embla-carousel-autoplay@8.6.0/embla-carousel-autoplay.umd.min.js" integrity="sha384-R2hoYhahxRftdfUa3jowArM0+39i5xaxEDmOua9nuyIaol/UyZdG9AFSwlaYBghl" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/embla-carousel-auto-scroll@8.6.0/embla-carousel-auto-scroll.umd.js" integrity="sha384-5x3y2MLuLA5c1LQceYM+lo59GGkQmLzQGzbuHhDUDbnOJkFeTl5jUSdBy3JehMcM" crossorigin="anonymous"></script>




<!--SWIPER-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11.2.10/swiper-bundle.min.css" integrity="sha384-gAPqlBuTCdtVcYt9ocMOYWrnBZ4XSL6q+4eXqwNycOr4iFczhNKtnYhF3NEXJM51" crossorigin="anonymous" />

<script src="https://cdn.jsdelivr.net/npm/swiper@11.2.10/swiper-bundle.min.js" integrity="sha384-2UI1PfnXFjVMQ7/ZDEF70CR943oH3v6uZrFQGGqJYlvhh4g6z6uVktxYbOlAczav" crossorigin="anonymous" defer></script>



<!-- jquery-ui -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js"

    integrity="sha512-MSOo1aY+3pXCOCdGAYoBZ6YGI0aragoQsg1mKKBHXCYPIWxamwOE7Drh+N5CPgGI5SA9IEKJiPjdfqWFWmZtRA=="

    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<!--FANCY BOX-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1.15/dist/fancybox/fancybox.css" integrity="sha384-oOjnLKEcFZy/fmb/tXEU2ZKyVF+6ZSG3Fq40EWlBMaa7Rsdz+QmhRIUgvXe3el+1" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.1.15/dist/fancybox/fancybox.umd.js" integrity="sha384-ThiZs7+W5OWR8IucGysN8RNoIOwhdPPkElaT26hqa1aeF76S49TRH9F2xZw9mWGp" crossorigin="anonymous"></script>



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

        //COUNTER

        $(document).ready(function() {

            var controller = new ScrollMagic.Controller();

            function initCounterScroll(sectionID, counterSelector) {

                $(sectionID + " " + counterSelector).each(function() {

                    var $this = $(this);

                    var initialValue = parseFloat($this.text()) || 0;

                    $this.data('final-value', initialValue);

                    $this.text('0');

                });

                var scene = new ScrollMagic.Scene({

                        triggerElement: sectionID,

                        triggerHook: 0.9

                    })

                    .setClassToggle(sectionID, 'isVisible')

                    .on("enter", function() {

                        $(sectionID + " " + counterSelector).each(function() {

                            var $this = $(this);

                            var finalVal = $this.data('final-value');

                            $this.stop(true, true).prop('Counter', 0).animate({

                                Counter: finalVal

                            }, {

                                duration: 2000,

                                easing: 'swing',

                                step: function(now) {

                                    var isFloat = finalVal % 1 !== 0;

                                    var displayValue = isFloat ? now.toFixed(1) : Math.round(now);

                                    $this.text(displayValue.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));

                                }

                            });

                        });

                    })

                    .on("leave", function() {

                        $(sectionID + " " + counterSelector).each(function() {

                            var $this = $(this);

                            $this.stop(true, true).text('0');

                        });

                    })

                    .reverse(true)

                    .addTo(controller);

            }

            initCounterScroll('#LandingBanner', '.counterBx .counter .num');

            // initCounterScroll('#CaseStudies', '.caseBx .counter .num');

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
        const fixedNav = document.querySelector('.LandingFixedNavigation');
        const hideSectionIds = [
            '#LandingFooter',
            '#SheduleMeeting',
        ];
        const hideSections = document.querySelectorAll(hideSectionIds.join(','));
        window.addEventListener('scroll', () => {
            const scrollHeight = document.documentElement.scrollHeight;
            const windowHeight = window.innerHeight;
            const scrollY = window.scrollY;
            const threshold = (scrollHeight - windowHeight) * 0.02;
            let hideNav = false;
            hideSections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                if (
                    scrollY + windowHeight > sectionTop &&
                    scrollY < sectionBottom
                ) {
                    hideNav = true;
                }
            });
            if (scrollY >= threshold && !hideNav) {
                fixedNav.classList.add('show');
            } else {
                fixedNav.classList.remove('show');
            }
        });

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
        var globalAddressSlider = new Swiper(".globalAddressSlider", {
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
            window.addEventListener('scroll', handleToggleVisibility);
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
        window.addEventListener('scroll', updateCardPosition);
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


    // counter
    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({
            triggerElement: "#caseStudies",
            triggerHook: 0.7,
        })
        .setClassToggle("#caseStudies", "isVisible")
        .on("enter", function() {
            $("#caseStudies .flexWrap .rltB .brandCard .txtB .num").each(function() {
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
        })
        .reverse(false)
        .addTo(controller);
</script>



<style>
    .grecaptcha-badge {
        display: none !important;
    }
</style>


<?php
get_footer();
?>