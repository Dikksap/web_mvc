<div class="container mt-4">
  <h2 class="text-center mb-4"><?php echo $judul; ?></h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <form action="<?php echo BASEURL?>/barang/barangMasuk" method="POST">
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

        <div class="mb-3">
          <label class="form-label">Jumlah Masuk</label>
          <input type="number" name="jumlah" class="form-control" min="1" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Harga Beli</label>
          <input type="number" name="harga_beli" class="form-control" step="0.01" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Keterangan</label>
          <textarea name="keterangan" class="form-control" rows="2" placeholder="Opsional"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan Barang Masuk</button>
      </form>
    </div>
  </div>
</div>
