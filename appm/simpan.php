<?php 
    require 'koneksi/koneksi.php';

    $nama       = $_POST['nama'];
    $nik        = $_POST['nik'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $telp       = $_POST['telp'];

    $sql = mysqli_query($koneksi, "INSERT INTO masyarakat(nama, nik, username, password, telp)
                                   VALUES('$nama', '$nik', '$username', '$password', '$telp')");
    if ($sql) {
        ?> <script>
            alert('Data Anda Berhasil Disimpan! Klik Untuk Melanjutkan');
            document.location.href='index.php';
        </script> <?php
    } else {
        ?> <script>
            alert('Data Anda Gagal Disimpan! Klik Untuk Melanjutkan');
            document.location.href='register.php';
        </script> <?php
    }
?>
