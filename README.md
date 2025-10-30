# Aplikasi Manajemen Barang (Pencatatan Baju)

Aplikasi web berbasis PHP MVC untuk mengelola stok barang, khususnya baju atau pakaian. Aplikasi ini memungkinkan pengguna untuk menambah, mengedit, menghapus barang, mencatat barang masuk, dan melihat daftar stok serta riwayat masuk.

## Fitur Utama
- **Halaman Home**: Halaman utama aplikasi.
- **Manajemen Barang**:
  - Daftar barang dengan detail (kode, nama, kategori, ukuran, warna, stok, harga beli, harga jual).
  - Tambah barang baru.
  - Edit barang.
  - Hapus barang.
  - Catat barang masuk (update stok dan simpan riwayat).
  - Lihat daftar barang masuk.
- **Navigasi**: Menu untuk Home dan Barang.
- **UI**: Menggunakan Bootstrap 5 untuk responsif, Font Awesome untuk ikon, dan CSS custom.

## Persyaratan
- **PHP**: Versi 7.4 atau lebih tinggi.
- **MySQL**: Versi 5.7 atau lebih tinggi (melalui XAMPP atau server serupa).
- **Web Server**: Apache (direkomendasikan XAMPP untuk development lokal).
- **Browser**: Modern browser seperti Chrome, Firefox, atau Edge.

## Instalasi dan Setup
1. **Install XAMPP**:
   - Download dan install XAMPP dari [situs resmi](https://www.apachefriends.org/).
   - Start Apache dan MySQL dari XAMPP Control Panel.

2. **Siapkan Proyek**:
   - Copy seluruh folder proyek ke `c:/xampp/htdocs/web_mvc` (atau sesuaikan path di config).
   - Pastikan struktur folder seperti ini:
     ```
     web_mvc/
     ├── app/
     │   ├── config/
     │   │   └── config.php
     │   ├── Controllers/
     │   │   ├── Home.php
     │   │   └── Barang.php
     │   ├── Core/
     │   │   ├── App.php
     │   │   ├── Controller.php
     │   │   └── Database.php
     │   ├── Models/
     │   │   └── BarangModel.php
     │   ├── Views/
     │   │   ├── home/
     │   │   │   └── index.php
     │   │   ├── barang/
     │   │   │   ├── index.php
     │   │   │   ├── tambah.php
     │   │   │   ├── edit.php
     │   │   │   ├── barang-masuk.php
     │   │   │   └── daftar-masuk.php
     │   │   └── templates/
     │   │       ├── header.php
     │   │       └── footer.php
     │   └── init.php
     ├── public/
     │   ├── .htaccess
     │   ├── index.php
     │   ├── info.php
     │   └── css/
     │       └── style.css
     └── README.md
     ```

3. **Konfigurasi Database**:
   - Buka phpMyAdmin di `http://localhost/phpmyadmin`.
   - Buat database baru bernama `mvc_app`.
   - Jalankan SQL berikut untuk membuat tabel (berdasarkan model):

     ```sql
     -- Tabel barang
     CREATE TABLE barang (
         id_barang INT AUTO_INCREMENT PRIMARY KEY,
         kode_barang VARCHAR(50) NOT NULL,
         nama_barang VARCHAR(100) NOT NULL,
         kategori VARCHAR(50),
         ukuran VARCHAR(20),
         warna VARCHAR(30),
         stok INT DEFAULT 0,
         harga_beli DECIMAL(10,2) DEFAULT 0,
         harga_jual DECIMAL(10,2) DEFAULT 0
     );

     -- Tabel barang_masuk (untuk riwayat masuk)
     CREATE TABLE barang_masuk (
         id INT AUTO_INCREMENT PRIMARY KEY,
         id_barang INT NOT NULL,
         jumlah INT NOT NULL,
         harga_beli DECIMAL(10,2) NOT NULL,
         keterangan TEXT,
         tanggal_masuk TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
         FOREIGN KEY (id_barang) REFERENCES barang(id_barang) ON DELETE CASCADE
     );

     -- Opsional: Tabel barang_keluar (jika akan diimplementasikan)
     CREATE TABLE barang_keluar (
         id INT AUTO_INCREMENT PRIMARY KEY,
         id_barang INT NOT NULL,
         jumlah INT NOT NULL,
         harga_jual DECIMAL(10,2) NOT NULL,
         keterangan TEXT,
         tanggal_keluar TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
         FOREIGN KEY (id_barang) REFERENCES barang(id_barang) ON DELETE CASCADE
     );
     ```

   - Edit `app/config/config.php` jika perlu (default: localhost, root, no password, DB 'mvc_app').

4. **Jalankan Server**:
   - Pastikan Apache dan MySQL running di XAMPP.
   - Akses aplikasi di `http://localhost/web_mvc/public`.

## Cara Penggunaan
1. **Akses Aplikasi**:
   - Buka browser dan kunjungi `http://localhost/web_mvc/public`.
   - Halaman Home akan muncul.

2. **Navigasi**:
   - **Home**: Kembali ke halaman utama.
   - **Barang**: Menu utama untuk manajemen stok.

3. **Fitur Manajemen Barang**:
   - **Daftar Barang** (`/barang`):
     - Lihat semua barang dalam tabel.
     - Link cepat: Tambah Barang Baru, Barang Masuk, Barang Keluar (belum full implementasi), Lihat Masuk, Lihat Keluar.
     - Kolom: Kode, Nama, Kategori, Ukuran, Warna, Stok, Harga Beli, Harga Jual.
     - Aksi: Edit (klik "Edit" di baris barang).

   - **Tambah Barang** (`/barang/tambah`):
     - Isi form: Kode Barang, Nama, Kategori, Ukuran, Warna, Harga Beli, Harga Jual.
     - Stok awal = 0.
     - Submit untuk simpan, redirect ke daftar barang.

   - **Edit Barang** (`/barang/edit/{id}`):
     - Form pre-filled dengan data barang.
     - Update field yang diperlukan (stok tidak diubah di sini).
     - Submit untuk update.

   - **Hapus Barang**:
     - Implementasi ada di controller, tapi UI mungkin perlu link hapus (saat ini via edit atau custom).

   - **Barang Masuk** (`/barang/barangMasuk`):
     - Pilih barang dari dropdown.
     - Isi: Jumlah, Harga Beli, Keterangan.
     - Submit: Tambah ke riwayat masuk dan update stok (+jumlah).

   - **Daftar Masuk** (`/barang/daftarMasuk`):
     - Lihat riwayat barang masuk dengan detail barang, jumlah, harga, keterangan, tanggal.

4. **Catatan**:
   - Aplikasi belum punya autentikasi; akses bebas.
   - Barang Keluar disebutkan di UI tapi belum full implementasi di controller/model (bisa ditambah nanti).
   - Error handling dasar; cek console browser jika ada issue.
   - Untuk production: Gunakan HTTPS, tambah security (prepared statements sudah ada), dan hosting real.

## Troubleshooting
- **Database Connection Error**: Cek config.php dan pastikan MySQL running + DB dibuat.
- **404 Not Found**: Pastikan .htaccess di public/ benar dan mod_rewrite enabled di Apache.
- **Stok Tidak Update**: Pastikan foreign key dan query di model benar.
- **UI Tidak Responsif**: Pastikan Bootstrap CDN loaded.

## Kontribusi
- Fork repo ini.
- Buat branch untuk fitur baru (e.g., barang keluar full).
- Submit pull request.

## Lisensi
MIT License - bebas digunakan dan dimodifikasi.

