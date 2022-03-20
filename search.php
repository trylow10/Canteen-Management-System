<?php
include "conn.php";
if(count($_POST)>0) {
$email=$_POST['email'];
$sql = "SELECT * FROM userlogin where email = '{$email}@gmail.com'";
$res = mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<table>
<tr>
<td>Username</td>
<td>Email</td>
<td>Contact</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($res)) {
?>
<tr>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["contact"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>