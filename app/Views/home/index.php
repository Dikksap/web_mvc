<!-- <h1></h1>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>email</th>
        <th>phone</th>
    </tr>

    <?php $no = 1; ?>
    <?php foreach ($orang as $o) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $o['name']; ?></td>
            <td><?= $o['email']; ?></td>
            <td><?= $o['phone']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<br>

<a href="<?php echo BASEURL?>/home/about">Tentang Kami</a> -->
<div class="container py-5">
  <!-- Judul Halaman -->
  <div class="text-center mb-5">
    <h1 class="fw-bold text-primary"><?= $judul; ?></h1>
    <p class="text-muted">Kelola data barang masuk dan keluar dengan mudah.</p>
  </div>

  <!-- Tombol Navigasi -->
  <div class="row g-3 justify-content-center">
    <div class="col-12 col-md-4 col-lg-3">
      <a href="<?= BASEURL ?>/barang" class="btn btn-dark w-100 py-3 shadow-sm">
        <i class="bi bi-box-seam me-2"></i> Daftar Barang
      </a>
    </div>

    <div class="col-12 col-md-4 col-lg-3">
      <a href="<?= BASEURL ?>/barang/tambah" class="btn btn-primary w-100 py-3 shadow-sm">
        <i class="bi bi-plus-circle me-2"></i> Tambah Barang Baru
      </a>
    </div>

    <div class="col-12 col-md-4 col-lg-3">
      <a href="<?= BASEURL ?>/barang/barangMasuk" class="btn btn-success w-100 py-3 shadow-sm">
        <i class="bi bi-box-arrow-in-down me-2"></i> Barang Masuk
      </a>
    </div>

    <div class="col-12 col-md-4 col-lg-3">
      <a href="<?= BASEURL ?>/barang/keluar" class="btn btn-danger w-100 py-3 shadow-sm">
        <i class="bi bi-box-arrow-up me-2"></i> Barang Keluar
      </a>
    </div>

    <div class="col-12 col-md-4 col-lg-3">
      <a href="<?= BASEURL ?>/barang/daftarMasuk" class="btn btn-info w-100 py-3 shadow-sm text-white">
        <i class="bi bi-clipboard-data me-2"></i> Lihat Barang Masuk
      </a>
    </div>

    <div class="col-12 col-md-4 col-lg-3">
      <a href="<?= BASEURL ?>/barang/daftarKeluar" class="btn btn-warning w-100 py-3 shadow-sm text-white">
        <i class="bi bi-clipboard-check me-2"></i> Lihat Barang Keluar
      </a>
    </div>
  </div>
</div>

                