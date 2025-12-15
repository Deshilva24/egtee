<?php
session_start();

// Inisialisasi session jika belum ada
if(!isset($_SESSION['genre_data'])) {
    $_SESSION['genre_data'] = [];
}

// Handle clear data
if(isset($_GET['clear']) && $_GET['clear'] == 1) {
    $_SESSION['genre_data'] = [];
    header('Location: ?page=tampil_genre');
    exit();
}

// Handle delete single data
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    if(isset($_SESSION['genre_data'])) {
        foreach($_SESSION['genre_data'] as $key => $data) {
            if($data['id'] === $id) {
                array_splice($_SESSION['genre_data'], $key, 1);
                break;
            }
        }
    }
    header('Location: ?page=tampil_genre');
    exit();
}

// Debug: Tampilkan data session untuk testing
// echo "<pre>Session Data: ";
// print_r($_SESSION['genre_data']);
// echo "</pre>";
?>

<div style="padding-top: 150px;">
    <div class="container-fluid">
        <!-- Success Message -->
        <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
        <div class="row mb-3">
            <div class="col-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="ti ti-check me-2"></i>
                    <strong>Berhasil!</strong> Data genre telah disimpan.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <!-- Header -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title mb-1">
                                    <i class="ti ti-list me-2"></i>Tampil Genre
                                </h5>
                                <p class="mb-0 opacity-75">Data genre yang telah diinputkan</p>
                            </div>
                            <div>
                                <a href="?page=input_genre" class="btn btn-light">
                                    <i class="ti ti-plus me-1"></i>Tambah Genre
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Table -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php if(count($_SESSION['genre_data']) > 0): ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-primary">
                                        <tr>
                                            <th width="50">#</th>
                                            <th>NAMA GENRE</th>
                                            <th width="150">TANGGAL</th>
                                            <th width="120">WAKTU</th>
                                            <th width="100">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach($_SESSION['genre_data'] as $data): ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td>
                                                <strong><?php echo $data['nama']; ?></strong>
                                            </td>
                                            <td>
                                                <span class="badge bg-info">
                                                    <i class="ti ti-calendar me-1"></i><?php echo $data['tanggal']; ?>
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge bg-secondary">
                                                    <i class="ti ti-clock me-1"></i><?php echo $data['waktu']; ?>
                                                </span>
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-danger" 
                                                        onclick="deleteData('<?php echo $data['id']; ?>')">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Summary and Actions -->
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <div>
                                    <p class="mb-0 text-muted">
                                        <i class="ti ti-info-circle me-1"></i>
                                        Total: <strong><?php echo count($_SESSION['genre_data']); ?></strong> data genre
                                    </p>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-outline-primary" onclick="printData()">
                                        <i class="ti ti-printer me-1"></i>Cetak Data
                                    </button>
                                    <button type="button" class="btn btn-outline-danger ms-2" onclick="clearData()">
                                        <i class="ti ti-trash me-1"></i>Hapus Semua
                                    </button>
                                </div>
                            </div>
                        <?php else: ?>
                            <!-- Empty State -->
                            <div class="text-center py-5">
                                <div class="mb-4">
                                    <i class="ti ti-database-off display-1 text-muted"></i>
                                </div>
                                <h4 class="text-muted mb-3">Belum ada data genre</h4>
                                <p class="text-muted mb-4">
                                    Data genre yang Anda inputkan akan ditampilkan di sini
                                </p>
                                <a href="?page=input_genre" class="btn btn-primary btn-lg">
                                    <i class="ti ti-plus me-2"></i>Tambah Genre Pertama
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Card -->
        <?php if(count($_SESSION['genre_data']) > 0): ?>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="ti ti-list display-6"></i>
                            </div>
                            <div>
                                <h6 class="card-title mb-1">Total Data</h6>
                                <h2 class="mb-0"><?php echo count($_SESSION['genre_data']); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="ti ti-calendar display-6"></i>
                            </div>
                            <div>
                                <h6 class="card-title mb-1">Terakhir Update</h6>
                                <h5 class="mb-0">
                                    <?php echo $_SESSION['genre_data'][0]['tanggal'] . ' ' . $_SESSION['genre_data'][0]['waktu']; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="ti ti-clock display-6"></i>
                            </div>
                            <div>
                                <h6 class="card-title mb-1">Data Terbaru</h6>
                                <h5 class="mb-0">
                                    <?php echo $_SESSION['genre_data'][0]['nama']; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
function clearData() {
    if(confirm('Apakah Anda yakin ingin menghapus semua data genre?')) {
        window.location.href = '?page=tampil_genre&clear=1';
    }
}

function deleteData(id) {
    if(confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        window.location.href = '?page=tampil_genre&delete=' + id;
    }
}

function printData() {
    var printContent = document.createElement('div');
    
    // Buat tabel untuk print
    var tableHTML = '<h3 style="text-align:center; color: #0d6efd;">DATA GENRE</h3>';
    tableHTML += '<table border="1" style="width:100%; border-collapse:collapse; margin-top:20px;">';
    tableHTML += '<thead><tr><th>No</th><th>Nama Genre</th><th>Tanggal</th><th>Waktu</th></tr></thead>';
    tableHTML += '<tbody>';
    
    // Ambil data dari tabel
    var rows = document.querySelectorAll('table.table tbody tr');
    rows.forEach(function(row, index) {
        var cells = row.querySelectorAll('td');
        tableHTML += '<tr>';
        tableHTML += '<td>' + (index + 1) + '</td>';
        tableHTML += '<td>' + cells[1].textContent.trim() + '</td>';
        tableHTML += '<td>' + cells[2].querySelector('.badge').textContent.trim() + '</td>';
        tableHTML += '<td>' + cells[3].querySelector('.badge').textContent.trim() + '</td>';
        tableHTML += '</tr>';
    });
    
    tableHTML += '</tbody></table>';
    tableHTML += '<div style="margin-top:30px; text-align:center;">';
    tableHTML += '<p>Total Data: ' + rows.length + '</p>';
    tableHTML += '<p>Dicetak pada: ' + new Date().toLocaleString() + '</p>';
    tableHTML += '</div>';
    
    printContent.innerHTML = tableHTML;
    
    var printWindow = window.open('', '_blank');
    printWindow.document.write('<html><head><title>Data Genre</title>');
    printWindow.document.write('<style>');
    printWindow.document.write('body { font-family: Arial, sans-serif; padding: 20px; }');
    printWindow.document.write('h3 { margin-bottom: 20px; }');
    printWindow.document.write('table { margin-bottom: 20px; }');
    printWindow.document.write('th { background-color: #f8f9fa; padding: 10px; text-align: left; }');
    printWindow.document.write('td { padding: 10px; }');
    printWindow.document.write('</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write(printContent.innerHTML);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
}
</script>

<style>
.container-fluid {
    max-width: 1200px;
    margin: 0 auto;
}

.card {
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border: none;
    margin-bottom: 1.5rem;
}

.card.bg-primary {
    box-shadow: 0 8px 25px rgba(13, 110, 253, 0.25);
}

.card-body {
    padding: 1.5rem !important;
}

.table-responsive {
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid #dee2e6;
}

.table thead {
    background-color: #0d6efd;
    color: white;
}

.table th {
    font-weight: 600;
    padding: 1rem;
}

.table td {
    padding: 1rem;
    vertical-align: middle;
}

.table-hover tbody tr:hover {
    background-color: rgba(13, 110, 253, 0.05);
}

.badge {
    padding: 0.5rem 0.75rem;
    font-weight: 500;
    border-radius: 8px;
}

.alert-success {
    border-radius: 10px;
    border: none;
}

@media (max-width: 768px) {
    div[style*="padding-top: 150px"] {
        padding-top: 120px !important;
    }
    
    .d-flex.justify-content-between {
        flex-direction: column;
        gap: 1rem;
    }
    
    .table-responsive {
        font-size: 0.9rem;
    }
}

@media (max-width: 576px) {
    div[style*="padding-top: 150px"] {
        padding-top: 100px !important;
    }
    
    .card-body {
        padding: 1rem !important;
    }
}
</style>