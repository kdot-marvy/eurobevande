<?php
/* Template Name: Home */
get_header();
?>

<!-- SCROLL SNAP WRAPPER -->
<div class="scroll-container desktop-version">

    <!-- SECTION 1 — HERO -->
    <section class="page-section hero-section">

        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php 
                $slides = [];
                for ($i = 1; $i <= 3; $i++) {
                    $img = get_field("home_slide_{$i}_image");
                    if ($img){
                         $slides[] = $img;
                    }
                }
                ?>

                <?php if (!empty($slides)): ?>
                    <?php foreach ($slides as $index => $img): ?>
                        <div class="carousel-item hero-slide <?php echo $index === 0 ? 'active' : ''; ?>"
                             style="background-image: url('<?php echo $img['url']; ?>');">
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="hero-overlay"></div>

        <div class="container-fluid px-4">
            <div class="hero-contacts text-white">
                <div>Telefono: <?php the_field('home_phone'); ?></div>
                <div>Mail: <?php the_field('home_email'); ?></div>
                <div>Fax: <?php the_field('home_fax'); ?></div>
            </div>
        </div>

        <div class="carousel-text text-white">
            <h1 class="fw-bold"><?php the_field('home_hero_title'); ?></h1>
            <p><?php the_field('home_hero_subtitle'); ?></p>
        </div>

    </section>

    <!-- SECTION 2 — SERVIZI -->
    <section class="page-section hero-section">

        <?php 
        $second_img = get_field('home_second_section_image');
        if ($second_img) : ?>
            <img src="<?php echo $second_img['url']; ?>" alt="Hero background" class="fullscreen-cover">
        <?php endif; ?>

        <div class="container-fluid px-4">
            <div class="hero-contacts text-white">
                <div><?php the_field('home_second_section_label'); ?></div>
            </div>
        </div>

        <div class="hero-overlay"></div>

        <div class="index-hero-text text-white">
            <h1 class="fw-bold"><?php the_field('home_second_title'); ?></h1>
            <div class="paragraph"><?php echo get_field('home_second_paragraph'); ?></div>
        </div>

        <div class="footer-divider">★</div>

        <div class="container-fluid hero-services">

            <a href="/euro-bevande/servizi#servizio1" class="service mt-auto">
                <span class="number">01</span>
                <span class="label">Analisi & Menu Design</span>
            </a>

            <a href="/servizi#servizio2" class="service mt-0">
                <span class="number">02</span>
                <span class="label">Formazione & Tasting</span>
            </a>

            <a href="/servizi#servizio3" class="service mt-0">
                <span class="number">03</span>
                <span class="label">Setup & Attrezzature</span>
            </a>

            <a href="/servizi#servizio4" class="service mt-auto">
                <span class="number">04</span>
                <span class="label">Evoluzione & Partnership</span>
            </a>

        </div>

        <div class="container-fluid hero-services-curve">
            <svg viewBox="0 0 1000 100" preserveAspectRatio="xMidYMid meet">
                <path id="curvePath"
                    d="M20 95 Q500 15 980 85"
                    stroke="white"
                    stroke-width="2"
                    fill="none"
                    opacity="0.9" />
                <circle cx="60" cy="88" r="4" fill="white" />
                <circle cx="340" cy="58" r="4" fill="white" />
                <circle cx="630" cy="54" r="4" fill="white" />
                <circle cx="930" cy="78" r="4" fill="white" />
            </svg>
        </div>

    </section>

    <!-- SECTION 3 — FOOTER VERTICALE -->
    <?php get_template_part('template-parts/footer-vertical'); ?>

</div>



<!-- MOBILE VERSION -->
<div class="mobile-version">

    <section class="mobile-hero mobile-version hero-carousel-55">

        <div id="heroCarouselMobile" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php if (!empty($slides)): ?>
                    <?php foreach ($slides as $index => $img): ?>
                        <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                            <img src="<?php echo $img['url']; ?>" class="mobile-hero__bg" alt="">
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>


        <div class="mobile-hero__content">
            <div class="mobile-hero__overlay"></div>
            <h1 class="mobile-hero__title"><?php the_field('home_hero_title'); ?></h1>
            <p class="mobile-hero__subtitle"><?php the_field('home_hero_subtitle'); ?></p>
        </div>

    </section>


    <section class="process-section">
        <div class="process-intro">
        <h2><?php the_field('home_second_title'); ?></h2>
        <div><?php echo get_field('home_second_paragraph'); ?></div>
    </div>
    <div class="process-wrapper">

        <!-- CURVA LUNGA VERTICALE -->
	<svg class="long-curve" viewBox="0 0 100 450" preserveAspectRatio="xMidYMid meet">
  <path d="M5 20 
           C100 100, 100 320, 5 430"
        stroke="#145fAA"
        stroke-width="3"
        fill="none" />

  <circle cx="25" cy="40" r="6" fill="#145fAA" />
  <circle cx="70" cy="145" r="6" fill="#145fAA" />
  <circle cx="73" cy="270" r="6" fill="#145fAA" />
  <circle cx="30" cy="395" r="6" fill="#145fAA" />
</svg>
        <div class="process-step">
            <a href="/euro-bevande/servizi#servizio1" class="service">
                <div class="step-number">01</div>
                <div class="step-text">
                    <h3>Analisi & Menu Design</h3>
                </div>
            </a>
        </div>

        <div class="process-step shift-left">
            <a href="/euro-bevande/servizi#servizio2" class="service">
                <div class="step-number">02</div>
                <div class="step-text">
                    <h3>Formazione & Tasting</h3>
                </div>
            </a>
        </div>

        <div class="process-step shift-left">
            <a href="/euro-bevande/servizi#servizio3" class="service">
                <div class="step-number">03</div>
                <div class="step-text">
                    <h3>Setup & Attrezzature</h3>
                </div>
            </a>
        </div>

        <div class="process-step">
            <a href="/euro-bevande/servizi#servizio4" class="service">
                <div class="step-number">04</div>
                <div class="step-text">
                    <h3>Evoluzione & Partnership</h3>
                </div>
            </a>
        </div>

    </div>
    </section>

        <?php get_template_part('template-parts/footer-vertical'); ?>


</div>

<?php get_footer(); ?>
