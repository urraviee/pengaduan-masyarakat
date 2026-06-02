<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APPM | Lihat Tanggapan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
.align-center {
    display: block;
    margin: 0 auto;
}
</style>

  <body>

   <div class="container" style="margin-top: 3rem;">
        <div class="row">
            <div class="col">
                <h2>Lihat Tanggapan</h2>
                <a href="../lihat_tanggapan.php" class="btn btn-primary">kembali</a>
            </div>
        </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <?php 
                        require '../../koneksi/koneksi.php';

                        $id = $_GET['id'];

                        $sql = mysqli_query($koneksi, "
                            SELECT * FROM pengaduan 
                            LEFT JOIN tanggapan  
                            ON tanggapan.id_pengaduan = pengaduan.id_pengaduan
                            WHERE pengaduan.id_pengaduan = '$id'
                        ");

                        $cek = mysqli_num_rows($sql);

                        if($cek < 1) {
                            echo "<font color='red'>Maaf, pengaduan anda sedang dalam antrian</font>";
                        } else {
                            while($data = mysqli_fetch_array($sql)) {
                        ?>
                        <div class="card mb-3 border border-1 border-dark" style="width: 500px;">
                            <img src="../../foto1/<?php echo $data['foto']; ?>" class="card-img-top img-fluid">
                            <div class="card-body">
                                <h5 class="card-title">NIK : <?php echo $data['nik'];?></h5>
                                <p class="card-text"><?php echo $data['isi_laporan']; ?></p>

                                <?php if($data['status'] == 'ditolak'){ ?>
                                    <p><b>Alasan Penolakan:</b> <?php echo $data['alasan_tolak']; ?></p>
                                <?php } else { ?>
                                    <p><b>Tanggapan:</b> <?php echo $data['tanggapan']; ?></p>
                                <?php } ?>
                                <small class="text-muted">Status : <?php echo $data['status']; ?></small>
                            </div>
                        </div>
                        <?php
                            }
                        }
                        ?>

                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html> 