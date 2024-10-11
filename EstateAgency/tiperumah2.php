<!DOCTYPE html>
<html lang="en">

<?php
include "koneksi.php";
// session_start();
$id = $_GET["id"];
$queryselTR = "select * from `tipe rumah` where `id_tiperumah` = '$id'";
$result = mysqli_query($koneksi, $queryselTR);
$row = mysqli_fetch_assoc($result);
// die(var_dump($row["nama_tipe"]));
?>

<head>
  <meta charset="utf-8">
  <title>EstateAgency Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="pentax-asset/css/style.css">
  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="tiperumah.php">Tipe Rumah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fasilitasmodern.php">Fasilitas Modern</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="desain&progress.php">Desain Progress & Legalitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="developer.php">Developer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hubungikami.php">Hubungi Kami</a>
            </li>
          </ul>
        </div>
      </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single"><?= $row["nama_tipe"] ?></h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.html">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="tiperumah2.html">Tipe Rumah</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                <?= $row["nama_tipe"] ?>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="img/slide-2.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/slide-3.jpg" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="img/slide-1.jpg" alt="">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <h1>Rp</h1>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c"><?= $row["harga"] ?></h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Luas Tanah</strong>
                      <span><?= $row["luas_tanah(m2)"] ?> m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Luas Bangunan</strong>
                      <span><?= $row["luas_bangunan(m2)"] ?> m
                        <sup>2</sup>
                      </span>
                      <span>
                        /
                      </span>
                      <span><?= $row["luas_bangunan2(m2)"] ?> m
                        <sup>2</sup>
                      </span>

                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Kamar Tidur</strong>
                      <span><?= $row["kamar_tidur"] ?> </span>
                      <span>
                        /
                      </span>
                      <span>
                        <?= $row["kamar_tidur2"] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Kamar Mandi</strong>
                      <span><?= $row["kamar_mandi"] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Ruang Tamu</strong>
                      <span><?= $row["ruang_tamu"] ?>
                      </span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Ruang Keluarga</strong>
                      <span><?= $row["ruang_keluarga"] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Dapur</strong>
                      <span><?= $row["dapur"] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Taman Indoor</strong>
                      <span><?= $row["taman_indoor"] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Taman Outdoor</strong>
                      <span><?= $row["taman_outdoor"] ?></span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Carport</strong>
                      <span><?= $row["carport"] ?></span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  <?= $row["desc_pro"] ?>
                </p>
              </div>
              <div class="row section-t3">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Material Premium</h3>
                  </div>
                </div>
              </div>
              <div class="amenities-list color-text-a">
                <ul class="list-a no-margin">
                  <li>Dinding Double Bata Merah</li>
                  <li>Pintu Kayu Solid Oven</li>
                  <li>Lantai Granit 60x60</li>
                  <li>Sanitary TOTO</li>
                  <li>Rangka Atap Baja Ringan</li>
                  <li>Aksen Fasad Conwood & Roster</li>
                  <li>Genteng Beton Cisangkan</li>
                  <li>Listrik 2200W</li>
                  <li>Bio Septictank</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">
          <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
              <iframe src="video/SYAHIRA - Britania Hills Pamulang.mp4" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="tab-pane fade size-5" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
              <img style='width: 110%;height:  110%; justify-content: center;' src="gambar/Syahira/syahira-map.webp" alt="" class="img-fluid">
            </div>
            <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->


  <!--/ footer Star /-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">2022 by Cahya Group</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <!-- Navigation  -->
  <script src="lib/jquery/bootstrap.bundle.min.js"></script>
</body>

</html>