<?php 
$footer_page = get_page_by_path('impostazioni-footer');
$footer_id = $footer_page ? $footer_page->ID : 0;
$footer_map = get_field('footer_map_iframe', $footer_id);
?>


<div class="swiper-slide">
    <section class="page-section footer-section">
            <div class="footer-map-wrapper">
                <div class="footer-map-container">

                    <?php if($footer_map): ?>
                            <?php echo $footer_map; ?>
                    <?php else: ?>
                        <!-- FALLBACK: MAPPA STATIC GOOGLE -->
                        <iframe 
                            class="footer-map-iframe"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.123456789!2d10.123456!3d45.123456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sEurobevande!5e0!3m2!1sit!2sit!4v0000000000"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    <?php endif; ?>

                </div>
            </div>

        <div class="eb-footer-section">

            <footer class="eb-footer container">

                <!-- DESKTOP VERSION -->
                <div class="footer-desktop d-none d-md-block">
                    <div class="row">

                        <!-- COLONNA 2: INDIRIZZO -->
                        <div class="col-lg-4">
                            <h3 class="footer-title"><?php the_field('footer_left_title', $footer_id); ?></h3>
                            <div class="footer-address footer-icons">
                                <?php the_field('footer_left_text', $footer_id); ?>
                            </div>
                        </div>

                        <!-- COLONNA 3: CONTATTI -->
                        <div class="col-lg-4">
                            <h3 class="footer-title"><?php the_field('footer_right_title', $footer_id); ?></h3>
                            <div class="footer-contacts footer-icons">
                                <?php the_field('footer_right_text', $footer_id); ?>
                            </div>
                        </div>

                        <!-- COLONNA 4: PRIVACY -->
                        <div class="col-lg-4 footer-privacy-column">
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

                    <div>
                        <h3 class="footer-title"><?php the_field('footer_left_title', $footer_id); ?></h3>
                        <div class="footer-address footer-icons"><?php the_field('footer_left_text', $footer_id); ?></div>
                    </div>
                    <div>
                        <h3 class="footer-title"><?php the_field('footer_right_title', $footer_id); ?></h3>
                        <div class="footer-contacts footer-icons"><?php the_field('footer_right_text', $footer_id); ?></div>
                    </div>
                    <div class="footer-privacy-mobile">
                        <h3 class="footer-title">Privacy</h3>

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

                <button id="backToTop" class="back-to-top">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                        <path d="M12 4L5 11H10V20H14V11H19L12 4Z" fill="currentColor"/>
                    </svg>
                </button>

                <!-- COPYRIGHT -->
                <div class="footer-copy text-center mt-4">
                    © <?php echo date('Y'); ?> Eurobevande — Tutti i diritti riservati
                </div>

            </footer>

        </div>
    </section>
</div>
