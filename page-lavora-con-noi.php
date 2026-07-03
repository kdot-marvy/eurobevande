<?php
/* Template Name: Lavora con noi */
get_header();
?>

<div class="scroll-container">

    <!-- SECTION 1 — HERO DESKTOP -->
    <section class="page-section hero-section desktop-version">

        <?php 
        $hero_img = get_field('careers_hero_image');
        if ($hero_img): ?>
            <img src="<?php echo $hero_img['url']; ?>" alt="Hero background" class="fullscreen-cover">
        <?php endif; ?>

        <div class="container-fluid px-4">
            <div class="hero-contacts text-white">
                <div>Telefono: <?php the_field('careers_phone'); ?></div>
                <div>Mail: <?php the_field('careers_email'); ?></div>
                <div>Fax: <?php the_field('careers_fax'); ?></div>
            </div>
        </div>

        <div class="hero-overlay"></div>

        <div class="hero-center">
            <div class="hero-text text-white">
                <h1 class="fw-bold"><?php the_field('careers_hero_title'); ?></h1>
                <div class="paragraph mt-3"><?php the_field('careers_hero_paragraph'); ?></div>
            </div>
        </div>

    </section>

    <!-- SECTION 1 — HERO MOBILE -->
    <section class="mobile-hero mobile-version">

        <?php if ($hero_img): ?>
            <img src="<?php echo $hero_img['url']; ?>" alt="Hero background" class="mobile-hero__bg">
        <?php endif; ?>


        <div class="mobile-hero__content">
            <div class="mobile-hero__overlay"></div>
            <h1 class="mobile-hero__title"><?php the_field('careers_hero_title'); ?></h1>
            <div class="mobile-hero__subtitle"><?php the_field('careers_hero_paragraph'); ?></div>
        </div>

    </section>

    <!-- SECTION 2 — POSIZIONI APERTE -->
    <section class="page-section step-section">
        <div class="container-fluid">
            <div class="row">

                <!-- LEFT -->
                <div class="col-lg-6 step-left">
                    <h2 class="step-title pb-0"><?php the_field('careers_positions_title'); ?></h2>
                    <p class="subtitle"><?php the_field('careers_positions_subtitle'); ?></p>
                    <div class="paragraph">
                        <?php echo get_field('careers_positions_paragraph'); ?>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-lg-6 step-right p-0">
                    <?php 
                    $positions_img = get_field('careers_positions_image');
                    if ($positions_img): ?>
                        <img src="<?php echo $positions_img['url']; ?>" alt="">
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>
<section class="page-section candidatura-section">
    <div class="container-fluid">
        <div class="row">

            <!-- LEFT -->
            <div class="col-lg-6 step-left">

                <h2 class="step-title">
                    <?php the_field('careers_form_title'); ?>
                </h2>

                <div class="paragraph">
                    <?php echo get_field('careers_form_description'); ?>
                </div>


                <?php if (isset($_GET['candidatura']) && $_GET['candidatura'] === 'ok'): ?>
                    <script>
                        alert("Grazie! La tua candidatura è stata inviata correttamente.");
                    </script>
                <?php endif; ?>

                <!-- FORM -->
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

            <!-- RIGHT (IMMAGINE) -->
            <div class="col-lg-6 step-right p-0">
                <?php 
                $form_img = get_field('careers_form_image'); // <-- nuovo campo ACF
                if ($form_img): ?>
                    <img src="<?php echo $form_img['url']; ?>" alt="" class="img-fluid">
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>




    <!-- FOOTER VERTICALE -->
    <?php get_template_part('template-parts/footer-vertical'); ?>

</div>

<?php get_footer(); ?>
