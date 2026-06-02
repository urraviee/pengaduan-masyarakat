<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="my-4">Edit Akun</h3>
                <a href="../akun_petugas.php" class="btn btn-primary mb-4 text-white">Kembali</a>
              
            <?php
                require '../../koneksi/koneksi.php';
                $query = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$_GET[id]' ");
                $hasil = mysqli_fetch_array($query);
                if ($query) {
                ?>

                <form action="update.php" method="POST">

                    <div class="mb-3">
                        <label for="id_petugas" class="form-label">ID Petugas</label>
                        <input type="text" name="id_petugas" class="form-control" id="id_petugas" value="<?php echo $hasil['id_petugas']; ?>"  readonly>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_petugas" class="form-control" value="<?php echo $hasil['nama_petugas']; ?>" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control"value="<?php echo $hasil['username']; ?>" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" name="password" class="form-control"value="<?php echo $hasil['password']; ?>" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telephone</label>
                        <input type="text" name="telp" class="form-control"value="<?php echo $hasil['telp']; ?>" >
                    </div>
                    <div class="mb-3">
                            <label class="form-label">Level</label>
                            <select name="level" class="form-control" required>
                                <option value="">-- Pilih Level --</option>
                                <option value="admin" <?php if($hasil['level']=='admin') echo 'selected'; ?>>Admin</option>
                                <option value="petugas" <?php if($hasil['level']=='petugas') echo 'selected'; ?>>Petugas</option>
                            </select>

                    </div>

                    <button type="submit" class="btn btn-primary"> Simpan Perubahan </button>

                </form>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
