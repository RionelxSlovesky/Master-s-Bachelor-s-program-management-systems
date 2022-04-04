<?php

session_start();

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
                   <li><a href="programlist.php">NSU</a></li>
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

   </section>

    <div class="text-box" style="background-color: yellow">
        <h1>Uniname</h1>
    </div>

    <div class="text-box" style="background-color: black;text-align: justify;">
        <p style="color: white "> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At et nisi dolor esse molestias voluptatibus laudantium ullam numquam labore, eaque qui quis eligendi officia atque itaque exercitationem modi eius facere fugit dolorem, ad iusto distinctio. Repudiandae veritatis neque et. Consequatur asperiores itaque ipsum atque tenetur eum ut corporis animi minima incidunt tempore aut, molestiae excepturi illum eius quasi accusamus impedit architecto culpa fuga quae consectetur ab! Repellendus officiis earum tempore natus esse distinctio numquam ratione odit rem illo! Libero, ducimus nesciunt reprehenderit eaque consequatur impedit minima! Nostrum deleniti ullam, nemo minus voluptatibus ratione placeat. Neque error iure harum eius libero nulla repellendus commodi. Ex dolorum, placeat accusantium tenetur quod saepe autem blanditiis voluptatum! Asperiores facilis, explicabo quisquam, modi nemo nulla itaque eius quos maxime sequi porro aliquid voluptatem quis non ab, eveniet temporibus voluptatibus reprehenderit natus ex optio ipsam consectetur voluptates dignissimos. Provident, assumenda? Nesciunt dolorum doloribus perspiciatis nam a recusandae atque in animi tempore? Aliquid placeat nesciunt, necessitatibus vitae optio eveniet corrupti nihil magnam alias delectus fuga ipsam sunt excepturi dolores ducimus sint dolorum numquam quibusdam dicta quam blanditiis qui fugiat. Obcaecati nemo sit adipisci ipsum, necessitatibus repellat neque. Quis totam assumenda nulla corrupti soluta eius dolores quae, sint placeat, voluptas itaque doloremque? Tenetur dolorum cupiditate fugiat eum reprehenderit id nisi voluptatibus, harum cum necessitatibus ratione perferendis, ab quis. Reiciendis quo voluptatum accusantium iusto adipisci nobis id dignissimos expedita, excepturi facilis sit aperiam impedit amet quae, velit quasi corrupti voluptate, animi dolores ab. Neque eius voluptatum, reiciendis illum, iusto, fugit officiis alias quos ratione nostrum porro rerum accusamus. Inventore omnis harum itaque voluptatum beatae commodi? Totam ut ipsa dolores a quae iste sint quasi debitis ducimus aperiam esse repellat magnam expedita velit reiciendis quod, praesentium itaque veritatis asperiores culpa maiores fugit? Voluptas pariatur at expedita aliquam quas hic ea.</p>   
    </div>

    <div class="text-box" style="background-color: yellow;">
        <h2>Total Credits: </h2>
    </div>
    <div class="text-box" style="background-color: yellow;">
        <h2>Estimated Total Cost: </h2>
    </div>

    <form action="post" id="unicomment">
        <input type="text" style="display: inline-block; width:17.5%;">
        <button name="commentbtn" class="Submit" type="submit">Submit</button>
    </form>

</body>
</html>