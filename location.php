<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="getLocation()">


    <form action="location.php" method="POST">
        <input type="text" name="lats" id="lats">
        <input type="text" name="longs" id="longs">
        <button class="button" type="submit" name="subm">Find Nearest Universities</button>

        <?php
            if(isset($_POST['subm'])){

                $l1 = $_POST['lats'];
                $l2 = $_POST['longs'];

                header("Location: nearest.php?lat=$l1&long=$l2");

            }
        ?>




    </form>

        


    <script src="location.js"></script>
        
   
    
</body>
</html>