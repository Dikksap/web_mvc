<h2><?php echo $judul; ?></h2>

<form action="<?php echo BASEURL?>/barang/barangMasuk" method="POST">

  <label>Pilih Barang</label><br>
  <select name="id_barang" required>
    <option value="">-- Pilih Barang --</option>
    <?php foreach($barang as $b): ?>
      <option value="<?php echo $b['id_barang']; ?>">
        <?php echo $b['kode_barang'] . ' - ' . $b['nama_barang'] . ' (Stok: ' . $b['stok'] . ')'; ?>
      </option>
    <?php endforeach; ?>
  </select>
  <br><br>

  <label>Jumlah Masuk</label><br>
  <input type="number" name="jumlah" min="1" required>
  <br><br>

  <label>Harga Beli</label><br>
  <input type="number" name="harga_beli" step="0.01" required>
  <br><br>

  <label>Keterangan</label><br>
  <textarea name="keterangan" rows="2" placeholder="Opsional"></textarea>
  <br><br>

  <button type="submit">Simpan Barang Masuk</button>

</form>
