/**
 * app.js
 * Main application entry: initialises modules and shared state
 */
document.addEventListener('DOMContentLoaded', () => {
  // Smooth-scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

  // Table pagination (client-side)
  const tables = document.querySelectorAll('[data-paginate]');
  tables.forEach(table => {
    const rowsPerPage = parseInt(table.dataset.paginate) || 4;
    const rows = Array.from(table.querySelectorAll('tbody tr'));
    const totalPages = Math.ceil(rows.length / rowsPerPage);
    let currentPage = 1;

    const paginationEl = document.querySelector(`[data-pagination="${table.id}"]`);
    const infoEl = document.querySelector(`[data-pagination-info="${table.id}"]`);

    function renderPage(page) {
      rows.forEach((row, i) => {
        row.style.display = (i >= (page - 1) * rowsPerPage && i < page * rowsPerPage) ? '' : 'none';
      });
      if (infoEl) infoEl.textContent = `Menampilkan ${Math.min(page * rowsPerPage, rows.length)} dari ${rows.length} data fasilitas kesehatan`;
      if (paginationEl) {
        paginationEl.querySelector('[data-prev]').disabled = page === 1;
        paginationEl.querySelector('[data-next]').disabled = page === totalPages;
      }
      currentPage = page;
    }

    if (paginationEl) {
      paginationEl.querySelector('[data-prev]').addEventListener('click', () => { if (currentPage > 1) renderPage(currentPage - 1); });
      paginationEl.querySelector('[data-next]').addEventListener('click', () => { if (currentPage < totalPages) renderPage(currentPage + 1); });
    }
    renderPage(1);
  });

  // Export CSV stub
  document.querySelectorAll('[data-export-csv]').forEach(btn => {
    btn.addEventListener('click', () => { alert('Fitur ekspor CSV akan segera tersedia.'); });
  });
});
