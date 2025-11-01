<h2>Form Edit Barang</h2>

<form action="<?php echo BASEURL?>/barang/edit/<?php echo $barang['id_barang']; ?>" method="POST">

  <label>Kode Barang</label><br>
  <input type="text" name="kode_barang" value="<?php echo htmlspecialchars($barang['kode_barang']); ?>" required><br><br>

  <label>Nama Barang</label><br>
  <input type="text" name="nama_barang" value="<?php echo htmlspecialchars($barang['nama_barang']); ?>" required><br><br>

  <label>Kategori</label><br>
  <select name="kategori" required>
    <option value="">-- Pilih Kategori --</option>
    <option value="Kaos" <?php if($barang['kategori'] == 'Kaos') echo 'selected'; ?>>Kaos</option>
    <option value="Kemeja" <?php if($barang['kategori'] == 'Kemeja') echo 'selected'; ?>>Kemeja</option>
    <option value="Jaket" <?php if($barang['kategori'] == 'Jaket') echo 'selected'; ?>>Jaket</option>
    <option value="Celana" <?php if($barang['kategori'] == 'Celana') echo 'selected'; ?>>Celana</option>
    <option value="Sweater" <?php if($barang['kategori'] == 'Sweater') echo 'selected'; ?>>Sweater</option>
  </select><br><br>

  <label>Ukuran</label><br>
  <input type="text" name="ukuran" placeholder="S, M, L, XL, dll" value="<?php echo htmlspecialchars($barang['ukuran']); ?>" required><br><br>

  <label>Warna</label><br>
  <input type="text" name="warna" value="<?php echo htmlspecialchars($barang['warna']); ?>" required><br><br>

  <button type="submit">Update Barang</button>
  <a href="<?php echo BASEURL?>/barang">Kembali</a>

</form>
