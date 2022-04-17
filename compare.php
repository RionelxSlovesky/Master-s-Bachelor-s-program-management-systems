<?php

include 'config.php';

session_start();

error_reporting(0);

$sql = "SELECT * FROM `universities`";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="style4.css">
</head>

<div id="back">
  <a href="index.php">Back To Homepage</a>
</div>



<div id="table-container">
<div class="pricing-table">
    <div class="pricing-card">
        <li>

        <form action="compare.php" method="post">
        <div>
        <select name="university1" id="university1">
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                $sql1 = "SELECT * FROM `universities`";
                $all_universities = mysqli_query($conn,$sql1);
                while ($university = mysqli_fetch_array(
                        $all_universities,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $university["university"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $university["university"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
        </select>
        </div>
        <input type="submit" value="Select">
        </form>

        <script type="text/javascript">
                document.getElementById('university1').value = "<?php echo $_POST["university1"];?>";
        </script>
    
        </li>  
        <li style="font-size: 24px;">

            <form action="compare.php" method="post">
            <div>
            <select name="program1" id="program1">>
            <?php 


                

                
                if (is_null($_POST["university1"])) {
                    
                  } else {
                    $selected = $_POST["university1"];
                    $_SESSION['university1'] = $selected;
                    
                  }
                
                

                
                

                $sql2 = "SELECT * FROM `programs` WHERE university= '$selected'";

                $all_programs = mysqli_query($conn,$sql2);
                while ($program = mysqli_fetch_array(
                        $all_programs,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $program["program"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $program["program"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
            </select>
            </div>
            <input type="submit" value="Select">
            </form>

        </li>
        <li>
        <?php


            if (is_null($_POST["program1"])) {
                    
            } else {

                $selected1 = $_SESSION['university1'];
            

            
                $selected2 = $_POST["program1"];
                

                $sql3 = "SELECT * FROM `programs` WHERE university= '$selected1' AND program= '$selected2'";

                

                $result = $conn->query($sql3);

                if ($result->num_rows > 0) {
                    // output data of each row
                while($row = $result->fetch_assoc()) {
                    $_SESSION['uni'] = $row["university"];
                    $_SESSION['prog'] = $row["program"];
                    $_SESSION['total_credit'] = $row["total_credit"];
                    $_SESSION['total_cost'] = $row["total_cost"];
                    $_SESSION['ratings'] = $row["ratings"];

                }
                } else {
                    echo "0 results";
                }
                
  
            }


            if (is_null($_SESSION['total_credit'])) {
                    
            }else{
                echo "University: ". $_SESSION['uni']. "<br>";
                echo "Program: ". $_SESSION['prog']. "<br>";
                echo "Total Credit: ". $_SESSION['total_credit']. "<br>";
                echo "Estimated Total Cost: ". $_SESSION['total_cost']. "<br>";
                echo "Rating: ". $_SESSION['ratings'];
            }

            
            
        
        ?>
        </li>
      </ul>
    </div>
    <div class="pricing-card">
      <ul>
        <li>
        <form action="compare.php" method="post">
        <div>
        <select name="university2" id="university2">
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                $sql4 = "SELECT * FROM `universities`";
                $all_universities2 = mysqli_query($conn,$sql1);
                while ($university2 = mysqli_fetch_array(
                        $all_universities2,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $university2["university"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $university2["university"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
        </select>
        </div>
        <input type="submit" value="Select">
        </form>

        <script type="text/javascript">
                document.getElementById('university2').value = "<?php echo $_POST["university2"];?>";
        </script>

    </li>  
        <li style="font-size: 24px;">
        <form action="compare.php" method="post">
            <div>
            <select name="program2" id="program2">>
            <?php 


                

                
                if (is_null($_POST["university2"])) {
                    
                  } else {
                    $selected2 = $_POST["university2"];
                    $_SESSION['university2'] = $selected2;
                    
                  }
                
                

                
                

                $sql2 = "SELECT * FROM `programs` WHERE university= '$selected2'";

                $all_programs2 = mysqli_query($conn,$sql2);
                while ($program2 = mysqli_fetch_array(
                        $all_programs2,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $program2["program"];
                    // The value we usually set is the primary key
                ?>">
                    <?php echo $program2["program"];
                        // To show the category name to the user
                    ?>
                </option>
            <?php 
                endwhile; 
                // While loop must be terminated
            ?>
            </select>
            </div>
            <input type="submit" value="Select">
            </form>
        </li>
        <li>
        <?php


if (is_null($_POST["program2"])) {
        
} else {

    $selected1 = $_SESSION['university2'];



    $selected2 = $_POST["program2"];
    

    $sql3 = "SELECT * FROM `programs` WHERE university= '$selected1' AND program= '$selected2'";

    

    $result = $conn->query($sql3);

    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['uni2'] = $row["university"];
        $_SESSION['prog2'] = $row["program"];
        $_SESSION['total_credit2'] = $row["total_credit"];
        $_SESSION['total_cost2'] = $row["total_cost"];
        $_SESSION['ratings2'] = $row["ratings"];

    }
    } else {
        echo "0 results";
    }
    

}


if (is_null($_SESSION['total_credit2'])) {
        
}else{
    echo "University: ". $_SESSION['uni2']. "<br>";
    echo "Program: ". $_SESSION['prog2']. "<br>";
    echo "Total Credit: ". $_SESSION['total_credit2']. "<br>";
    echo "Estimated Total Cost: ". $_SESSION['total_cost2']. "<br>";
    echo "Rating: ". $_SESSION['ratings2'];
}




?>
        </li>
      </ul>
    </div>

  </div>
</div>











  
</body>
</html>