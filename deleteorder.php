<?php
$id = $_GET['id'];
include 'conn.php';
$sql = "Delete from takeorder where id = " .$id;
$res = mysqli_query($conn, $sql);
if(!$res){
	die("failed to delete ".mysqli_error($conn));
}
else{
header("location:vieworder.php");
}
?>
<a href="admin_homepage">Go Home</a>