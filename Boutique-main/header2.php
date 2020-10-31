<!-- Page after logging in -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>

    <!---------------- CSS Starthere ---------------->
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome.css" />

    <!-- Slick carousel CSS -->
    <link rel="stylesheet" href="css/slick.css" />

    <!-- Header CSS -->
    <link rel="stylesheet" href="css/header2.css" />
    <!---------------- CSS End Here ---------------->
  </head>
  <body>
    <!---------------- Header Styling Start ---------------->
    <header>
      <!-- Header top -->
      <div class="header-top">
        <div class="top-left">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <div class="top-right">
          <a href="#"><i class="fas fa-heart"></i></a>
          <a href="authentication/signup.php"><i class="fas fa-user"></i></a>
          <a href="#"><i class="fas fa-sign-out-alt"></i></a>
          <a href="#" class="ml-3">MY CART <i class="fas fa-shopping-bag mx-2"></i>(0)</a>
        </div>
      </div>
      <hr>
      <!-- Logo and others -->
      <div class="main-logo container d-none d-lg-block">
        <img src="images/logo.png" alt="" />
      </div>
      <!-- Navbar styling -->
      <nav class="navbar navbar-expand-lg navbar-light py-3">
        <a class="navbar-brand d-lg-none" href="#">
          <img src="images/logo.png" class="img-fluid" alt="" loading="lazy">
        </a>
        <button
          type="button"
          data-toggle="collapse"
          data-target="#navbarContent"
          aria-controls="navbars"
          aria-expanded="false"
          aria-label="Toggle navigation"
          class="navbar-toggler"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarContent" class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <!-- Megamenu 1-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Exclusives</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-6 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <hr />
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-6 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <hr />
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Megamenu 2-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Designers</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-3 mb-4">
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Megamenu 3-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Clothing</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-3 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-3 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Megamenu 4-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Shoes</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Megamenu 5-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Bags</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Megamenu 6-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Accessories</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Megamenu 7-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Jewellery</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Megamenu 8-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Lifestyle</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- Megamenu 9-->
            <li class="nav-item dropdown megamenu">
              <a
                id="megamneu"
                href=""
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                class="nav-link dropdown-toggle font-weight-bold text-uppercase"
                >Sale</a
              >
              <div
                aria-labelledby="megamneu"
                class="dropdown-menu border-0 p-0 m-0"
              >
                <div class="container">
                  <div class="row bg-white rounded-0 m-0 shadow-sm">
                    <div class="col-lg-7 col-xl-8">
                      <div class="p-4">
                        <div class="row">
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-4 mb-4">
                            <h6 class="font-weight-bold text-uppercase">
                              MegaMenu heading
                            </h6>
                            <ul class="list-unstyled">
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                              <li class="nav-item">
                                <a href="" class="nav-link text-small pb-2"
                                  >Lorem Ipsum</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="col-lg-5 col-xl-4 px-0 d-none d-lg-block"
                      style="
                        background: center center
                          url(https://res.cloudinary.com/mhmd/image/upload/v1556990826/mega_bmtcdb.png)
                          no-repeat;
                        background-size: cover;
                      "
                    ></div>
                  </div>
                </div>
              </div>
            </li>
            <!-- <li class="nav-item">
              <a href="" class="nav-link font-weight-bold text-uppercase"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a href="" class="nav-link font-weight-bold text-uppercase"
                >Services</a
              >
            </li>
            <li class="nav-item">
              <a href="" class="nav-link font-weight-bold text-uppercase"
                >Contact</a
              >
            </li> -->
          </ul>
        </div>
      </nav>
    </header>
    <!---------------- Header Styling End ---------------->

    <!---------------- Slider Styling Start ---------------->
    <section>
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="images/slider-1.jpg"
              alt="First slide"
              style="object-fit: contain"
            />
            <div class="carousel-caption">
              <h5>Heading</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Praesentium, id?
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="images/slider-2.jpg"
              alt="Second slide"
              style="object-fit: contain"
            />
            <div class="carousel-caption">
              <h5>Heading</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Praesentium, id?
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="images/slider-3.jpg"
              alt="Third slide"
              style="object-fit: contain"
            />
            <div class="carousel-caption">
              <h5>Heading</h5>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Praesentium, id?
              </p>
            </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!---------------- Slider Styling End ---------------->

    <!---------------- Category Styling Start ---------------->
    <section class="category container">
      <div class="category-item">
        <img src="images/category-1.jpg" alt="category" />
        <a href="#"><div class="category-item-info">Read More</div></a>
      </div>
      <div class="category-item">
        <img src="images/category-2.jpg" alt="category" />
        <a href="#"><div class="category-item-info">Read More</div></a>
      </div>
      <div class="category-item">
        <img src="images/category-3.jpg" alt="category" />
        <a href="#"><div class="category-item-info">Read More</div></a>
      </div>
      <div class="category-item">
        <img src="images/category-4.jpg" alt="category" />
        <a href="#"><div class="category-item-info">Read More</div></a>
      </div>
      <div class="category-item">
        <img src="images/category-5.jpg" alt="category" />
        <a href="#"><div class="category-item-info">Read More</div></a>
      </div>
      <div class="category-item">
        <img src="images/category-6.jpg" alt="category" />
        <a href="#"><div class="category-item-info">Read More</div></a>
      </div>
    </section>
    <!---------------- Category Styling End ---------------->

    <!---------------- Product Slider Styling Start ---------------->
    <div class="product-slider my-5">
      <h1 class="slider-title text-center">Featured Products</h1>
      <hr />
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="product-wrapper">
        <div class="product">
          <img src="images/products/product-1.webp" alt="product" />
          <div class="product-info">
            <h4>Product Brand</h4>
            <h5>Product Name</h5>
            <p>Product Price</p>
            <a href="#" class="btn">View Product</a>
          </div>
        </div>
        <div class="product">
          <img src="images/products/product-2.webp" alt="product" />
          <div class="product-info">
            <h4>Product Brand</h4>
            <h5>Product Name</h5>
            <p>Product Price</p>
            <a href="#" class="btn">View Product</a>
          </div>
        </div>
        <div class="product">
          <img src="images/products/product-3.webp" alt="product" />
          <div class="product-info">
            <h4>Product Brand</h4>
            <h5>Product Name</h5>
            <p>Product Price</p>
            <a href="#" class="btn">View Product</a>
          </div>
        </div>
        <div class="product">
          <img src="images/products/product-4.webp" alt="product" />
          <div class="product-info">
            <h4>Product Brand</h4>
            <h5>Product Name</h5>
            <p>Product Price</p>
            <a href="#" class="btn">View Product</a>
          </div>
        </div>
        <div class="product">
          <img src="images/products/product-5.webp" alt="product" />
          <div class="product-info">
            <h4>Product Brand</h4>
            <h5>Product Name</h5>
            <p>Product Price</p>
            <a href="#" class="btn">View Product</a>
          </div>
        </div>
        <div class="product">
          <img src="images/products/product-6.webp" alt="product" />
          <div class="product-info">
            <h4>Product Brand</h4>
            <h5>Product Name</h5>
            <p>Product Price</p>
            <a href="#" class="btn">View Product</a>
          </div>
        </div>
      </div>
    </div>

    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <!---------------- Product Slider Styling End ---------------->

    <!---------------- Footer Styling Start ---------------->
    <footer class="page-footer bg-light">
      <div class="bg-info">
        <div class="container">
          <div class="row py-4 d-flex align-items-center">
            <div class="col-md-12 text-center">
              <a href="#" class="mr-2"><i class="fab fa-facebook fa-2x"></i></a>
              <a href="#" class="mr-2"><i class="fab fa-twitter fa-2x"></i></a>
              <a href="#" class="mr-2"
                ><i class="fab fa-google-plus-g fa-2x"></i
              ></a>
              <a href="#" class="mr-2"
                ><i class="fab fa-instagram fa-2x"></i
              ></a>
              <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container text-md-left mt-5 footer-content">
        <div class="row">
          <div class="col-md-3 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">ASECOM</h6>
            <hr
              class="bg-info mb-4 mt-0 d-inline-block mx-auto"
              style="width: 85px; height: 2px"
            />
            <p class="mt-2">
              Lorem Ipsum is simply dummy text of the printing and typesetting
              industry.
            </p>
          </div>

          <div class="col-md-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Products</h6>
            <hr
              class="bg-info mb-4 mt-0 d-inline-block mx-auto"
              style="width: 85px; height: 2px"
            />
            <ul class="list-unstyled">
              <li class="my-2"><a href="#">Home Automation</a></li>
              <li class="my-2"><a href="#">facility Service</a></li>
              <li class="my-2"><a href="#">Energy and Safety Audit</a></li>
            </ul>
          </div>
          <div class="col-md-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Links</h6>
            <hr
              class="bg-info mb-4 mt-0 d-inline-block mx-auto"
              style="width: 85px; height: 2px"
            />
            <ul class="list-unstyled">
              <li class="my-2"><a href="#">Home Automation</a></li>
              <li class="my-2"><a href="#">facility Service</a></li>
              <li class="my-2"><a href="#">Energy and Safety Audit</a></li>
            </ul>
          </div>

          <div class="col-md-4 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
            <hr
              class="bg-info mb-4 mt-0 d-inline-block mx-auto"
              style="width: 85px; height: 2px"
            />
            <ul class="list-unstyled">
              <li class="my-2">
                <div class="footer-contact">
                  <i class="fas fa-home"></i
                  ><a
                    href="https://goo.gl/maps/8XKhbDbjPwBrCyy5A"
                    target="_blank"
                    >Post Office, TC 28/465, R.K.R Plaza Near Norka Roots Govt
                    Office Opposite Vipanchilaa Tower, opposite Thycaud,
                    Thiruvananthapuram, Kerala 695014</a
                  >
                </div>
              </li>
              <li class="my-2">
                <div class="footer-contact">
                  <i class="far fa-envelope"></i>
                  <a href="mailto:keffectdigital@gmail.com"
                    >hello@keffectdigital.com</a
                  >
                </div>
              </li>
              <li class="my-2">
                <div class="footer-contact">
                  <i class="fas fa-phone"></i>
                  <a href="tel:773625830">+91-773625830</a>
                </div>
              </li>
              <li class="my-2">
                <div class="footer-contact">
                  <i class="fas fa-print"></i>
                  <a href="tel:773625830">+91-773625830</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Adding new line under existing footer -->
      <div class="col-md-12 border-top py-4">
        <p class="text-center">
          Powered by
          <a href="https://www.keffectdigital.com">Keffect Digital</a>
        </p>
      </div>
    </footer>
    <!---------------- Footer Styling Start ---------------->

    <!---------------- Scripts Start ---------------->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slick.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript">
      $(document).ready(function () {
        $(".product-wrapper").slick({
          slidesToShow: 3,
          pagination: false,
          infinite: true,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 1000,
          nextArrow: $(".next"),
          prevArrow: $(".prev"),
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
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
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ],
        });
      });
    </script>

    <!---------------- Scripts End ---------------->
  </body>
</html>
