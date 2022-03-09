<?php
	$conn =  new PDO('mysql:dbname=errorbased;host=mysql', 'myuser', 'password', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); 
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>