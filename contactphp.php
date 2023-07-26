<?php
            $namess = $_REQUEST['named'];
            $emailsse = $_REQUEST['emaild'];
            $subjeects = $_REQUEST['subjectd'];
            $numberrr = $_REQUEST['numberd'];
            $messagesd = $_REQUEST['messaged'];
            ?>
 <?php
          $conn = mysqli_connect('localhost', 'root', '', 'mynewsid') or die('database not cennected...!');
          if (!$conn)
          echo "database not cennected...!";
                    
          $insertdata = "insert into contact_us (`name`,`email`,`subject`,`number`,`message`)
          VALUES ('$namess', '$emailsse', '$subjeects', '$numberrr', '$messagesd')";
          $query = mysqli_query($conn,$insertdata);
          
          
          if ($query) {
            
              echo "submit data.....!";
            } else {
                echo "not submit data.....!";
            }
            
            // echo "<pre>";
            // print_r($_REQUEST);
          
          ?>





