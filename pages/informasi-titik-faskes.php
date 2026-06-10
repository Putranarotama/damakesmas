<?php
require_once __DIR__ . '/../config.php';
/**
 * pages/informasi-titik-faskes.php
 * Page: Full-featured map of health facility locations
 */
$page_title = 'DAMAKESMAS - Informasi Titik Faskes';
$base_path  = '../';
ob_start();
?>
<?php include '../components/hero.php'; ?>
<div class="content-wrapper" style="background:#F5F7F6; padding-bottom:3rem;">
  <div class="container">
    <?php include '../components/filter-bar.php'; ?>
    <section class="section"aria-labelledby="faskes-full-title">
      <h2 class="section-title" id="faskes-full-title">Informasi Titik Faskes</h2>
      <!-- Extended map with taller height -->
      <div class="map-card" data-animate>
        <div class="map-card-header">
          <span class="table-header-title">TITIK FASKES</span>
          <div class="map-legend">
            <span class="map-legend-item"><span class="map-legend-dot" style="background:#1A4A3C;"></span>Primary Hubs</span>
            <span class="map-legend-item"><span class="map-legend-dot" style="background:#46C98A;"></span>Operations</span>
          </div>
        </div>
        <div class="map-container" style="height:520px;position:relative;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63174.55280831455!2d115.17241754999999!3d-8.673063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2407ac2da5b31%3A0x6296b7e1a554d1e5!2sDenpasar%2C%20Denpasar%20City%2C%20Bali!5e0!3m2!1sen!2sid!4v1700000000000"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            title="Peta titik fasilitas kesehatan Kota Denpasar" style="width:100%;height:100%;border:none;">
          </iframe>
          <div class="location-card">
            <div class="location-card-name">Denpasar</div>
            <div class="location-card-actions">
              <button class="location-card-btn" title="Lihat di Google Maps">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#1A4A3C" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
              </button>
              <button class="location-card-btn" title="Arah">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#1A4A3C" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
              </button>
            </div>
          </div>

    </section>
    <section class="section">
      <?php $show_all=true; $table_id='faskes-map'; include '../components/table.php'; ?>
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
