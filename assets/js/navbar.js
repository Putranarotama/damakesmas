/**
 * navbar.js
 * Handles: mobile hamburger menu, active link highlighting
 */
(function () {
  const hamburger = document.getElementById('hamburger');
  const navMenu   = document.getElementById('nav-menu');

  if (!hamburger || !navMenu) return;

function openMenu() {
  navMenu.classList.add('open');
  hamburger.setAttribute('aria-expanded', 'true');
 
}

function closeMenu() {
  navMenu.classList.remove('open');
  hamburger.setAttribute('aria-expanded', 'false');

}

  function toggleMenu() {
    navMenu.classList.contains('open') ? closeMenu() : openMenu();
  }

  // Klik hamburger → toggle
  hamburger.addEventListener('click', function (e) {
    e.stopPropagation();
    toggleMenu();
  });

  // Klik di luar menu → tutup
  document.addEventListener('click', function (e) {
    if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
      closeMenu();
    }
  });

  // Klik link di dalam menu → tutup (navigasi terjadi)
  navMenu.querySelectorAll('.nav-link').forEach(function (link) {
    link.addEventListener('click', closeMenu);
  });

  // Tekan Escape → tutup
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeMenu();
  });

  // Resize ke desktop → tutup & reset overflow
  window.addEventListener('resize', function () {
    if (window.innerWidth > 768) closeMenu();
  });

  // Active link berdasarkan halaman aktif
  var current = window.location.pathname.split('/').pop() || 'index.php';
  navMenu.querySelectorAll('.nav-link').forEach(function (link) {
    var href = link.getAttribute('href') || '';
    if (href && (href === current || href.endsWith('/' + current))) {
      link.classList.add('active');
    }
  });
})();
