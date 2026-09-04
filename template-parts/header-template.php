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

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <!-- HOME -->
          <li class="nav-item dropdown-mega <?php if(is_page('home')) echo 'current-menu-item'; ?>">
            <a class="nav-link <?php if(is_page('home')) echo 'active'; ?>" href="/euro-bevande/home">HOME</a>
          </li>

          <!-- SERVIZI -->
          <li class="nav-item dropdown-mega <?php if(is_page('servizi')) echo 'current-menu-item'; ?>">
            <a class="nav-link <?php if(is_page('servizi')) echo 'active'; ?>" href="/euro-bevande/servizi">SERVIZI</a>

            <div class="mega-menu small-dropdown">
              <a href="/euro-bevande/servizi#servizio1">01 Analisi & Menu Design</a>
              <a href="/euro-bevande/servizi#servizio2">02 Formazione & Tasting</a>
              <a href="/euro-bevande/servizi#servizio3">03 Setup & Attrezzature</a>
              <a href="/euro-bevande/servizi#servizio4">04 Evoluzione & Partnership</a>
            </div>
          </li>

          <!-- PRODOTTI -->
          <li class="nav-item dropdown-mega <?php if(is_page('prodotti')) echo 'current-menu-item'; ?>">
            <a class="nav-link <?php if(is_page('prodotti')) echo 'active'; ?>" href="/euro-bevande/prodotti">PRODOTTI</a>

            <div class="mega-menu small-dropdown">
              <a href="/euro-bevande/prodotti#birra">Birra</a>
              <a href="/euro-bevande/prodotti#analcolici">Analcolici</a>
              <a href="/euro-bevande/prodotti#spiriti">Spiriti</a>
              <a href="/euro-bevande/prodotti#vino">Vino</a>
            </div>
          </li>

          <!-- CHI SIAMO -->
          <li class="nav-item dropdown-mega <?php if(is_page('chi-siamo')) echo 'current-menu-item'; ?>">
            <a class="nav-link <?php if(is_page('chi-siamo')) echo 'active'; ?>" href="/euro-bevande/chi-siamo">CHI SIAMO</a>
          </li>

          <!-- LAVORA CON NOI -->
          <li class="nav-item dropdown-mega <?php if(is_page('lavora-con-noi')) echo 'current-menu-item'; ?>">
            <a class="nav-link <?php if(is_page('lavora-con-noi')) echo 'active'; ?>" href="/euro-bevande/lavora-con-noi">LAVORA CON NOI</a>

            <div class="mega-menu small-dropdown">
              <a href="/euro-bevande/lavora-con-noi#candidati">Candidati</a>
            </div>
          </li>

        </ul>

      </div>

    </div>
  </nav>
</header>