
<h1><?php echo $judul; ?></h1>


        <h6>Manajemen Barang</h6>
  
                <a href="<?php echo BASEURL?>/barang/tambah">
                    Tambah Barang Baru
                </a>
                <a href="<?php echo BASEURL?>/barang/barangMasuk">
                    Barang Masuk
                </a>
                <a href="<?php echo BASEURL?>/barang/keluar">
                    Barang Keluar
                </a>
          
                <a href="<?php echo BASEURL?>/barang/daftarMasuk">
                    Lihat Masuk
                </a>
                <a href="<?php echo BASEURL?>/barang/daftarKeluar">
                    Lihat Keluar
                </a>
   


        <h6>Daftar Stok Barang</h6>
  
            <table>
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Kategori</th>
                        <th>Ukuran</th>
                        <th>Warna</th>
                        <th>Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($barang)): ?>
                    <?php foreach ($barang as $b): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($b['kode_barang']); ?></td>
                            <td><?php echo htmlspecialchars($b['nama_barang']); ?></td>
                            <td><?php echo htmlspecialchars($b['kategori']); ?></td>
                            <td><?php echo htmlspecialchars($b['ukuran']); ?></td>
                            <td><?php echo htmlspecialchars($b['warna']); ?></td>
                            <td><?php echo htmlspecialchars($b['stok']); ?></td>
                            <td>Rp <?php echo number_format($b['harga_beli'], 0, ',', '.'); ?></td>
                            <td>Rp <?php echo number_format($b['harga_jual'], 0, ',', '.'); ?></td>
                            <td>
                                <div>
                                    <a href="<?php echo BASEURL?>/barang/edit/<?php echo $b['id_barang']; ?>">
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="9">
                            Belum ada data barang.
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>

