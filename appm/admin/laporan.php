<?php
  include 'layout/header.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">

          <div class="col-sm-6">
            <h1 class="m-0 font-weight-bold">Laporan</h1>
          </div>

          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">laporan</a>
              </li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>

        </div>
      </div>
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row justify-content-center">

          <!-- LAPORAN PETUGAS -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="info-box shadow rounded">

              <span class="info-box-icon bg-primary elevation-1">
                <i class="fas fa-user-tie"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text font-weight-bold">
                  Laporan Petugas
                </span>

                <span class="info-box-text mt-2">
                  <a href="laporan/lap_petugas.php"
                     class="btn btn-primary btn-sm">
                     Cetak
                  </a>
                </span>
              </div>

            </div>
          </div>


          <!-- LAPORAN MASYARAKAT -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="info-box shadow rounded">

              <span class="info-box-icon bg-success elevation-1">
                <i class="fas fa-users"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text font-weight-bold">
                  Laporan Masyarakat
                </span>

                <span class="info-box-text mt-2">
                  <a href="laporan/lap_masyarakat.php"
                     class="btn btn-success btn-sm">
                     Cetak
                  </a>
                </span>
              </div>

            </div>
          </div>


          <!-- LAPORAN PENGADUAN -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="info-box shadow rounded">

              <span class="info-box-icon bg-danger elevation-1">
                <i class="fas fa-file-alt"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text font-weight-bold">
                  Laporan Pengaduan
                </span>

                <form action="laporan/lap_pengaduan.php"
                      method="GET"
                      target="_blank">

                  <input type="date"
                         name="tgl_awal"
                         required
                         class="form-control mb-2 mt-2">

                  <input type="date"
                         name="tgl_akhir"
                         required
                         class="form-control mb-2">

                  <button type="submit"
                          class="btn btn-danger btn-sm">
                          Cetak
                  </button>

                </form>
              </div>

            </div>
          </div>


          <!-- LAPORAN TANGGAPAN -->
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="info-box shadow rounded">

              <span class="info-box-icon bg-warning elevation-1">
                <i class="fas fa-comments"></i>
              </span>

              <div class="info-box-content">
                <span class="info-box-text font-weight-bold">
                  Laporan Tanggapan
                </span>

                <span class="info-box-text mt-2">
                  <a href="laporan/lap_tanggapan.php"
                     class="btn btn-warning btn-sm text-white">
                     Cetak
                  </a>
                </span>
              </div>

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
<?php
  include 'layout/footer.php';
?>