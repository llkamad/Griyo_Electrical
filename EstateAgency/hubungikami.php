<!DOCTYPE html>
<html lang="en">
<?php
include "koneksi.php";
$queryselAgen = "select * from `agen`";
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
  
  <!-- Font  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

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
            <a class="nav-link" href="desain&progress.php">Desain Progress & Legalitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="developer.php">Developer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="hubungikami.php">Hubungi Kami</a>
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
            <h1 class="title-single">Lokasi</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Lokasi
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Contact Star /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com.qa/maps/d/u/0/embed?mid=10EcZVQSRxZxeWsHGeGMrzrBvjkT9vXCT&ehbc=2E312F"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-sm-12 section-t8">
          <div class="row">
            <div class="col-md-7">
              <form  action="https://formsubmit.co/b3cc0117116acd2e546707e870d552ca" method="post">
                <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div> -->
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <textarea name="message" class="form-control" name="message" cols="45" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-a">Send Message</button>
                  </div>
                </div>
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://localhost/britaniahills/EstateAgency/thanks.html">
              </form>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-paper-plane"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Hubungi</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="bi bi-envelope"> britaniahills@gmail.com</p>
                    <p class="bi bi-whatsapp"> 0821 2200 0319</p>
                    <p class="bi bi-whatsapp"> 0812 8008 6363</p>
                    <p class="bi bi-whatsapp"> 0821 3333 6619</p>
                    <p class="bi bi-telephone"> 021 756 85 386</p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                <div class="icon-box-icon">
                  <span class="ion-ios-pin"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Temukan kami di</h4>
                  </div>
                  <div class="icon-box-content">
                    <p class="mb-1">
                      <span class="bi bi-star" style="font-weight: bold;"> Kantor Pemasaran: </span>
                      Ruko Boulevard Tekno Blok AA No.7 Jalan Tekno Widya No. 4, Ciater, Serpong, Kota Tangerang Selatan
                    </p>
                    <p class="mb-1">
                      <span class="bi bi-house-fill" style="font-weight: bold;"> @Pamulang: </span>
                      Jl. Anggrek No.65, RW.9, Benda Baru, Pamulang, South Tangerang City, Banten 15415
                    </p>
                    <p class="mb-1">
                      <span class="bi bi-house-fill" style="font-weight: bold;"> @Serpong: </span>
                      Jl. Masjid Al-Latif Rt/Rw 002/002, Kademangan, Kec. Setu, Kota Tangerang Selatan, Banten 15314
                    </p>
                  </div>
                </div>
              </div>
              <div class="icon-box">
                <div class="icon-box-icon">
                  <span class="ion-ios-redo"></span>
                </div>
                <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                    <h4 class="icon-title">Media Sosial</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="https://web.facebook.com/britaniahillsserpong?_rdc=1&_rdr" target="_blank" class="link-one">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://www.instagram.com/britaniahills.id/" target="_blank" class="link-one">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="https://www.youtube.com/channel/UCkBBBDwhKM6pkZYIVwHo_jA" target="_blank" class="link-one">
                            <i class="bi bi-youtube" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact End /-->


          <!-- AGENT -->
          <!--/ Intro Single star /-->
          <section class="intro-single">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-lg-8">
                  <div class="title-single-box">
                    <h1 class="title-single" id="MeetTheTeam">Meet The Team</h1>
                  </div>
                </div>
                <div class="col-md-12 col-lg-4">
                  <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="home.html">Home</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Meet The Team
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </section>
          <!--/ Intro Single End /-->
        
          <!--/ Agents Grid Star /-->
          <section class="agents-grid grid">
            <div class="container">
              <div class="row">
                <!-- [START] Looping Agent -->
                <?php while ($row = mysqli_fetch_assoc($resultAgen)) :  ?>
                <div class="col-md-4">
                  <div class="card-box-d">
                    <div class="card-img-d">
                      <img src="../admin/img/agen/<?=$row["foto"] ?>" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                      <div class="card-header-d">
                        <div class="card-title-d align-self-center">
                          <h3 class="title-d">
                            <a href="#" class="link-two"><?=$row["nama"]?></a>
                          </h3>
                        </div>
                      </div>
                      <div class="card-body-d">
                        <div class="info-agents color-a">
                          <p>
                            <strong>Phone: </strong> <?=$row["no_telp"]?></p>
                          <p>
                            <strong>Instagram: </strong> <?=$row["instagram"]?></p>
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
                <!-- [END] Looping Agent -->
                <!-- <div class="col-md-4">
                  <div class="card-box-d">
                    <div class="card-img-d">
                      <img src="gambar/Agen/Fransisko.jpg" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                      <div class="card-header-d">
                        <div class="card-title-d align-self-center">
                          <h3 class="title-d">
                            <a href="#" class="link-two">Fransisko</a>
                          </h3>
                        </div>
                      </div>
                      <div class="card-body-d">
                        <div class="info-agents color-a">
                          <p>
                            <strong>Phone: </strong> 0812 9275 1271</p>
                          <p>
                            <strong>Instagram: </strong> @frans_britaniahills_pamulang</p>
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
                            <a href="#" class="link-two">Nendra</a>
                          </h3>
                        </div>
                      </div>
                      <div class="card-body-d">
                        <div class="info-agents color-a">
                          <p>
                            <strong>Phone: </strong> 0858 8185 8758</p>
                          <p>
                            <strong>Instagram: </strong> @britaniahills.nendra</p>
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
                      <img src="gambar/Agen/Salsya.jpg" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                      <div class="card-header-d">
                        <div class="card-title-d align-self-center">
                          <h3 class="title-d">
                            <a href="#" class="link-two">Salsya</a>
                          </h3>
                        </div>
                      </div>
                      <div class="card-body-d">
                        <div class="info-agents color-a">
                          <p>
                            <strong>Phone: </strong> 0813 8282 2007</p>
                          <p>
                            <strong>Instagram: </strong> @britaniahills.salsya</p>
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
                      <img src="gambar/Agen/Thelma.jpg" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                      <div class="card-header-d">
                        <div class="card-title-d align-self-center">
                          <h3 class="title-d">
                            <a href="#" class="link-two">Thelma</a>
                          </h3>
                        </div>
                      </div>
                      <div class="card-body-d">
                        <div class="info-agents color-a">
                          <p>
                            <strong>Phone: </strong> 0817 999 7904</p>
                          <p>
                            <strong>Instagram: </strong> @britaniahills.thelma</p>
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
                      <img src="gambar/Agen/Xena.jpg" alt="" class="img-d img-fluid">
                    </div>
                    <div class="card-overlay card-overlay-hover">
                      <div class="card-header-d">
                        <div class="card-title-d align-self-center">
                          <h3 class="title-d">
                            <a href="#" class="link-two">Xena</a>
                          </h3>
                        </div>
                      </div>
                      <div class="card-body-d">
                        <div class="info-agents color-a">
                          <p>
                            <strong>Phone: </strong> 0815 1015 8827</p>
                          <p>
                            <strong>Instagram: </strong> @britaniahills.xena</p>
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
          <!--/ Agents Grid End /-->
          <!-- AGENT END -->


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
