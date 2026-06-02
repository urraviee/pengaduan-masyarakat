<?php
include 'koneksi.php';
$id = intval($_GET['id']);
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa='$id'");
$row = mysqli_fetch_assoc($data);

if (!$row) {
    echo "Data tidak ditemukan";
    exit;
}
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Profil Anggota</h1>
  </section>

  <section class="content">
    <div class="row">

      <div class="col-md-4">
        <div class="card card-primary card-outline">
          <div class="card-body text-center">
            <img src="gambar/<?= $row['foto']; ?>"
                 class="img-fluid img-circle"
                 style="width:150px;height:150px;object-fit:cover;">
            <h3 class="mt-3"><?= $row['nama']; ?></h3>
            <p class="text-muted"><?= $row['cita_cita']; ?></p>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              <tr><th>Jenis Kelamin</th><td><?= $row['kelamin']; ?></td></tr>
              <tr><th>Tempat Lahir</th><td><?= $row['tempat_lahir']; ?></td></tr>
              <tr><th>Tanggal Lahir</th><td><?= $row['tanggal_lahir']; ?></td></tr>
              <tr><th>Hobi</th><td><?= $row['hobi']; ?></td></tr>
              <tr><th>Alamat</th><td><?= $row['alamat']; ?></td></tr>
              <tr><th>Agama</th><td><?= $row['agama']; ?></td></tr>
            </table>

            <a href="index.php?page=anggota" class="btn btn-secondary">
              Kembali
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>
</div>
