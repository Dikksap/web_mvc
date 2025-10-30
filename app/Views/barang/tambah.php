<h2>Form Tambah Barang</h2>

<form action="<?php echo BASEURL?>/barang/tambah" method="POST">

  <label>Kode Barang</label><br>
  <input type="text" name="kode_barang" required><br><br>

  <label>Nama Barang</label><br>
  <input type="text" name="nama_barang" required><br><br>

  <label>Kategori</label><br>
  <select name="kategori" required>
    <option value="">-- Pilih Kategori --</option>
    <option value="Kaos">Kaos</option>
    <option value="Kemeja">Kemeja</option>
    <option value="Jaket">Jaket</option>
    <option value="Celana">Celana</option>
    <option value="Sweater">Sweater</option>
  </select><br><br>

  <label>Ukuran</label><br>
  <input type="text" name="ukuran" placeholder="S, M, L, XL, dll" required><br><br>

  <label>Warna</label><br>
  <input type="text" name="warna" required><br><br>

  <label>Harga Beli</label><br>
  <input type="number" name="harga_beli" step="0.01" required><br><br>

  <label>Harga Jual</label><br>
  <input type="number" name="harga_jual" step="0.01" required><br><br>

  <button type="submit">Simpan Barang</button>
  <a href="<?php echo BASEURL?>/barang">Kembali</a>

</form>
