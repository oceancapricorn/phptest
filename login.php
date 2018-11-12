<?php 

session_start();

require_once 'models/db.php';
require_once 'models/users.php';



 	$user = new User();  
    if ($_SERVER["REQUEST_METHOD"] == "POST"){  
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

<div class="form">  
    <h1>Log In</h1>  
    <form action="" method="post">  
        <input type="text" name="email" placeholder="Please Enter Email" required />  
        <br />  
        <input type="password" name="password" placeholder="Please Enter Password" required />  
        <br />  
        <input type="submit" name="submit" value="Login" />  
    </form>  
    <p>Not registered yet?<a href="register.php"> Register Here</a></p>  
</div>