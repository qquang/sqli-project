<?php 
    require_once 'connect.php';
	if(isset($_GET['id']) && isset($_GET['id']) ){
		$id=$_GET['id'];
		$author=$_GET['author'];
		//from sqliv1 with luv
		if (preg_match("/[a-zA-Z]|\'|\"/", $id)){
			die("id must be a number!");
		}
		if (preg_match("/[\"|\'|\`]/", $author)){
			die("author must be a string!");
		} 
		$query = "select * from m3m3 where id=".$id." and author='".$author."'";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./static/css.css">
	<link rel="icon" href="./favicon.jpg">
	<title>SEARCH!</title>
</head>
<body>
	<div class="header">
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
			<h1> Just Search It </h1>
			<p>EX: ID=1,Author:Adolf Hitler, ID=5,Author:3l0n Musk</p>
			<div class="form-box">
				<input type="text" name="id" class="search-field id" placeholder="ID...">
				<input type="text" name="author" class="search-field Author" placeholder="Author...">
				<button type="submit" class="search-btn">Search</button>
			</div>
		</form>
	</div>
	<div class="main">
	<table style="width:100%">
		<thead>
			<tr>
				<th>id</th>
				<th>author</th>
				<th>quote</th>
			</tr>
		</thead>
		<tbody>
		<?php
			if(isset($_GET['id']) && isset($_GET['id']) ){
			try{
				$result = $conn->query($query);
				if ($result->rowCount() > 0) {
					while($row = $result->fetch()) {
						echo "<tr>".
						"<td>".$row["id"]."</td>".
						"<td>".$row["author"]."</td>".
						"<td>".$row["quote"]."</td>".
						"</tr>";
					}
				} else {
					echo "0 results";
				}
			}catch(Exception $e){
				die("hack detected;");
			}
		}
		?>
		</tbody>
	</table> 
	</div>
	<!-- hint:
			if (preg_match("/[a-zA-Z]|\'|\"/", $id)){
			die("id must be a number!");
		}
		if (preg_match("/[\"|\'|\`]/", $author)){
			die("author must be a string!");
		} 
-->
</body>
</html>