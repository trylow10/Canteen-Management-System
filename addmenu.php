 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="editmenu.css">
 </head>
<body>
<div class="edit">
 <form method = "POST" action="additem.php">
 	<div class ="cont">
	Item: <input type="text" name="name" required><br><br>
	Image: <input type="file" name="image" required> <br><br>
	Price: <input type="text" name="price" required><br><br>
	<input type="submit" value="Add to menu">	
	</div>
</form>
</div>
<div class="go"><a href="admin_homepage.php">Go Home</a></div>
</body>
 </html>