<!-- include "hedar.php"; -->
<?php
session_start();
include_once "hedar.php";
$conn = mysqli_connect('localhost', 'root', '', 'mynewsid') or die('database not cennected...!');
if (!isset($_SESSION['id'])) {
  // header("location:login.php");
}
?>
<main id="main">

  <!-- ======= About Us Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About Us</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>About Us</li>
        </ol>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= About Section ======= -->
  <section class="about" data-aos="fade-up">
    <div class="container">

      <div class="row">
        <?php
        $queryff = mysqli_query($conn, "select * from about_home");
        while ($dat = mysqli_fetch_array($queryff)) : ?>
          <div class="col-lg-6">
            <img src="../backend/images/<?= $dat['image'] ?>" style="width:400px;hight:340px;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3><?= $dat['title'] ?></h3>
            <p class="fst-italic">
              <?= $dat['description'] ?>
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <?= $dat['list'] ?></li>
            </ul>
            <p>
              <?= $dat['description2'] ?>
            </p>
          </div>
        <?php
        endwhile ?>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Facts Section ======= -->
  <section class="facts section-bg" data-aos="fade-up">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
          <p>Clients</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
          <p>Projects</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hours Of Support</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hard Workers</p>
        </div>

      </div>

    </div>
  </section><!-- End Facts Section -->

  <!-- ======= Our Skills Section ======= -->
  <section class="skills" data-aos="fade-up">
    <div class="container">

      <div class="section-title">
        <h2>Our Skills</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="skills-content">

        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">HTML <i class="val">100%</i></span>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">CSS <i class="val">90%</i></span>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">JavaScript <i class="val">75%</i></span>
          </div>
        </div>

        <div class="progress">
          <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
            <span class="skill">Photoshop <i class="val">55%</i></span>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Our Skills Section -->

  <!-- ======= Tetstimonials Section ======= -->
  <section class="testimonials" data-aos="fade-up">
    <div class="container">
      <div class="section-title">
        <?php
        $number = 1;
        $queryfire = mysqli_query($conn, "select * from about_compny_title");
        while ($datas = mysqli_fetch_array($queryfire)) : ?>
          <h2><?= $datas['title'] ?></h2>
          <p><?= $datas['description'] ?></p>
        <?php endwhile ?>
      </div>
      <div class="testimonials-carousel swiper">
        <div class="swiper-wrapper ">
          <?php
          $queryfire = mysqli_query($conn, "select * from company_staff");
          while ($datas = mysqli_fetch_array($queryfire)) : ?>
            <div class="testimonial-item <?php if ($keys == 0) echo "swiper-slide"; ?>">
              <img src="../backend/images/<?= $datas['image'] ?>" class="testimonial-img" alt="">
              <h3><?= $datas['name'] ?></h3>
              <h4><?= $datas['post_name'] ?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?= $datas['post_ditials'] ?>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          <?php
          endwhile ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    </div>
  </section><!-- End Ttstimonials Section -->

</main><!-- End #main -->

<?php include "footer.php" ?>