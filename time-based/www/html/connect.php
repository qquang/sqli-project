<?php
	$conn =  new PDO('mysql:dbname=timebased;host=mysql', 'myuser', 'password', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); 
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}
?>