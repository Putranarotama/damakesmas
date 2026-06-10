<?php
/**
 * layouts/master.php
 * Master layout wrapper — wraps every page with <head>, navbar, footer, scripts
 * Usage: $page_title, $page_class (optional)
 */
$page_title = $page_title ?? 'DAMAKESMAS - Denpasar Mantap Kesehatan Masyarakat';
$base_path  = $base_path ?? '';   // '../' when inside /pages/
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="DAMAKESMAS – Program inovasi pelayanan kesehatan masyarakat Kota Denpasar.">
  <meta name="theme-color" content="#1A4A3C">

  <title><?= htmlspecialchars($page_title) ?></title>

  <!-- Preconnect Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: { DEFAULT: '#1A4A3C', dark: '#0F3028', mid: '#2D6B52', light: '#E8F4F0' },
            accent: { green: '#4CAF7D', teal: '#46C98A' },
          },
          fontFamily: {
            display: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
            body:    ['Inter', 'system-ui', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <!-- Custom Design System CSS -->
  <link rel="stylesheet" href="<?= $base_path ?>assets/css/app.css">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 36 36'><rect width='36' height='36' rx='8' fill='%231A4A3C'/><text y='26' x='4' font-size='22' fill='white'>+</text></svg>">
</head>
<body class="page-bg <?= htmlspecialchars($page_class ?? '') ?>">

  <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:bg-white focus:text-primary focus:px-4 focus:py-2 focus:rounded-lg focus:z-50">
    Langsung ke konten utama
  </a>

  <?php include $base_path . 'components/navbar.php'; ?>

  <main id="main-content">
    <?php // Page content rendered here by each page file ?>
  </main>

  <?php include $base_path . 'components/footer.php'; ?>

  <!-- Scripts -->
  <script src="<?= $base_path ?>assets/js/navbar.js" defer></script>
  <script src="<?= $base_path ?>assets/js/modal.js" defer></script>
  <script src="<?= $base_path ?>assets/js/animation.js" defer></script>
  <script src="<?= $base_path ?>assets/js/app.js" defer></script>

</body>
</html>
