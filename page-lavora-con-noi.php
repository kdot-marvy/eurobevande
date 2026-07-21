<?php
/* Template Name: Lavora con noi */
get_header();

// HERO
$hero_img = get_field('careers_hero_image');
$hero_title = get_field('careers_hero_title');
$hero_paragraph = get_field('careers_hero_paragraph');
$hero_phone = get_field('careers_phone');
$hero_mail = get_field('careers_email');
$hero_fax = get_field('careers_fax');

// POSIZIONI APERTE
$positions_title = get_field('careers_positions_title');
$positions_subtitle = get_field('careers_positions_subtitle');
$positions_paragraph = get_field('careers_positions_paragraph');
$positions_img = get_field('careers_positions_image');

// FORM
$form_title = get_field('careers_form_title');
$form_description = get_field('careers_form_description');
$form_img = get_field('careers_form_image');
?>

<div class="page-wrapper">
    <?php get_template_part('template-parts/header-template'); ?>

    <div class="swiper mainSwiper">
        <div class="swiper-wrapper">

            <!-- HERO DESKTOP -->
            <?php if (!wp_is_mobile()) : ?>
            <div class="swiper-slide">
                <section class="page-section hero-section desktop-version">

                    <?php if ($hero_img): ?>
                        <img src="<?php echo esc_url($hero_img['url']); ?>" alt="" class="fullscreen-cover">
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
                            <div class="paragraph mt-3"><?php echo wp_kses_post($hero_paragraph); ?></div>
                        </div>
                    </div>

                </section>
            </div>
            <?php endif; ?>

            <!-- HERO MOBILE -->
            <?php if (wp_is_mobile()) : ?>
            <div class="swiper-slide">
                <section class="mobile-hero mobile-version">

                    <?php if ($hero_img): ?>
                        <img src="<?php echo esc_url($hero_img['url']); ?>" alt="" class="mobile-hero__bg">
                    <?php endif; ?>

                    <div class="mobile-hero__content">
                        <div class="mobile-hero__overlay"></div>
                        <h1 class="mobile-hero__title s48"><?php echo esc_html($hero_title); ?></h1>
                        <div class="mobile-hero__subtitle"><?php echo wp_kses_post($hero_paragraph); ?></div>
                    </div>

                </section>
            </div>
            <?php endif; ?>

            <!-- POSIZIONI APERTE -->
            <div class="swiper-slide">
                <section class="page-section step-section">
                    <div class="container-fluid h-100">
                        <div class="row h-100">

                            <div class="col-lg-6 step-left">
                                <h2 class="step-title pb-0"><?php echo esc_html($positions_title); ?></h2>
                                <p class="subtitle"><?php echo esc_html($positions_subtitle); ?></p>
                                <div class="paragraph">
                                    <?php echo wp_kses_post($positions_paragraph); ?>
                                </div>
                            </div>

                            <div class="col-lg-6 step-right p-0">
                                <?php if ($positions_img): ?>
                                    <img src="<?php echo esc_url($positions_img['url']); ?>" alt="">
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

            <!-- FORM CANDIDATURA -->
            <div class="swiper-slide">
                <section class="page-section candidatura-section">
                    <div class="container-fluid h-100">
                        <div class="row h-100">

                            <div class="col-lg-6 step-left">

                                <h2 class="step-title"><?php echo esc_html($form_title); ?></h2>

                                <div class="paragraph">
                                    <?php echo wp_kses_post($form_description); ?>
                                </div>

                                <?php if (isset($_GET['candidatura']) && $_GET['candidatura'] === 'ok'): ?>
                                    <script>alert("Grazie! La tua candidatura è stata inviata correttamente.");</script>
                                <?php endif; ?>

                                <form id="candidaturaForm"
                                      action="<?php echo admin_url('admin-post.php'); ?>"
                                      method="post"
                                      enctype="multipart/form-data">

                                    <input type="hidden" name="action" value="invia_candidatura">

                                    <div class="mb-3">
                                        <label>Nome e Cognome</label>
                                        <input type="text" name="nome" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Posizione desiderata</label>
                                        <input type="text" name="posizione" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Carica il tuo CV (PDF)</label>
                                        <input type="file" name="cv" class="form-control" accept="application/pdf" required>
                                    </div>

                                    <div class="mb-3">
                                        <label>Messaggio</label>
                                        <textarea name="messaggio" class="form-control" rows="5"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Invia candidatura</button>

                                </form>

                            </div>

                            <div class="col-lg-6 step-right p-0">
                                <?php if ($form_img): ?>
                                    <img src="<?php echo esc_url($form_img['url']); ?>" alt="" class="img-fluid">
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
