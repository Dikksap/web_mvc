
<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-danger text-white text-center">
      <h4 class="mb-0"><?php echo $judul; ?></h4>
    </div>
    <div class="card-body">

      <!-- Pesan Error -->
      <?php if (isset($_GET['error']) && $_GET['error'] == 'stok_tidak_cukup'): ?>
        <div class="alert alert-danger text-center">
          Stok tidak cukup untuk pengeluaran barang ini.
        </div>
      <?php endif; ?>

      <!-- Form Barang Keluar -->
      <form action="<?php echo BASEURL?>/barang/keluar" method="POST">

        <!-- Pilih Barang -->
        <div class="mb-3">
          <label class="form-label">Pilih Barang</label>
          <select name="id_barang" class="form-select" required>
            <option value="">-- Pilih Barang --</option>
            <?php foreach($barang as $b): ?>
              <option value="<?php echo $b['id_barang']; ?>">
                <?php echo $b['kode_barang'] . ' - ' . $b['nama_barang'] . ' (Stok: ' . $b['stok'] . ')'; ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <!-- Jumlah Keluar -->
        <div class="mb-3">
          <label class="form-label">Jumlah Keluar</label>
          <input type="number" name="jumlah" class="form-control" min="1" required>
        </div>

        <!-- Tujuan -->
        <div class="mb-3">
          <label class="form-label">Tujuan</label>
          <input type="text" name="tujuan" class="form-control" placeholder="Contoh: Toko A, Customer B" required>
        </div>

        <!-- Keterangan -->
        <div class="mb-3">
          <label class="form-label">Keterangan</label>
          <textarea name="keterangan" rows="2" class="form-control" placeholder="Opsional"></textarea>
        </div>

        <!-- Tombol Aksi -->
        <div class="d-flex justify-content-between">
          <a href="<?php echo BASEURL?>/barang" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-danger">Simpan Barang Keluar</button>
        </div>

      </form>
    </div>
  </div>
</div>