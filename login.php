<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['name'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
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

    <title>Login</title>
</head>
<body class="authentication">
    <div class="container">
        <h1 class="label">Login</h1>
        <form action="" class="login_form" method="POST" name="form" onsubmit="return validated()">
            
            <div class="login_font">Email</div>
            <input type="text" name="email" class="form_input" value="<?php echo $email; ?>">
            <div id="email_error">Please enter your Email</div>

            <div class="login_font login_font2">Password</div>
            <input type="password" name="password" class="form_input" value="<?php echo $_POST['password']; ?>">
            <div id="password_error">Please enter your Password</div>

            <p class="authentication_redirect">Don't have an account? <a href="registration.php">Register here</a></p>

            <button name="submit">Login</button>
        </form>
    </div>

    <script src="valid.js"></script>
    
</body>

</html>