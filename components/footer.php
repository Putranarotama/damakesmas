<?php
if (!function_exists('url')) require_once __DIR__ . '/../config.php';
/**
 * components/footer.php
 * Responsibilities: About section, profile links, external links, copyright
 */
?>
<footer class="footer" role="contentinfo">
  <div class="footer-inner">
    <div class="footer-grid">
      <!-- Tentang Kami -->
      <div>
        <h2 class="footer-section-title">Tentang Kami</h2>
        <div class="footer-brand-item">
          <div class="footer-brand-icon" aria-hidden="true">
             <img src="<?= asset('assets/img/logo-kota-denpasar.png') ?>"
                  alt="Logo DAMAKESMAS">
          </div>
          DAMAKESMAS
        </div>
        <div class="footer-brand-item">
          <div class="footer-brand-icon" aria-hidden="true">
            <img src="<?= asset('assets/img/logo-kota-denpasar.png') ?>" 
                  alt="Logo SIRIA">
          </div>
          SIRIA
        </div>
      </div>

      <!-- Profil -->
      <div>
        <h2 class="footer-section-title">Profil</h2>
        <a href="#" class="footer-link">Damakesmas</a>
        <a href="#" class="footer-link">Siria</a>
      </div>

      <!-- Link -->
      <div>
        <h2 class="footer-section-title">Link</h2>
        <a href="https://www.denpasarkota.go.id" target="_blank" rel="noopener noreferrer" class="footer-link">Kota Denpasar</a>
        <a href="#" class="footer-link">Damakesmas</a>
        <a href="#" class="footer-link">Siria</a>
        <a href="https://kominfostatistik.denpasarkota.go.id/" target="_blank" rel="noopener noreferrer" class="footer-link">Dinas Komunikasi, Informatika dan Statistik Kota Denpasar</a>
      </div>
    </div>

    <hr class="footer-divider">

    <div class="footer-bottom">
      <p class="footer-copy">&copy; 2026 DAMAKESMAS Kota Denpasar. All Rights Reserved.</p>
      <div class="footer-legal">
        <a href="#">Kontak</a>
        <a href="#">Kebijakan Privasi</a>
      </div>
    </div>
  </div>
</footer>
