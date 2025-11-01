
<div class="container mt-5">
  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-danger">Daftar Barang Keluar</h2>
    <div>
      <a href="<?php echo BASEURL?>/barang/keluar" class="btn btn-danger btn-sm">+ Tambah Barang Keluar</a>
      <a href="<?php echo BASEURL?>/barang" class="btn btn-secondary btn-sm">Kembali ke Daftar Barang</a>
    </div>
  </div>

  <!-- Tabel Data -->
  <div class="card shadow-sm">
    <div class="card-body p-0">
      <table class="table table-bordered table-hover mb-0 align-middle">
        <thead class="table-light text-center">
          <tr>
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Keluar</th>
            <th>Tujuan</th>
            <th>Tanggal Keluar</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($barang_keluar)): ?>
            <?php $no = 1; ?>
            <?php foreach($barang_keluar as $bk): ?>
              <tr>
                <td class="text-center"><?php echo $no++; ?></td>
                <td><?php echo htmlspecialchars($bk['kode_barang']); ?></td>
                <td><?php echo htmlspecialchars($bk['nama_barang']); ?></td>
                <td class="text-center"><?php echo htmlspecialchars($bk['jumlah']); ?></td>
                <td><?php echo htmlspecialchars($bk['tujuan']); ?></td>
                <td class="text-center"><?php echo date('d-m-Y H:i', strtotime($bk['tanggal_keluar'])); ?></td>
                <td><?php echo htmlspecialchars($bk['keterangan']); ?></td>
                <td class="text-center">
                  <a href="<?php echo BASEURL?>/barang/hapusKeluar/<?php echo $bk['id_keluar']; ?>"
                     class="btn btn-sm btn-outline-danger"
                     onclick="return confirm('Yakin hapus record barang keluar ini?')">
                     Hapus
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr>
              <td colspan="8" class="text-center text-muted py-3">
                Belum ada data barang keluar.
              </td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>