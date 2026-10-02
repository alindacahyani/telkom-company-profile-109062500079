<?php
require 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nama   = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $email  = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subjek = isset($_POST['subjek']) ? trim($_POST['subjek']) : '';
    $pesan  = isset($_POST['pesan']) ? trim($_POST['pesan']) : '';

    if (!empty($nama) && !empty($email) && !empty($subjek) && !empty($pesan)) {
        
        $namaEsc   = mysqli_real_escape_string($koneksi, $nama);
        $emailEsc  = mysqli_real_escape_string($koneksi, $email);
        $subjekEsc = mysqli_real_escape_string($koneksi, $subjek);
        $pesanEsc  = mysqli_real_escape_string($koneksi, $pesan);

        $query = "INSERT INTO kontak (nama, email, subjek, pesan) 
                  VALUES ('$namaEsc', '$emailEsc', '$subjekEsc', '$pesanEsc')";

        if (mysqli_query($koneksi, $query)) {
            header('Location: kontak.php?status=success');
            exit;
        }
    }
}

header('Location: kontak.php?status=error');
exit;