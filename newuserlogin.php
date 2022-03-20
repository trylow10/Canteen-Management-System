<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
  padding: 0px;
  margin: 0px;
  text-align: center;
  color: grey;
  font-size: 30px;
        }
    </style> 
</head>
<body>
	<div class = "container-fluid">
		<div class = "row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">
<div class="loginbox">
<h1 class = "h1">Registration Form</h1><br><br>
<form name="frm" action = "insertuser.php" onsubmit=" return valid()" method="POST">
  <div class="fontuser">
    <label for="Username">Username</label>
    <input type="text" class="form-control" name = "username"  placeholder="Username">
  </div>
  <div class="fontuser">
    <label for="E-mail">E-mail</label>
    <input type="text" class="form-control" name = "email"  placeholder="E- mail">
  </div>
  <div class="password">
    <label for="Contact">Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="Contact" >
  </div>
       <div class="password">
    <label for="Password">Password</label>
    <input type="Password" class="form-control" name="password" placeholder="Password" >
  </div>
    <div class="password">
    <label for="Password">Confirm Password</label>
    <input type="Password" class="form-control" name="password2" placeholder="Password">
  </div></br>
	<input type="submit" class="btn btn-primary" value="Sign Up" ><br><br>
		</div>
    Already have an account<a href="login.php"> Login
</form>
</body>
<script type="text/javascript">
function valid(){

  var un = document.forms['frm']['username'].value;
  var em = document.forms['frm']['email'].value;
  var atpos = em.indexOf("@");
  var dtpos = em.lastIndexOf(".");
  var cont = document.forms['frm']['contact'].value;
  var pass = document.forms['frm']['password'].value;
  var pass1 = document.forms['frm']['password'].value.length;
  var pass2 = document.forms['frm']['password2'].value;

     if(un==""||em==""||cont==""||pass==""||pass1==""){
      alert("All fields are required");
}
    else if(!un.match(/^[A-Z a-z]+$/)){
      alert("Name only consists character");
    }
    else if(atpos<1 && dtpos<2){
      alert("Invalid email");
    }
      else if(!cont.match(/^\d{10}$/)){
      alert("Contact must be 10 digit");
    }
    else if (un==pass) {
      alert("Username and Password must be different");
    }
    else if(pass1 < 8){
      alert("Password must be greater than 8 digit");
    }
    else if (pass2!=pass) {
      alert("Two Password must be same.");
    }
    else{
      alert("New User is created");
      
    }
  }

</script>
</html>