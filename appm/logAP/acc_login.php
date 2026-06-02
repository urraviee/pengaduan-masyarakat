<?php
session_start();
include '../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, 
    "SELECT * FROM petugas WHERE username='$username' AND password='$password'"
);

$cek_logAP = mysqli_num_rows($login);

if ($cek_logAP > 0) {
    $data = mysqli_fetch_assoc($login);

    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['username']   = $username;
    $_SESSION['nama']       = $data['nama_petugas'];
    $_SESSION['level']      = $data['level'];

    if ($data['level'] == "admin") {
        header("Location: ../admin/index.php");
    } elseif ($data['level'] == "petugas") {
        header("Location: ../petugas/index.php");
    }

} else {
    echo "
    <script>
        alert('Username atau password salah!');
        document.location='index.php';
    </script>";
}
?>
