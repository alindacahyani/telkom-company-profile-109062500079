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

CREATE TABLE IF NOT EXISTS berita (
    id_berita INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    isi TEXT NOT NULL,
    tanggal_publikasi DATE NOT NULL
);

INSERT INTO berita (judul, isi, tanggal_publikasi) VALUES
('Telkom University Purwokerto Resmikan Gedung Laboratorium Baru', 'Telkom University Purwokerto resmi meresmikan gedung laboratorium riset dan teknologi baru untuk menunjang kegiatan praktikum mahasiswa Informatika dan Sistem Informasi.', '2026-09-15'),
('Mahasiswa Telkom University Raih Juara Kompetisi Inovasi Digital', 'Tim mahasiswa berhasil merebut juara pertama dalam ajang kompetisi inovasi teknologi tingkat nasional melalui aplikasi solusi manajemen rantai pasok.', '2026-09-28'),
('Pendaftaran Beasiswa Pengelolaan Dana Abadi Resmi Dibuka', 'Telkom University kembali membuka program beasiswa bagi mahasiswa berprestasi. Pendaftaran dapat dilakukan secara online melalui portal resmi kampus.', '2026-10-01');