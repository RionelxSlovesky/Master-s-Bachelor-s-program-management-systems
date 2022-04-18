<?php

include 'config.php';
session_start();

error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
</head>
<body>
   <section class="header">
   <nav class="navbar"> 
         <div class="logo">UNI-KHOJ</div>
           <label for="btn" class="icon">
               <span class="fa-solid fa-bars"></span>
           </label>
           <input type="checkbox" id="btn">
        
           
           <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                 <label for="btn-1" class="show">Universities</label>
                <a href="#">Universities </a>
                <input type="checkbox" id="btn-1">
                <ul>
                   <li><a href="programlist.php?university=NSU">NSU</a></li>
                   <li><a href="programlist.php?university=BRAC">BRAC</a></li>
                   <li><a href="programlist.php?university=IUB">IUB</a></li>
                 </ul>
            </li>
            <li><a href="features.php">Features</a></li>
            
            <?php 
              if(isset($_SESSION['name'])){
                echo "<li><a href='logout.php'>Log Out</a></li>";
              }else{
                echo "<li><a href='login.php'>Log In</a></li>";
              }
            ?>
            <li><a href="feedback_form.php">Feedback</a></li>
           </ul>   
         </nav>

   </section>

    <div class="text-box" style="background-color: yellow">
        <?php 
          $university = $_GET['university'];
          $program = $_GET['program'];

          echo '<h1 style="color:black;">' . $university . '</h1>';
          echo '<h2 style="color:black;">' . $program . '</h2>';
          
        ?>
    </div>

    <div class="text-box" style="background-color: black;text-align: justify;">
    <?php

$sql = "SELECT * FROM `programs` WHERE university= '$university' AND program= '$program'";

           
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // output data of each row
 while($row = $result->fetch_assoc()) {

  echo '<p style="color: white ">' .$row["description"]. '</p>';   

 }
} else {
 echo "0 results";
}

    ?>
        
    </div>

    <div class="text-box" style="background-color: yellow;">
      
        <?php 
           $sql = "SELECT * FROM `programs` WHERE university= '$university' AND program= '$program'";

           
           $result = $conn->query($sql);

           if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "Total Credits: ". $row["total_credit"]. "<br>";
              echo "Total Cost: ". $row["total_cost"]. "<br>";
          
            }
          } else {
            echo "0 results";
          }

        $sql = "SELECT AVG(user_rating) AS avg FROM review_table WHERE university= '$university' AND program= '$program'";

        $result = $conn->query($sql); 

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "Ratings: ". $row["avg"]. "<br>";
        
          }
        } else {
          echo "0";
        }

        ?>
    </div>
    <div class="text-box" style="background-color: yellow;">
      
    </div>

    <?php
      $username = $_SESSION['name'];
      $user_id = $_SESSION['id'];

      if(isset($_SESSION['name'])){
    ?>
        <form action = "comment.php?university=$university&program=$program" method="post" id="unicomment">
        <input type="text" name="user_id" value="<?php echo $user_id; ?>" style="display: none; width:17.5%; color:black;">
          <input type="text" name="username" value="<?php echo $username; ?>" style="display: none; width:17.5%; color:black;">
          <input type="text" name="university" value="<?php echo $university; ?>"  style="display: none; width:4%; color:black;">
          <input type="text" name="program" value="<?php echo $program; ?>"  style="display: none; width:4%; color:black;">
          Rating: <input type="number" name="rating" style="display: inline-block; width:4%; color:black;" min="0" max="5">
          Comment: <input type="text" name="comment" style="display: inline-block; width:17.5%; color:black;">
          <button name="commentbtn" class="Submit" type="submit" style="color:black; background-color:yellow;">Submit</button>
        </form>
      <?php
      }
      ?>



      <h2>Reviews:</h2><br><br>

    


    

    <?php

      $comment = "SELECT * FROM review_table WHERE university='$university' AND program='$program'";
      $result = mysqli_query($conn, $comment);

      while ($row = mysqli_fetch_array($result)) {
        $comment = $row['program'];
        echo '<h2>' . $row['user_name'] . '</h2>';
        echo 'Rating: ' . $row['user_rating'];
        echo "<br />";
        echo $row['user_review'];
        echo "<br />";
        echo "<br />";
        }

    ?>

</body>
</html>