<?php
    include '../koneksi/koneksi.php';

    // ambil data dari form
    $id = isset($_POST['id_pengaduan']) ? intval($_POST['id_pengaduan']) : 0;
    $alasan = isset($_POST['alasan']) ? mysqli_real_escape_string($koneksi, $_POST['alasan']) : '';

    // validasi sederhana
    if($id == 0 || empty($alasan)){
        echo "<script>alert('Data tidak lengkap!'); window.history.back();</script>";
        exit;
    }

    // query update
    $query = mysqli_query($koneksi, "
    UPDATE pengaduan 
    SET status='ditolak', alasan_tolak='$alasan' 
    WHERE id_pengaduan='$id'
    ");

    // cek hasil
    if($query){
        echo "<script>
            alert('Pengaduan berhasil ditolak');
            window.location='validasi.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menolak pengaduan');
            window.history.back();
        </script>";
    }
?>