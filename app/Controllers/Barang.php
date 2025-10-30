<?php

class Barang extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->model('BarangModel')->getBarang();
        $this->view('barang/index', $data);
    }

    public function tambah() {
        $data['judul'] = 'Tambah Barang';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($this->model('BarangModel')->tambahBarang($_POST) > 0) {
                header('Location: ' . BASEURL . '/barang');
                exit;
            } else {
                header('Location: ' . BASEURL . '/barang/tambah');
                exit;
            }
        } else {
            $data['judul'] = 'Tambah Barang';
            $this->view('barang/tambah', $data);
        }
        $this->view('barang/tambah', $data);
    }

    public function edit($id) {
        // Implementasi edit barang jika diperlukan
        $data['judul'] = 'Edit Barang';
        $data['barang'] = $this->model('BarangModel')->getBarangById($id);
        if (!$data['barang']) {
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_POST['id_barang'] = $id;
            if ($this->model('BarangModel')->ubahBarang($_POST) > 0) {
                header('Location: ' . BASEURL . '/barang');
                exit;
            } else {
                header('Location: ' . BASEURL . '/barang/edit/' . $id);
                exit;
            }
        }
        $this->view('barang/edit', $data);

    
    }
public function hapus($id) {
        if ($this->model('BarangModel')->hapusBarang($id) > 0) {
            header('Location: ' . BASEURL . '/barang');
            exit;
        } else {
            header('Location: ' . BASEURL . '/barang');
            exit;
        }
    }
  public function barangMasuk(){
    $data['judul'] = 'Barang Masuk';
    $data['barang'] = $this->model('BarangModel')->getBarang();
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id_barang   = $_POST['id_barang'];
        $jumlah      = $_POST['jumlah'];
        $harga_beli  = $_POST['harga_beli'];
        $keterangan  = $_POST['keterangan'];

        // Simpan ke tabel barang_masuk
        $this->model('BarangModel')->tambahBarangMasuk($id_barang, $jumlah, $harga_beli, $keterangan);

        // Update stok barang
        $this->model('BarangModel')->updateStok($id_barang, $jumlah);

        header('Location:'. BASEURL .' /barang');
        exit;
    }

    $this->view('barang/barang-masuk', $data);
}

    public function daftarMasuk() {
        $data['judul'] = 'Daftar Barang Masuk';
        $data['barang_masuk'] = $this->model('BarangModel')->getBarangMasuk();
        $this->view('barang/daftar-masuk', $data);
    }

}