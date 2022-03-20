<?php 
	$id = $_GET['id'];
	$name = $_POST['name'];
	$image = $_POST['image'];
	$price = $_POST['price'];
include 'conn.php'; 
	$sql = "update tbl_product set name = '$name', image = '$image', price = '$price' where id= ".$id;
	$res = mysqli_query($conn, $sql);
	if(!$res){
		die("Failed".mysqli_error($conn));
	}
	else{
		header("location:menulist.php");
	}
?>