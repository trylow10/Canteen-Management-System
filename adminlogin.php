<?php
	session_start();
	include "conn.php";
	$_SESSION['username'] = $_POST['username'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysqli_query($conn,"SELECT COUNT(1) FROM userlogin WHERE username = '$username' and password = '$password'");
	$row = mysqli_fetch_row($result);
	if($row[0] > 0){
	$userRole = mysqli_query($conn,"SELECT User FROM userlogin WHERE username = '$username' and password = '$password'");
	    $row = mysqli_fetch_row($userRole);
	    if($row[0] == 'admin'){
             //redirect to admin home page
	    	header("location: admin_homepage.php");
	    }
	    else{
	    	//redirect to user home page
	    	header("location: canteen.php");
	 
	    }
	}
	else{
	header("location:login.php?msg=invalid");
	}
?>

</body>
</html>