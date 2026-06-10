<?php
/**
 * components/service-cards.php
 * Responsibilities: Service type cards with icon, count, category label
 */
$services = [
  [
    'name'  => 'Kegawatdaruratan',
    'count' => 15,
    'unit'  => 'Layanan',
    'icon_bg'   => 'var(--color-emergency-bg)',
    'icon_color'=> 'var(--color-emergency-icon)',
    'icon'  => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z" fill="currentColor"/>',
    'href'  => '#',
  ],
  [
    'name'  => 'Home Care',
    'count' => 20,
    'unit'  => 'Layanan',
    'icon_bg'   => 'var(--color-homecare-bg)',
    'icon_color'=> 'var(--color-homecare-icon)',
    'icon'  => '<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="currentColor"/>',
    'href'  => '#',
  ],
  [
    'name'  => 'ODGJ Case',
    'count' => 16,
    'unit'  => 'Layanan',
    'icon_bg'   => 'var(--color-odgj-bg)',
    'icon_color'=> 'var(--color-odgj-icon)',
    'icon'  => '<path d="M12 2a5 5 0 100 10A5 5 0 0012 2zm0 12c-5.33 0-8 2.67-8 4v2h16v-2c0-1.33-2.67-4-8-4z" fill="currentColor"/>',
    'href'  => '#',
  ],
  [
    'name'  => 'Lainnya',
    'count' => 20,
    'unit'  => 'Layanan',
    'icon_bg'   => 'var(--color-other-bg)',
    'icon_color'=> 'var(--color-other-icon)',
    'icon'  => '<circle cx="12" cy="12" r="2" fill="currentColor"/><circle cx="19" cy="12" r="2" fill="currentColor"/><circle cx="5" cy="12" r="2" fill="currentColor"/>',
    'href'  => '#',
  ],
];
?>
<div class="service-grid" role="list">
  <?php foreach ($services as $i => $svc): ?>
    <a href="<?= htmlspecialchars($svc['href']) ?>"
       class="service-card"
       role="listitem"
       data-animate data-animate-delay="<?= $i * 80 ?>"
       aria-label="<?= htmlspecialchars($svc['name']) ?> - <?= $svc['count'] ?> <?= htmlspecialchars($svc['unit']) ?>">
      <div class="service-card-icon" style="background:<?= $svc['icon_bg'] ?>; color:<?= $svc['icon_color'] ?>;" aria-hidden="true">
        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <?= $svc['icon'] ?>
        </svg>
      </div>
      <div class="service-card-name"><?= htmlspecialchars($svc['name']) ?></div>
      <div class="service-card-count"><?= $svc['count'] ?></div>
      <div class="service-card-unit"><?= htmlspecialchars($svc['unit']) ?></div>
    </a>
  <?php endforeach; ?>
</div>
