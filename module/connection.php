<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "student_db";

$connection = mysqli_connect($host, $user, $pass, $db);

if(!$connection){
    die("Connection failed: ". mysqli_connect_error());
}else  
// echo "Connection Successfully!";

?>