<?php 
    $host  = 'localhost';
    $user  = 'root';
    $pass  = '';
    $db    = 'appm';

    $koneksi = mysqli_connect($host, $user, $pass, $db);

    if (!$koneksi) {
        echo "Error: " . mysqli_connect_error();
    } else {
        //echo "Koneksi ke database berhasil!";
    }
?>
