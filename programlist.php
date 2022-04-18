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

    <div class="text-box" style="background-color: yellow;">

        <h1 style="color:black;">List of Courses: </h1>
    </div>

    <div class="text-box" style="background-color: black;text-align: justify;">
    <?php

      $university = $_GET['university'];

      $program = "SELECT * FROM programs WHERE university='$university'";
      $result = mysqli_query($conn, $program);

      while ($row = mysqli_fetch_array($result)) {
        $program = $row['program'];
        echo "<a href='programpage.php?university=$university&program=$program'>{$row['program']}</a>";
        echo "<br />";
        }

    ?>
    </div>


</body>
</html>