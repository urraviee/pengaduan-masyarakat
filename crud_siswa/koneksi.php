<?php
$koneksi = mysqli_connect("localhost", "root", "", "barudak");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
