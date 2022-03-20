<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <style> 
      
        .fontuser { 
            position: relative; 
        } 
          
        .fontuser i{ 
            position: absolute; 
            left: 15px; 
            top: 45px; 
            color: gray; 
        } 

        .password { 
            position: relative; 
        } 
          
        .password i{ 
            position: absolute; 
            left: 15px; 
            top: 45px; 
            color: gray; 
        } 
        body{ margin: 0;
        	padding: 0;
        	background: url(pic-4.jpg) no-repeat ;
          background-position: center;
          background-size: cover;
        }
        .h1{
  padding: 10px;
  margin: 10px;
  text-align: center;
  color: grey;
  font-size: 30px;
        }
 /*       .msg{
          color: red;*/
        }
    </style> 
</head>
<body>
	<div class = "container-fluid">
		<div class = "row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
<div class="loginbox">

<h1 class = "h1">Login</h1><br><br>
  <?php
if (isset($_GET['msg'])== 'failed'){
   echo '<script>alert("Wrong Username or Password")</script>';
}
?>
<form action = "adminlogin.php" method="POST">
  <div class="fontuser">
    <label for="Username">Username</label>
    <input type="text" class="form-control" name = "username" placeholder="Username" required>
  </div>
  <div class="password">
    <label for="Password">Password</label>
    <input type="Password" class="form-control" name="password"  placeholder="Password" required>
  </div>
  <br/>
	<input type="submit" name = "submit" class="btn btn-primary" value="Login"><br>
			<!-- <a href="">Forget Password?</a><br> -->
			Don't have an account ? <a href="newuserlogin.php">Signup</a><br>
		</div>
</form>



</body>
</html>