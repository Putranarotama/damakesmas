<?php
require_once __DIR__ . '/config.php';
/**
 * index.php  →  Halaman Beranda
 * Page: Landing page with hero, services, stats table, map
 */
$page_title = 'DAMAKESMAS - Beranda';
$base_path  = '';
ob_start();
?>

<!-- Hero -->
<?php include 'components/hero.php'; ?>

<!-- Outer wrapper with background -->
<div class="content-wrapper" style="background:#F5F7F6; padding-bottom:3rem;">
  <div class="container">

    <!-- Filter Bar (overlaps hero) -->
    <?php include 'components/filter-bar.php'; ?>

    <!-- Pelayanan Publik -->
    <section class="section" aria-labelledby="pelayanan-title">
      <div>
        <h2 class="section-title" id="pelayanan-title">Pelayanan Publik</h2>
        <?php include 'components/service-cards.php'; ?>
      </div>
    </section>

    <!-- Statistik Layanan Publik -->
    <section class="section" aria-labelledby="statistik-title">
      <div>
        <h2 class="section-title" id="statistik-title">Statistik Layanan Publik</h2>
        <?php
          $show_all = false;
          $table_id = 'faskes-home';
          include 'components/table.php';
        ?>
      </div>
    </section>

    <!-- Informasi Titik Faskes -->
    <section class="section" aria-labelledby="faskes-title">
      <div>
        <h2 class="section-title" id="faskes-title">Informasi Titik Faskes</h2>
        <?php include 'components/map.php'; ?>
      </div>
    </section>

  </div>
</div>

<?php
$content = ob_get_clean();
// Render via master layout
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="DAMAKESMAS – Program inovasi pelayanan kesehatan masyarakat Kota Denpasar.">
  <meta name="theme-color" content="#1A4A3C">
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>tailwind.config={theme:{extend:{colors:{primary:{'DEFAULT':'#1A4A3C','dark':'#0F3028','mid':'#2D6B52','light':'#E8F4F0'},accent:{green:'#4CAF7D',teal:'#46C98A'}},fontFamily:{display:['"Plus Jakarta Sans"','system-ui','sans-serif'],body:['Inter','system-ui','sans-serif']}}}}</script>
  <link rel="stylesheet" href="<?= asset('assets/css/app.css') ?>">
</head>

<body class="page-bg">
  <a href="#main-content" class="sr-only">Langsung ke konten utama</a>
  <?php include 'components/navbar.php'; ?>
  <main id="main-content">
    <?= $content ?>
  </main>
  <?php include 'components/footer.php'; ?>
  <script src="<?= asset('assets/js/navbar.js') ?>" defer></script>
  <script src="<?= asset('assets/js/modal.js') ?>" defer></script>
  <script src="<?= asset('assets/js/animation.js') ?>" defer></script>
  <script src="<?= asset('assets/js/app.js') ?>" defer></script>
</body>
</html>
