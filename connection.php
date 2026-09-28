<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ems";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}else {
     echo "Database connected successfully!";
}
?>