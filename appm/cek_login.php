<?php   
    require 'koneksi/koneksi.php';

    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $user   = mysqli_query($koneksi, "SELECT * FROM masyarakat 
                            WHERE username='$username' and password='$password'");

    $cek = mysqli_num_rows($user);
    if($cek>0){
        $data = mysqli_fetch_array($user);
        session_start();
        $_SESSION['nama'] = $username;
        $_SESSION['tgl_pengaduan'] = $data['tgl_pengaduan'];
        $_SESSION['nik'] = $data['nik'];
        header("location: masyarakat/index.php");
    }else{
        echo "<script>
                alert ('LOGIN ANDA GAGAL DISIMPAN!!! Silahkan ulangi login data');
                document.location.href='index.php';
        </script>";

    }

?>