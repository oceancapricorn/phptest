<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/main.js"></script>
</head>
<body>
	<section>
		<div class="container">
			<div class="content">
				<h1>Homepage</h1>
				<div>
					<a href="login.php">Login</a>   
				</div>	
				<div>
					<a href="register.php">Register</a>
				</div>
				<form action="result.php" method="POST">
					<input type="text" name="searchform" id="search"  placeholder="&#xF002; Search" style="font-family:Roboto Condensed, FontAwesome" />
					<input type="submit" value="submit" class="button">
				</form>
			</div>
		</div>
	</section>
</body>
</html>