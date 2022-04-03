<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <title>Homepage</title>
</head>
<body>
    <section class="home">
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
                   <li><a href="unipage.php">NSU</a></li>
                   <li><a href="#">BRAC</a></li>
                   <li><a href="#">IUB</a></li>
                 </ul>
            </li>
            <li><a href="compare.php">Compare</a></li>
            
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
       
         <div class="text-box">
              <h1>Preferred University Nikhoj?</h1>
              <h2> TRY UNI-KHOJ</h2>
         </div>

      </section> 
   
      <section class="about">
        <h1>Read reviews, compare programs & set your preferences!</h1>
        <p1>
            With an average of over a hundred reviews per program, we help guide you to the one that suits you! We are the only platform providing such service in Bangladesh. 
        
        </p1>
      </section> 

      <section class="about" style="background-color:#000000;width:100%;" >
        <h1 style="color:#ff0000;">Write reviews and become famous!</h1>
        <p1 style="color:#ff0000;">
            Write reviews and gain exposure as students enroll to a program through your reviews! Also add social media credentials to your profile if you want people to reach out to you.
        
        </p1>
      </section> 

        
      <section class="contact">
        <h1>Contact Us</h1>
        <li><a href="map.php">Corporate Office-Bashundhara,Dhaka-1229,Bangladesh </a></li>
      </section> 

</body>


<footer>
    <p>© All Rights Reserved</p>
</footer>

</html>