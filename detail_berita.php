<?php
require 'config/koneksi.php';

// Ambil parameter ID dari URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Query Detail: Hanya memanggil kolom 'id'
$query = "SELECT * FROM berita WHERE id = $id";
$result = mysqli_query($koneksi, $query);

$berita = null;
if ($result) {
    $berita = mysqli_fetch_assoc($result);
}

if (!$berita) {
    $pageTitle = 'Berita Tidak Ditemukan - Telkom University';
    require 'includes/header.php';
    echo '<section class="section"><div class="container"><h1>Berita tidak ditemukan!</h1><p><a href="berita.php">&larr; Kembali ke Daftar Berita</a></p></div></section>';
    require 'includes/footer.php';
    exit;
}

$judul = $berita['judul'] ?? $berita['judul_berita'] ?? 'Detail Berita';
$isi = $berita['isi'] ?? $berita['konten'] ?? '';
$tanggal = $berita['tanggal_publikasi'] ?? $berita['tanggal'] ?? '';

$pageTitle = $judul . ' - Telkom University';
require 'includes/header.php';
?>

<section class="section">
  <div class="container article-body" style="max-width: 800px; margin: 0 auto;">
    <p><a href="berita.php" style="color: #b91c1c; text-decoration: none;">&larr; Kembali ke Daftar Berita</a></p>
    
    <?php if (!empty($tanggal)): ?>
      <span class="eyebrow"><?= date('d F Y', strtotime($tanggal)); ?></span>
    <?php endif; ?>
    
    <h1 style="margin-top: 8px;"><?= htmlspecialchars($judul); ?></h1>
    
    <div class="content" style="margin-top: 24px; line-height: 1.8; font-size: 1.1rem;">
      <p><?= nl2br(htmlspecialchars($isi)); ?></p>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>