<?php
$pageTitle = 'Program Studi - Telkom University';
require 'config/koneksi.php';
require 'includes/header.php';

$query = "SELECT * FROM program_studi";
$result = mysqli_query($koneksi, $query);
?>

<section class="section">
  <div class="container">
    <span class="eyebrow">Akademik</span>
    <h1>Program Studi</h1>
    <p class="lead">Daftar program studi yang dikelola dalam simulasi basis data.</p>

    <div class="card-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 24px;">
      <?php if ($result && mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="card" style="border: 1px solid #e2e8f0; padding: 20px; border-radius: 8px;">
            <h3><?= htmlspecialchars($row['nama_prodi'] ?? $row['nama'] ?? ''); ?></h3>
            <p><strong>Jenjang:</strong> <?= htmlspecialchars($row['jenjang'] ?? ''); ?></p>
            <p><?= htmlspecialchars($row['deskripsi'] ?? ''); ?></p>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>Belum ada data program studi.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>