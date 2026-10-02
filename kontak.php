<?php
$pageTitle = 'Kontak Kami - Telkom University';
require 'config/koneksi.php';

$status = isset($_GET['status']) ? $_GET['status'] : '';
$message = '';

if ($status === 'success') {
    $message = 'Pesan Anda berhasil terkirim! Terima kasih telah menghubungi kami.';
} elseif ($status === 'error') {
    $message = 'Gagal mengirim pesan. Silakan lengkapi semua kolom dengan benar.';
}

require 'includes/header.php';
?>

<section class="section">
  <div class="container" style="max-width: 700px; margin: 0 auto;">
    <span class="eyebrow">Hubungi Kami</span>
    <h1>Formulir Kontak</h1>
    <p class="lead">Kirimkan pertanyaan, saran, atau masukan Anda melalui formulir di bawah ini.</p>

    <?php if (!empty($message)): ?>
      <div style="padding: 14px 18px; margin-bottom: 24px; border-radius: 6px; font-weight: 500; 
                  <?= $status === 'success' ? 'background-color: #dcfce7; color: #166534; border: 1px solid #bbf7d0;' : 'background-color: #fee2e2; color: #991b1b; border: 1px solid #fecaca;' ?>">
        <?= htmlspecialchars($message); ?>
      </div>
    <?php endif; ?>

    <form action="proses_kontak.php" method="POST" style="display: flex; flex-direction: column; gap: 16px; margin-top: 24px;">
      
      <div>
        <label for="nama" style="display: block; font-weight: 600; margin-bottom: 6px;">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required placeholder="Masukkan nama Anda" 
               style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem;">
      </div>

      <div>
        <label for="email" style="display: block; font-weight: 600; margin-bottom: 6px;">Alamat Email</label>
        <input type="email" id="email" name="email" required placeholder="nama@email.com" 
               style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem;">
      </div>

      <div>
        <label for="subjek" style="display: block; font-weight: 600; margin-bottom: 6px;">Subjek Pesan</label>
        <input type="text" id="subjek" name="subjek" required placeholder="Judul / Subjek pesan" 
               style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem;">
      </div>

      <div>
        <label for="pesan" style="display: block; font-weight: 600; margin-bottom: 6px;">Isi Pesan</label>
        <textarea id="pesan" name="pesan" rows="5" required placeholder="Tuliskan pesan Anda di sini..." 
                  style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 1rem; font-family: inherit;"></textarea>
      </div>

      <button type="submit" style="background-color: #b91c1c; color: white; border: none; padding: 12px 24px; border-radius: 6px; font-weight: bold; cursor: pointer; font-size: 1rem; align-self: flex-start;">
        Kirim Pesan &rarr;
      </button>

    </form>
  </div>
</section>

<?php require 'includes/footer.php'; ?>