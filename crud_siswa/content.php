<?php
  include 'koneksi.php';
  $query = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Data Siswa 11 PPLG</h1>
      </div>
    </div>

    <section class="content">

      <a href="tambah.php" class="btn btn-primary btn-block mb-3">
        <i class="fas fa-plus"></i> Tambah
      </a>

      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Tanggal lahir</th>
            <th>Tempat lahir</th>
            <th>Hobi</th>
            <th>Cita-cita</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Foto</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $no = 1;
            while ($row = mysqli_fetch_assoc($query)) { 
          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['kelamin'] ?></td>
              <td><?= $row['tanggal_lahir'] ?></td>
              <td><?= $row['tempat_lahir'] ?></td>
              <td><?= $row['hobi'] ?></td>
              <td><?= $row['cita_cita'] ?></td>
              <td><?= $row['alamat'] ?></td>
              <td><?= $row['agama'] ?></td>
              <td><img src="gambar/<?= $row['foto'] ?>" width="60"></td>
              <td>
                <a href="ubah.php?id=<?= $row['id_siswa'] ?>" class="btn btn-sm btn-warning">
                  <i class="fas fa-edit"></i> Edit
                  </a>
                <a href="hapus.php?id=<?= $row['id_siswa'] ?>" 
                  class="btn btn-sm btn-danger" 
                  onclick="return confirm('Yakin mau hapus data ini?');">
                <i class="fas fa-trash"></i> Hapus
                </a>
              </td>
            </tr>
          <?php } ?>
        </tbody>

      </table>

    </section>
</div>
