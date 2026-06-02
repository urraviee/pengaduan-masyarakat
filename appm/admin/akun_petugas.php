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
            Data Akun Petugas
          </h2>
        </div>

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right bg-white px-3 py-2 rounded shadow-sm">
            <li class="breadcrumb-item">
              <a href="#">Akun Petugas</a>
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

        <!-- Header Card -->
        <div class="card-header bg-info d-flex justify-content-between align-items-center">

          <h3 class="card-title text-white font-weight-bold">
            Data Semua Petugas
          </h3>

          <a href="action/tambah_akun.php" class="btn btn-success btn-sm">
            <i class="fas fa-plus"></i> Tambah Akun
          </a>

        </div>

        <!-- Card Body -->
        <div class="card-body table-responsive p-0">

          <table class="table table-hover table-bordered text-center mb-0">

            <thead class="bg-light">

              <tr>
                <th width="5%">NO</th>
                <th>ID Petugas</th>
                <th>Nama Petugas</th>
                <th>Telephone</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th width="18%">Aksi</th>
              </tr>

            </thead>

            <tbody>

            <?php 
              require '../koneksi/koneksi.php';

              $sql = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY id_petugas ASC");

              $no = 0;

              while ($hasil = mysqli_fetch_array($sql)) {

                $no++;
            ?>

              <tr>

                <td>
                  <b><?php echo $no ?></b>
                </td>

                <td>
                  <?php echo $hasil['id_petugas']; ?>
                </td>

                <td class="text-left">
                  <?php echo $hasil['nama_petugas']; ?>
                </td>

                <td>
                  <?php echo $hasil['telp']; ?>
                </td>

                <td>
                  <?php echo $hasil['username']; ?>
                </td>

                <td>
                  <?php echo $hasil['password']; ?>
                </td>

                <td>

                  <span class="badge badge-info px-3 py-2">
                    <?php echo $hasil['level']; ?>
                  </span>

                </td>

                <td>

                  <a href="action/edit_petugas.php?id=<?php echo $hasil['id_petugas'];?>" 
                     class="btn btn-primary btn-sm mb-1">
                     
                    <i class="fas fa-edit"></i> Edit

                  </a>

                  <a href="action/delete.php?id=<?php echo $hasil['id_petugas'];?>" 
                     class="btn btn-danger btn-sm mb-1">
                     
                    <i class="fas fa-trash"></i> Delete

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