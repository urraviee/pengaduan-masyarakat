<?php
include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nama ASC");
?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>Anggota Kelas XI PPLG</h1>
  </section>

  <section class="content">
    <div class="row">

      <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <div class="col-md-3">
          <div class="card card-primary card-outline">
            <div class="card-body box-profile text-center">

              <img class="profile-user-img img-fluid img-circle"
                   src="gambar/<?= $row['foto']; ?>"
                   style="width:100px;height:100px;object-fit:cover;">

              <h5 class="mt-2"><?= $row['nama']; ?></h5>
              <p class="text-muted"><?= $row['cita_cita']; ?></p>

              <a href="index.php?page=profil&id=<?= $row['id_siswa']; ?>"
                 class="btn btn-primary btn-sm btn-block">
                 Lihat Profil
              </a>

            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </section>
</div>
