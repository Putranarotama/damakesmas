<?php
/**
 * components/filter-bar.php
 * Responsibilities: Service filter dropdowns, facility name search
 * Mobile: stacks vertically, selects in row, search + button full-width
 */
$layanan_options = ['Semua Layanan', 'Kegawatdaruratan', 'Home Care', 'ODGJ Case', 'Lainnya'];
$bulan_options   = ['Januari','Februari','Maret','April','Mei','Juni',
                    'Juli','Agustus','September','Oktober','November','Desember'];
$selected_bulan   = $_GET['bulan']   ?? 'Mei';
$selected_tahun   = $_GET['tahun']   ?? '2024';
$selected_layanan = $_GET['layanan'] ?? 'Semua Layanan';
?>
<div class="filter-bar" role="search" aria-label="Filter layanan kesehatan" 
     style="background:transparent;box-shadow:none;border:none;border-radius:0;padding-left:1.5rem;padding-right:1.5rem;">

  <!-- Row 1 (desktop: inline | mobile: row with 3 selects) -->
  <div class="filter-bar-row" style="background:transparent;">

    <!-- Layanan Dropdown -->
    <div style="position:relative;flex:2;min-width:0;">
      <select name="layanan" class="filter-select" style="width:100%;padding-right:2rem;"
              aria-label="Pilih jenis layanan">
        <?php foreach ($layanan_options as $opt): ?>
          <option value="<?= htmlspecialchars($opt) ?>"
            <?= $selected_layanan === $opt ? 'selected' : '' ?>>
            <?= htmlspecialchars($opt) ?>
          </option>
        <?php endforeach; ?>
      </select>
      <svg style="position:absolute;right:8px;top:50%;transform:translateY(-50%);pointer-events:none;" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
    </div>

<!-- Bulan Dropdown -->
<div style="position:relative;flex:1;min-width:0;">
  <select name="bulan" class="filter-select" style="width:100%;padding-right:2rem;"
          aria-label="Pilih bulan">
    <?php foreach ($bulan_options as $bulan): ?>
      <option value="<?= htmlspecialchars($bulan) ?>"
        <?= $selected_bulan === $bulan ? 'selected' : '' ?>>
        <?= htmlspecialchars($bulan) ?>
      </option>
    <?php endforeach; ?>
  </select>
  <svg style="position:absolute;right:8px;top:50%;transform:translateY(-50%);pointer-events:none;" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
</div>

<!-- Tahun Dropdown — GANTI dari input menjadi select, flex sama dengan bulan -->
<div style="position:relative;flex:1;min-width:0;">
  <select name="tahun" class="filter-select" style="width:100%;padding-right:2rem;"
          aria-label="Pilih tahun">
    <?php
    $tahun_options = range(2020, 2030);
    foreach ($tahun_options as $tahun):
    ?>
      <option value="<?= $tahun ?>"
        <?= (int)$selected_tahun === $tahun ? 'selected' : '' ?>>
        <?= $tahun ?>
      </option>
    <?php endforeach; ?>
  </select>
  <svg style="position:absolute;right:8px;top:50%;transform:translateY(-50%);pointer-events:none;" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="#6B7280" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
</div>

  </div><!-- /.filter-bar-row -->

  <!-- Row 2 (desktop: inline | mobile: search + button full-width) -->
  <div class="filter-bar-row">

    <!-- Facility Name Search -->
    <div style="position:relative;flex:1;min-width:0;">
      <svg style="position:absolute;left:12px;top:50%;transform:translateY(-50%);pointer-events:none;z-index:1;" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#9CA3AF" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
      <input type="text" name="faskes"
             class="filter-input" style="padding-left:2.25rem;width:100%;"
             placeholder="Cari Nama Fasilitas..."
             value="<?= htmlspecialchars($_GET['faskes'] ?? '') ?>"
             aria-label="Cari nama fasilitas kesehatan">
    </div>

    <!-- Search Button -->
    <button type="submit" class="btn-search" style="flex-shrink:0;" aria-label="Cari fasilitas">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg>
      Cari
    </button>

  </div><!-- /.filter-bar-row -->

</div>
