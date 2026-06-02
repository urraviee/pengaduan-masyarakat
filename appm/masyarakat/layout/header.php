<?php 
  session_start();
  if (!isset($_SESSION['nama'])) {
    die("Anda Harus Login Terlebih Dahulu");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APPM | home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  </head>
  <style>
                      /* aturcarousel*/

    /* Panah kiri */
    .carousel-control-prev-icon {
      filter: invert(1);
    }

    /* Panah kanan */
    .carousel-control-next-icon {
      filter: invert(1);
    }
  </style>
  <body>
    <!--nav buka-->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><b>Laporan Pengaduan Masyarakat</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pengaduan.php">Pengaduan</a>
                </li>
                 <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="lihat_tanggapan.php">Tanggapan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="keluar.php">logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!--nav tutup-->