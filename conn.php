<?php
$server = "localhost:3308";
$user = "root";
$pwd = "";
$db = "canteen";
$conn = mysqli_connect($server, $user, $pwd,$db);
if(!$conn){
die("connection failed".mysqli_connect_error());
} 
?>