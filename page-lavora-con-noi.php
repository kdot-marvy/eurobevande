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


$open_positions = get_field('open_positions');
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

                    <div class="hero-center">
                        <div class="text-section hero-text-bg">
                            <div class="hero-text text-white">
                                <h1><?php echo esc_html($hero_title); ?></h1>
                                <div class="paragraph"><?php echo wp_kses_post($hero_paragraph); ?></div>
                                <div class="star">★</div>
                            </div>
                            <img class="hero-bg-svg" src="<?php echo get_template_directory_uri(); ?>/img/sfumatura.svg" alt="curve" />
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
                        <h1 class="mobile-hero__title fs-42"><?php echo esc_html($hero_title); ?></h1>
                        <div class="mobile-hero__subtitle"><?php echo wp_kses_post($hero_paragraph); ?></div>
                        <div class="star mobile-version">★</div>
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
                                <h2 class="step-title mt-auto"><?php echo esc_html($positions_title); ?></h2>
                                <p class="subtitle"><?php echo esc_html($positions_subtitle); ?></p>
                                <div class="paragraph">
                                    <?php echo wp_kses_post($positions_paragraph); ?>
                                </div>
                                <?php 
                                if (!empty($open_positions)) : 
                                    foreach ($open_positions as $row) :

                                        $title = g10der_get_sub_field($row, 'position_title');
                                        $desc  = g10der_get_sub_field($row, 'position_desc');
                                ?>
                                        <div class="item">

                                            <?php if ($title) : ?>
                                                <h3><?php echo esc_html($title); ?></h3>
                                            <?php endif; ?>

                                            <?php if ($desc) : ?>
                                                <p><?php echo esc_html($desc); ?></p>
                                            <?php endif; ?>

                                        </div>
                                <?php
                                    endforeach;
                                endif;
                                ?>
                                <div class="star mobile-version">★</div>
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

            <!-- POSIZIONI APERTE 2-->
            <div class="swiper-slide">
                <section class="page-section step-section">
                    <div class="container-fluid h-100">
                        <div class="row h-100">

                            <div class="col-lg-6 step-left">
                                <h2 class="step-title mt-auto"><?php echo esc_html($positions_title); ?></h2>
                                <p class="subtitle"><?php echo esc_html($positions_subtitle); ?></p>
                                <div class="paragraph">
                                    <?php echo wp_kses_post($positions_paragraph); ?>
                                </div>
                                <div class="star mobile-version">★</div>
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

            <!-- CANDIDATURA SECTION-->
            <div class="swiper-slide">
                <section class="page-section candidatura-section">
                    <div class="container-fluid h-100">
                        <div class="row h-100">

                            <div class="col-lg-6 step-left">

                                <h2 class="step-title mt-auto"><?php echo esc_html($form_title); ?></h2>

                                <div class="paragraph">
                                    <?php echo wp_kses_post($form_description); ?>
                                </div>
                                <div class="star mobile-version">★</div>
                                <?php if (isset($_GET['candidatura']) && $_GET['candidatura'] === 'ok'): ?>
                                    <script>alert("Grazie! La tua candidatura è stata inviata correttamente.");</script>
                                <?php endif; ?>
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

            <!-- FORM CANDIDATURA -->
            <div class="swiper-slide">
                <section class="page-section candidatura-section" id="candidati">
                    <div class="container-fluid h-100">
                        <div class="row h-100">

                            <div class="col-lg-6 step-left">

                                <form class="mt-auto" id="candidaturaForm"
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
                                        <select name="posizione" class="form-control" required>
                                            <option value="">Seleziona una posizione</option>

                                            <?php 
                                            $rows = get_field('posizioni_disponibili_elenco', 'option'); // or post ID if stored elsewhere

                                            if ($open_positions) {
                                                foreach ($open_positions as $row) {
                                                    $pos = g10der_get_sub_field($row, 'position_title');
                                                    ?>
                                                    <option value="<?php echo esc_attr($pos); ?>">
                                                        <?php echo esc_html($pos); ?>
                                                    </option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <option value="other">Altro…</option>
                                        </select>
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
                                <div class="star mobile-version">★</div>

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

            <?php get_template_part('template-parts/footer-vertical'); ?>

        </div>
                            <!-- DOTS CUSTOM -->
        <div class="side-dots">
            <div class="dot" data-index="0"></div>
            <div class="dot" data-index="1"></div>
            <div class="dot" data-index="2"></div>
            <div class="dot" data-index="3"></div>
            <div class="dot" data-index="4"></div>
            <div class="dot" data-index="5"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
