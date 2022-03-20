	<?php
	session_start();


	include('conn.php');




if (count($_POST) > 0) {
	$opass=$_POST["currentPassword"];
	$npass=$_POST['newPassword'];

    $result = mysqli_query($conn, "SELECT * from userlogin WHERE username='" . $_SESSION['username'] . "'");
    $row = mysqli_fetch_array($result);
    if ($opass == $row["password"]) {
        mysqli_query($conn, "UPDATE userlogin set password='" . $npass . "' WHERE username ='" . $_SESSION['username'] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>

<html>




<head>
<title>Change Password</title>
<!-- <link rel="stylesheet" type="text/css" href="styles.css" /> -->
</head>
<body>
  

     <div class="header">
        <h2>Change Password</h2>
    </div>

<form name="frmChange" method="post" id="adform" action="#" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="10" width="500" align="center" class="frmtbl">
<!-- <tr class="tableheader">
<td colspan="2">Change Password</td>
</tr> -->
<tr>
<td width="40%" class="input-group"><font style="font-family: Verdana;">Current Password</font></td>
<td width="60%" class="input-group" colspan="3"><input type="password" name="currentPassword" /><span id="currentPassword"  class="required"></span></td>
</tr>

<tr>
<td class="input-group"><font style="font-family: Verdana;">New Password</font></td>
<td class="input-group" colspan="3"><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>

</tr>
<td class="input-group"><font style="font-family: Verdana;">Confirm Password</font></td>
<td class="input-group" colspan="3"><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>

 <tr>
                                <td colspan="4">
                                   <center >        <div class="input-group">
            <button type="submit" class="btn" name="submit" class="btnSubmit">Change</button>
        </div></center>
                                </td>
                           </tr>
<!-- <tr>
<td colspan="2" class="input-group"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr> -->
</table>
</div>
</form>
</body></html>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>