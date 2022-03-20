<?php

include 'conn.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
	<h1>Customers Details</h1>
	<div class="search">
	<form method="post" action="search.php">
		 <input autocomplete="off" type="text" name="email" placeholder="Enter Email" name="name" required=""/>
		 <span>@gmail.com</span>
		<input type="submit" value = "Search">
	</form>
	</div>
<table border="1">
		
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Contact</th>
		</tr>
	</thead>
	<tbody>	
</body>
</html>
<?php
$sql = "select username,email,contact from userlogin where user != 'admin'";
$res = mysqli_query($conn, $sql);
if(mysqli_num_rows($res)>0){
while ($row = mysqli_fetch_assoc($res)){
	echo "<tr>";
	echo "<td> ".$row['username']. "</td>";
	echo "<td> " .$row['email'].  "</td>";
	echo "<td> " .$row['contact'].  "</td>";
	 echo "</tr>";
	}
}
?>
</tbody>
</table>

<div class="go"><a href="admin_homepage.php">Go Home</a></div>

</body>
</html>
