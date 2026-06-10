<?php
if (!function_exists('url')) require_once __DIR__ . '/../config.php';
?>
<section class="hero" aria-labelledby="hero-title">
  <div class="hero-inner">
    <div class="hero-content" data-animate data-animate-delay="0">
      <h1 class="hero-title" id="hero-title">DAMAKESMAS</h1>
      <p class="hero-desc">
        Denpasar Mantap Kesehatan Masyarakat adalah program inovasi unggulan dari Kota Denpasar yang berfokus pada pelayanan kesehatan masyarakat secara terpadu dan responsif.
      </p>
    </div>
    <div class="hero-cards" data-animate data-animate-delay="100">
      <a href="<?= url('pages/login.php') ?>" class="hero-card" aria-label="Login DAMAKESMAS">
        <div class="hero-card-icon">
          <img src="<?= asset('assets/img/logo-kota-denpasar.png') ?>" alt="Logo Kota Denpasar" width="24" height="24">
        </div>
        <div class="hero-card-content">
          <div class="hero-card-label">Akses Cepat</div>
          <div class="hero-card-title">LOGIN DAMAKESMAS</div>
        </div>
        <span class="hero-card-arrow" aria-hidden="true">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
      </a>
      <a href="#" class="hero-card" aria-label="Dashboard SIRIA">
        <div class="hero-card-icon">
          <img src="<?= asset('assets/img/logo-kota-denpasar.png') ?>" alt="Logo Kota Denpasar" width="24" height="24">
        </div>
        <div class="hero-card-content">
          <div class="hero-card-label">Akses Cepat</div>
          <div class="hero-card-title">DASHBOARD SIRIA</div>
        </div>
        <span class="hero-card-arrow" aria-hidden="true">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
      </a>
    </div>
  </div>
</section>
