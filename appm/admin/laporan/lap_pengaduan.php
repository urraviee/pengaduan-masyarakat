<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan pengaduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <script type="text/javascript">
        window.print();
    </script>

    <?php 
        include '../../koneksi/koneksi.php';
        session_start();

        // Ambil tanggal dari URL
        $tgl_awal  = isset($_GET['tgl_awal']) ? $_GET['tgl_awal'] : '';
        $tgl_akhir = isset($_GET['tgl_akhir']) ? $_GET['tgl_akhir'] : '';

      

        // Query data
        if ($tgl_awal && $tgl_akhir) {
            $sql = mysqli_query($koneksi, "
                SELECT * FROM pengaduan 
                WHERE status='selesai' 
                AND tgl_pengaduan BETWEEN '$tgl_awal' AND '$tgl_akhir'
            ");
        } else {
            $sql = mysqli_query($koneksi, "
                SELECT * FROM pengaduan 
                WHERE status='selesai'
            ");
        }
    ?>

    <div class="container">
        <div class="row mt-4">
            <div class="col text-center">
                <h3>PEMERINTAHAN KOTA MAJALENGKA</h3>
                <h4>DESA KERTAJATI KECAMATAN KERTAJATI</h4>
                <h6>jalan merpati No 112 kertajati</h6>
            </div>
        </div>

        <hr>
        <h6 class="text-center">Laporan Pengaduan</h6>

        <!-- Tampilkan periode -->
        <?php if ($tgl_awal && $tgl_akhir) { ?>
            <h6 class="text-center">
                Dari <?php echo $tgl_awal; ?> sampai <?php echo $tgl_akhir; ?>
            </h6>
        <?php } ?>

        <hr>

        <div class="row my-4">
            <div class="col">
                <table class="table">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">id pengaduan</th>
                            <th scope="col">Nik</th>
                            <th scope="col">pengaduan</th>
                            <th scope="col">tanggal pengaduan</th>
                            <th scope="col">status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            while ($hasil = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $hasil['id_pengaduan']; ?></th>
                            <td><?php echo $hasil['nik']; ?></td>
                            <td><?php echo $hasil['isi_laporan']; ?></td>
                            <td><?php echo $hasil['tgl_pengaduan']; ?></td>
                            <td><?php echo $hasil['status']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h6 style="text-align: right;">
                    Majalengka, <?php echo date('Y-m-d'); ?>
                </h6>
                <h6 style="text-align: right;">Petugas,</h6>
                <h6 class="mt-5" style="text-align: right;">
                    <?php echo $_SESSION['nama']; ?>
                </h6>
            </div>
        </div>
    </div>

    <div class="row text-center">
        <div class="col">
            <hr>
            <a href="../laporan.php">kembali</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>