<?php
require_once 'config/koneksi.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM tabelsayah WHERE id='$id'")->fetch_assoc();

if (isset($_POST['update'])) {
    $nama = $_POST['nama_siswa'];
    $ket  = $_POST['keterangan'];
    $tgl  = $_POST['tanggal'];

    $query = "UPDATE tabelsayah SET nama_siswa='$nama', keterangan='$ket', tanggal='$tgl' WHERE id='$id'";

    if ($conn->query($query)) {
        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 15px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .btn-warning { border-radius: 10px; padding: 10px 20px; color: white; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-warning text-white p-4" style="border-radius: 15px 15px 0 0;">
                    <h4 class="mb-0 text-white">Update Data Absensi</h4>
                </div>
                <div class="card-body p-4">
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nama Lengkap Siswa</label>
                            <input type="text" name="nama_siswa" class="form-control" value="<?= $data['nama_siswa']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Keterangan Hadir</label>
                            <select name="keterangan" class="form-select" required>
                                <option value="Hadir" <?= ($data['keterangan'] == 'Hadir') ? 'selected' : ''; ?>>Hadir</option>
                                <option value="Izin" <?= ($data['keterangan'] == 'Izin') ? 'selected' : ''; ?>>Izin</option>
                                <option value="Sakit" <?= ($data['keterangan'] == 'Sakit') ? 'selected' : ''; ?>>Sakit</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal']; ?>" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" name="update" class="btn btn-warning">Update Sekarang</button>
                            <a href="index.php" class="btn btn-light">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>