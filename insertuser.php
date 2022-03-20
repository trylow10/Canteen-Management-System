<?php
session_start();
include("conn.php");
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];

 // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 //  $user_check_query = "SELECT * FROM userlogin WHERE username='$username' OR email='$email' LIMIT 1";
 //  $result = mysqli_query($conn, $user_check_query);
 //  $user = mysqli_fetch_assoc($result);

 //  echo $user['username'];
  
 //  if ($user) { // if user exists
 //    if ($user['username'] === $username) {
 //      array_push($errors, "Username already exists");
 //    }

 //    if ($user['email'] === $email) {
 //      array_push($errors, "Email already exists");
 //    }
 //  }

	// // register user if there are no errors in the form
	// if (count($errors) == 0) {

	$sql = "insert into userlogin(username, email, contact, password) values ('$username','$email', '$contact', '$password')";
	$res = mysqli_query($conn, $sql);
		if (!$res) {
			die("insertion failed ".mysqli_error($conn));
 		}
		else{
			echo '<script>alert(" new user created")</script>';

		}
      header("location:login.php");
 ?>
