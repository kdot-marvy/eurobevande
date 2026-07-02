<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- ============================
     SVG SPRITE (icone globali)
============================= -->
<svg style="display:none;" aria-hidden="true">

  <!-- MAIL -->
  <symbol id="icon-mail" viewBox="0 0 24 24">
    <path fill="currentColor" d="M4 5h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2zm0 2v.2l8 5 8-5V7H4zm0 3.3V17h16v-6.7l-8 5-8-5z"/>
  </symbol>

  <!-- PHONE -->
  <symbol id="icon-phone" viewBox="0 0 24 24">
    <path fill="currentColor" d="M6.6 3.4 9.8 4.2c.4.1.7.4.8.8l1 3.4c.1.4 0 .8-.3 1.1l-1.8 1.8a13.5 13.5 0 0 0 5.7 5.7l1.8-1.8c.3-.3.7-.4 1.1-.3l3.4 1c.4.1.7.4.8.8l.8 3.2c.1.5 0 1-.4 1.3-1.1.9-2.5 1.4-4 1.4A16.9 16.9 0 0 1 3 7.4c0-1.5.5-2.9 1.4-4 .3-.4.8-.5 1.2-.4z"/>
  </symbol>

  <!-- PDF -->
  <symbol id="icon-pdf" viewBox="0 0 24 24">
    <path fill="currentColor" d="M6 2h9l5 5v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 2v16h12V9h-5V4H6zm3 6h2.5a2.5 2.5 0 0 1 0 5H9v-5zm1.5 1.5H10v2h.5a1 1 0 0 0 0-2zM14 10h3v1.5h-1.5V13H17v1.5h-3V10z"/>
  </symbol>

  <!-- LOCK -->
  <symbol id="icon-lock" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12 2a5 5 0 0 1 5 5v3h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h1V7a5 5 0 0 1 5-5zm0 2.5A2.5 2.5 0 0 0 9.5 7v3h5V7A2.5 2.5 0 0 0 12 4.5zm0 7a1.75 1.75 0 0 1 1 3.18V17h-2v-2.32A1.75 1.75 0 0 1 12 11.5z"/>
  </symbol>

</svg>
<!-- ============================ -->


<?php 
$header_page = get_page_by_path('impostazioni-header');
$header_id = $header_page ? $header_page->ID : 0;
?>

<header class="main-header">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid ps-0">

      <!-- LOGO -->
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <div class="logos-wrapper">

          <?php $logo = get_field('header_logo', $header_id); ?>
          <?php if($logo): ?>
            <img src="<?php echo $logo['url']; ?>" alt="Logo" class="eb-logo">
          <?php endif; ?>

          <?php $logo_text = get_field('header_logo_text', $header_id); ?>
          <?php if($logo_text): ?>
            <img src="<?php echo $logo_text['url']; ?>" alt="Logo Text" class="eb-logo-text">
          <?php endif; ?>

        </div>
      </a>

      <!-- BURGER -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">

        <!-- MENU STATICO -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown-mega"><a class="nav-link" href="/euro-bevande/home">HOME</a></li>
          <li class="nav-item dropdown-mega"><a class="nav-link" href="/euro-bevande/servizi">SERVIZI</a></li>
          <li class="nav-item dropdown-mega"><a class="nav-link" href="/euro-bevande/prodotti">PRODOTTI</a></li>
          <li class="nav-item dropdown-mega"><a class="nav-link" href="/euro-bevande/chi-siamo">CHI SIAMO</a></li>
          <li class="nav-item dropdown-mega"><a class="nav-link" href="/euro-bevande/lavora-con-noi">LAVORA CON NOI</a></li>
        </ul>

        <!-- MEGA MENU STATICO -->
        <div class="mega-menu">
          <div class="mega-inner">

            <div class="mega-col">
              <a href="/euro-bevande/servizi#servizio1">01 Analisi & Menu Design</a>
              <a href="/euro-bevande/servizi#servizio2">02 Formazione & Tasting</a>
              <a href="/euro-bevande/servizi#servizio3">03 Setup & Attrezzature</a>
              <a href="/euro-bevande/servizi#servizio4">04 Evoluzione & Partnership</a>
            </div>

            <div class="mega-col">
              <a href="/euro-bevande/prodotti#birra">Birra</a>
              <a href="/euro-bevande/prodotti#analcolici">Analcolici</a>
              <a href="/euro-bevande/prodotti#spiriti">Spiriti</a>
              <a href="/euro-bevande/prodotti#vino">Vino</a>
            </div>

            <div class="mega-col">
              <a href="/euro-bevande/chi-siamo">Storia</a>
            </div>

          </div>
        </div>

      </div>

    </div>
  </nav>
</header>
