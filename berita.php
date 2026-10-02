<?php
$pageTitle = 'Berita - Telkom University';
require 'config/koneksi.php';
require 'includes/header.php';

// Query List tanpa klausa ORDER BY agar bebas dari error nama kolom
$query = "SELECT * FROM berita";
$result = mysqli_query($koneksi, $query);
?>

<section class="section">
  <div class="container">
    <span class="eyebrow">Informasi Kampus</span>
    <h1>Berita Terbaru</h1>
    <p class="lead">Daftar berita dan pengumuman seputar kegiatan di Telkom University.</p>

    <div class="news-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-top: 24px;">
      <?php if ($result && mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <?php 
            // Ambil ID secara fleksibel
            $id = $row['id_berita'] ?? $row['id'] ?? 1;
            $judul = $row['judul'] ?? $row['judul_berita'] ?? '';
            $isi = $row['isi'] ?? $row['konten'] ?? '';
            $tanggal = $row['tanggal_publikasi'] ?? $row['tanggal'] ?? '';
          ?>
          <div class="card" style="border: 1px solid #e2e8f0; padding: 20px; border-radius: 8px;">
            <?php if (!empty($tanggal)): ?>
              <small style="color: #64748b; display: block; margin-bottom: 8px;">
                <?= date('d F Y', strtotime($tanggal)); ?>
              </small>
            <?php endif; ?>
            <h3 style="margin-top: 0;"><?= htmlspecialchars($judul); ?></h3>
            <p><?= htmlspecialchars(substr($isi, 0, 120)) . '...'; ?></p>
            <a href="detail_berita.php?id=<?= $id; ?>" style="color: #b91c1c; font-weight: bold; text-decoration: none;">Baca Selengkapnya &rarr;</a>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>Belum ada berita yang dipublikasikan.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>