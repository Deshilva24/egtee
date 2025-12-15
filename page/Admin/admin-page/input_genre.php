<?php
session_start();

// Inisialisasi session jika belum ada
if(!isset($_SESSION['genre_data'])) {
    $_SESSION['genre_data'] = [];
}

// Simpan data ke session untuk ditampilkan di halaman Tampil Genre
if(isset($_POST['submit'])) {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';
    
    if(empty($nama)) {
        $error = "⚠️ Nama harus diisi!";
        $success = false;
    } else {
        $new_data = [
            'id' => uniqid(),
            'nama' => htmlspecialchars($nama),
            'waktu' => date('H:i:s'),
            'tanggal' => date('d-m-Y')
        ];
        
        // Tambah data ke awal array
        array_unshift($_SESSION['genre_data'], $new_data);
        
        // Set success flag
        $success = true;
        $input_data = htmlspecialchars($nama);
        
        // Redirect ke halaman Tampil Genre dengan parameter success
        header('Location: ?page=tampil_genre&success=1');
        exit();
    }
}
?>

<div style="padding-top: 150px;">
    <div class="d-flex justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card bg-primary text-white mb-3">
                <div class="card-body">
                    <h5 class="card-title mb-3">
                        <i class="ti ti-edit me-2"></i>Input Genre
                    </h5>
                    
                    <form method="POST" action="" class="text-white">
                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">NAMA GENRE</label>
                            <input name="nama" type="text" class="form-control form-control-lg bg-white border-0" 
                                   id="nama" 
                                   value="<?php echo isset($_POST['nama']) && !isset($success) ? htmlspecialchars($_POST['nama']) : ''; ?>" 
                                   placeholder="Masukkan nama genre di sini..." 
                                   style="color: #333;" 
                                   required>
                        </div>
                        <button type="submit" class="btn btn-light btn-lg w-100 fw-bold" name="submit">
                            <i class="ti ti-send me-2"></i>SUBMIT DATA
                        </button>
                    </form>
                </div>
            </div>

            <?php if(isset($error) && $error): ?>
            <div class="alert alert-danger alert-lg mt-3">
                <i class="ti ti-alert-circle me-2"></i><?php echo $error; ?>
            </div>
            <?php endif; ?>

            <!-- Tombol untuk melihat data -->
            <div class="mt-4 text-center">
                <a href="?page=tampil_genre" class="btn btn-info btn-lg w-100">
                    <i class="ti ti-eye me-2"></i>Lihat Data Genre
                </a>
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

.btn-info {
    background-color: #0dcaf0;
    color: white;
    border: none;
}

.btn-info:hover {
    background-color: #0baccc;
}

.alert-lg {
    padding: 1.25rem 1.5rem;
    font-size: 1.1rem;
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