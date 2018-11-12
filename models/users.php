<?php 

include_once 'db.php';

class User extends DB {
	// Check if user is already logged in
	public function login($email, $password) {
	 // Hash password 
        $password = md5($password);  
  		$sql = "Select * FROM users WHERE email='$email' AND password='$password'";
 	    $result = $this->connect()->query($sql);
        if ($result) {  
         $numRows = $result->num_rows;
         if($numRows > 0) {
         // Using session variables to login user
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
 // User registration
public function register($date, $name, $username, $email, $password) {  
	// Hash pasword
        $password = md5($password);  
        // If user already exist
        $checkUser = $this->connect()->query("SELECT id FROM users WHERE email='$email'");  
        if ($checkUser) {  
         $numRows = $checkUser->num_rows;
         if (!$numRows) {
         	// Insert new user
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

    // Function to grab user fullname
       public function fullname($id) {  
       $sql = "SELECT * FROM users WHERE id='$id'";
       $result = $this->connect()->query($sql);
        $row = $result->fetch_array();
        echo $row['name'];  
    }

    // Check if user is already logged in
        public function session() {  
        if (isset($_SESSION['login'])) {  
        return $_SESSION['login'];  
        }  
    }


    // Search all user based on the search term
       public function searchUsers($name) {  
       $sql = "SELECT name FROM users WHERE name LIKE '$name%' OR email LIKE '$name%'";
       $result = $this->connect()->query($sql);
       if($result) {
        $numRows = $result->num_rows;
        if($numRows > 0) {
        while($row = $result->fetch_assoc()) {
     	$data[] = $row;

     
    }

         return $data;
        }
        
       }
    }
}






