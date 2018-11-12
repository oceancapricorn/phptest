<?php 

require_once 'models/db.php';
require_once 'models/users.php';

   $user = new User();  
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      $date = date("Y-m-d H:i:s");  
      if ($_REQUEST['password'] == $_REQUEST['confirm_password']) {
      	$register = $user->register($date,$_REQUEST['name'],$_REQUEST['username'],$_REQUEST['email'],$_REQUEST['password']);
      	 if($register){  
         echo "Registration Successful!";  
      }
      else
      {  
         echo "Entered email already exist!";  
      }  
      } else {
      	echo "Password Don't Match";
      }
        
     
   }


 ?>
 <script src="js/main.js"></script>
 <div class="form">  
    <h1>Registration</h1>  
    <form action="" method="post">  
        <input type="text" name="name" placeholder="Please Enter Name" required />  
        <br>  
        <input type="text" name="username" placeholder="Please Enter Userame" required />  
        <br>  
        <input type="text" name="email" placeholder="Please Enter Email" required />  
        <br>  
        <input type="password" name="password" id="password" placeholder="Please Enter Password" onkeyup='check();' required />  
        <br> 
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" onkeyup='check();' required /> 
        <br> 
        <span id='message'></span>
        <br>
        <input type="submit" name="submit" value="Register" />  
    </form>  
    <p>Alredy Registered?<a href="login.php"> Login Here</a></p>  
</div>