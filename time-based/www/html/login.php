<?php 
    session_start();
    require_once 'connect.php';

    if (isset($_POST['login'])){
        if($_POST['username'] !== "" || $_POST['password'] !== ""){
            $username= $_POST['username'];
			$username=preg_replace('/join|group|sleep|having|or|select|from|where|\ /','',$username); //filter
            $password= $_POST['password'];
            $_SESSION['username']=$username;
			$query="SELECT * FROM users WHERE username='".$username."' AND password='".$password."';";
			try{
				$exec=$conn->query($query);
				if(($exec ->rowCount()) > 0){
					$_SESSION['username']=$username;
					header('location: index.php');
				}
			}catch (Exception $e){
				header('location: login.php');
			}     
        }

    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./static/login.css">
	<link rel="icon" href="./favicon.jpg">
	<title>Login page</title>
</head>
<body>
	<div class="container">
		<h1 id='text1'>LOGIN</h1>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
			<div class="txt">
				<span></span>
				<input type="text" required name="username" />
				<label>Username</label>
			</div>
			<div class="txt">
				<input type="password" required name="password" />
 				<label>Password</label>	
				 <span></span>
			</div>
			<button type="submit" name="login">Login</button>
			<div class="pad">
			</div>
		</form>
	</div>
<!-- hint:
blacklist: /join|group|sleep|having|or|select|from|where|\ /
-->
</body>
</html>
