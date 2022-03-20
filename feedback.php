<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="feed.css">
</head>
<body>
	<h1>Give us feedback</h1>
<div class="fb">
<form method="POST" action="details.php">
	<br>
<span>Date:</span> <input type="date" name="date" id="date1"><br><br>
<p>Review:</p><textarea name="feedback" id="feedback1" maxlength="80"></textarea> <br><br>
	<input type="submit" value="submit" onclick="rev()">
</form>
</div>
  <div class= "fed"> <a href="canteen.php"> Go Home</a></div>
</body>
<script type="text/javascript">
	function rev(){
		var dat=document.getElementById("date1").value;
		var revi=document.getElementById("feedback1").value;
		if (dat=="" || revi=="")
		 {
			alert("All fields are required");
		}
		else{
		alert("Thank your feedback");
	}
	}
</script>
</html>
