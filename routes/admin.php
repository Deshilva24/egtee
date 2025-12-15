<?php
// session_start();
require_once('./../config/Database.php');
require_once('./../model/models.php');
require_once('./../controller/controllers.php');

$page = $_GET['page'] ?? 'dashboard';
$action = $_GET['action'] ?? 'index';

// Absolute path
$root = $_SERVER['DOCUMENT_ROOT'] . '/Web EG-TEE';

// PASTIKAN TIDAK ADA OUTPUT SEBELUM INCLUDE
ob_start();

switch ($page) {
    case 'dashboard':
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
