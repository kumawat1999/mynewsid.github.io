<?php
          // $conn = mysqli_connect('localhost', 'root', '', 'mynewsid') or die('database not cennected...!');
          // if (!$conn)
          //   echo "database not cennected...!";

          // if (isset($_REQUEST['save'])) {
          //   $names = $_REQUEST['name'];
          //   $emailsss = $_REQUEST['email'];
          //   $subjects = $_REQUEST['subject'];
          //   $number = $_REQUEST['number'];
          //   $messages = $_REQUEST['message'];

          //   $insertdata = "insert into contact_us (`name`,`email`,`subject`,`number`,`message`)
          //   VALUES ('$names', '$emailsss', '$subjects', '$number', '$messages')";
          //   $query = mysqli_query($conn,$insertdata);
          //   if ($query) {
          //     echo "submit data.....!";
          //   } else {
          //     echo "not submit data.....!";
          //   }
          // }

          ?>


<!-- =====form start ======== -->

<form id="contactform" method="post" action="" role="form" class="php-email-form">
             <!-- class="php-email-form" action="forms/contact.php" method="post" role="form"enctype="multipart/form-data" -->

            <!-- name and email  -->
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" onkeypress="return ValidateAlpha(event)" maxlength="20" name="name" class="form-control" id="names" placeholder="Your Name" autocomplete="off">
                <span id="fnameerr" style="color:red; display: none;"></span>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" id="emails" name="email" placeholder="Enter Email id">
                <span id="emailerr" style="color:red; display: none; "></span>
              </div>
            </div>


            <!-- subject and number  -->
            <div class="row">
              <div class="col-md-6 form-group mt-3 ">
                <input type="text" class="form-control" onkeypress="return ValidateAlpha(event)" maxlength="20" name="subject" id="subject" placeholder="Subject">
                <span id="suberr" style="color:red; display: none; "></span>
              </div>
              <div class="col-md-6 form-group mt-3">
                <input type="text" class="form-control" name="number" onkeypress="return password_kye(event)" maxlength="10" id="number" placeholder="Mobile">
                <span id="Numbererrr" style="color:red; display: none; "></span>
              </div>
            </div>

            <!-- massesag -->
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" id="address" rows="5" onkeypress="return ValidateAlpha(event)" maxlength="250" placeholder="Message"></textarea>
              <span id="addrerr" style="color:red;  display: none;"></span>
            </div>

            
            <!-- button  -->
            <div class="text-center">
              <button type="submit" name="save" onclick=" return submitbtn()">Send Message</button>
            </div>
          </form>
          <!-- =====form end ======== -->
