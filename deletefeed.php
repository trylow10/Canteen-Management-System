<?php
$id = $_GET['id'];
include 'conn.php';
$sql = "Delete from review where id = " .$id;
$res = mysqli_query($conn, $sql);
if(!$res){
	die("failed to delete ".mysqli_error($conn));
}
else{
header("location: viewfeeds.php");
}
?>
