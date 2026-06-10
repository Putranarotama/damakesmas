/**
 * modal.js
 * Manages map popup open/close and any modal dialogs
 */
(function () {
  // Map popup close button
  document.querySelectorAll('[data-popup-close]').forEach(btn => {
    btn.addEventListener('click', () => {
      const popup = btn.closest('[data-popup]');
      if (popup) popup.style.display = 'none';
    });
  });
})();
