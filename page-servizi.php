<?php
/* 
Template Name: Servizi
*/

// HERO FIELDS
$hero_bg      = get_field('servizi_hero_image');
$hero_title   = get_field('servizi_hero_title');
$hero_sub     = get_field('servizi_hero_paragraph');
$hero_phone   = get_field('servizi_phone');
$hero_mail    = get_field('servizi_email');
$hero_fax     = get_field('servizi_fax');

// STEP 1
$step1_number      = get_field('servizi_step1_number');
$step1_title       = get_field('servizi_step1_title');
$step1_desc        = get_field('servizi_step1_paragraph');
$step1_image       = get_field('servizi_step1_image');
$step1_next        = get_field('servizi_step1_next');

// STEP 2
$step2_number      = get_field('servizi_step2_number');
$step2_title       = get_field('servizi_step2_title');
$step2_desc        = get_field('servizi_step2_paragraph');
$step2_image       = get_field('servizi_step2_image');
$step2_next        = get_field('servizi_step2_next');                                   

// STEP 3
$step3_number      = get_field('servizi_step3_number');
$step3_title       = get_field('servizi_step3_title');
$step3_desc        = get_field('servizi_step3_paragraph');
$step3_image       = get_field('servizi_step3_image');
$step3_next        = get_field('servizi_step3_next');

// STEP 4
$step4_number      = get_field('servizi_step4_number');
$step4_title       = get_field('servizi_step4_title');
$step4_desc        = get_field('servizi_step4_paragraph');
$step4_image       = get_field('servizi_step4_image');

get_header();
?>

<div class="scroll-container">

<!-- MOBILE HERO -->
<section class="mobile-hero mobile-version">

  <?php if($hero_bg): ?>
    <img src="<?php echo esc_url($hero_bg['url']); ?>" alt="" class="mobile-hero__bg">
  <?php endif; ?>

  <div class="mobile-hero__overlay"></div>

  <div class="mobile-hero__content">
    <h1 class="mobile-hero__title"><?php echo esc_html($hero_title); ?></h1>
    <p class="mobile-hero__subtitle"><?php echo esc_html($hero_sub); ?></p>
  </div>

</section>


<!-- DESKTOP HERO -->
<section class="page-section hero-section desktop-version">

  <?php if($hero_bg): ?>
    <img src="<?php echo esc_url($hero_bg['url']); ?>" alt="" class="fullscreen-cover">
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



<!-- STEP 1 -->
<section class="page-section step-section" id="servizio1">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-6 step-left">
        <h2 class="step-title desktop-version">Il nostro metodo</h2>
        <div class="step-number"><?php echo esc_html($step1_number); ?></div>
        <h2 class="fw-bold"><?php echo esc_html($step1_title); ?></h2>
        <div class="paragraph"><?php echo wp_kses_post($step1_desc); ?></div>
        <?php if($step1_next): ?>
          <div class="next-step desktop-version"><?php echo esc_html($step1_next); ?></div>
        <?php endif; ?>
      </div>

      <div class="col-lg-6 step-right p-0">
        <?php if($step1_image): ?>
          <img src="<?php echo esc_url($step1_image['url']); ?>" alt="">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>



<!-- STEP 2 -->
<section class="page-section step-section" id="servizio2">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-6 step-left">
        <h2 class="step-title desktop-version">Il nostro metodo</h2>
        <div class="step-number"><?php echo esc_html($step2_number); ?></div>
        <h2 class="fw-bold"><?php echo esc_html($step2_title); ?></h2>
        <div class="paragraph"><?php echo wp_kses_post($step2_desc); ?></div>
        <?php if($step2_next): ?>
          <div class="next-step desktop-version"><?php echo esc_html($step2_next); ?></div>
        <?php endif; ?>
      </div>

      <div class="col-lg-6 step-right p-0">
        <?php if($step2_image): ?>
          <img src="<?php echo esc_url($step2_image['url']); ?>" alt="">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>



<!-- STEP 3 -->
<section class="page-section step-section" id="servizio3">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-6 step-left">
        <h2 class="step-title desktop-version">Il nostro metodo</h2>
        <div class="step-number"><?php echo esc_html($step3_number); ?></div>
        <h2 class="fw-bold"><?php echo esc_html($step3_title); ?></h2>
        <div class="paragraph"><?php echo wp_kses_post($step3_desc); ?></div>
        <?php if($step3_next): ?>
          <div class="next-step desktop-version"><?php echo esc_html($step3_next); ?></div>
        <?php endif; ?>
      </div>

      <div class="col-lg-6 step-right p-0">
        <?php if($step3_image): ?>
          <img src="<?php echo esc_url($step3_image['url']); ?>" alt="">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>



<!-- STEP 4 -->
<section class="page-section step-section" id="servizio4">
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-6 step-left">
        <h2 class="step-title desktop-version">Il nostro metodo</h2>
        <div class="step-number"><?php echo esc_html($step4_number); ?></div>
        <h2 class="fw-bold"><?php echo esc_html($step4_title); ?></h2>
        <div class="paragraph"><?php echo wp_kses_post($step4_desc); ?></div>
      </div>

      <div class="col-lg-6 step-right p-0">
        <?php if($step4_image): ?>
          <img src="<?php echo esc_url($step4_image['url']); ?>" alt="">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

    <?php get_template_part('template-parts/footer-vertical'); ?>


</div>

<?php get_footer(); ?>
