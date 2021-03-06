<?php
$conn = new mysqli("localhost", "root", "", "carousel");

$result = $conn->query("SELECT image_path from slider");
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Description In Google-->
    <meta name="description" content="" />

    <!-- Author -->
    <meta name="author" content="" />

    <!-- Keywords -->
    <meta name="keywords" content="" />

    <link rel="icon" href="images/favicon.png" sizes="32x32" />

    <title>ASECOM Ventures Pvt Ltd</title>
    <!-- Title In Tab Put Your Porject Name -->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Font-awesome -->
    <script
      src="https://kit.fontawesome.com/4738fcddfc.js"
      crossorigin="anonymous"
    ></script>
    <!-- BX Slider CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"
    />
    <!-- Google Font  -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <!-- Google Font  -->
    <link href="css/animate.css" rel="stylesheet" />
    <!-- particles  -->
    <link href="css/style-particles.css" rel="stylesheet" />
    <!-- magnific-popup  -->
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <!-- style styles for this template -->
    <link rel="stylesheet" href="dropdown/dropdown.css" />
    <link href="css/style2.css" rel="stylesheet" />
    <link id="colorchoose" href="css/crimson.css" rel="stylesheet" />

    <!-- responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9
      ]><script src="../../assets/js/ie8-responsive-file-warning.js"></script
    ><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="loading-scroll-hiden">
    <!-- Start Loading -->
    <div class="body">
      <div class="center">
        <div class="loader">
          <div class="loader-inner-1"></div>
          <div class="loader-inner-2"></div>
        </div>
      </div>
    </div>

    <!-- Start Loading -->

    <!-- Start navbar -->
    <nav id="home" class="navbar navbar-default" id="nav">
      <div class="container-fluid">
        <!-- Logo Image -->
        <div class="navbar-header">
          <a class="navbar-brand smoothScroll" href="#home"
            ><img src="images/White Asecom Logo 200 x 78.png" alt="logo"
          /></a>
        </div>

        <!-- Navbar Links Beginning -->
        <nav>
          <label for="drop" class="toggle" id="main-toggle"
            ><span class="nav-icon"></span
          ></label>
          <input type="checkbox" id="drop" />
          <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About Us</a></li>
            <li><a href="index.html">Services</a></li>
            <li><a href="sectors.html">Sectors</a></li>
            <li><a href="careers.html">Careers</a></li>
            <li><a href="insights.html">Insights</a></li>
            <li><a href="contact.html">Contact us</a></li>
          </ul>
        </nav>
      </div>
    </nav>
    <!-- End navbar -->

    <!-- Banner Blog Start -->
    <div id="blog" class="post-slider">
      <!-- <h1 class="slider-title">Recent Insights</h1> -->
      <!-- <i class="fa fa-chevron-left prev"></i>
      <i class="fa fa-chevron-right next"></i> -->

      <?php

$i = 0;
foreach ($result as $row) {
    $actives = '';
    if ($i == 0) {
        $actives = 'slider-image';
    }

    ?>
      <div class="slider">
      <div class="post">
          <img src="<?=$row['image_path']?>" alt="image1" />
        </div>
        <?php $i++;}?>
        <!--Duplicating slider content multiple times-->
        <!-- <div class="post">
          <img src="images/pic2.jpg" alt="image1" class="slider-image" />
        </div>

        <div class="post">
          <img src="images/pic3.jpg" alt="image1" class="slider-image" />
        </div> -->
      </div>
    </div>
    <!--post slider ends here-->
    <!-- Banner Blog End -->

    <!-- Start About -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="sub-text">
              <b style="font-size: 20px"
                >ASEC<span style="color: #e80d13">O</span>M</b
              >
              Ventures Private Limited formed and operated by a group of young
              and dynamic Engineering Professionals having strong track records
              in Planning, Design, Engineering, Project Management, Cost
              consulting, Testing & Commissioning Pertaining to Building
              Services. With its talented backbone, collective knowledge and
              well experienced team, ASECOM can manage all disciplines of the
              Building Services and offers the following comprehensive
              specialized design consultation & engineering service for
              Architects, Clients and Developers.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About -->

    <!-- Start Service -->
    <section id="service" class="service">
      <div class="container">
        <h2 class="text-center"><strong>Service</strong></h2>
        <div class="row text-center">
          <!-- Service 1 -->
          <div
            class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp"
            data-wow-delay=".3s"
          >
            <!-- icon -->
            <i class="fas fa-city fa-4x" aria-hidden="true"></i>

            <!-- Name Of Service You Want Show For User -->
            <h4>Engineering Services</h4>

            <p class="sub-text">
              We work with building planners and architects right from the
              concept design stage and work in parallel
            </p>
          </div>
          <!-- Service 2 -->
          <div
            class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp"
            data-wow-delay=".3s"
          >
            <!-- icon -->
            <i class="fas fa-cogs fa-4x" aria-hidden="true"></i>
            <!-- Name Of Service You Want Show For User -->
            <h4>Home Automation</h4>

            <p class="sub-text">
              From pre-construction to project close-out, we works together with
              clients to initiate proactive response and mitigation plan.
            </p>
          </div>
          <!-- Service 3 -->
          <div
            class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp"
            data-wow-delay=".3s"
          >
            <!-- icon -->
            <i class="far fa-building fa-4x" aria-hidden="true"></i>
            <!-- Name Of Service You Want Show For User -->
            <h4>Facility Services</h4>

            <p class="sub-text">
              Reduce risk, improve quality and deliver projects on time and on
              budget.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service -->

    <!-- Start portfolio -->
    <section id="portfolio" class="portfolio">
      <!-- Start Container -->
      <div class="container">
        <h2 class="text-center"><strong>PORTFOLIO</strong></h2>
        <!-- Start Row-->
        <div class="row">
          <!-- Work 1-->
          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="box">
              <img src="images/work/work-1.jpg" alt="work-1" />
              <div class="box-content">
                <!-- Title For Porject-->
                <h3 class="title">One Central Dubai</h3>
                <!-- Description  -->
                <span class="post">web designer</span>
                <ul class="icon">
                  <li>
                    <a href="#">
                      <i class="fa fa-link" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="image-popup-vertical-fit"
                      href="images/work/work-1.jpg"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Work 2-->
          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="box">
              <img src="images/work/work-2.jpg" alt="work-2" />
              <div class="box-content">
                <!-- Title For Porject-->
                <h3 class="title">DWTC Exhibition Center</h3>
                <!-- Description  -->
                <span class="post">web designer</span>
                <ul class="icon">
                  <li>
                    <a href="#">
                      <i class="fa fa-link" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="image-popup-vertical-fit"
                      href="images/work/work-2.jpg"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Work 3-->
          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="box">
              <img src="images/work/work-3.jpg" alt="work-3" />
              <div class="box-content">
                <!-- Title For Porject-->
                <h3 class="title">Adidas Landmark Mall Qatar</h3>
                <!-- Description  -->
                <span class="post">web designer</span>
                <ul class="icon">
                  <li>
                    <a href="#">
                      <i class="fa fa-link" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="image-popup-vertical-fit"
                      href="images/work/work-3.jpg"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Work 4-->
          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
            <div class="box">
              <img src="images/work/work-4.jpg" alt="work-4" />
              <div class="box-content">
                <!-- Title For Porject-->
                <h3 class="title">Dubai Exhibition Center</h3>
                <!-- Description  -->
                <span class="post">web designer</span>
                <ul class="icon">
                  <li>
                    <a href="#">
                      <i class="fa fa-link" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="image-popup-vertical-fit"
                      href="images/work/work-4.jpg"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Work 5-->
          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
            <div class="box">
              <img src="images/work/work-5.jpg" alt="work-5" />
              <div class="box-content">
                <!-- Title For Porject-->
                <h3 class="title">Qatar Foundation Headquarters</h3>
                <!-- Description  -->
                <span class="post">web designer</span>
                <ul class="icon">
                  <li>
                    <a href="#">
                      <i class="fa fa-link" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="image-popup-vertical-fit"
                      href="images/work/work-5.jpg"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Work 6-->
          <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
            <div class="box">
              <img src="images/work/work-6.jpg" alt="work-5" />
              <div class="box-content">
                <!-- Title For Porject-->
                <h3 class="title">KPMG-Office</h3>
                <!-- Description  -->
                <span class="post">web designer</span>
                <ul class="icon">
                  <li>
                    <a href="#">
                      <i class="fa fa-link" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      class="image-popup-vertical-fit"
                      href="images/work/work-6.jpg"
                    >
                      <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--end Row -->
      </div>
      <!-- End Container -->
    </section>
    <!-- End portfolio -->

    <!-- Start Footer -->
    <footer>
      <div class="wow fadeInUp" data-wow-delay=".3s">
        <div class="container">
          <!-- Social links row -->
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <hr />

        <!-- Main footer content start -->
        <div class="container">
          <div class="footer-content">
            <!-- start -->
            <div class="footer-about">
              <div class="footer-title" style="margin-bottom: 10px">
                <a href="index.html"
                  ><img
                    src="images/White Asecom Logo 200 x 78.png"
                    width="50%"
                    alt="asecom"
                /></a>
              </div>
              <!-- <hr class="footer-line" /> -->
              <div class="footer-description">
                ASECOM Ventures Private Limited formed and operated by a group
                of young and dynamic Engineering Professionals having strong
                track records in Planning, Design, Engineering, Project
                Management, Cost consulting, Testing & Commissioning Pertaining
                to Building Services.
              </div>
            </div>
            <!--  -->
            <div class="footer-products">
              <div class="footer-title">services</div>
              <hr class="footer-line" />
              <div class="footer-description">
                <ul>
                  <li>Home Automation</li>
                  <li>Facility Service</li>
                  <li>Energy & Safety Audit</li>
                </ul>
              </div>
            </div>
            <!--  -->
            <div class="footer-links">
              <div class="footer-title">useful links</div>
              <hr class="footer-line" />
              <div class="footer-description">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Sectors</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Insights</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <!--  -->
            <div class="footer-contact">
              <div class="footer-title">contact us</div>
              <hr class="footer-line" />
              <div class="footer-description">
                <ul>
                  <li>
                    <div class="footer-contact-grid">
                      <i class="fas fa-map-marker-alt"></i>
                      <a href="#" class="address">
                        ASECOM Ventures Private Ltd. <br />
                        TC 28/287, Pound Road, Thycaud, Trivandrum - 14, Kerala,
                        India</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="footer-contact-grid">
                      <i class="fas fa-envelope"></i>
                      <a href="mailto:info@asecom.in" class="mail"
                        >info@asecom.in</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="footer-contact-grid">
                      <i class="fas fa-phone"></i>
                      <a href="tel:04712964666" class="phone"
                        >&nbsp;0471 2964666</a
                      >
                    </div>
                  </li>
                  <li>
                    <div class="footer-contact-grid">
                      <i class="fas fa-phone-alt"></i>
                      <a href="tel:9400373266" class="phone">+91 9400373266</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- end -->
          </div>
          <div class="copyright">
            Copyright &copy; 2020. All Rights Reserved by ASECOM | Powered By
            <a href="https://keffectdigital.com"> Keffect Digital </a>
          </div>
        </div>
        <!-- Main footer content end -->

        <!-- Button Show In Scroll To Scroll Top -->
        <a
          href="#home"
          class="btn btn-lg icon-top smoothScroll"
          id="top-button"
        >
          <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </a>
        <!-- End Button -->
      </div>
    </footer>
    <!-- End Footer -->

    <!-- JQuery.js -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!--slick carousel-->
    <!-- <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script> -->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!-- bootstrap.min.js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- scripts -->
    <script src="js/particles.min.js"></script>
    <script src="js/app.js"></script>
    <!-- stats.js -->
    <script src="js/lib/stats.js"></script>
    <!-- html5shiv.js -->
    <script src="js/html5shiv.js"></script>
    <!-- smoothscroll.js -->
    <script src="js/smoothscroll.js"></script>
    <!-- wow.min.js -->
    <script src="js/wow.min.js"></script>
    <!-- magnific-popup.min.js -->
    <script src="js/jquery.magnific-popup.js"></script>

    <script>
      var count_particles, stats, update;
      stats = new Stats();
      stats.setMode(0);
      stats.domElement.style.position = "absolute";
      stats.domElement.style.left = "0px";
      stats.domElement.style.top = "0px";
      document.body.appendChild(stats.domElement);
      count_particles = document.querySelector(".js-count-particles");
      update = function () {
        stats.begin();
        stats.end();
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
      //High Security
    </script>
    <script src="js/switch.js"></script>
    <!-- main.js -->

    <script src="js/main.js"></script>
    <script src="validation.js"></script>
    <!-- <script>
      $(".post-wrapper").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $(".next"),
        prevArrow: $(".prev"),

        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true,
            },
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            },
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      });
    </script> -->
    <script>
      $(document).ready(function () {
        $(".slider").bxSlider();
      });
    </script>
  </body>
</html>
