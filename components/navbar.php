<?php
if (!function_exists('url')) require_once __DIR__ . '/../config.php';

$current_page = basename($_SERVER['PHP_SELF']);
$nav_items = [
  ['href' => 'index.php',                           'label' => 'Beranda'],
  ['href' => 'pages/profile.php',                   'label' => 'Profile'],
  ['href' => 'pages/pelayanan-publik.php',           'label' => 'Pelayanan Publik'],
  ['href' => 'pages/statistik-layanan-publik.php',   'label' => 'Statistik Layanan Publik'],
  ['href' => 'pages/informasi-titik-faskes.php',     'label' => 'Informasi Titik Faskes'],
];
?>
<header class="navbar">
  <nav class="navbar-inner">
    <a href="<?= url('index.php') ?>" class="navbar-brand">
      <img src="<?= asset('assets/img/logo-kota-denpasar.png') ?>" alt="Logo Kota Denpasar">
      <span>DAMAKESMAS</span>
    </a>
    <ul class="nav-menu" id="nav-menu" role="list">
      <?php foreach ($nav_items as $item): ?>
        <?php $is_active = ($current_page === basename($item['href'])); ?>
        <li role="listitem">
          <a href="<?= url($item['href']) ?>"
             class="nav-link <?= $is_active ? 'active' : '' ?>"
             <?= $is_active ? 'aria-current="page"' : '' ?>>
            <?= htmlspecialchars($item['label']) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
    <button class="hamburger" id="hamburger" aria-label="Buka menu navigasi" aria-expanded="false">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
        <line x1="3" y1="6" x2="21" y2="6"/>
        <line x1="3" y1="12" x2="21" y2="12"/>
        <line x1="3" y1="18" x2="21" y2="18"/>
      </svg>
    </button>
  </nav>
</header>
