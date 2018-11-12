<?php 

include_once 'db.php';

class User extends DB {
	public function login($email, $password) {  
        $password = md5($password);  
  		$sql = "Select * FROM users WHERE email='$email' AND password='$password'";
 	    $result = $this->connect()->query($sql);
        if ($result) {  
         $numRows = $result->num_rows;
         if($numRows > 0) {
             $_SESSION['login'] = true;  
             $_SESSION['id'] = $data['id'];  
             return true;  
         } else {
          return false;
         }
        } else {  
            return false;  
        }  
    }
 

public function register($date, $name, $username, $email, $password) {  
        $password = md5($password);  
        $checkUser = $this->connect()->query("SELECT id FROM users WHERE email='$email'");  
        if ($result) {  
         $numRows = $result->num_rows;
         if (!$numRows) {
             $sql = "INSERT into users (date, name, username, email, password) values ('$date','$name','$username','$email','$password')";
          $register = $this->connect()->query($sql);  
             return $register;  
         }
        } else {  
            return false;  
        }  
    }
}






