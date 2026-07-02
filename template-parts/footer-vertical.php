<?php 
$footer_page = get_page_by_path('impostazioni-footer');
$footer_id = $footer_page ? $footer_page->ID : 0;
?>

<section class="page-section footer-section">
    <div class="eb-footer-section">

        <footer class="eb-footer container">

            <!-- DESKTOP VERSION -->
            <div class="footer-desktop d-none d-md-block">
                <div class="row">

                    <!-- COLONNA 1: SOLO LOGO -->
                    <div class="col-lg-3 footer-logo-col">
                        <?php $footer_logo = get_field('footer_logo', $footer_id); ?>
                        <?php if($footer_logo): ?>
                            <img src="<?php echo $footer_logo['url']; ?>" 
                                 alt="Logo Footer" 
                                 class="footer-logo-img">
                        <?php endif; ?>
                    </div>

                    <!-- COLONNA 2: INDIRIZZO -->
                    <div class="col-lg-3 footer-left">
                        <h3 class="footer-title"><?php the_field('footer_left_title', $footer_id); ?></h3>
                        <div class="footer-address footer-icons">
                            <?php the_field('footer_left_text', $footer_id); ?>
                        </div>
                    </div>

                    <!-- COLONNA 3: CONTATTI -->
                    <div class="col-lg-3 footer-center">
                        <h3 class="footer-title"><?php the_field('footer_right_title', $footer_id); ?></h3>
                        <div class="footer-contacts footer-icons">
                            <?php the_field('footer_right_text', $footer_id); ?>
                        </div>
                    </div>

                    <!-- COLONNA 4: PRIVACY -->
                    <div class="col-lg-3 footer-privacy-column">
                        <h3 class="footer-title">Privacy</h3>

                        <a href="/privacy-sito" class="footer-privacy-link" target="_blank">
                            <svg class="footer-icon"><use href="#icon-lock"></use></svg>
                            <span>Privacy Sito</span>
                        </a>

                        <?php 
                        $privacy_clienti = get_field('footer_privacy_clienti_pdf', $footer_id);
                        $privacy_fornitori = get_field('footer_privacy_fornitori_pdf', $footer_id);
                        ?>

                        <?php if($privacy_clienti): ?>
                            <a href="<?php echo esc_url($privacy_clienti); ?>" class="footer-privacy-link" target="_blank">
                                <svg class="footer-icon"><use href="#icon-pdf"></use></svg>
                                <span>Privacy Clienti</span>
                            </a>
                        <?php endif; ?>

                        <?php if($privacy_fornitori): ?>
                            <a href="<?php echo esc_url($privacy_fornitori); ?>" class="footer-privacy-link" target="_blank">
                                <svg class="footer-icon"><use href="#icon-pdf"></use></svg>
                                <span>Privacy Fornitori</span>
                            </a>
                        <?php endif; ?>
                    </div>

                </div>
            </div>


            <!-- MOBILE VERSION -->
            <div class="footer-mobile d-md-none text-center">

                <!-- LOGO SOLO MOBILE -->
                <div class="footer-logo-mobile mb-4">
                    <?php if($footer_logo): ?>
                        <img src="<?php echo $footer_logo['url']; ?>" 
                             alt="Logo Footer" 
                             class="footer-logo-img">
                    <?php endif; ?>
                </div>

                <h3 class="footer-title"><?php the_field('footer_left_title', $footer_id); ?></h3>
                <div class="footer-address footer-icons"><?php the_field('footer_left_text', $footer_id); ?></div>

                <h3 class="footer-title"><?php the_field('footer_right_title', $footer_id); ?></h3>
                <div class="footer-contacts footer-icons"><?php the_field('footer_right_text', $footer_id); ?></div>

                <h3 class="footer-title">Privacy</h3>
                <div class="footer-privacy-mobile">

                    <a href="/privacy-sito" class="footer-privacy-link" target="_blank">
                        <svg class="footer-icon"><use href="#icon-lock"></use></svg>
                        <span>Privacy Sito</span>
                    </a>

                    <?php if($privacy_clienti): ?>
                        <a href="<?php echo esc_url($privacy_clienti); ?>" class="footer-privacy-link" target="_blank">
                            <svg class="footer-icon"><use href="#icon-pdf"></use></svg>
                            <span>Privacy Clienti</span>
                        </a>
                    <?php endif; ?>

                    <?php if($privacy_fornitori): ?>
                        <a href="<?php echo esc_url($privacy_fornitori); ?>" class="footer-privacy-link" target="_blank">
                            <svg class="footer-icon"><use href="#icon-pdf"></use></svg>
                            <span>Privacy Fornitori</span>
                        </a>
                    <?php endif; ?>

                </div>

            </div>


            <!-- COPYRIGHT -->
            <div class="footer-copy text-center mt-4">
                © <?php echo date('Y'); ?> Eurobevande — Tutti i diritti riservati
            </div>

        </footer>

    </div>
</section>
