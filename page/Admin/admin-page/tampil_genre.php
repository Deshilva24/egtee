<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Cek jika ada session data
$genre_data = isset($_SESSION['genre_data']) ? $_SESSION['genre_data'] : [];

// Tampilkan flash message jika ada
if (isset($_SESSION['success_message'])) {
    echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
    unset($_SESSION['success_message']);
}
?>

<div style="padding-top: 150px;">
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title mb-0">
                    <i class="ti ti-list me-2"></i>Data Genre
                </h3>
            </div>
            <div class="card-body">
                <?php if (empty($genre_data)): ?>
                    <div class="alert alert-info">
                        <i class="ti ti-info-circle me-2"></i>Belum ada data genre.
                    </div>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama Genre</th>
                                    <th>Waktu</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($genre_data as $index => $genre): ?>
                                <tr>
                                    <td><?php echo $index + 1; ?></td>
                                    <td><?php echo $genre['id']; ?></td>
                                    <td><?php echo $genre['nama']; ?></td>
                                    <td><?php echo $genre['waktu']; ?></td>
                                    <td><?php echo $genre['tanggal']; ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-warning">Edit</button>
                                        <button class="btn btn-sm btn-danger">Hapus</button>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
                
                <div class="mt-3">
                    <a href="index.php?page=input_genre" class="btn btn-primary">
                        <i class="ti ti-plus me-2"></i>Tambah Genre Baru
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>