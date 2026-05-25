<?php

$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) {
    die("Koneksi gagal");
}

$sql = "
CREATE DATABASE IF NOT EXISTS ci3_crud_mahasiswa;
";

if ($conn->query($sql) === TRUE) {
    echo "Database berhasil dibuat<br>";
} else {
    echo "Error database: " . $conn->error;
}

$conn->select_db("ci3_crud_mahasiswa");

$sql2 = "
CREATE TABLE IF NOT EXISTS mahasiswa (
 id INT(11) NOT NULL AUTO_INCREMENT,
 nim VARCHAR(20) NOT NULL,
 nama VARCHAR(100) NOT NULL,
 prodi VARCHAR(100) NOT NULL,
 jenis_kelamin ENUM('Laki-laki','Perempuan') NOT NULL,
 semester INT(2) NOT NULL,
 alamat TEXT NOT NULL,
 no_hp VARCHAR(20) NOT NULL,
 created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
 updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 PRIMARY KEY (id),
 UNIQUE KEY unique_nim (nim)
);
";

if ($conn->query($sql2) === TRUE) {
    echo "Tabel mahasiswa berhasil dibuat<br>";
} else {
    echo "Error tabel: " . $conn->error;
}

$sql3 = "
INSERT INTO mahasiswa 
(nim, nama, prodi, jenis_kelamin, semester, alamat, no_hp)
VALUES
('221001', 'Andi Saputra', 'Teknik Informatika', 'Laki-laki', 3, 'Banda Aceh', '081234567890'),
('221002', 'Siti Aminah', 'Sistem Informasi', 'Perempuan', 5, 'Aceh Besar', '082345678901');
";

if ($conn->query($sql3) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data mungkin sudah ada";
}

$conn->close();

?>