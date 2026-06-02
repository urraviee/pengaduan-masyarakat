<?php 
    require '../../koneksi/koneksi.php';

    $id_pengaduan = $_POST['id_pengaduan'];
    $tgl_tanggapan = $_POST['tgl_tanggapan'];
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_POST['id_petugas'];
    $status = 'selesai';

    $sql = mysqli_query($koneksi, "INSERT INTO tanggapan(id_pengaduan, tgl_tanggapan, tanggapan, id_petugas)
                                    VALUES ('$id_pengaduan', '$tgl_tanggapan', '$tanggapan', '$id_petugas' )");
    $update_st = mysqli_query($koneksi, "UPDATE pengaduan SET status = '$status' WHERE id_pengaduan = '$id_pengaduan'");
    if ($sql) {
       ?>
            <script type="text/javascript">
                alert('Data Sudah DiTanggapi');
                document.location.href='../validasi.php';
            </script>
       <?php
    }
?>