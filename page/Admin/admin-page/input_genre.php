<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Inisialisasi session jika belum ada
if(!isset($_SESSION['genre_data'])) {
    $_SESSION['genre_data'] = [];
}

$error = '';
$nama_value = '';

// Proses form submission
if(isset($_POST['submit'])) {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    $nama_value = $nama;
    
    if(empty($nama)) {
        $error = "⚠️ Nama harus diisi!";
    } else {
        $new_data = [
            'id' => uniqid(),
            'nama' => htmlspecialchars($nama),
            'waktu' => date('H:i:s'),
            'tanggal' => date('d-m-Y')
        ];
        
        // Tambah data ke awal array
        array_unshift($_SESSION['genre_data'], $new_data);
        
        // Simpan pesan sukses
        $_SESSION['success_message'] = "✅ Genre '$nama' berhasil ditambahkan!";
        
        // Redirect ke halaman Tampil Genre
        header('Location: ../../index.php?page=tampil_genre');
        exit();
    }
}
?>

<!-- HTML MULAI DI SINI -->
<div style="padding-top: 150px;">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card bg-primary text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title mb-3">
                        <i class="ti ti-edit me-2"></i>Input Genre
                    </h5>
                    
                    <!-- TAMPILKAN ERROR JIKA ADA -->
                    <?php if(!empty($error)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $error; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    
                    <!-- FORM -->
                    <form method="POST" action="" class="text-white">
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">NAMA GENRE</label>
                            <input name="nama" type="text" class="form-control form-control-lg bg-white border-0" 
                                   id="nama" 
                                   value="<?php echo htmlspecialchars($nama_value); ?>" 
                                   placeholder="Masukkan nama genre di sini..." 
                                   style="color: #333;" 
                                   required
                                   autofocus>
                        </div>
                        <button type="submit" class="btn btn-light btn-lg w-100 fw-bold" name="submit">
                            <i class="ti ti-send me-2"></i>SUBMIT DATA
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.d-flex.justify-content-center {
    min-height: calc(100vh - 200px);
    padding: 20px 0;
}

.card.bg-primary {
    border: none;
    box-shadow: 0 8px 25px rgba(13, 110, 253, 0.25);
    border-radius: 15px;
}

.card-body {
    padding: 2rem !important;
}

.card-title {
    font-size: 1.5rem;
    font-weight: 600;
}

.form-control-lg {
    padding: 1rem 1.25rem;
    font-size: 1.1rem;
    border-radius: 10px;
}

.btn-lg {
    padding: 1rem 1.5rem;
    font-size: 1.1rem;
    border-radius: 10px;
    font-weight: 600;
}

.btn-light {
    background-color: white;
    color: #0d6efd;
}

.btn-light:hover {
    background-color: #f8f9fa;
}

.alert {
    border-radius: 10px;
}

@media (max-width: 768px) {
    div[style*="padding-top: 150px"] {
        padding-top: 120px !important;
    }
    
    .col-md-6 {
        width: 90% !important;
    }
    
    .card-body {
        padding: 1.5rem !important;
    }
}

@media (max-width: 576px) {
    div[style*="padding-top: 150px"] {
        padding-top: 100px !important;
    }
    
    .card-body {
        padding: 1.25rem !important;
    }
}
</style>