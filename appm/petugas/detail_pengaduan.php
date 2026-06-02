<?php 
include 'layout/header.php';
include '../koneksi/koneksi.php';

// Ambil id dengan aman
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Ambil data
$sql  = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
$data = mysqli_fetch_array($sql);
?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container mt-2 ml-3">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Verifikasi & Validasi</h1>
                </div>
            </div>

            <?php if ($data) { ?>

            <div class="row mt-3">
                <div class="col">
                    <h2>Detail Pengaduan</h2>

                    <!-- Tombol -->
                    <a href="validasi.php" class="btn btn-secondary">Kembali</a>

                    <?php if($data['status'] == '0'){ ?>
                        <a href="proses.php?id=<?php echo $data['id_pengaduan']; ?>" 
                        class="btn btn-success"
                        onclick="return confirm('Yakin data ini akan diproses?')">
                        Proses Verifikasi
                        </a>

                        <a href="form_tolak.php?id=<?php echo $data['id_pengaduan']; ?>" 
                        class="btn btn-danger">
                        Tolak Pengaduan
                        </a>
                    <?php } ?>

                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-5">

                    <div class="card border border-dark shadow">

                        <!-- FOTO -->
                        <img src="../foto1/<?php echo $data['foto']; ?>" 
                             class="card-img-top img-fluid">

                        <div class="card-body">
                            <h5 class="card-title">
                                NIK: <?php echo $data['nik']; ?>
                            </h5>

                            <p class="card-text">
                                <?php echo $data['isi_laporan']; ?>
                            </p>

                            <!-- STATUS -->
                            <p>
                                Status:
                                <?php
                                if($data['status'] == '0'){
                                    echo "<span class='badge bg-warning'>Menunggu</span>";
                                } elseif($data['status'] == 'proses'){
                                    echo "<span class='badge bg-primary'>Diproses</span>";
                                } elseif($data['status'] == 'selesai'){
                                    echo "<span class='badge bg-success'>Selesai</span>";
                                } elseif($data['status'] == 'ditolak'){
                                    echo "<span class='badge bg-danger'>Ditolak</span>";
                                }
                                ?>
                            </p>

                            <!-- ALASAN TOLAK -->
                            <?php if($data['status'] == 'ditolak'){ ?>
                                <div class="alert alert-danger">
                                    <b>Alasan Penolakan:</b><br>
                                    <?php echo $data['alasan_tolak']; ?>
                                </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>
            </div>

            <?php } else { ?>
                <div class="alert alert-danger mt-3">
                    Data tidak ditemukan!
                </div>
            <?php } ?>

        </div>
    </div>

</div>

<?php 
include 'layout/footer.php';
?>