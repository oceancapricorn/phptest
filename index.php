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
</head>
<body>
    <div>
    <a href="login.php">Login</a>
    </div>
     <div>
    <a href="register.php">Register</a>
    </div>

    <form action="result.php" method="POST">
    	<label for="search">Search</label>
    	<input type="text" name="searchform" id="search">
    	<input type="submit" value="submit">
    </form>
  
</body>
</html>