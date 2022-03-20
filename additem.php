<?php
$name = $_POST['name'];
$image = $_POST['image'];
$price = $_POST['price'];
include 'conn.php';
$sql = "insert into tbl_product(name, image, price) values('$name','$image','$price')";
$res = mysqli_query($conn, $sql);
if (!$res) {
	die("Failed to insert " .mysqli_error($conn));
}
else{
header("location: menulist.php");
}
?>
