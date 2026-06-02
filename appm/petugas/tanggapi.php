<?php
  include 'layout/header.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container mt-2 ml-3">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tanggapi Laporan </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tanggapi</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <?php 
            require '../koneksi/koneksi.php';
            $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id]' ");
            $data = mysqli_fetch_array($sql);
            if ($sql) {
        ?>
        <div class="row">
            <div class="col">
                <a href="beri_tanggapan.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                <form class="row g-3" method="post" action="data/simpan_tanggapan.php">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">ID Petugas</label>
                    <input type="text" name="id_petugas" class="form-control" value="<?php echo $_SESSION['id_petugas'] ?>" id="inputEmail4" readonly>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">ID pengaduan</label>
                    <input type="text" name="id_pengaduan" class="form-control" value="<?php echo $_GET['id']; ?>" id="inputPassword4" readonly>
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Tanggal Pengaduan</label>
                    <input type="text" name="tgl_tanggapan" class="form-control" value="<?php echo date('y/m/d') ?>" id="inputAddress">
                </div>

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Tulis Tanggapan</label>
                    <input type="text" name="tanggapan" class="form-control" id="inputAddress2" placeholder="tuliskan tanggapan anda">
                </div>

                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">
                        Kirim Laporan
                    </button>
                </div>
            </form>
            </div>
        </div>
        <?php 
            }
        ?>
      </div>
    </section>
  </div>

<?php
  include 'layout/footer.php';
?>
