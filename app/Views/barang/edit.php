<div class="container mt-5">
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white text-center">
        <h4 class="mb-0">Form Edit Barang</h4>
      </div>
      <div class="card-body">
        <form action="<?php echo BASEURL?>/barang/edit/<?php echo $barang['id_barang']; ?>" method="POST">
          
          <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" value="<?php echo htmlspecialchars($barang['kode_barang']); ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="<?php echo htmlspecialchars($barang['nama_barang']); ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="kategori" class="form-select" required>
              <option value="">-- Pilih Kategori --</option>
              <option value="Kaos" <?php if($barang['kategori'] == 'Kaos') echo 'selected'; ?>>Kaos</option>
              <option value="Kemeja" <?php if($barang['kategori'] == 'Kemeja') echo 'selected'; ?>>Kemeja</option>
              <option value="Jaket" <?php if($barang['kategori'] == 'Jaket') echo 'selected'; ?>>Jaket</option>
              <option value="Celana" <?php if($barang['kategori'] == 'Celana') echo 'selected'; ?>>Celana</option>
              <option value="Sweater" <?php if($barang['kategori'] == 'Sweater') echo 'selected'; ?>>Sweater</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Ukuran</label>
            <input type="text" name="ukuran" class="form-control" placeholder="S, M, L, XL, dll" value="<?php echo htmlspecialchars($barang['ukuran']); ?>" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Warna</label>
            <input type="text" name="warna" class="form-control" value="<?php echo htmlspecialchars($barang['warna']); ?>" required>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Harga Beli</label>
              <input type="number" name="harga_beli" step="0.01" class="form-control" value="<?php echo htmlspecialchars($barang['harga_beli']); ?>" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Harga Jual</label>
              <input type="number" name="harga_jual" step="0.01" class="form-control" value="<?php echo htmlspecialchars($barang['harga_jual']); ?>" required>
            </div>
          </div>

          <div class="text-end">
            <button type="submit" class="btn btn-success">
              <i class="bi bi-save"></i> Update Barang
            </button>
            <a href="<?php echo BASEURL?>/barang" class="btn btn-secondary">Kembali</a>
          </div>

        </form>
      </div>
    </div>
</div>
