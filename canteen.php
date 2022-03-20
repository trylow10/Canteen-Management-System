<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="canteen.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
 <marquee behaviour = "scroll" direction ="left"><h1>Canteen Management System </h1></marquee>
 <div style="margin-left: 50%; font-size: 20px;"><?php echo " Welcome ".$_SESSION['username']; ?><div>
<div class = "box">
  <ul type="none">
 <li><a href="menu.php">Menu</a></li>
  <li><a href="cart1.php">Cart</a></li>
 <li><a href="feedback.php">Feedback</a></li>
 <li><a href="aboutus.php">About us</a></li>
<!--   <li><a href="changepwd.php">Change Password</a></li> -->
  <li></li>
   <li><a href="javascript:void(0)" onclick="logout()">Logout <i class="fa fa-sign-out" ></i></a></li> 
        </li>
    </ul>
</div>
</body>
  <p> "Food test better when you eat it with your loved once." </p>
</html>
 <script>
  function logout(){
 if(confirm("Are you sure you want to exit")){

  window.location="logout1.php";  
  }
  else{
  

  window.location="canteen.php";
}
}
</script>
