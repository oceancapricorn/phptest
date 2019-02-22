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
      } else
      {  
         echo "Entered email already exist!";  
      }  
      } else {
      	echo "Password Don't Match";
      }   
   }


 ?>
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <script src="js/main.js"></script>
 <section>
     <div class="container">  
        <div class="content">
            <h1>Registration</h1>  
            <form action="" method="post">  
                <input type="text" name="name" id="name" placeholder="Please Enter Name" required />  
                <br>  
                <input type="text" name="username" id="username" placeholder="Please Enter Userame" required />  
                <br>  
                <input type="text" name="email" id="email" placeholder="Please Enter Email" required />  
                <br>  
                <input type="password" name="password" id="password" placeholder="Please Enter Password" onkeyup='check();' required />  
                <br> 
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" onkeyup='check();' required /> 
                <br> 
                <span id='message'></span>
                <br>
                <input class="button" type="submit" name="submit" value="Register" />  
            </form>  
            <p>Alredy Registered?<br><a href="login.php"> Login Here</a></p>    
        </div>
    </div>
</section>
