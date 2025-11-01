<div class="container mt-4">
  <!-- Judul Halaman -->
  <div class="text-center mb-4">
    <h1 class="fw-bold"><?php echo $judul; ?></h1>
    <h6 class="text-muted">Manajemen Barang</h6>
  </div>

  <!-- Menu Navigasi -->
<div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
    <a href="<?php echo BASEURL?>/barang/tambah" class="btn btn-primary btn-sm">Tambah Barang Baru</a>
    <a href="<?php echo BASEURL?>/barang/barangMasuk" class="btn btn-success btn-sm">Tambah Barang Masuk</a>
    <a href="<?php echo BASEURL?>/barang/keluar" class="btn btn-danger btn-sm">Tambah Barang Keluar</a>
    <a href="<?php echo BASEURL?>/barang/daftarMasuk" class="btn btn-info btn-sm text-white">Lihat Barang Masuk</a>
    <a href="<?php echo BASEURL?>/barang/daftarKeluar" class="btn btn-warning btn-sm text-white">Lihat Barang Keluar</a>
  </div>

  <!-- Daftar Stok Barang -->
  <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
      <h6 class="mb-0">Daftar Stok Barang</h6>
    </div>
    <div class="card-body p-0">
      <table class="table table-bordered table-hover mb-0 align-middle">
        <thead class="table-light text-center">
          <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Ukuran</th>
            <th>Warna</th>
            <th>Stok</th>
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
                <td class="text-center"><?php echo htmlspecialchars($b['stok']); ?></td>
                <td class="text-center">
                  <a href="<?php echo BASEURL?>/barang/edit/<?php echo $b['id_barang']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>
                  <a href="<?php echo BASEURL?>/barang/hapus/<?php echo $b['id_barang']; ?>" 
                     onclick="return confirm('Yakin hapus barang ini?')" 
                     class="btn btn-sm btn-outline-danger">Hapus</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="7" class="text-center text-muted py-3">
                Belum ada data barang.
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>