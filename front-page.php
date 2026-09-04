<?php
/* Template Name: Home */
get_header();
?>
<div class="page-wrapper">
    <?php get_template_part('template-parts/header-template'); ?>
    <?php 
    $slides = [];
    for ($i = 1; $i <= 3; $i++) {
        $img = get_field("home_slide_{$i}_image");
        if ($img){
            $slides[] = $img;
        }
    }
    ?>
    <div class="swiper mainSwiper">
        <div class="swiper-wrapper">
                        <!-- MOBILE HERO — SOLO SU MOBILE -->
            <?php if (wp_is_mobile()) : ?>
                <div class="swiper-slide">
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

                            <div class="mobile-hero__overlay"></div>
                            <div class="mobile-carousel__content">
                                <h1 class="mobile-carousel__title"><?php the_field('home_hero_title'); ?></h1>
                                <p  class="mobile-carousel__subtitle"><?php the_field('home_hero_subtitle'); ?></p>
                                <div class="star mobile-version mt-auto">★</div>
                            </div>
                        </section>
                </div>

                <div class="swiper-slide">

                    <section class="home-section">
                                <img class="section-bg-img" src="<?php echo  get_field('home_second_section_image')['url']; ?>" alt="">
                                <div class="mobile-hero__overlay"></div>
                            <div class="section-intro">
                                <h2 class="section-title s48"><?php the_field('home_second_title'); ?></h2>
                                <div class="section-paragraph fs-20"><?php echo get_field('home_second_paragraph'); ?></div>

                            </div>
                    </section>

                </div>

            <div class="swiper-slide">

                <section class="process-section">
                        <img class="section-bg-img" src="<?php echo  get_field('home_second_section_image')['url']; ?>" alt="">
                        <div class="mobile-hero__overlay"></div>
                        <div class="process-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/curva-mobile.svg" alt="curve" />

                            <div class="process-step">
                                <a href="/euro-bevande/servizi#servizio1" class="service">
                                <div class="index-number">01</div>
                                <div class="index-text">
                                    <h3>Analisi & Menu Design</h3>
                                </div>
                                </a>
                            </div>

                            <div class="process-step shift-left">
                                <a href="/euro-bevande/servizi#servizio2" class="service">
                                    <div class="index-number">02</div>
                                    <div class="index-text">
                                        <h3>Formazione & Tasting</h3>
                                    </div>
                                </a>
                            </div>

                            <div class="process-step shift-left">
                                <a href="/euro-bevande/servizi#servizio3" class="service">
                                    <div class="index-number">03</div>
                                    <div class="index-text">
                                        <h3>Setup & Attrezzature</h3>
                                    </div>
                                </a>
                            </div>

                            <div class="process-step">
                                <a href="/euro-bevande/servizi#servizio4" class="service">
                                    <div class="index-number">04</div>
                                    <div class="index-text">
                                        <h3>Evoluzione & Partnership</h3>
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="star">★</div> -->
                    </div>

                </section>

            </div>

            <div class="swiper-slide">

                <section class="home-section">
                    
                    <img class="section-bg-img" src="<?php echo  get_field('home_third_section_image')['url']; ?>" alt="">
                    <div class="mobile-hero__overlay"></div>

                    <div class="section-intro">
                        <h2 class="section-title"><?php the_field('home_third_title'); ?></h2>
                        <div class="section-paragraph"><?php echo get_field('home_third_paragraph'); ?></div>
                                            <div class="star">★</div>

                    </div>

                </section>

            </div>

            <div class="swiper-slide">

                <section class="home-section">
                    
                    <img class="section-bg-img" src="<?php echo  get_field('home_fourth_section_image')['url']; ?>" alt="">
                <div class="mobile-hero__overlay"></div>

                    <div class="section-intro">
                        <h2 class="section-title"><?php the_field('home_fourth_title'); ?></h2>
                        <div class="section-paragraph"><?php echo get_field('home_fourth_paragraph'); ?></div>
                                            <div class="star">★</div>

                    </div>

                </section>

            </div>
            <?php endif; ?>

            <?php if (!wp_is_mobile()) : ?>
                <div class="swiper-slide">
                    <section class="page-section hero-section">

                        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
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
                </div>
                <div class="swiper-slide">
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
                            <h1><?php the_field('home_second_title'); ?></h1>
                            <div class="paragraph pt-3"><?php echo get_field('home_second_paragraph'); ?></div>
                            <div class="star pt-3">★</div>
                        </div>

                        <!-- <div> -->
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
                                <img src="<?php echo get_template_directory_uri(); ?>/img/curva.svg" alt="curve" />
                            </div> 
                        <!-- </div> -->

                    </section>
                </div>
            <?php endif; ?>

            <?php get_template_part('template-parts/footer-vertical'); ?>
        </div>

                    <!-- DOTS CUSTOM -->
        <div class="side-dots">
            <div class="dot" data-index="0"></div>
            <div class="dot" data-index="1"></div>
            <div class="dot" data-index="2"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
