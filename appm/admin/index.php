<?php
include 'layout/header.php';
require '../koneksi/koneksi.php';

// ================== QUERY DATA ================== //

// total semua pengaduan
$total = mysqli_query($koneksi, "SELECT * FROM pengaduan");
$total_pengaduan = mysqli_num_rows($total);

// belum ditanggapi
$proses = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='proses'");
$jumlah_proses = mysqli_num_rows($proses);

// sudah selesai
$selesai = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='selesai'");
$jumlah_selesai = mysqli_num_rows($selesai);

// jumlah petugas
$petugas = mysqli_query($koneksi, "SELECT * FROM petugas");
$jumlah_petugas = mysqli_num_rows($petugas);
?>

<div class="content-wrapper">

  <!-- Header -->
  <div class="content-header">
    <div class="container-fluid">

      <div class="row mb-3">

        <div class="col-sm-6">
          <h2 class="font-weight-bold">
            Verifikasi & Validasi
          </h2>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right bg-white px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item">
              <a href="#">Validasi</a>
            </li>

            <li class="breadcrumb-item active">
              Dashboard
            </li>
          </ol>
        </div>

      </div>

    </div>
  </div>
  <!-- Main Content -->
  <section class="content">
    <div class="container">

      <!-- Welcome -->
      <div class="row mb-3">
        <div class="col">
          <h3>
            Selamat Datang, 
            <b><?php echo $_SESSION['nama']; ?></b> 👋
          </h3>
        </div>
      </div>

      <!-- Info Box -->
      <div class="row">

        <!-- Total Pengaduan -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box shadow-sm">
            <span class="info-box-icon bg-primary elevation-1">
              <i class="fas fa-file-alt"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Total Pengaduan</span>
              <span class="info-box-number"><?php echo $total_pengaduan; ?></span>
            </div>
          </div>
        </div>

        <!-- Belum Ditanggapi -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box shadow-sm">
            <span class="info-box-icon bg-warning elevation-1">
              <i class="fas fa-clock"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Belum Ditanggapi</span>
              <span class="info-box-number"><?php echo $jumlah_proses; ?></span>
            </div>
          </div>
        </div>

        <!-- Sudah Selesai -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box shadow-sm">
            <span class="info-box-icon bg-success elevation-1">
              <i class="fas fa-check-circle"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Sudah Selesai</span>
              <span class="info-box-number"><?php echo $jumlah_selesai; ?></span>
            </div>
          </div>
        </div>

        <!-- Total Petugas -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box shadow-sm">
            <span class="info-box-icon bg-info elevation-1">
              <i class="fas fa-user"></i>
            </span>
            <div class="info-box-content">
              <span class="info-box-text">Total Petugas</span>
              <span class="info-box-number"><?php echo $jumlah_petugas; ?></span>
            </div>
          </div>
        </div>

      </div>

      <!-- Tabel Pengaduan Terbaru -->
      <div class="row mt-4">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pengaduan Terbaru</h3>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Isi Laporan</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $data = mysqli_query($koneksi, "SELECT * FROM pengaduan ORDER BY tgl_pengaduan DESC LIMIT 5");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $d['tgl_pengaduan']; ?></td>
                    <td><?= $d['isi_laporan']; ?></td>
                    <td>
                      <?php if ($d['status'] == 'proses') { ?>
                        <span class="badge badge-warning">Proses</span>
                      <?php } else { ?>
                        <span class="badge badge-success">Selesai</span>
                      <?php } ?>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>

<?php include 'layout/footer.php'; ?>