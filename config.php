<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "program_review";

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'program_review');

try{
    $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch(PDOException $e){
    exit("Error:".$e -> getMessage());
}

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>('Connection Failed.')</script>");
}

?>