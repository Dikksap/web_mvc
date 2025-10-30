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
        $query = "INSERT INTO {$this->table} (kode_barang, nama_barang, kategori, ukuran, warna, stok, harga_beli, harga_jual) 
                  VALUES (:kode_barang, :nama_barang, :kategori, :ukuran, :warna, :stok, :harga_beli, :harga_jual)";
        $this->db->query($query);
        $this->db->bind(':kode_barang', $data['kode_barang']);
        $this->db->bind(':nama_barang', $data['nama_barang']);
        $this->db->bind(':kategori', $data['kategori']);
        $this->db->bind(':ukuran', $data['ukuran']);
        $this->db->bind(':warna', $data['warna']);
        $this->db->bind(':stok', 0); // Set stok awal ke 0
        $this->db->bind(':harga_beli', $data['harga_beli']);
        $this->db->bind(':harga_jual', $data['harga_jual']);
        $this->db->execute();
        return $this->db->rowCount();
    }


public function tambahBarangMasuk($id_barang, $jumlah, $harga_beli, $keterangan){
    $query = "INSERT INTO barang_masuk (id_barang, jumlah, harga_beli, keterangan, tanggal_masuk) 
              VALUES (:id_barang, :jumlah, :harga_beli, :keterangan, NOW())";
    $this->db->query($query);
    $this->db->bind(':id_barang', $id_barang);
    $this->db->bind(':jumlah', $jumlah);
    $this->db->bind(':harga_beli', $harga_beli);
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
                      ukuran = :ukuran, warna = :warna, harga_beli = :harga_beli, harga_jual = :harga_jual 
                  WHERE id_barang = :id_barang";

        $this->db->query($query);
        $this->db->bind(':kode_barang', $data['kode_barang']);
        $this->db->bind(':nama_barang', $data['nama_barang']);
        $this->db->bind(':kategori', $data['kategori']);
        $this->db->bind(':ukuran', $data['ukuran']);
        $this->db->bind(':warna', $data['warna']);
        $this->db->bind(':harga_beli', $data['harga_beli']);
        $this->db->bind(':harga_jual', $data['harga_jual']);
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
}