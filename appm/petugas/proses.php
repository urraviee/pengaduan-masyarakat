<?php 
    require '../koneksi/koneksi.php';
    $sql = mysqli_query($koneksi, "UPDATE pengaduan SET status='proses' where id_pengaduan='$_GET[id]'");
    if ($sql) {
        header('location: validasi.php');
    }
?>