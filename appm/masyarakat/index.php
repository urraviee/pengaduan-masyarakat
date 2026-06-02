<?php
  include 'layout/header.php';
?>

    <!--Content buka-->
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/poster1.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/poster2.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/poster3.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
              <h2 class="text-center mt-4"><b>SELAMAT DATANG <br>
              " <?php echo $_SESSION['nama']; ?> "
              <br> DI SISTEM LAPORAN PENGADUAN MASYARAKAT</b></h2>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col my-2 text-center">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <p>
            Aplikasi Pelaporan Pengaduan Masyarakat merupakan sebuah sistem layanan berbasis
            digital yang dirancang untuk memudahkan masyarakat dalam menyampaikan berbagai 
            bentuk pengaduan, keluhan, kritik, maupun saran terkait pelayanan publik. Melalui
            aplikasi ini, masyarakat dapat melaporkan permasalahan yang terjadi di lingkungan
            sekitar secara cepat, mudah, dan transparan tanpa harus datang langsung ke kantor 
            terkait
          </p>
        </div>
      </div>

    </div>
    <!--Content tutup-->

  <?php
  include 'layout/footer.php';
?>