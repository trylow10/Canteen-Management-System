<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="viewfeeds.css">
</head>
<body>

<h1> Feedbacks from customers</h1>
<table border="1">
	<thead>
		<tr>
		<th>username </th>
			<th>date</th>
			<th> feedback</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php

include 'conn.php';
$sql = "select * from review;";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
while ($row = mysqli_fetch_assoc($res)){

	echo "<tr>";
	echo "<td> ".$row['username']. "</td>";
	echo "<td> " .$row['date'].  "</td>";
	echo "<td> ".$row['feedback']. "</td>";

	// echo "<td> <a href = \"edit.php?id=".$row['id']."\"> Edit </a> </td>"; 
	echo "<td><a href = \"deletefeed.php?id=".$row['id']."\"> Remove </a> </td>" ;
	 echo "</tr>";
	}
}
?>
</tbody>
</table>
<div class="back"><a href="admin_homepage.php">Go Home</a></div>
</body>
</html>