<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-lg rounded-4">
                <div class="card-header bg-warning text-dark text-center">
                    <h5 class="mb-0">Edit Data Siswa</h5>
                </div>

                <div class="card-body">
                    <form action="proses_ubah.php" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="id_siswa" value="<?= $row['id_siswa']; ?>">

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control"
                                   value="<?= $row['nama']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <select name="kelamin" class="form-select" required>
                                <option value="L" <?= ($row['kelamin']=='Laki-laki')?'selected':''; ?>>Laki-laki</option>
                                <option value="P" <?= ($row['kelamin']=='Perempuan')?'selected':''; ?>>Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control"
                                   value="<?= $row['tempat_lahir']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control"
                                   value="<?= $row['tanggal_lahir']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Hobi</label>
                            <input type="text" name="hobi" class="form-control"
                                   value="<?= $row['hobi']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cita-cita</label>
                            <input type="text" name="cita_cita" class="form-control"
                                   value="<?= $row['cita_cita']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3" required><?= $row['alamat']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <input type="text" name="agama" class="form-control"
                                   value="<?= $row['agama']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Foto Saat Ini</label><br>
                            <img src="gambar/<?= $row['foto']; ?>" width="90" class="rounded shadow">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Ganti Foto (opsional)</label>
                            <input type="file" name="foto" class="form-control">
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-warning">
                                Simpan Perubahan
                            </button>
                            <a href="index.php" class="btn btn-outline-secondary">
                                Kembali
                            </a>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>