<?php include "hedar.php" ?>

<script>
  function ValidateAlpha(evt) {
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
      faleg = 0;
    return true;
  }

  function password_kye(t) {
    var n = (t = t || window.event).which ? t.which : t.keyCode;

    return !(n > 31 && (n < 48 || n > 57))
  }

  function submitbtn() {
    // alert();

    var faleg = 1;
    var names = document.getElementById("names");
    var emails = document.getElementById("emails");
    var subject = document.getElementById("subject");
    var number = document.getElementById("number");
    var numbernum = parseInt(number.value.trim()[0]);
    var address = document.getElementById("address");



    if (names.value.trim() == '') {
      document.getElementById("fnameerr").style.display = "block";
      document.getElementById("fnameerr").innerHTML = "Plesas Enter Name...!";
      faleg = 0;
    } else if (names.value.trim().length < 3) {
      document.getElementById("fnameerr").style.display = "block";
      document.getElementById("fnameerr").innerHTML = "Pleses Enter maxlength 3 digit's.... ";
      faleg = 0;
    } else {
      document.getElementById("fnameerr").style.display = "none";
    }
    // email validation
    function validemail(email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    }

    if (emails.value.trim() == '') {
      document.getElementById("emailerr").style.display = "block";
      document.getElementById("emailerr").innerHTML = "Pleses Enter E-mail id...!";
      faleg = 0;
    } else if (validemail(emails.value.trim()) == false) {
      document.getElementById("emailerr").style.display = "block";
      document.getElementById("emailerr").innerHTML = "pleses Valid E-mail id.....!";
      faleg = 0;
    } else {
      document.getElementById("emailerr").style.display = "none";
    }


    // subject validation

    if (subject.value.trim() == '') {
      document.getElementById("suberr").style.display = "block";
      document.getElementById("suberr").innerHTML = "Plesas Enter Subject...!";
      faleg = 0;
    } else if (ValidateAlpha(subject.value.trim()) == false) {
      document.getElementById("suberr").style.display = "none";
      faleg = 0;
    } else if (subject.value.trim().length < 3) {
      document.getElementById("suberr").style.display = "block";
      document.getElementById("suberr").innerHTML = "Pleses Enter maxlength 3 digits....! ";
      faleg = 0;
    } else {
      document.getElementById("suberr").style.display = "none";
    }


    // number validation
    if (number.value.trim() == '') {
      document.getElementById("Numbererrr").style.display = "block";
      document.getElementById("Numbererrr").innerHTML = "pleses Enter Number...!";
      faleg = 0;
    } else if (number.value.trim().length < 10) {
      document.getElementById("Numbererrr").style.display = "block";
      document.getElementById("Numbererrr").innerHTML = "Pleses length is recuid  10 digit's ...!";
      faleg = 0;
    } else if (numbernum < 6) {
      document.getElementById("Numbererrr").style.display = "block";
      document.getElementById("Numbererrr").innerHTML = "Pleses Frist digit is recuid graterthan 5 ...!";
      faleg = 0;
    } else if (password_kye(number.value.trim()) == false) {
      document.getElementById("Numbererrr").style.display = "none";
      faleg = 0;
    } else {
      document.getElementById("Numbererrr").style.display = "none";

    }

    // address validation
    if (address.value.trim() == '') {
      document.getElementById("addrerr").style.display = "block";
      document.getElementById("addrerr").innerHTML = "Plesas Enter Name...!";
      faleg = 0;
    } else if (ValidateAlpha(address.value.trim()) == false) {
      document.getElementById("addrerr").style.display = "none";
      faleg = 0;
    } else if (address.value.trim().length < 3) {
      document.getElementById("addrerr").style.display = "block";
      document.getElementById("addrerr").innerHTML = "Pleses Enter maxlength 3 digit's.... ";
      faleg = 0;
    } else {
      document.getElementById("addrerr").style.display = "none";
    }
    if (faleg ==0){
      return false;
      alert("your form hes been send successfully..!");

    }
    
    $.ajax({
      type: "POST",
      url: "contactphp.php",
      data: $('#contactform').serialize(),
      success: function(index) {
        // $("#responce").html(index);
        
      }
    });
    return false;
  }

</script>


<style>

</style>

<main id="main">

  <!-- ======= Contact Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section><!-- ========End Contact Section ========-->


  <!-- ======= Contact Section ======= -->
  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">

          <!-- <div id="responce"></div> -->

          <!-- =====form start ======== -->
          <form id="contactform" method="post" role="form" class="php-email-form">
            <!-- class="php-email-form" action="forms/contact.php" method="post" role="form"enctype="multipart/form-data" -->

            <!-- name and email  -->
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" onkeypress="return ValidateAlpha(event)" maxlength="20" name="named" class="form-control" id="names" placeholder="Your Name" autocomplete="off">
                <span id="fnameerr" style="color:red; display: none;"></span>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" id="emails" name="emaild" class="form-control" placeholder="Enter Email id">
                <span id="emailerr" style="color:red; display: none; "></span>
              </div>
            </div>


            <!-- subject and number  -->
            <div class="row">
              <div class="col-md-6 form-group mt-3 ">
                <input type="text" class="form-control" onkeypress="return ValidateAlpha(event)" maxlength="20" name="subjectd" id="subject" placeholder="Subject">
                <span id="suberr" style="color:red; display: none; "></span>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="numberd" onkeypress="return password_kye(event)" maxlength="10" id="number" placeholder="Mobile">
                <span id="Numbererrr" style="color:red; display: none; "></span>
              </div>
            </div>

            <!-- massesag -->
            <div class="form-group mt-3">
              <textarea class="form-control" name="messaged" id="address" rows="5" onkeypress="return ValidateAlpha(event)" maxlength="250" placeholder="Message"></textarea>
              <span id="addrerr" style="color:red;  display: none;"></span>
            </div>

            <!-- loding -->
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>

            <!-- button  -->
            <div class="text-center">
              <a type="submit" name="save" onclick="return submitbtn()" class="btn btn-primary" href="" role="button">Send Message</a>
            </div>
          </form>
          <!-- =====form end ======== -->

        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Map Section ======= -->
  <section class="map mt-2">
    <div class="container-fluid p-0">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
  </section><!-- End Map Section -->

</main><!-- End #main -->

<?php include "footer.php" ?>