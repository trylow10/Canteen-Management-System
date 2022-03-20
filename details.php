<?php
session_start();
include 'conn.php';
$uname = $_SESSION['username'];
$username = $uname;
$date = $_POST['date'];
$feedback = $_POST['feedback'];
$sql = "insert into review(username,date,feedback) values('$username','$date','$feedback')";
$res = mysqli_query($conn,$sql);
if(!$res){
	die("insertion failed".mysqli_error($conn));
}
else{
	header("location:feedback.php");
}
?>