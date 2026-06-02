<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Petugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <script type="text/javascript">
        window.print();
    </script>
    <div class="container">
        <div class="row mt-4">
            <div class="col text-center">
                <h3>PEMERINTAHAN KOTA MAJALENGKA</h3>
                <h4>DESA KERTAJATI KECAMATAN KERTAJATI</h4>
                <h6>jalan merpati No 112 kertajati</h6>
            </div>
        </div>
        <hr>
        <h6 class="text-center">laporan petugas</h6>
        <hr>
        <div class="row my-4">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr class="table-info">
                        <th scope="col">NO</th>
                        <th scope="col">ID Petugas</th>
                        <th scope="col">Nama Petugas</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Level</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php 
                        require '../../koneksi/koneksi.php';
                        SESSION_start();
                        $sql = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY id_petugas ASC");
                        $no = 0;
                        while ($hasil = mysqli_fetch_array($sql)) {
                        $no++;
                    ?>
                        <tr>
                        <th scope="row"><?php echo $no ?></th>
                        <td><?php echo $hasil['id_petugas']; ?></td>
                        <td><?php echo $hasil['nama_petugas']; ?></td>
                        <td><?php echo $hasil['telp']; ?></td>
                        <td><?php echo $hasil['username']; ?></td>
                        <td><?php echo $hasil['password']; ?></td>
                        <td><?php echo $hasil['level']; ?></td>
                        </tr>
                    <?php 
                        }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h6 class="font-wigth bold text-primary" style="text-align-last: right;">kota majalengka, <?php echo date('y/m/d'); ?></h6>
                <h6 class="font-wigth bold text-primary" style="text-align-last: right;">petugas,</h6>
                <h6 class="font-wigth bold text-primary mt-5" style="text-align-last: right;"><?php echo $_SESSION['nama']; ?></h6>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col">
            <hr>
            <a href="../laporan.php">kembali</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>