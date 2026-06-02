<?php
include 'layout/header.php';
include '../koneksi/koneksi.php';

// ambil id
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// ambil data pengaduan
$query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id'");
$data = mysqli_fetch_array($query);
?>

<div class="content-wrapper">
    <div class="container mt-4">

        <h3>Tolak Pengaduan</h3>

        <?php if($data){ ?>

        <div class="card shadow mt-3">
            <div class="card-body">

                <!-- INFO SINGKAT -->
                <p><b>ID Pengaduan:</b> <?php echo $data['id_pengaduan']; ?></p>
                <p><b>NIK:</b> <?php echo $data['nik']; ?></p>
                <p><b>Isi Laporan:</b><br> <?php echo $data['isi_laporan']; ?></p>

                <hr>

                <!-- FORM -->
                <form action="proses_tolak.php" method="POST">

                    <input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan']; ?>">

                    <div class="mb-3">
                        <label class="form-label">Alasan Penolakan</label>
                        <textarea name="alasan" class="form-control" rows="4" required 
                        placeholder="Masukkan alasan kenapa pengaduan ini ditolak..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-danger">
                        Kirim Penolakan
                    </button>

                    <a href="detail_pengaduan.php?id=<?php echo $data['id_pengaduan']; ?>" 
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </form>

            </div>
        </div>

        <?php } else { ?>
            <div class="alert alert-danger mt-3">
                Data tidak ditemukan!
            </div>
        <?php } ?>

    </div>
</div>

<?php
include 'layout/footer.php';
?>