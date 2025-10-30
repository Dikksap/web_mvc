<div class="container mt-5">
  <h2 class="text-center mb-4">Daftar Barang Masuk</h2>

  <div class="d-flex justify-content-between mb-3">
    <a href="<?php echo BASEURL?>/barang/barangMasuk" class="btn btn-success">
      <i class="bi bi-plus-circle"></i> Tambah Barang Masuk
    </a>
    <a href="<?php echo BASEURL?>/barang" class="btn btn-secondary">
      <i class="bi bi-arrow-left"></i> Kembali ke Daftar Barang
    </a>
  </div>

  <div class="card shadow-sm">
    <div class="card-body table-responsive">
      <table class="table table-striped table-hover align-middle text-center">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Masuk</th>
            <th>Harga Beli</th>
            <th>Tanggal Masuk</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($barang_masuk)): ?>
            <?php $no = 1; ?>
            <?php foreach($barang_masuk as $bm): ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo htmlspecialchars($bm['kode_barang']); ?></td>
                <td><?php echo htmlspecialchars($bm['nama_barang']); ?></td>
                <td><?php echo htmlspecialchars($bm['jumlah']); ?></td>
                <td>Rp <?php echo number_format($bm['harga_beli'], 2, ',', '.'); ?></td>
                <td><?php echo date('d-m-Y H:i', strtotime($bm['tanggal_masuk'])); ?></td>
                <td><?php echo htmlspecialchars($bm['keterangan']); ?></td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="7" class="text-center text-muted py-4">
                <i class="bi bi-box-seam"></i> Belum ada data barang masuk.
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
