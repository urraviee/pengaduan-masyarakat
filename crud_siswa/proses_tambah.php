<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'koneksi.php';

/* =======================
   AMBIL DATA FORM
======================= */
$nama           = mysqli_real_escape_string($koneksi, $_POST['nama']);
$kelamin        = mysqli_real_escape_string($koneksi, $_POST['kelamin']);
$tempat_lahir   = mysqli_real_escape_string($koneksi, $_POST['tempat_lahir']);
$tanggal_lahir  = $_POST['tanggal_lahir'];
$hobi           = mysqli_real_escape_string($koneksi, $_POST['hobi']);
$cita_cita      = mysqli_real_escape_string($koneksi, $_POST['cita_cita']);
$alamat         = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$agama          = mysqli_real_escape_string($koneksi, $_POST['agama']);

/* =======================
   VALIDASI FOTO
======================= */
$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];

if ($foto == "") {
    die("Foto wajib diisi");
}

$ext = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
$allowed = ['jpg','jpeg','png'];

if (!in_array($ext, $allowed)) {
    die("Format foto harus JPG / JPEG / PNG");
}

$namaFotoBaru = time() . "_" . $foto;

if (!move_uploaded_file($tmp, "gambar/" . $namaFotoBaru)) {
    die("Upload foto gagal");
}

/* =======================
   INSERT DATABASE
======================= */
$sql = "INSERT INTO siswa
(nama, kelamin, tempat_lahir, tanggal_lahir, hobi, cita_cita, alamat, agama, foto)
VALUES
('$nama','$kelamin','$tempat_lahir','$tanggal_lahir','$hobi','$cita_cita','$alamat','$agama','$namaFotoBaru')";

$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die("ERROR INSERT: " . mysqli_error($koneksi));
}

header("Location: index.php");
exit;