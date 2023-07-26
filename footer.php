
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" id="success">
            <form  method="post" class="myform">
              <input type="email" id="email" onkeypress="return validemail()" name="email">
              <input type="submit" name="save" id="Subscribe" value="Subscribe">
            </form>
            <span id="emailrr"></span>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Moderna</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script> 
$(document).ready(function(){
$("#Subscribe").click(function(){
  // alert();


$email = $('#email').val();
function validemail(email) {
var re = /\S+@\S+\.\S+/;
return re.test(email);
}


if($email==""){
  $("#emailrr").html("Plesess Enter Email id..");
  $("#emailrr").css({'color':'red'});
  return false; 

}
else if (validemail($email.trim())==false){
  $("#emailrr").html("Plesess Enter valid Email id..");
  $("#emailrr").css({'color':'red'});
  return false; 

}
else {
  $("#emailrr").html("");
}

$.ajax({
         
      type: "POST",
      url: "footer.php",
      data: $('#myform').serialize(),
      success: function(success) {
        $("#success").html(success);
        
           }
          });
        });
        return false;
});

</script>
<?php
            $conn = mysqli_connect('localhost', 'root', '', 'mynewsid')or die("plesee enter valid db..");
            if(!$conn){
               echo "plesee enter valid db..";
              }
            if (isset($_POST['save'])) {

              $query = "SELECT * FROM subscribe WHERE email ='{$_POST['email']}'";
              $run = mysqli_query($conn, $query);
              $data = mysqli_fetch_array($run);
              if (($data) > 0) {
                echo "<script> alert('already')</script>";
              } else {
                $query = "INSERT INTO subscribe (email)";
                $query .= "VALUES ('{$_POST['email']}')";

                $run = mysqli_query($conn, $query);
                if ($run) {
                  echo "<script> alert('user_registered_successfully')</script>";
                }
              }
            }
            ?>
<style>
#email{
  color: black;
}

</style>
</body>

</html>
