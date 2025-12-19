CREATE DATABASE mcc_booking_system;
USE mcc_booking_system;

CREATE TABLE Subsektor_Ekraf (
    id_subsektor INT AUTO_INCREMENT PRIMARY KEY,
    nama_subsektor VARCHAR(100) NOT NULL
);

CREATE TABLE Kategori_Ruangan (
    id_kategori INT AUTO_INCREMENT PRIMARY KEY,
    nama_kategori VARCHAR(50) NOT NULL,
    deskripsi TEXT
);

CREATE TABLE Lantai (
    id_lantai INT AUTO_INCREMENT PRIMARY KEY,
    nama_lantai VARCHAR(50) NOT NULL
);

CREATE TABLE Fasilitas_Master (
    id_fasilitas INT AUTO_INCREMENT PRIMARY KEY,
    nama_fasilitas VARCHAR(100) NOT NULL
);

CREATE TABLE Admin (
    id_admin INT AUTO_INCREMENT PRIMARY KEY,
    nama_admin VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) DEFAULT 'Staff'
);

CREATE TABLE Komunitas (
    id_komunitas INT AUTO_INCREMENT PRIMARY KEY,
    nama_komunitas VARCHAR(100) NOT NULL,
    alamat_sekretariat TEXT,
    id_subsektor INT,
    FOREIGN KEY (id_subsektor) REFERENCES Subsektor_Ekraf(id_subsektor)
);

CREATE TABLE Peminjam (
    id_peminjam INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100) NOT NULL,
    nik VARCHAR(16) NOT NULL UNIQUE,
    no_hp VARCHAR(15) NOT NULL,
    email VARCHAR(100),
    id_komunitas INT,
    FOREIGN KEY (id_komunitas) REFERENCES Komunitas(id_komunitas)
);

CREATE TABLE Ruangan (
    id_ruangan INT AUTO_INCREMENT PRIMARY KEY,
    nama_ruangan VARCHAR(100) NOT NULL,
    kapasitas INT NOT NULL,
    harga_sewa DECIMAL(10, 2) DEFAULT 0,
    id_lantai INT,
    id_kategori INT,
    FOREIGN KEY (id_lantai) REFERENCES Lantai(id_lantai),
    FOREIGN KEY (id_kategori) REFERENCES Kategori_Ruangan(id_kategori)
);

CREATE TABLE Inventaris_Ruangan (
    id_inventaris INT AUTO_INCREMENT PRIMARY KEY,
    id_ruangan INT,
    id_fasilitas INT,
    jumlah INT DEFAULT 1,
    kondisi VARCHAR(50) DEFAULT 'Baik',
    FOREIGN KEY (id_ruangan) REFERENCES Ruangan(id_ruangan),
    FOREIGN KEY (id_fasilitas) REFERENCES Fasilitas_Master(id_fasilitas)
);

CREATE TABLE Booking (
    no_booking INT AUTO_INCREMENT PRIMARY KEY,
    tgl_request DATETIME DEFAULT CURRENT_TIMESTAMP,
    tgl_acara DATE NOT NULL,
    jam_mulai TIME NOT NULL,
    jam_selesai TIME NOT NULL,
    nama_event VARCHAR(150) NOT NULL,
    deskripsi_kegiatan TEXT,
    status_terakhir VARCHAR(20) DEFAULT 'Pending',
    id_peminjam INT,
    id_ruangan INT,
    id_admin INT,
    FOREIGN KEY (id_peminjam) REFERENCES Peminjam(id_peminjam),
    FOREIGN KEY (id_ruangan) REFERENCES Ruangan(id_ruangan),
    FOREIGN KEY (id_admin) REFERENCES Admin(id_admin)
);

CREATE TABLE Status_Log (
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    no_booking INT,
    status_baru VARCHAR(20),
    waktu_update DATETIME DEFAULT CURRENT_TIMESTAMP,
    keterangan TEXT,
    FOREIGN KEY (no_booking) REFERENCES Booking(no_booking)
);

CREATE TABLE Ulasan_Feedback (
    id_ulasan INT AUTO_INCREMENT PRIMARY KEY,
    no_booking INT,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    komentar TEXT,
    FOREIGN KEY (no_booking) REFERENCES Booking(no_booking)
);

CREATE TABLE Pembayaran (
    id_pembayaran INT AUTO_INCREMENT PRIMARY KEY,
    no_booking INT,
    tgl_bayar DATETIME DEFAULT CURRENT_TIMESTAMP,
    jumlah_bayar DECIMAL(10, 2),
    metode_bayar VARCHAR(50), 
    bukti_bayar VARCHAR(255), 
    status_verifikasi VARCHAR(20) DEFAULT 'Pending',
    FOREIGN KEY (no_booking) REFERENCES Booking(no_booking)
);