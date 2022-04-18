<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>program_review</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="profile/style5.css">
  </head>
  <?php
  include 'config.php';
  session_start();
  $name=$_SESSION['name'];
  $query=mysqli_query($conn,"SELECT * FROM users where name='$name'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
  ?>
  <h1>User Profile</h1>
<div class="profile-input-field">
        <h3>Update</h3>
        <form method="post" action="#" >
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your name" value="<?php echo $row['name']; ?>" required />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" style="width:20em;" placeholder="Enter your email" required value="<?php echo $row['email']; ?>" />
          </div>
          <div class="form-group">
            <label>University</label>
            <input type="text" class="form-control" name="university" style="width:20em;" placeholder="Enter your university" value="<?php echo $row['university']; ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" style="width:20em;" required placeholder="Enter your password" value="<?php echo $row['password']; ?>"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
            <center>
             <a href="logout.php">Log out</a>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $university = $_POST['university'];
        $password = $_POST['password'];
      $query = "UPDATE users SET name = '$name',
                      email = '$email', university = $university, password = '$password'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }              
?>