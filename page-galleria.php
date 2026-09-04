<?php
/* Template Name: Galleria */

get_header();
?>

<?php get_template_part('template-parts/header-template'); ?>

<div class="gallery-wrapper">

    <div class="gallery-container">

        <h1 class="gallery-title">Galleria</h1>

        <?php 
        echo do_shortcode('[foogallery id="363"]');
        ?>

    </div>

    <?php get_template_part('template-parts/footer-vertical'); ?>

</div>

<?php get_footer(); ?>
