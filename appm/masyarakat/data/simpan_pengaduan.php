<?php
    session_start();
    require '../../koneksi/koneksi.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $tgl  = $_POST['tgl_pengaduan'];
    $nik  = $_POST['nik'];
    $isi  = $_POST['isi_laporan'];
    $st   = '0';

    // validasi file
    if (!isset($_FILES['foto']) || $_FILES['foto']['error'] != 0) {
        echo "<script>alert('Foto wajib diupload!'); window.history.back();</script>";
        exit;
    }

    $ft   = $_FILES['foto']['name'];
    $file = $_FILES['foto']['tmp_name'];

    // validasi input
    if ($tgl == "" || $nik == "" || $isi == "") {
        echo "<script>alert('Semua data wajib diisi!'); window.history.back();</script>";
        exit;
    }

    // pastikan folder ada
    $folder = "../../foto1/";
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    // upload file
    move_uploaded_file($file, $folder . $ft);

    // insert database
    $sql = mysqli_query($koneksi, "INSERT INTO pengaduan 
    (tgl_pengaduan, nik, isi_laporan, foto, status, alasan_tolak) 
    VALUES ('$tgl','$nik','$isi','$ft','$st','-')");

    // cek error
    if(!$sql){
        die("Error query: " . mysqli_error($koneksi));
    }

    // sukses
    echo "<script>
        alert('Data Laporan Berhasil Disimpan');
        document.location.href='../lihat_tanggapan.php';
    </script>";
?>