<?php
/* Template Name: Prodotti */

get_header();

// HERO
$hero_bg      = get_field('prodotti_hero_image');
$hero_title   = get_field('prodotti_hero_title');
$hero_sub     = get_field('prodotti_hero_paragraph');
$hero_phone   = get_field('prodotti_phone');
$hero_mail    = get_field('prodotti_email');
$hero_fax     = get_field('prodotti_fax');

// BIRRA
$birra_title      = get_field('prodotti_birra_title');
$birra_subtitle   = get_field('prodotti_birra_subtitle');
$birra_paragraph  = get_field('prodotti_birra_paragraph');
$birra_image      = get_field('prodotti_birra_image');
$birra_pdf        = get_field('prodotti_birra_pdf') ?: ''; // SAFE

// ANALCOLICI
$anal_title      = get_field('prodotti_analcolici_title');
$anal_subtitle   = get_field('prodotti_analcolici_subtitle');
$anal_paragraph  = get_field('prodotti_analcolici_paragraph');
$anal_image      = get_field('prodotti_analcolici_image');
$anal_pdf        = get_field('prodotti_analcolici_pdf') ?: ''; // SAFE

// SPIRITI
$spir_title      = get_field('prodotti_spiriti_title');
$spir_subtitle   = get_field('prodotti_spiriti_subtitle');
$spir_paragraph  = get_field('prodotti_spiriti_paragraph');
$spir_image      = get_field('prodotti_spiriti_image');
$spir_pdf        = get_field('prodotti_spiriti_pdf') ?: ''; // SAFE

// VINO
$vino_title      = get_field('prodotti_vino_title');
$vino_subtitle   = get_field('prodotti_vino_subtitle');
$vino_paragraph  = get_field('prodotti_vino_paragraph');
$vino_image      = get_field('prodotti_vino_image');
$vino_pdf        = get_field('prodotti_vino_pdf') ?: ''; // SAFE
?>

<div class="scroll-container">

<!-- HERO DESKTOP -->
<section class="page-section hero-section desktop-version">

    <?php if(!empty($hero_bg)): ?>
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
            <div class="paragraph"><?php echo wp_kses_post($hero_sub); ?></div>
        </div>
    </div>

</section>

<!-- HERO MOBILE -->
<section class="mobile-hero mobile-version">

    <?php if(!empty($hero_bg)): ?>
        <img src="<?php echo esc_url($hero_bg['url']); ?>" class="mobile-hero__bg">
    <?php endif; ?>


    <div class="mobile-hero__content">
          <div class="mobile-hero__overlay"></div>

        <h1 class="mobile-hero__title"><?php echo esc_html($hero_title); ?></h1>
        <div class="mobile-hero__subtitle"><?php echo wp_kses_post($hero_sub); ?></div>
    </div>

</section>

<!-- BIRRA -->
<section class="page-section step-section" id="birra">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 step-left">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="step-title"><?php echo esc_html($birra_title); ?></h2>

                    <?php if(!empty($birra_pdf)): ?>
                        <a href="<?php echo esc_url($birra_pdf); ?>" target="_blank" class="product-pdf-link">
                            vai alle nostre birre
                        </a>
                    <?php endif; ?>
                </div>

                <h2 class="fw-bold"><?php echo esc_html($birra_subtitle); ?></h2>
                <div class="paragraph"><?php echo wp_kses_post($birra_paragraph); ?></div>
                <div class="footer-divider bottom">★</div>
            </div>

            <div class="col-lg-6 step-right p-0">
                <?php if(!empty($birra_image)): ?>
                    <img src="<?php echo esc_url($birra_image['url']); ?>" alt="">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- ANALCOLICI -->
<section class="page-section step-section" id="analcolici">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 step-left">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="step-title"><?php echo esc_html($anal_title); ?></h2>

                    <?php if(!empty($anal_pdf)): ?>
                        <a href="<?php echo esc_url($anal_pdf); ?>" target="_blank" class="product-pdf-link">
                            vai agli analcolici
                        </a>
                    <?php endif; ?>
                </div>

                <h2 class="fw-bold"><?php echo esc_html($anal_subtitle); ?></h2>
                <div class="paragraph"><?php echo wp_kses_post($anal_paragraph); ?></div>
                <div class="footer-divider bottom">★</div>
            </div>

            <div class="col-lg-6 step-right p-0">
                <?php if(!empty($anal_image)): ?>
                    <img src="<?php echo esc_url($anal_image['url']); ?>" alt="">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- SPIRITI -->
<section class="page-section step-section" id="spiriti">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 step-left">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="step-title"><?php echo esc_html($spir_title); ?></h2>

                    <?php if(!empty($spir_pdf)): ?>
                        <a href="<?php echo esc_url($spir_pdf); ?>" target="_blank" class="product-pdf-link">
                            vai ai nostri spiriti
                        </a>
                    <?php endif; ?>
                </div>

                <h2 class="fw-bold"><?php echo esc_html($spir_subtitle); ?></h2>
                <div class="paragraph"><?php echo wp_kses_post($spir_paragraph); ?></div>
                <div class="footer-divider bottom">★</div>
            </div>

            <div class="col-lg-6 step-right p-0">
                <?php if(!empty($spir_image)): ?>
                    <img src="<?php echo esc_url($spir_image['url']); ?>" alt="">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<!-- VINO -->
<section class="page-section step-section" id="vino">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 step-left">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="step-title"><?php echo esc_html($vino_title); ?></h2>

                    <?php if(!empty($vino_pdf)): ?>
                        <a href="<?php echo esc_url($vino_pdf); ?>" target="_blank" class="product-pdf-link">
                            vai ai nostri vini
                        </a>
                    <?php endif; ?>
                </div>

                <h2 class="fw-bold"><?php echo esc_html($vino_subtitle); ?></h2>
                <div class="paragraph"><?php echo wp_kses_post($vino_paragraph); ?></div>
                <div class="footer-divider bottom">★</div>
            </div>

            <div class="col-lg-6 step-right p-0">
                <?php if(!empty($vino_image)): ?>
                    <img src="<?php echo esc_url($vino_image['url']); ?>" alt="">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>
    <?php get_template_part('template-parts/footer-vertical'); ?>

</div>

<?php get_footer(); ?>
