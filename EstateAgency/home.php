<!DOCTYPE html>
<html lang="en">

<?php
include "koneksi.php";
$queryselTR = "select * from `tipe rumah`";
$result = mysqli_query($koneksi, $queryselTR);
$queryselAgen = "select * from `agen` limit 3";
$resultAgen = mysqli_query($koneksi, $queryselAgen);
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
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tiperumah.php">Tipe Rumah</a>
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

  <!--/ Carousel Star /-->
  
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Jl. Anggrek No.65, RW.9, Benda Baru, Pamulang
                      <br> Kota Tangerang Selatan
                      <br> Banten 15415
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Tipe :</span> <?=$row["nama_tipe"] ?>
                    </h1>
                    <?=$row["desc_pro"] ?>
                    <p class="intro-subtitle intro-price">
                      <a href="tiperumah2.php?id=<?=$row["id_tiperumah"] ?>"><span class="price-a">Harga | Rp<?=$row["harga"] ?></span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>

  <!--/ Carousel end /-->


  

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Motivasi, Visi, dan Misi</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Motivasi</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Motivasi Owner mengembangkan BRITANIA HILLS ini ialah karena pengalaman Owner sebagai konsumen properti yang pernah dikecewakan.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="developer.php#motivasi" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Visi</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Walau ditengah kondisi pandemi ditambah serangan tidak sportif dari kompetitor, kami tetap sukses menjual project BRITANIA HILLS Serpong sebanyak 20 unit dalam waktu 4 bulan yang saat ini sedang proses pembangunan.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="developer.php#visi" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Misi</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Berdasarkan visi tersebut, kami mempersembahkan cluster BRITANIA HILLS Pamulang yang menawarkan suasana sejuk alam tropis
              </p>
            </div>
            <div class="card-footer-c">
              <a href="developer.php#misi" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Services End /-->

  <!--/ Agents Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Meet The Team</h2>
            </div>
            <div class="title-link">
              <a href="hubungikami.php#MeetTheTeam">All
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <?php while ($row = mysqli_fetch_assoc($resultAgen)) :  ?>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="../admin/img/agen/<?= $row["foto"] ?>" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two"><?= $row["nama"] ?></a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> <?= $row["no_telp"] ?>
                  </p>
                  <p>
                    <strong>IG: </strong> <?= $row["instagram"] ?>
                  </p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <!-- <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="gambar/Agen/Salsya.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Salsya</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> 0813 8282 2007
                  </p>
                  <p>
                    <strong>IG: </strong> @britaniahills.salsya
                  </p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="gambar/Agen/Nendra.jpg" alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">Nendra</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> 0858 8185 8758
                  </p>
                  <p>
                    <strong>IG: </strong> @britaniahills.nendra
                  </p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="link-one">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!--/ Agents End /-->

  <!--/ News Star /-->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Lokasi Kami</h2>
            </div>
            <div class="title-link">
              <a href="hubungikami.php">All
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="contact-map box" style="margin-bottom: 1.5rem;">
          <div id="map" class="contact-map">
            <iframe src="https://www.google.com.qa/maps/d/u/0/embed?mid=10EcZVQSRxZxeWsHGeGMrzrBvjkT9vXCT&ehbc=2E312F"
              width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ News End /-->

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