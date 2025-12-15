<?php
require_once 'Genre.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_genre'];

    $genre = new Genre($nama);

    echo "<h3>Genre berhasil disimpan</h3>";
    echo "Nama Genre: $genre->nama_genre";
    echo "<br><a href='admin.php?page=genre'>Kembali</a>";
}
