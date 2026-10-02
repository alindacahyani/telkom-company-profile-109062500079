CREATE DATABASE IF NOT EXISTS db_company_profile;
USE db_company_profile;

CREATE TABLE IF NOT EXISTS program_studi (
    id_prodi INT AUTO_INCREMENT PRIMARY KEY,
    nama_prodi VARCHAR(100) NOT NULL,
    jenjang VARCHAR(10) NOT NULL,
    deskripsi TEXT
);

INSERT INTO program_studi (nama_prodi, jenjang, deskripsi) VALUES
('S1 Sistem Informasi', 'S1', 'Fokus pada tata kelola teknologi informasi, analisis sistem, dan integrasi bisnis.'),
('S1 Informatika', 'S1', 'Fokus pada rekayasa perangkat lunak, kecerdasan buatan, dan pengembangan algoritma.'),
('S1 Desain Komunikasi Visual', 'S1', 'Fokus pada desain grafis, ilustrasi, UI/UX, dan komunikasi media visual.'),
('D3 Rekayasa Perangkat Lunak Aplikasi', 'D3', 'Fokus pada keterampilan praktis pemrograman dan pengembangan aplikasi web/mobile.');