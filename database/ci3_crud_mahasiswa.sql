CREATE DATABASE IF NOT EXISTS ci3_crud_mahasiswa;
USE ci3_crud_mahasiswa;
DROP TABLE IF EXISTS mahasiswa;
CREATE TABLE mahasiswa (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO mahasiswa (nim, nama, prodi, jenis_kelamin, semester, alamat, no_hp) VALUES
('221001', 'Andi Saputra', 'Teknik Informatika', 'Laki-laki', 3, 'Banda Aceh', '081234567890'),
('221002', 'Siti Aminah', 'Sistem Informasi', 'Perempuan', 5, 'Aceh Besar', '082345678901');