<?php
        require('config.php');

        // input fields
        $username = $_POST["username"];
        $user_id =  $_POST["user_id"];
        $university = $_POST["university"];
        $program = $_POST["program"];
        $rating = $_POST["rating"];
        $comment = $_POST["comment"];
        

        

            // Fetching Data from database
            $sql0 = "Select count(*) as Count From review_table;";
            $result0 = mysqli_query($conn, $sql0);
            $sqle = "Select review_id from review_table ORDER BY review_id DESC LIMIT 1;";
            $resulte = mysqli_query($conn, $sqle);

            while($row = mysqli_fetch_array($result0)) {
                $check = $row['Count'];
              }

              while($row = mysqli_fetch_array($resulte)) {
                $id = $row['review_id'];
              }
   

              //Checking if the database is empty or not
           if($check == 0){
            $id = 0;
          }
          else{
            $id = $id + 1; //Incrementing ID for new feedback
          }

          $sql1 = "Insert Into review_table (user_name,user_id,university,program,user_rating,user_review,review_id)
                    Value ('$username', '$user_id', '$university', '$program', '$rating', '$comment', '$id') ON DUPLICATE KEY UPDATE user_rating='$rating',user_review='$comment'";
            mysqli_query($conn, $sql1);

          echo '<script>alert("Comment Submitted!")</script>';
            echo'<script>window.location= "index.php";</script>';
            exit();
    ?>