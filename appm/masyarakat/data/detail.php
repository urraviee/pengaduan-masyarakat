<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APPM | Detail Pengaduan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
.align-center {
    display: block;
    margin: 0 auto;
}
</style>

  <body>

   <div class="container" style="margin-top: 1rem;">
        <div class="row">
            <div class="col">
                <h2 class="fw-bold"><i class="bi bi-file-earmark-text text-primary"></i> Detail Pengaduan</h2>
                <a href="../lihat_tanggapan.php" class="btn btn-primary mb-3"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <?php 
                        require '../../koneksi/koneksi.php';
                        $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id]'");
                        $data = mysqli_fetch_array($sql);
                        if($data) {   
                    ?>
                    <div class="card mb-3 border border-1 border-dark" style="width: 500px;">
                    <img src="../../foto1/<?php echo $data['foto']; ?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b>NIK : </b><?php echo $data['nik'];?></h5>
                        <p class="card-text"><b>Laporan : </b><?php echo $data['isi_laporan']; ?></p>
                        <p class="card-text">
                        <small class="text-muted">setatus : <?php echo $data['status']; ?></small>
                        </p>
                    </div>
                    </div>
                    <?php 
                        }
                    ?>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html> 