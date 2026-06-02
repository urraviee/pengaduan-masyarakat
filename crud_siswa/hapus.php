<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT foto FROM siswa WHERE id_Siswa='$id'");
$row = mysqli_fetch_assoc($data);
$foto = $row['foto'];


mysqli_query($koneksi, "DELETE FROM siswa WHERE id_Siswa = '$id'");

header("Location: index.php");
exit;
?>
