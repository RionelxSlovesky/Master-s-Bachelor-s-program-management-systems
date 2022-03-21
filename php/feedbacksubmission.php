<?php
        require('../config.php');

        // input fields
        $experience=$_POST["experience"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        

            // Fetching Data from database
            $sql0 = "Select count(*) as Count From feedback;";
            $result0 = mysqli_query($conn, $sql0);
            $sqle = "Select id from feedback ORDER BY id DESC LIMIT 1;";
            $resulte = mysqli_query($conn, $sqle);

            while($row = mysqli_fetch_array($result0)) {
                $check = $row['Count'];
              }

              while($row = mysqli_fetch_array($resulte)) {
                $id = $row['id'];
              }
   

              //Checking if the database is empty or not
           if($check == 0){
            $id = 0;
          }
          else{
            $id = $id + 1; //Incrementing ID for new feedback
          }

          $sql1 = "Insert Into feedback (experience,full_name,email,message,id)
                    Value ('$experience', '$fullname', '$email', '$message', '$id');";
            mysqli_query($conn, $sql1);

          echo '<script>alert("Feedback Submitted!")</script>';
            echo'<script>window.location= "../index.php";</script>';
            exit();
    ?>