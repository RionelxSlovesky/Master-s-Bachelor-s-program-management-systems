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
            <li><a href="#">About</a></li>
            <li>
                 <label for="btn-1" class="show">Universities</label>
                <a href="#">Universities </a>
                <input type="checkbox" id="btn-1">
                 <ul>
                   <li><a href="#">NSU</a></li>
                   <li><a href="#">BRAC</a></li>
                   <li><a href="#">IUB</a></li>
                 </ul>
            </li>
            <li><a href="login.php">Log In</a></li>
            <li><a href="feedback_form.php">Feedback</a></li>
           </ul>   
         </nav>
       
         <div class="text-box">
              <h1>Preferred University Nikhoj?</h1>
              <h2> TRY UNI-KHOJ</h2>
         </div>

      </section> 
   
      <section class="about">
        <h1>Universities of Bangladesh</h1>
        <p1>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Praesentium ab minima culpa? Distinctio iste animi eum quaerat
        
        </p1>
      </section> 

        
      <section class="contact">
        <h1>Contact Us</h1>
        <p1>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Praesentium ab minima culpa? Distinctio iste animi eum quaerat
        
        </p1>
      </section> 

</body>


<footer>
    <p>© All Rights Reserved<br>
    <a href="logout.php">Logout</a>
</footer>

</html>