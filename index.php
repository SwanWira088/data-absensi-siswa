<?php
require_once 'config/koneksi.php';
$query = "SELECT * FROM tabelsayah ORDER BY id DESC"; // Sesuaikan nama tabelmu
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Created By Pramudya Wira</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9fa; }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); }
        .table thead { background-color: #0d6efd; color: white; }
        .badge-hadir { background-color: #198754; }
        .badge-izin { background-color: #ffc107; color: #000; }
        .badge-sakit { background-color: #dc3545; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <h2 class="fw-bold text-primary">Data Absensi Siswa</h2>
            <p class="text-muted">Kasian pake template orang, Mau minta bantuan? ke ig sayah ajah @phammudyawira.</p>
        </div>
        <div class="col text-end">
            <a href="tambah.php" class="btn btn-primary btn-lg px-4 shadow-sm">+ Tambah Data</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="px-4 py-3">No.</th>
                            <th>Nama Siswa</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        while ($row = $result->fetch_assoc()) : 
                            // Logika warna badge status
                            $status_class = 'badge-hadir';
                            if($row['keterangan'] == 'Izin') $status_class = 'badge-izin';
                            if($row['keterangan'] == 'Sakit') $status_class = 'badge-sakit';
                        ?>
                        <tr class="align-middle">
                            <td class="px-4"><?= $no++; ?></td>
                            <td class="fw-bold"><?= htmlspecialchars($row['nama_siswa']); ?></td>
                            <td>
                                <span class="badge <?= $status_class; ?> rounded-pill px-3">
                                    <?= $row['keterangan']; ?>
                                </span>
                            </td>
                            <td><?= date('d M Y', strtotime($row['tanggal'])); ?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-outline-warning">Edit</a>
                                <a href="hapus.php?id=<?= $row['id']; ?>" 
                                   class="btn btn-sm btn-outline-danger" 
                                   onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>