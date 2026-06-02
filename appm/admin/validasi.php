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
  <!-- /.content-header -->


  <!-- Main Content -->
  <section class="content">
    <div class="container-fluid">

      <!-- Card -->
      <div class="card shadow border-0">

        <!-- Card Header -->
        <div class="card-header bg-info">

          <h3 class="card-title text-white font-weight-bold">
            Data Pengaduan Proses
          </h3>

        </div>

        <!-- Card Body -->
        <div class="card-body table-responsive p-0">

          <table class="table table-hover table-bordered text-center mb-0">

            <thead class="bg-light">

              <tr>
                <th width="10%">ID Pengaduan</th>
                <th width="15%">NIK</th>
                <th>Pengaduan</th>
                <th width="15%">Tanggal</th>
                <th width="10%">Status</th>
                <th width="18%">Detail</th>
              </tr>

            </thead>

            <tbody>

              <?php 
                include '../koneksi/koneksi.php';

                $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='proses' ");

                $no = 0;

                while ($hasil = mysqli_fetch_array($sql)) {

                  $no++;
              ?>

              <tr>

                <td>
                  <b><?php echo $hasil['id_pengaduan']; ?></b>
                </td>

                <td>
                  <?php echo $hasil['nik']; ?>
                </td>

                <td class="text-left">
                  <?php echo $hasil['isi_laporan']; ?>
                </td>

                <td>
                  <?php echo $hasil['tgl_pengaduan']; ?>
                </td>

                <td>

                  <span class="badge badge-warning px-3 py-2">
                    <?php echo $hasil['status']; ?>
                  </span>

                </td>

                <td>

                  <a href="detail_pengaduan.php?id=<?php echo $hasil['id_pengaduan']; ?>" 
                     class="btn btn-info btn-sm mb-1">
                    
                    <i class="fas fa-eye"></i>
                    Detail

                  </a>

                  <br>

                  <a href="tanggapi.php?id=<?php echo $hasil['id_pengaduan']; ?>" 
                     class="btn btn-success btn-sm mt-1">
                    
                    <i class="fas fa-reply"></i>
                    Tanggapi

                  </a>

                </td>

              </tr>

              <?php 
                }
              ?>

            </tbody>

          </table>

        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </div>
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->


<?php
  include 'layout/footer.php';
?>