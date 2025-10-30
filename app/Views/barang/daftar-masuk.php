<h2>Daftar Barang Masuk</h2>

<a href="<?php echo BASEURL?>/barang/barangMasuk">Tambah Barang Masuk</a> |
<a href="<?php echo BASEURL?>/barang">Kembali ke Daftar Barang</a>

<br><br>

<table border="1" cellpadding="8" cellspacing="0">
  <thead>
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
        <td colspan="7">Belum ada data barang masuk.</td>
      </tr>
    <?php endif; ?>
  </tbody>
</table>
