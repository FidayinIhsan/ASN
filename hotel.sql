CREATE DATABASE hotel_db;
USE hotel_db;

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    tipe_kamar VARCHAR(50),
    checkin DATE,
    checkout DATE,
    status VARCHAR(50)
);

CREATE TABLE tamu (
    id_tamu INT AUTO_INCREMENT PRIMARY KEY,
    nama_tamu VARCHAR(100),
    email VARCHAR(100),
    no_hp VARCHAR(20)
);

CREATE TABLE kamar (
    id_kamar INT AUTO_INCREMENT PRIMARY KEY,
    tipe_kamar VARCHAR(50),
    harga_per_malam DECIMAL(10,2),
    jumlah_kamar INT
);

CREATE TABLE pembayaran (
    id_pembayaran INT AUTO_INCREMENT PRIMARY KEY,
    id_booking INT,
    metode_pembayaran VARCHAR(50),
    jumlah_bayar DECIMAL(10,2),
    tanggal_bayar DATE,
    FOREIGN KEY (id_booking) REFERENCES bookings(id)
);
