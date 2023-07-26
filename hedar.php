<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>One Click Web Software Company - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.11.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>One Click</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul class="nav navbar-nav">
          <ul>
            <!-- <li><a class="active " href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="blog.php">Blog</a></li> -->

            <!-- dropdown  start  -->
            <?php
            $conn = mysqli_connect("localhost", "root", "", "mynewsid") or die('error in connect'); //connection function
            $getdata = mysqli_query($conn, "select * from menus where parent_id=0") or die('error in fire');
            $getdataMenu = mysqli_query($conn, "select * from menus where parent_id=0") or die('error in fire');

            while ($fetchDataMenu = mysqli_fetch_object($getdataMenu)) :
              $ids = $fetchDataMenu->id;
              $num_rows = mysqli_num_rows(mysqli_query($conn, "select * from menus where parent_id='" . $ids . "'"));
              if ($num_rows > 0) { ?>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?= $fetchDataMenu->name ?></a>
                  <ul class="dropdown-menu">
                    <?php
                    $getdataSubMenu = mysqli_query($conn, "select * from menus where parent_id='" . $ids . "'");
                    while ($fetchDataSubMenu = mysqli_fetch_object($getdataSubMenu)) {  ?>
                      <li><a href="#"><?= $fetchDataSubMenu->name ?></a></li>
                    <?php } ?>
                  </ul>
                </li>
              <?php   } else {
              ?>
                <li class="active"><a href="#"><?= $fetchDataMenu->name ?></a></li>
            <?php  }
            endwhile ?>

            <!-- dropdown  end  -->

          </ul>
        </ul>
        <!-- <i class="bi bi-list mobile-nav-toggle"></i> -->
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  