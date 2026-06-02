<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'koneksi.php';

/* =======================
   AMBIL DATA
======================= */
$id             = intval($_POST['id_siswa']);
$nama           = mysqli_real_escape_string($koneksi, $_POST['nama']);
$kelamin        = mysqli_real_escape_string($koneksi, $_POST['kelamin']);
$tempat_lahir   = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
$tanggal_lahir  = $_POST['tanggal_lahir'];
$hobi           = mysqli_real_escape_string($koneksi, $_POST['hobi']);
$cita_cita      = mysqli_real_escape_string($koneksi, $_POST['cita_cita']);
$alamat         = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$agama          = mysqli_real_escape_string($koneksi, $_POST['agama']);

if (!$id) {
    die("ID siswa tidak ditemukan");
}

/* =======================
   CEK FOTO BARU
======================= */
if (!empty($_FILES['foto']['name'])) {

    $fotoBaru = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $ext = strtolower(pathinfo($fotoBaru, PATHINFO_EXTENSION));
    $allowed = ['jpg','jpeg','png'];

    if (!in_array($ext, $allowed)) {
        die("Format foto tidak valid");
    }

    $namaFotoBaru = time() . "_" . $fotoBaru;

    if (!move_uploaded_file($tmp, "gambar/" . $namaFotoBaru)) {
        die("Upload foto baru gagal");
    }

    // hapus foto lama
    $q = mysqli_query($koneksi, "SELECT foto FROM siswa WHERE id_siswa='$id'");
    $r = mysqli_fetch_assoc($q);
    if ($r && file_exists("gambar/".$r['foto'])) {
        unlink("gambar/".$r['foto']);
    }

    $sql = "UPDATE siswa SET
                nama='$nama',
                kelamin='$kelamin',
                tempat_lahir='$tempat_lahir',
                tanggal_lahir='$tanggal_lahir',
                hobi='$hobi',
                cita_cita='$cita_cita',
                alamat='$alamat',
                agama='$agama',
                foto='$namaFotoBaru'
            WHERE id_siswa='$id'";

} else {

    $sql = "UPDATE siswa SET
                nama='$nama',
                kelamin='$kelamin',
                tempat_lahir='$tempat_lahir',
                tanggal_lahir='$tanggal_lahir',
                hobi='$hobi',
                cita_cita='$cita_cita',
                alamat='$alamat',
                agama='$agama'
            WHERE id_siswa='$id'";
}

$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die("ERROR UPDATE: " . mysqli_error($koneksi));
}

header("Location: index.php");
exit;