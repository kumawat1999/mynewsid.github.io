<?php include "hedar.php" ?>

<style>
  #home_block {
    overflow: scroll;
    height: 370px;
    width: 340px;
  }
</style>


<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade " data-bs-ride="carousel" data-bs-interval="5000">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'mynewsid');
    $keys = 0;
    $queryfire = mysqli_query($conn, "select * from insert_table");
    while ($datas = mysqli_fetch_array($queryfire)) : ?>

      <div class="carousel-item  <?php if ($keys == 0) echo "active"; ?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">
            <?= $datas['titel']; ?>
          </h2>
          <p class="animate__animated animate__fadeInUp">
            <?= $datas['discription']; ?>
          </p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>
    <?php
      $keys++;
    endwhile
    ?>
  </div>
  <!-- Slide 2 -->
  <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">One Click It</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div> -->

  <!-- Slide 3 -->
  <!-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Web Software Company</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div> -->

  <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
  </a>

  <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
  </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section class="services">

    <div class="container">
      <div class="row">
        <?php
        $queryfire = mysqli_query($conn, "select * from home_block");
        while ($datas = mysqli_fetch_array($queryfire)) : ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink" id="home_block">
              <div class="icon"><img style="width:55px; border-radius:50%;height:58px; margin-top:-10px;" src="../backend/images/<?= $datas['icon'] ?>"> </div>
              <h4 class="title"><a href=""><?= $datas['title']; ?></a></h4>
              <p class="description"><?= $datas['descripation']; ?></p>
            </div>
          </div>
        <?php endwhile  ?>
      </div>
    </div>
  </section><!-- End Services Section -->

  <!-- ======= Why Us Section ======= -->

  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <?php
        $num = 1;
        $queryfire = mysqli_query($conn, "select * from home_video_block");
        while ($datas = mysqli_fetch_array($queryfire)) : ?>
          <!-- <a class="venobox play-btn mb-4" style="width:100px; height:100px;" href="../backend/images/video/<?= $datas['video'] ?>" data-vbtype="video" data-autoplay="true"></a> -->
          <div class="col-lg-6 video-box">
            <!-- <img src="../backend/images//bg-title-01.jpg" class="img-fluid" alt="no img"> -->
            <video width="400" height="400" id="video1">
              <source src="../backend/images/video/<?= $datas['video'] ?>" type="video/mp4">
            </video>
            <button class="btn btn-info" onclick="playPause()" >Play/Pause</button> 
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><img style="width:55px; border-radius:50%;height:58px;" src="../backend/images/icon/<?= $datas['icon'] ?>"></img></div>
              <h4 class="title"><a href=""><?= $datas['title']; ?></a></h4>
              <p class="description"><?= $datas['descripation']; ?></p>
            </div>

          </div>
        <?php
          $num++;
        endwhile ?>
      </div>

    </div>
  </section><!-- End Why Us Section -->
  <script>
 var myVideo = document.getElementById("video1"); 

function playPause() { 
  if (myVideo.paused) 
    myVideo.play(); 
  else 
    myVideo.pause(); 
} 
function playPause2() { 
  if (Video.paused) 
    Video.play(); 
  else 
    Video.pause(); 
} 
  </script>
  <!-- ======= Features Section ======= -->
  <section class="features">
    <div class="container">

      <div class="section-title">
        <?php
        $number = 1;
        $queryfire = mysqli_query($conn, "select * from home_features_title");
        while ($datas = mysqli_fetch_array($queryfire)) : ?>
          <h2><?= $datas['title'] ?></h2>
          <p><?= $datas['description'] ?></p>
        <?php endwhile ?>
      </div>
      <?php
        $queryfire = mysqli_query($conn, "select * from home_features");
        while ($datas = mysqli_fetch_array($queryfire)) : ?>
          <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="../backend/images/<?= $datas['features_img'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3><?= $datas['features_title'] ?></h3>
            <p class="fst-italic"><?= $datas['features_title_not'] ?></p>
            <p><?= $datas['description'] ?></p>
          </div>
          </div>
        <?php
        endwhile ?>
    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->

<?php include "footer.php" ?>