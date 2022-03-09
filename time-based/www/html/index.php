<?php
	
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: login.php");
		die('You have to log in first, redirecting...');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Back</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="static/style.css">
	<link rel="icon" href="./favicon.jpg">
</head>
<body>
	<h1>Welcome Back!</h1>
	<br><br><br>
	<p>message for admin: 
		<?php
			if ($_SESSION['username']==="admin") echo "<a href='https://www.youtube.com/watch?v=xvFZjo5PgG0'>i got some present for u !!</a>";
			else echo "************ (only admin can see this!)";
		?>
	</p>
	<a href="logout.php"> click here to log out</a>
</body>
</html>
