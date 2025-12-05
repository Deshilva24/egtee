<?php
$page = $_GET['page'] ?? 'dashboard';

// Absolute path
$root = $_SERVER['DOCUMENT_ROOT'] . '/Web EG-TEE';

// PASTIKAN TIDAK ADA OUTPUT SEBELUM INCLUDE
ob_start();

switch ($page) {
    case 'dashboard':
        include $root . '/page/Admin/admin-page/dashboard.php';
        break;

    case 'genre':
        include $root . '/page/Admin/admin-page/input_genre.php';
        break;

    default:
        echo "Halaman tidak ditemukan";
        break;
}

// CLEAN OUTPUT
$content = ob_get_clean();
echo $content;
?>
