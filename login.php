<?php 
session_start();

require_once 'models/db.php';
require_once 'models/users.php';



 	$user = new User();  
 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){  
    	// Login User
      $login = $user->login($_REQUEST['email'], $_REQUEST['password']);  
      if($login){  
         header("location:loginSuccess.php");  
      }
      else
      {  
         echo "Login Failed! Please try again";  
      }  
  	}

?>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="js/main.js"></script>
<section>
    <div class="container">  
        <div class="content">
            <h1>Login</h1>  
            <form action="" method="post">  
                <input type="text" onfocus="this.value=''" name="email" placeholder="Please Enter Email" required />  
                <br />  
                <input type="password" onfocus="this.value=''" name="password" placeholder="Please Enter Password" required />  
                <br />  
                <input class="button" type="submit" name="submit" value="Login" />  
            </form>  
            <p>Not registered yet?<br><a href="register.php"> Register Here</a></p>  
        </div>
    </div>
</section>
