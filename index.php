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

    <style type="text/css">

          

    </style>

    <script>
      let map ;
      function initMap() {
       // The location of NSU
      const nsu = { lat: 23.81513, lng: 90.42555 };
       // The map, centered at NSU
      const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 16,
      center: nsu,
  });
      // The marker, positioned at NSU
      const marker = new google.maps.Marker({
      position: nsu,
      map: map,
      });
}
</script>

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
            <li><a href="profile.php">Profile</a></li>
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
        <h1 style="color:white;">Write reviews and become famous!</h1>
        <p1 style="color:white;">
            Write reviews and gain exposure as students enroll to a program through your reviews! Also add social media credentials to your profile if you want people to reach out to you.
        
        </p1>
      </section> 

        
      <section class="contact">
        <h1>Contact Us</h1>
        
        <h2>Email: uni-khoj@gmail.com</h2>
        <h2>Contact number: 017171717171-72</h2>
        <br>
        <div id="map"></div>

        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVO6LFnF0cNs6cgxPwk8X_etkAPYi5yFA&callback=initMap&v=weekly" async></script>
      <h2>Corporate Office-Bashundhara,Dhaka-1229,Bangladesh</h2>
      </section> 

      

</body>


</html>