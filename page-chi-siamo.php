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

<div class="scroll-container">

<!-- HERO DESKTOP -->
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

<!-- HERO MOBILE -->
<section class="mobile-hero mobile-version">

    <?php if($hero_bg): ?>
        <img src="<?php echo esc_url($hero_bg['url']); ?>" class="mobile-hero__bg">
    <?php endif; ?>

    <div class="mobile-hero__overlay"></div>

    <div class="mobile-hero__content">
        <h1 class="mobile-hero__title"><?php echo esc_html($hero_title); ?></h1>
        <p class="mobile-hero__subtitle"><?php echo esc_html($hero_sub); ?></p>
    </div>

</section>

<!-- SECTION 1 -->
<section class="page-section step-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 step-left">
                <h2 class="step-title"><?php echo esc_html($sec1_title); ?></h2>
                <h2 class="fw-bold"><?php echo esc_html($sec1_subtitle); ?></h2>
                <div class="paragraph"><?php echo wp_kses_post($sec1_paragraph); ?></div>
                <div class="footer-divider bottom">★</div>
            </div>

            <div class="col-lg-6 step-right p-0">
                <?php if($sec1_image): ?>
                    <img src="<?php echo esc_url($sec1_image['url']); ?>" alt="">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 2 -->
<section class="page-section step-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 step-left">
                <h2 class="step-title"><?php echo esc_html($sec2_title); ?></h2>
                <h2 class="fw-bold"><?php echo esc_html($sec2_subtitle); ?></h2>
                <div class="paragraph"><?php echo wp_kses_post($sec2_paragraph); ?></div>
                <div class="footer-divider bottom">★</div>
            </div>

            <div class="col-lg-6 step-right p-0">
                <?php if($sec2_image): ?>
                    <img src="<?php echo esc_url($sec2_image['url']); ?>" alt="">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- SECTION 3 -->
<section class="page-section step-section">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 step-left">
                <h2 class="step-title"><?php echo esc_html($sec3_title); ?></h2>
                <h2 class="fw-bold"><?php echo esc_html($sec3_subtitle); ?></h2>
                <div class="paragraph"><?php echo wp_kses_post($sec3_paragraph); ?></div>
                <div class="footer-divider bottom">★</div>
            </div>

            <div class="col-lg-6 step-right p-0">
                <?php if($sec3_image): ?>
                    <img src="<?php echo esc_url($sec3_image['url']); ?>" alt="">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
    <?php get_template_part('template-parts/footer-vertical'); ?>
</div>

<?php get_footer(); ?>
