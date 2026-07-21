<?php
/* Template Name: Chi Siamo */

get_header();

// HERO
$hero_bg      = get_field('chi_siamo_hero_image');
$hero_title   = get_field('chi_siamo_hero_title');
$hero_sub     = get_field('chi_siamo_hero_paragraph');
$hero_phone   = get_field('chi_siamo_phone');
$hero_mail    = get_field('chi_siamo_email');
$hero_fax     = get_field('chi_siamo_fax');

// SECTION 1
$sec1_title      = get_field('chi_siamo_section1_title');
$sec1_subtitle   = get_field('chi_siamo_section1_subtitle');
$sec1_paragraph  = get_field('chi_siamo_section1_paragraph');
$sec1_image      = get_field('chi_siamo_section1_image');

// SECTION 2
$sec2_title      = get_field('chi_siamo_section2_title');
$sec2_subtitle   = get_field('chi_siamo_section2_subtitle');
$sec2_paragraph  = get_field('chi_siamo_section2_paragraph');
$sec2_image      = get_field('chi_siamo_section2_image');

// SECTION 3
$sec3_title      = get_field('chi_siamo_section3_title');
$sec3_subtitle   = get_field('chi_siamo_section3_subtitle');
$sec3_paragraph  = get_field('chi_siamo_section3_paragraph');
$sec3_image      = get_field('chi_siamo_section3_image');
?>

<div class="page-wrapper">
    <?php get_template_part('template-parts/header-template'); ?>

    <div class="swiper mainSwiper">
        <div class="swiper-wrapper">

            <!-- HERO DESKTOP -->
            <?php if (!wp_is_mobile()) : ?>
            <div class="swiper-slide">
                <section class="page-section hero-section desktop-version">

                    <?php if($hero_bg): ?>
                        <img src="<?php echo esc_url($hero_bg['url']); ?>" class="fullscreen-cover">
                    <?php endif; ?>

                    <div class="container-fluid px-4">
                        <div class="hero-contacts text-white">
                            <?php if($hero_phone): ?><div>Telefono: <?php echo esc_html($hero_phone); ?></div><?php endif; ?>
                            <?php if($hero_mail): ?><div>Mail: <?php echo esc_html($hero_mail); ?></div><?php endif; ?>
                            <?php if($hero_fax): ?><div>Fax: <?php echo esc_html($hero_fax); ?></div><?php endif; ?>
                        </div>
                    </div>

                    <div class="hero-overlay"></div>

                    <div class="hero-center">
                        <div class="hero-text text-white">
                            <h1 class="fw-bold"><?php echo esc_html($hero_title); ?></h1>
                            <div class="paragraph mt-3"><?php echo wp_kses_post($hero_sub); ?></div>
                        </div>
                    </div>

                </section>
            </div>
            <?php endif; ?>

            <!-- HERO MOBILE -->
            <?php if (wp_is_mobile()) : ?>
            <div class="swiper-slide">
                <section class="mobile-hero mobile-version">

                    <?php if($hero_bg): ?>
                        <img src="<?php echo esc_url($hero_bg['url']); ?>" class="mobile-hero__bg">
                    <?php endif; ?>

                    <div class="mobile-hero__content">
                        <div class="mobile-hero__overlay"></div>
                        <h1 class="mobile-hero__title s48"><?php echo esc_html($hero_title); ?></h1>
                        <div class="mobile-hero__subtitle"><?php echo wp_kses_post($hero_sub); ?></div>
                    </div>

                </section>
            </div>
            <?php endif; ?>

            <!-- SECTION 1 -->
            <div class="swiper-slide">
                <section class="page-section step-section">
                    <div class="container-fluid h-100">
                        <div class="row h-100">

                            <div class="col-lg-6 step-left">
                                <h2 class="step-title"><?php echo esc_html($sec1_title); ?></h2>
                                <h2 class="fw-bold"><?php echo esc_html($sec1_subtitle); ?></h2>
                                <div class="paragraph"><?php echo wp_kses_post($sec1_paragraph); ?></div>
                                <div class="star">★</div>
                            </div>

                            <div class="col-lg-6 step-right p-0">
                                <?php if($sec1_image): ?>
                                    <img src="<?php echo esc_url($sec1_image['url']); ?>" alt="">
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- SECTION 2 -->
            <div class="swiper-slide">
                <section class="page-section step-section">
                    <div class="container-fluid h-100">
                        <div class="row h-100">

                            <div class="col-lg-6 step-left">
                                <h2 class="step-title"><?php echo esc_html($sec2_title); ?></h2>
                                <h2 class="fw-bold"><?php echo esc_html($sec2_subtitle); ?></h2>
                                <div class="paragraph"><?php echo wp_kses_post($sec2_paragraph); ?></div>
                                <div class="star">★</div>
                            </div>

                            <div class="col-lg-6 step-right p-0">
                                <?php if($sec2_image): ?>
                                    <img src="<?php echo esc_url($sec2_image['url']); ?>" alt="">
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- SECTION 3 -->
            <div class="swiper-slide">
                <section class="page-section step-section">
                    <div class="container-fluid h-100">
                        <div class="row h-100">

                            <div class="col-lg-6 step-left">
                                <h2 class="step-title"><?php echo esc_html($sec3_title); ?></h2>
                                <h2 class="fw-bold"><?php echo esc_html($sec3_subtitle); ?></h2>
                                <div class="paragraph"><?php echo wp_kses_post($sec3_paragraph); ?></div>
                                <div class="star">★</div>
                            </div>

                            <div class="col-lg-6 step-right p-0">
                                <?php if($sec3_image): ?>
                                    <img src="<?php echo esc_url($sec3_image['url']); ?>" alt="">
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- FOOTER -->
            <div class="swiper-slide">
                <?php get_template_part('template-parts/footer-vertical'); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
