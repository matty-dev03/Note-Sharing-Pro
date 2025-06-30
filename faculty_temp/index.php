<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("location:../Guest/login.php");
    
}
?>
<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="index/fonts/icomoon/style.css" />
    <link rel="stylesheet" href="index/fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="index/css/tiny-slider.css" />
    <link rel="stylesheet" href="index/css/aos.css" />
    <link rel="stylesheet" href="index/css/style.css" />

    <title>
      Note Sharing Pro
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.php" class="logo m-0 float-start">Note Sharing Pro</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li class="active"><a href="index.php">Home</a></li>
              <li class="active"><a href="documentupload.php">Upload Document</a></li>
              <li class="active"><a href="profile.php">Profile</a></li>
              <li class="active"><a href="logout.php">Log Out</a></li>
						

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('https://cdn.pixabay.com/photo/2016/11/18/12/40/library-1834222_640.jpg')"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
          <h1 style="color: #FFA07A; font-weight: bold;">Make Note Sharing More Simple.</h1>
<p style="color: #FFFFFF; background-color: #FF8C00; font-weight: bold;">We make students' learning easy.</p>

           <h1 class="narrow-w form-search d-flex align-items-stretch mb-3" style="text-align: center; justify-content: center; align-items: center;">
<button type="submit" class="btn btn-primary" style="background-color: #FFA07A; border-color: #FFA07A;">
<a href="../docview/view.php" class="text-white" style="color: #FFFFFF; text-decoration: none;">Search Your Note</a>
</button>
</h1>

            <!-- <form
            action="searchsubaction" method="post"
              class="narrow-w form-search d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input
                type="text"
                class="form-control px-4"
                placeholder="Subject name"
              />
              <button type="submit" class="btn btn-primary">Search</button>
            </form> -->
          </div>
        </div>
      </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
