<?php

include 'config.php';

session_start();

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
                    echo "Total Credits: ". $row["total_credit"]. "<br>";
                    echo "Total Cost: ". $row["total_cost"]. "<br>";
                    echo "Ratings: ". $row["ratings"]. "<br>";
                }
                } else {
                    echo "0 results";
                }
                
  
            }

            
            
        
        ?>
        </li>
      </ul>
    </div>
    <div class="pricing-card">
      <ul>
        <li style="font-size: 30px;"><select name="Category">
            <?php 
                // use a while loop to fetch data 
                // from the $all_categories variable 
                // and individually display as an option
                $all_universities = mysqli_query($conn,$sql);
                while ($university = mysqli_fetch_array(
                        $all_universities,MYSQLI_ASSOC)):; 
            ?>
                <option value="<?php echo $university["id"];
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
        </select></li>  
        <li style="font-size: 24px;">CourseName</li>
        <li>Total Credits</li>
        <li>Estimated Total Cost</li>
        <li>Ratings</li>
      </ul>
    </div>

  <div id="back" style="background-color:black;">
    <button type="submit" class="compare" id="comparebtn">COMPARE</button>
  </div>

  </div>
</div>











  
</body>
</html>