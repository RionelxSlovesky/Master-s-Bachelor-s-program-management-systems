<?php

include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $university = $_POST['university'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
        echo "<script>alert('This Email Is Already Registered.')</script>";
    }else{
        $sql = "INSERT INTO users (name, email, university, password)
            VALUES ('$name', '$email', '$university', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            echo "<script>alert('User Registered Successfully.')</script>";
            $name = "";
            $email = "";
            $university = "";
            $_POST['password'] = "";
        }else{
            echo "<script>alert('Something Went Wrong!')</script>";
        }
    }

    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Registration</title>
</head>
<body class="authentication">
    <div class="container">
        <h1 class="label">Registration</h1>
        <form action="" class="login_form" method="POST" name="form" onsubmit="return validated()">
            
            <div class="login_font">Name</div>
            <input type="text" name="name" class="form_input" value="<?php echo $name; ?>"> 
            <div id="name_error">Please enter your Name</div>

            <div class="login_font login_font2">Email</div>
            <input type="text" name="email" class="form_input" value="<?php echo $email; ?>">
            <div id="email_error">Please enter your Email</div>

            <div class="login_font login_font2">University</div>
            <input type="text" name="university" class="form_input" value="<?php echo $university; ?>">
            <div id="university_error">Please enter your University</div>

            <div class="login_font login_font2">Password</div>
            <input type="password" name="password" class="form_input" value="<?php echo $_POST['password']; ?>">
            <div id="password_error">Please enter your Password</div>

            <p class="authentication_redirect">Already have an account? <a href="login.php">Login here</a></p>

            <button name="submit">Register</button>
        </form>
    </div>

    <script src="valid.js"></script>
    
</body>

</html>