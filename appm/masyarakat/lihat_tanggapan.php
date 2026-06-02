<?php
include 'layout/header.php';
include '../koneksi/koneksi.php';
?>

<div class="container">
    <div class="row" style="margin-top: 3rem;">
        <div class="col">
            <h3 class="mb-3"><b>📋 Lihat Tanggapan</b></h3>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table">
                        <thead class="table-secondary">
                            <tr>
                                <th>ID_pengaduan</th>
                                <th>TGL_pengaduan</th>
                                <th>NIK</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php 
                        $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan ORDER BY id_pengaduan ASC");

                        while ($hasil = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td><?php echo $hasil['id_pengaduan']; ?></td>
                                <td><?php echo $hasil['tgl_pengaduan']; ?></td>
                                <td><?php echo $hasil['nik']; ?></td>
                                <td>
                                    <?php
                                    if($hasil['status'] == '0'){
                                        echo "<span class='badge bg-warning'>Menunggu</span>";
                                    } elseif($hasil['status'] == 'proses'){
                                        echo "<span class='badge bg-primary'>Diproses</span>";
                                    } elseif($hasil['status'] == 'selesai'){
                                        echo "<span class='badge bg-success'>Selesai</span>";
                                    } elseif($hasil['status'] == 'ditolak'){
                                        echo "<span class='badge bg-danger'>Ditolak</span>";
                                    } else {
                                        echo "<span class='badge bg-secondary'>Unknown</span>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="data/detail.php?id=<?php echo $hasil['id_pengaduan']; ?>" 
                                       class="btn btn-success btn-sm shadow">
                                        Detail
                                    </a>

                                    <a href="data/lihat_tanggapan.php?id=<?php echo $hasil['id_pengaduan']; ?>" 
                                       class="btn btn-info btn-sm text-white shadow">
                                        Tanggapan
                                    </a>
                                </td>
                            </tr>
                        <?php 
                        }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>