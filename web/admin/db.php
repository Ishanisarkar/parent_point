<?php

$mysqli_hostname = "localhost";
$mysqli_user = "root";
$mysqli_password = "";
$mysqli_database = "parent_point";


$bd = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password , $mysqli_database);
if(!bd){
die("database connection failed");
}




?>