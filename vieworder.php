<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="vieworder.css">
</head>
<body>

<h1>Orders Received</h1>
<table border="1">
	<thead>
		<tr>
			<th>Order_date</th>
		<th>username </th>
			<th>item</th>
			<th>quantity</th>
			<th>price</th>
			<th colspan="2">action</th>

		</tr>
	</thead>
	<tbody>
		<?php

include 'conn.php';
$sql = "select * from takeorder;";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
while ($row = mysqli_fetch_assoc($res)){

	echo "<tr>";
	echo "<td> ".$row['order_date']."</td>";
	echo "<td> ".$row['username']. "</td>";
	echo "<td> " .$row['item_name'].  "</td>";
	echo "<td> ".$row['quantity']. "</td>";
		echo "<td> ".$row['price']. "</td>";
	 echo "<td id=\"con\">
	 <a href = \"conorder.php?id=".$row['id']."\" > Confirm </a> </td>
	<td> <a href = \"deleteorder.php?id=".$row['id']."\"> Remove </a> </td>" ;
	 echo "</tr>";
	}
}
?>
</tbody>
</table>

<div class="go"><a href="admin_homepage.php">Go Home</a></div>

</body>
</html>