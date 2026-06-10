<?php
require_once __DIR__ . '/../config.php';
/**
 * pages/statistik-layanan-publik.php
 * Page: Full statistics table with all 12 rows
 */
$page_title = 'DAMAKESMAS - Statistik Layanan Publik';
$base_path  = '../';
ob_start();
?>
<?php include '../components/hero.php'; ?>
<div class="content-wrapper" style="background:#F5F7F6; padding-bottom:3rem;">
  <div class="container">
    <?php include '../components/filter-bar.php'; ?>
    <section class="section"aria-labelledby="stat-full-title">
      <h2 class="section-title" id="stat-full-title">Statistik Layanan Publik</h2>
      <?php
        include '../components/service-cards.php';
      ?>
    </section>
    <section class="section">
      <?php $show_all=true; $table_id='faskes-full'; include '../components/table.php'; ?>
    </section>
    <section class="section"aria-labelledby="map-stat-title">
      <h2 class="section-title" id="map-stat-title">Informasi Titik Faskes</h2>
      <?php include '../components/map.php'; ?>
    </section>
  </div>
</div>
<?php
$content = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>tailwind.config={theme:{extend:{colors:{primary:{'DEFAULT':'#1A4A3C','dark':'#0F3028','mid':'#2D6B52','light':'#E8F4F0'}},fontFamily:{display:['"Plus Jakarta Sans"'],body:['Inter']}}}}</script>
  <link rel="stylesheet" href="<?= asset('assets/css/app.css') ?>">
</head>
<body class="page-bg">
  <?php include '../components/navbar.php'; ?>
  <main id="main-content"><?= $content ?></main>
  <?php include '../components/footer.php'; ?>
  <script src="<?= asset('assets/js/navbar.js') ?>" defer></script>
  <script src="<?= asset('assets/js/modal.js') ?>" defer></script>
  <script src="<?= asset('assets/js/animation.js') ?>" defer></script>
  <script src="<?= asset('assets/js/app.js') ?>" defer></script>
</body>
</html>
