
<html>
<head>
	<link rel="stylesheet" type="text/css" href="menulist.css">
</head>
<body>
<div class= "tb">
<table border="1">
	<thead>
		<tr>
		<th>NAME </th>
			<th > IMAGE </th>
			<th> PRICE</th>
			<th colspan="2"> ACTION </th>
		</tr>
	</thead>
	<tbody>
		<?php

include 'conn.php';
$sql = "select * from tbl_product;";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
while ($row = mysqli_fetch_assoc($res)){

	echo "<tr>";
	echo "<td> ".$row['name']. "</td>";
	echo "<td> " .$row['image'].  "</td>";
	echo "<td> ".$row['price']. "</td>";

	echo "<td> <a href = \"editmenu.php?id=".$row['id']."\"> Edit </a> </td>"; 
	 echo "<td><a href = \"menudelete.php?id=".$row['id']."\"> Delete </a> </td>" ;
	 echo "</tr>";
	}
}
?>
</tbody>
</table>
</div>
<div class="log"><a href="admin_homepage.php">Go Home</a></div>
</body>
</html>