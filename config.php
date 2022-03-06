<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "program_review";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>('Connection Failed.')</script>");
}

?>