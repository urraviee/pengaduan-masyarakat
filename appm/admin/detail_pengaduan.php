<?php 
include 'layout/header.php';
?>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container mt-2 ml-3">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">verifikasi & validasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">validasi</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col">

                    <?php 
                    require '../koneksi/koneksi.php';
                    $sql  = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$_GET[id]'");
                    $data = mysqli_fetch_array($sql);
                    
                    if ($data) {   
                    ?>

                    <div class="row">
                        <div class="col">
                            <h2>Detail pengaduan</h2>
                            <a href="validasi.php" class="btn btn-primary"> kembali</a>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">

                            <div class="card mb-3 border border-1 border-dark" style="width: 500px;">
                                
                                <img src="../foto1/<?php echo $data['foto']; ?>" 
                                     class="card-img-top img-fluid" 
                                     alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">
                                        NIK : <?php echo $data['nik']; ?>
                                    </h5>

                                    <p class="card-text">
                                        <?php echo $data['isi_laporan']; ?>
                                    </p>

                                    <p class="card-text">
                                        <small class="text-muted">
                                            setatus : <?php echo $data['status']; ?>
                                        </small>
                                    </p>
                                </div>

                            </div>

                            <?php
                                } 
                            ?>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- /.content-header -->

</div>

<?php 
include 'layout/footer.php';
?>
