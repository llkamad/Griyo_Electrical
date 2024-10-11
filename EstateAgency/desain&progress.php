<!DOCTYPE html>
<html lang="en">

<?php
include "koneksi.php";
$queryselDes = "select * from `desain progress & legalitas`";
$resultDesain = mysqli_query($koneksi, $queryselDes);
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
            <a class="nav-link" href="tiperumah.php">Tipe Rumah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fasilitasmodern.php">Fasilitas Modern</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="desain&progress.php">Desain Progress & Legalitas</a>
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
            <h1 class="title-single">BRITANIA HILLS</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="home.html">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Desain Progress & Legalitas
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <section class="portfolio_area" id="portfolio">
    <div class="container">
      <div class="filters portfolio-filter">
        <ul>
          <li class="active" data-filter="*">all</li>
          <!-- dibikin looping tipe  -->
          <li data-filter=".pamulang">pamulang</li>
          <li data-filter=".serpong">serpong</li>
          <li data-filter=".legalitas">legalitas</li>
        </ul>
      </div>
      <div class="filters-content">
        <div class="row portfolio-grid">
          <div class="grid-sizer col-md-3 col-lg-4"></div>

          <!-- Desain Custom -->
          <!-- Looping START -->
          <!-- untuk div class pamulang/serpong , nanti  di PHP-in jadi nanti tergantung database -->
          <?php while ($row = mysqli_fetch_assoc($resultDesain)) :  ?>
            <div class="col-lg-4 col-md-6 all <?= $row["tipe"] ?>">
              <div class="single_portfolio">
                <img class="img-fluid w-100" src="../admin/img/progress/<?= $row["foto"] ?>">
                <div class="short_info">
                  <h5><?= $row["deskripsi"] ?></h4>
                </div>
              </div>
            </div>
          <?php endwhile ?>

          <!-- <div class="col-lg-4 col-md-6 all legalitas">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/Sertifikat/Izin Lingkungan Hidup Britania Pamulang.webp" alt="">
              <div class="short_info">
                <h4>Izin Lingkungan Hidup Britania Pamulang</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all pamulang">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/desain&progress/pamulang/pamulang (1).jpg">
            </div>
          </div>
          <div class="col-lg-4 col-md-6 all pamulang">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/desain&progress/pamulang/pamulang (10).jpeg" alt="test">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all pamulang">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/desain&progress/pamulang/pamulang (11).jpeg" alt="test">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all serpong">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/desain&progress/pamulang/pamulang (12).jpeg" alt="test">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all serpong">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/desain&progress/pamulang/pamulang (13).jpeg" alt="test">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all serpong">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/desain&progress/pamulang/pamulang (20).jpeg" alt="test">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all serpong">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/desain&progress/pamulang/pamulang (21).jpeg" alt="test">
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all legalitas">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/Sertifikat/Izin Lingkungan Hidup Britania Pamulang.webp" alt="">
              <div class="short_info">
                <h4>Izin Lingkungan Hidup Britania Pamulang</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all legalitas">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/Sertifikat/Izin Lingkungan Hidup Britania Serpong.webp" alt="">
              <div class="short_info">
                <h4>Izin Lingkungan Hidup Britania Serpong</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all legalitas">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/Sertifikat/Izin Lingkungan Hidup Britania Serpong.webp" alt="">
              <div class="short_info">
                <h4>Izin Lingkungan Hidup Britania Serpong</h4>
              </div>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 all legalitas">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="gambar/Sertifikat/Izin Mendirikan Bangunan (IMB) Britania Pamulang.webp"
                alt="">
              <div class="short_info">
                <h4>Izin Lingkungan Hidup Britania Serpong</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all legalitas">
            <div class="single_portfolio">
              <img class="img-fluid w-100"
                src="gambar/Sertifikat/Izin Mendirikan Bangunan (IMB) Britania Serpong.webp" alt="Izin Mendirikan Bangunan (IMB) Britania Serpong">
              <div class="short_info">
                <h4>Izin Mendirikan Bangunan (IMB) Britania Serpong</h4>
              </div>
            </div>
          </div>           -->





          <!-- Tambahin banyak img disini -->
          <!-- Desain Custom End -->

          <!-- CONTOH -->
          <!-- <div class="col-lg-4 col-md-6 all fashion motion">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="pentax-asset/img/project/1.jpg" alt="">
              <div class="short_info">
                <p>Fashion</p>
                <h4><a href="portfolio-details.html">Fahion photography</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-8 col-md-6 all weeding motion portrait">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="pentax-asset/img/project/2.jpg" alt="">
              <div class="short_info">
                <p>construction</p>
                <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 all weeding motion fashion">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="pentax-asset/img/project/4.jpg" alt="">
              <div class="short_info">
                <p>construction</p>
                <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 all motion portrait fashion">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="pentax-asset/img/project/5.jpg" alt="">
              <div class="short_info">
                <p>construction</p>
                <h4><a href="portfolio-details.html">Desert Work, Dubai</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-8 col-md-6 all weeding  fashion">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="pentax-asset/img/project/6.jpg" alt="">
              <div class="short_info">
                <p>construction</p>
                <h4><a href="pentax-asset/portfolio-details.html">Desert Work, Dubai</a></h4>
              </div>
            </div>
          </div> -->
          <!-- CONTOH -->

        </div>
      </div>
    </div>
  </section>

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



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="pentax-asset/js/jquery-3.3.1.min.js"></script>
  <script src="pentax-asset/js/popper.js"></script>
  <script src="pentax-asset/js/bootstrap.min.js"></script>
  <script src="pentax-asset/js/stellar.js"></script>
  <script src="pentax-asset/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="pentax-asset/vendors/isotope/isotope.pkgd.min.js"></script>
  <script src="pentax-asset/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="pentax-asset/js/jquery.ajaxchimp.min.js"></script>
  <script src="pentax-asset/js/jquery.counterup.min.js"></script>
  <script src="pentax-asset/js/jquery.waypoints.min.js"></script>
  <script src="pentax-asset/js/mail-script.js"></script>
  <script src="pentax-asset/js/contact.js"></script>
  <script src="pentax-asset/js/jquery.form.js"></script>
  <script src="pentax-asset/js/jquery.validate.min.js"></script>
  <script src="pentax-asset/js/mail-script.js"></script>
  <script src="pentax-asset/js/theme.js"></script>

  <!-- Navigation  -->
  <script src="lib/jquery/bootstrap.bundle.min.js"></script>



</body>

</html>