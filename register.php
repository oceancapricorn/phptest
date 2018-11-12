<?php 

require_once 'models/db.php';
require_once 'models/users.php';

   $user = new User();  
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      $date = date("Y-m-d H:i:s");  
      // If passwords match register user
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
    	<label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Please Enter Name" required />  
        <br>  
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Please Enter Userame" required />  
        <br>  
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Please Enter Email" required />  
        <br>  
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Please Enter Password" onkeyup='check();' required />  
        <br> 
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" onkeyup='check();' required /> 
        <br> 
        <span id='message'></span>
        <br>
        <input type="submit" name="submit" value="Register" />  
    </form>  
    <p>Alredy Registered?<a href="login.php"> Login Here</a></p>  
</div>