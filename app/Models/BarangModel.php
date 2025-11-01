<?php

class BarangModel  {
    private $table = 'barang';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getBarang() {
        $this->db->query("SELECT * FROM {$this->table}");
        return $this->db->resultSet();
    }

    public function tambahBarang($data){
        $query = "INSERT INTO {$this->table} (kode_barang, nama_barang, kategori, ukuran, warna, stok) 
                  VALUES (:kode_barang, :nama_barang, :kategori, :ukuran, :warna, :stok)";
        $this->db->query($query);
        $this->db->bind(':kode_barang', $data['kode_barang']);
        $this->db->bind(':nama_barang', $data['nama_barang']);
        $this->db->bind(':kategori', $data['kategori']);
        $this->db->bind(':ukuran', $data['ukuran']);
        $this->db->bind(':warna', $data['warna']);
        $this->db->bind(':stok', 0); // Set stok awal ke 0
        $this->db->execute();
        return $this->db->rowCount();
    }


public function tambahBarangMasuk($id_barang, $jumlah, $keterangan){
    $query = "INSERT INTO barang_masuk (id_barang, jumlah,keterangan, tanggal_masuk) 
              VALUES (:id_barang, :jumlah, :keterangan, NOW())";
    $this->db->query($query);
    $this->db->bind(':id_barang', $id_barang);
    $this->db->bind(':jumlah', $jumlah);
    $this->db->bind(':keterangan', $keterangan);
    $this->db->execute();
    return $this->db->rowCount();
}

public function updateStok($id_barang, $jumlah){
    $query = "UPDATE barang 
              SET stok = stok + :jumlah 
              WHERE id_barang = :id_barang";
    $this->db->query($query);
    $this->db->bind(':jumlah', $jumlah);
    $this->db->bind(':id_barang', $id_barang);
    $this->db->execute();
    return $this->db->rowCount();
}

    public function ubahBarang($data) {
        $query = "UPDATE {$this->table} 
                  SET kode_barang = :kode_barang, nama_barang = :nama_barang, kategori = :kategori, 
                      ukuran = :ukuran, warna = :warna
                  WHERE id_barang = :id_barang";

        $this->db->query($query);
        $this->db->bind(':kode_barang', $data['kode_barang']);
        $this->db->bind(':nama_barang', $data['nama_barang']);
        $this->db->bind(':kategori', $data['kategori']);
        $this->db->bind(':ukuran', $data['ukuran']);
        $this->db->bind(':warna', $data['warna']);
        $this->db->bind(':id_barang', $data['id_barang']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusBarang($id) {
        $this->db->query("DELETE FROM {$this->table} WHERE id_barang = :id_barang");
        $this->db->bind(':id_barang', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusBarangMasuk($id) {
        // Ambil data masuk untuk restore stok
        $this->db->query("SELECT id_barang, jumlah FROM barang_masuk WHERE id_masuk = :id");
        $this->db->bind(':id', $id);
        $data = $this->db->single();
        if ($data) {
            // Restore stok
            $this->updateStok($data['id_barang'], -$data['jumlah']); // Kurangi stok yang sebelumnya ditambah
            // Hapus record
            $this->db->query("DELETE FROM barang_masuk WHERE id_masuk = :id");
            $this->db->bind(':id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }
        return 0;
    }

    public function hapusBarangKeluar($id) {
        // Ambil data keluar untuk restore stok
        $this->db->query("SELECT id_barang, jumlah FROM barang_keluar WHERE id_keluar = :id");
        $this->db->bind(':id', $id);
        $data = $this->db->single();
        if ($data) {
            // Restore stok
            $this->updateStok($data['id_barang'], $data['jumlah']); // Tambah stok yang sebelumnya dikurangi
            // Hapus record
            $this->db->query("DELETE FROM barang_keluar WHERE id_keluar = :id");
            $this->db->bind(':id', $id);
            $this->db->execute();
            return $this->db->rowCount();
        }
        return 0;
    }



    public function getBarangById($id) {
        $this->db->query("SELECT * FROM {$this->table} WHERE id_barang = :id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getBarangMasuk() {
        $this->db->query("SELECT bm.*, b.kode_barang, b.nama_barang
                          FROM barang_masuk bm
                          JOIN barang b ON bm.id_barang = b.id_barang
                          ORDER BY bm.tanggal_masuk DESC");
        return $this->db->resultSet();
    }

    public function tambahBarangKeluar($id_barang, $jumlah, $tujuan, $keterangan){
        $query = "INSERT INTO barang_keluar (id_barang, jumlah, tujuan, keterangan, tanggal_keluar)
                  VALUES (:id_barang, :jumlah, :tujuan, :keterangan, NOW())";
        $this->db->query($query);
        $this->db->bind(':id_barang', $id_barang);
        $this->db->bind(':jumlah', $jumlah);
        $this->db->bind(':tujuan', $tujuan);
        $this->db->bind(':keterangan', $keterangan);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getBarangKeluar() {
        $this->db->query("SELECT bk.*, b.kode_barang, b.nama_barang
                          FROM barang_keluar bk
                          JOIN barang b ON bk.id_barang = b.id_barang
                          ORDER BY bk.tanggal_keluar DESC");
        return $this->db->resultSet();
    }
}