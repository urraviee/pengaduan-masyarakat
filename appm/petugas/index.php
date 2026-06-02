<?php
  include 'layout/header.php';
?>

<!-- Content Wrapper -->
<div class="content-wrapper">

  <!-- Content Header -->
  <div class="content-header">
    <div class="container-fluid">

      <div class="row mb-3">

        <div class="col-sm-6">
          <h2 class="font-weight-bold">
            Dashboard
          </h2>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right bg-white px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>

            <li class="breadcrumb-item active">
              Dashboard
            </li>
          </ol>
        </div>

      </div>

    </div>
  </div>
  <!-- /.content-header -->


  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">

      <!-- Welcome Card -->
      <div class="card shadow border-0 mb-4">

        <div class="card-body">

          <h3 class="font-weight-bold text-info">
            Selamat Datang,
            <?php echo $_SESSION['nama']; ?> 👋
          </h3>

          <p class="text-muted mb-0">
            Semoga harimu menyenangkan dan pekerjaan berjalan lancar.
          </p>

        </div>

      </div>


      <!-- Info Box -->
      <div class="row">

        <!-- Box 1 -->
        <div class="col-12 col-sm-6 col-md-3">

          <div class="info-box shadow-sm">

            <span class="info-box-icon bg-info elevation-1">
              <i class="fas fa-cog"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                CPU Traffic
              </span>

              <span class="info-box-number">
                10 <small>%</small>
              </span>

            </div>

          </div>

        </div>


        <!-- Box 2 -->
        <div class="col-12 col-sm-6 col-md-3">

          <div class="info-box shadow-sm">

            <span class="info-box-icon bg-danger elevation-1">
              <i class="fas fa-thumbs-up"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                Likes
              </span>

              <span class="info-box-number">
                41,410
              </span>

            </div>

          </div>

        </div>


        <!-- Box 3 -->
        <div class="col-12 col-sm-6 col-md-3">

          <div class="info-box shadow-sm">

            <span class="info-box-icon bg-success elevation-1">
              <i class="fas fa-shopping-cart"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                Sales
              </span>

              <span class="info-box-number">
                760
              </span>

            </div>

          </div>

        </div>


        <!-- Box 4 -->
        <div class="col-12 col-sm-6 col-md-3">

          <div class="info-box shadow-sm">

            <span class="info-box-icon bg-warning elevation-1">
              <i class="fas fa-users"></i>
            </span>

            <div class="info-box-content">

              <span class="info-box-text">
                New Members
              </span>

              <span class="info-box-number">
                2,000
              </span>

            </div>

          </div>

        </div>

      </div>
      <!-- /.row -->


      <!-- Additional Dashboard Card -->
      <div class="card shadow border-0 mt-4">

        <div class="card-header bg-info">
          <h3 class="card-title text-white font-weight-bold">
            Informasi Dashboard
          </h3>
        </div>

        <div class="card-body">

          <p class="mb-0 text-muted">
            Selamat datang di halaman dashboard petugas.
            Gunakan menu sidebar untuk mengelola pengaduan,
            melakukan validasi, dan memberikan tanggapan kepada masyarakat.
          </p>

        </div>

      </div>

    </div>
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->


<?php
  include 'layout/footer.php';
?>