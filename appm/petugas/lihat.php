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
            Data Tanggapan
          </h2>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right bg-white px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item">
              <a href="#">Tanggapan</a>
            </li>

            <li class="breadcrumb-item active">
              Dashboard
            </li>
          </ol>
        </div>

      </div>


      <!-- Card -->
      <div class="card shadow border-0">

        <!-- Card Header -->
        <div class="card-header bg-info">
          <h3 class="card-title text-white font-weight-bold">
            Data Semua Tanggapan
          </h3>
        </div>

        <!-- Card Body -->
        <div class="card-body table-responsive p-0">

          <table class="table table-hover table-bordered text-center mb-0">

            <thead class="bg-light">
              <tr>
                <th width="10%">ID Tanggapan</th>
                <th width="10%">ID Pengaduan</th>
                <th width="15%">Tanggal Tanggapan</th>
                <th>Tanggapan</th>
                <th width="10%">ID Petugas</th>
              </tr>
            </thead>

            <tbody>

              <?php 
                include '../koneksi/koneksi.php';

                $sql = mysqli_query($koneksi, "SELECT * FROM tanggapan ORDER BY id_tanggapan ASC");

                while ($hasil = mysqli_fetch_array($sql)) {
              ?>

              <tr>

                <td>
                  <b><?php echo $hasil['id_tanggapan']; ?></b>
                </td>

                <td>
                  <?php echo $hasil['id_pengaduan']; ?>
                </td>

                <td>
                  <?php echo $hasil['tgl_tanggapan']; ?>
                </td>

                <td class="text-left">
                  <?php echo $hasil['tanggapan']; ?>
                </td>

                <td>
                  <span class="badge badge-info px-3 py-2">
                    <?php echo $hasil['id_petugas']; ?>
                  </span>
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
  </div>
  <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->


<?php
  include 'layout/footer.php';
?>