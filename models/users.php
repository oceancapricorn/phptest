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
         	$row = $result->fetch_array();
             $_SESSION['login'] = true;  
             $_SESSION['id'] = $row['id'];  
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
        if ($checkUser) {  
         $numRows = $checkUser->num_rows;
         if (!$numRows) {
             $sql = "INSERT into users (date, name, username, email, password) values ('$date','$name','$username','$email','$password')";
          $register = $this->connect()->query($sql);  
             return $register;  
         } else {
          return false; 
         }
        } else {  
            return false;  
        }  
    }

          function fullname($id) {  
       $sql = "SELECT * FROM users WHERE id='$id'";
       $result = $this->connect()->query($sql);
        $row = $result->fetch_array();
        echo $row['name'];  
    }
}






