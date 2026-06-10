<?php
/**
 * components/table.php
 * Responsibilities: Rekapitulasi data per faskes with pagination
 * Usage: include with $rows, $show_all = false, $table_id
 */
$table_id   = $table_id ?? 'faskes-table';
$rows_per   = $show_all ? 99 : 4;
$faskes_data = $faskes_data ?? [
  ['name'=>'Puskesmas Denpasar Barat I',   'kgd'=>142,'hc'=>56,'odgj'=>12,'lain'=>210,'status'=>'active'],
  ['name'=>'Puskesmas Denpasar Selatan I', 'kgd'=>89,'hc'=>120,'odgj'=>45,'lain'=>254,'status'=>'active'],
  ['name'=>'Puskesmas Denpasar Timur I',   'kgd'=>201,'hc'=>44,'odgj'=>8,'lain'=>253,'status'=>'active'],
  ['name'=>'Puskesmas Denpasar Utara I',   'kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
  ['name'=>'Puskesmas Denpasar Barat II',  'kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
  ['name'=>'Puskesmas Denpasar Selatan II','kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
  ['name'=>'Puskesmas Denpasar Timur II',  'kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
  ['name'=>'Puskesmas Denpasar Utara II',  'kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
  ['name'=>'Puskesmas Denpasar Barat III', 'kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
  ['name'=>'Puskesmas Denpasar Selatan III','kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
  ['name'=>'Puskesmas Denpasar Timur III', 'kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
  ['name'=>'Puskesmas Denpasar Utara III', 'kgd'=>34,'hc'=>78,'odgj'=>22,'lain'=>134,'status'=>'standby'],
];
$total = count($faskes_data);
$view_label = $show_all ? 'Default' : 'Lihat Semua';
$view_href  = $show_all ? 'index.php' : 'pages/statistik-layanan-publik.php';
?>
<div class="table-card" data-animate>
  <div class="table-header">
    <span class="table-header-title">Rekapitulasi Data per Faskes</span>
    <div class="table-actions">
      <button class="btn-sm" data-export-csv aria-label="Ekspor data ke CSV">Ekspor CSV</button>
      <a href="<?= htmlspecialchars($view_href) ?>" class="btn-sm"><?= htmlspecialchars($view_label) ?></a>
    </div>
  </div>

  <div class="data-table-wrap">
    <table class="data-table" id="<?= htmlspecialchars($table_id) ?>"
           <?= !$show_all ? "data-paginate=\"$rows_per\"" : '' ?>
           aria-label="Data fasilitas kesehatan Kota Denpasar">
      <thead>
        <tr>
          <th scope="col">Fasilitas Kesehatan</th>
          <th scope="col">Kegawatdaruratan</th>
          <th scope="col">Home Care</th>
          <th scope="col">ODGJ</th>
          <th scope="col">Lainnya</th>
          <th scope="col">Status Operasional</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($faskes_data as $row): ?>
        <tr>
          <td class="col-name"><?= htmlspecialchars($row['name']) ?></td>
          <td class="col-number"><?= $row['kgd'] ?></td>
          <td class="col-number"><?= $row['hc'] ?></td>
          <td class="col-number"><?= $row['odgj'] ?></td>
          <td class="col-total"><?= $row['lain'] ?></td>
          <td>
            <?php if ($row['status'] === 'active'): ?>
              <span class="badge-active" role="status">Aktif 24 Jam</span>
            <?php else: ?>
              <span class="badge-standby" role="status">Standby</span>
            <?php endif; ?>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="table-footer">
    <span class="table-footer-info"
      data-pagination-info="<?= htmlspecialchars($table_id) ?>">
      Menampilkan <?= min($rows_per, $total) ?> dari <?= $total ?> data fasilitas kesehatan
    </span>
    <?php if (!$show_all): ?>
    <div class="pagination" data-pagination="<?= htmlspecialchars($table_id) ?>" aria-label="Navigasi halaman tabel">
      <button class="btn-page" data-prev disabled aria-label="Halaman sebelumnya">Previous</button>
      <button class="btn-page active" data-next aria-label="Halaman berikutnya">Next</button>
    </div>
    <?php endif; ?>
  </div>
</div>
