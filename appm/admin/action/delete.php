<?php 

    require '../../koneksi/koneksi.php';

    $id = $_GET['id'];

    $sql = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id'");

    if ($sql) {
        ?>
        <script>
            alert('Data Berhasil Dihapus!');
            document.location.href="../akun_petugas.php";
        </script>
        <?php
    }

?>