<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="editmenu.css">
	<title></title>
</head>
<body>


<?php 
	$id = $_GET['id'];
include 'conn.php';
	$sql = "select * from tbl_product where id= ".$id;
	$res = mysqli_query($conn, $sql);
	if(mysqli_num_rows($res)>0){
		while($row = mysqli_fetch_assoc($res)){
			?>
			<div class="edit">
<form method="post" action="update.php?id=<?php echo $id;?>">
	<div class="cont">
				Name: <input type="text" name="name" value="<?php $row['name'];?>" required>
				<br><br>
				
				Image: <input type="file" name="image" value="<?php $row['image'];?>" required>
				<br><br>
				Price: <input type="price" name="price" value="<?php $row['price'];?>" required>
			<br>	<br>
				<input type="submit" value="Update">
	</div>
			</form>
		</div>
	<?php 
		}
	}
?>
<div class="go"><a href="admin_homepage.php">Go Home</a></div>
</body>
</html>