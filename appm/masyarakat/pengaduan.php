<?php 
    session_start(); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APPM | Pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
</head>
    <style>
        body {
        background: #f4f6f9;
        }

        .form-container {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .btn-kirim {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            border: none;
            color: white;
            font-weight: 500;
            padding: 8px 18px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .btn-kirim:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
    </style>

<body>

<!-- Nav buka-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <b>Laporan Pengaduan Masyarakat</b>
        </a>

        <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNav"
            aria-controls="navbarNav" 
            aria-expanded="false" 
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="pengaduan.php">Pengaduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- nav tutup -->

<!-- Content buka -->
<div class="container" style="margin-top: 3rem;">
    <div class="row">
        <div class="col-7 form-container">
            <h4 class="mb-4"><b>Masukan data sesuai dengan kejadian</b></h4>
            <!-- Form buka-->
            <form class="row g-3" method="post" action="data/simpan_pengaduan.php" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Tanggal Kejadian</label>
                    <input type="text" name="tgl_pengaduan" class="form-control" value="<?php echo date('Y-m-d'); ?>" id="inputEmail4" readonly>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">NIK - Nomor Induk Kependudukan</label>
                    <input type="text" name="nik" class="form-control" id="inputPassword4" value="<?php echo $_SESSION['nik'];?>" readonly>
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Kronologi Kejadian</label>
                    <input type="text" name="isi_laporan" class="form-control" id="inputAddress" placeholder="isi kronologi kejadian">
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Upload Foto Kejadian</label>
                    <input type="file" name="foto" class="form-control" id="inputAddress2">
                </div>

                <div class="col-12">
                    <button class="btn btn-primary">
                        <i class="bi bi-send me-2"></i> Kirim laporan
                    </button>

                </div>
            </form>
            <!-- Form tutup -->
        </div>
        <!-- card start -->
        <div class="col offset-1">
            <div class="card shadow">
                <div class="card-header bg-info text-white">
                    <b><i class="bi bi-lightbulb-fill me-2"></i> Edukasi Pengaduan</b>
                </div>

                <div class="card-body">
                    <div class="alert alert-warning mt-1 mb-0">
                        <b>
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>
                            Agar laporan cepat diproses, perhatikan:
                        </b>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="bi bi-calendar-check me-2 text-primary"></i>
                            <b>Tanggal Benar</b><br>
                            <small>Sesuai waktu kejadian.</small>
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-person-vcard me-2 text-success"></i>
                            <b>NIK Valid</b><br>
                            <small>Agar dapat diverifikasi.</small>
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-journal-text me-2 text-warning"></i>
                            <b>Kronologi Jelas</b><br>
                            <small>Singkat dan mudah dipahami.</small>
                        </li>
                        <li class="list-group-item">
                            <i class="bi bi-camera-fill me-2 text-danger"></i>
                            <b>Foto Jelas</b><br>
                            <small>Tidak buram dan nyata.</small>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- card end -->

    </div>
</div>
<!-- Content tutup -->

<!-- Footer buka -->
<footer class="bg-primary text-white fixed-bottom">
    <div class="container text-center my-3">
        <p class="mb-0">
            © Aplikasi Laporan Pengaduan Masyarakat
        </p>
    </div>
</footer>
<!-- Footer tutup -->

<script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous">
</script>

</body>
</html>
