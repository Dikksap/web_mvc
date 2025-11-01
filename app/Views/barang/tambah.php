
<div class="container mt-5">
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white text-center">
      <h4 class="mb-0">Form Tambah Barang</h4>
    </div>
    <div class="card-body">
      <form action="<?php echo BASEURL ?>/barang/tambah" method="POST">

        <div class="mb-3">
          <label class="form-label">Kode Barang</label>
          <input type="text" name="kode_barang" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Nama Barang</label>
          <input type="text" name="nama_barang" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Kategori</label>
          <select name="kategori" class="form-select" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="Kaos">Kaos</option>
            <option value="Kemeja">Kemeja</option>
            <option value="Jaket">Jaket</option>
            <option value="Celana">Celana</option>
            <option value="Sweater">Sweater</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Ukuran</label>
          <input type="text" name="ukuran" class="form-control" placeholder="S, M, L, XL, dll" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Warna</label>
          <input type="text" name="warna" class="form-control" required>
        </div>

        <div class="d-flex justify-content-between">
          <a href="<?php echo BASEURL ?>/barang" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-success">Simpan Barang</button>
        </div>

      </form>
    </div>
  </div>
</div>