<?php
$pageTitle = 'Profil - Telkom University';
require 'config/koneksi.php';
require 'includes/header.php';

$queryProdi = "SELECT COUNT(*) as total_prodi FROM program_studi";
$resultProdi = mysqli_query($koneksi, $queryProdi);
$totalProdi = 0;
if ($resultProdi) {
    $row = mysqli_fetch_assoc($resultProdi);
    $totalProdi = $row['total_prodi'];
}
?>

<section class="section">
  <div class="container article-body">
    <span class="eyebrow">Profil</span>
    <h1>Tentang proyek simulasi Telkom University</h1>
    <p class="lead">Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer bersama.</p>
    
    <h2>Visi pembelajaran</h2>
    <p>Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek terpadu.</p>
    
    <h2>Tujuan proyek</h2>
    <p>Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p>
    
    <div class="alert alert-success" style="margin-top: 16px; margin-bottom: 24px;">
      Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.
    </div>

    <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; margin-top: 24px;">
      <h3 style="margin-top: 0;">Status Data Saat Ini</h3>
      <p>Saat ini sistem telah terhubung ke basis data dan mengelola <strong><?= $totalProdi; ?> Program Studi</strong> secara dinamis.</p>
      <a href="prodi.php" class="btn btn-primary" style="display: inline-block; margin-top: 8px; text-decoration: none; padding: 8px 16px; background-color: #b91c1c; color: white; border-radius: 6px;">Lihat Daftar Program Studi &rarr;</a>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>