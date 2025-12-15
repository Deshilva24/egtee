<?php
session_start();

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Debug: Lihat data yang diterima
echo "<pre>Debug POST Data: ";
print_r($_POST);
echo "</pre>";

if (isset($_POST['submit'])) {

    if (isset($_POST['name'])) {
        $nama = trim($_POST['name']);
    } elseif (isset($_POST['nama'])) {
        $nama = trim($_POST['nama']);
    } else {
        $nama = '';
    }
    
    echo "<p>Nama yang diterima: '$nama'</p>";
    
    // Validasi
    if (empty($nama)) {
        echo "<div style='color: red; padding: 20px;'>Error: Nama genre harus diisi!</div>";
        echo "<a href='../page/Admin/admin-page/input_genre.php'>Kembali ke Form</a>";
        exit();
    }
    
    // Simpan ke session
    if (!isset($_SESSION['genre_data'])) {
        $_SESSION['genre_data'] = [];
    }
    
    $new_genre = [
        'id' => uniqid(),
        'nama' => htmlspecialchars($nama),
        'waktu' => date('H:i:s'),
        'tanggal' => date('d-m-Y')
    ];
    
    array_unshift($_SESSION['genre_data'], $new_genre);
    
    // Simpan juga flash message untuk halaman tampil
    $_SESSION['success_message'] = "Genre '$nama' berhasil ditambahkan!";
    
    // REDIRECT langsung ke halaman tampil genre
    header('Location: ../../index.php?page=tampil_genre');
    exit();
    
} else {
    echo "<div style='color: red; padding: 20px;'>Error: Tidak ada data yang dikirim!</div>";
    echo "<a href='../page/Admin/admin-page/input_genre.php'>Kembali ke Form Input</a>";
    exit();
}
?>