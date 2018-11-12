<?php

/*define('HOST', 'localhost');  
define('USER', 'root');  
define('PASS', '');  
define('DB', 'testphp');

class DB  {  
    function __construct() {  
        $con = mysqli_connect(HOST, USER, PASS) or die('Connection Error! '.mysql_error());  
        mysql_select_db(DB, $con) or die('DB Connection Error: ->'.mysql_error());  
    }  
}*/

class DB {
	private $host;
	private $username;
	private $password;
	private $dbname;
	
	// Get mysqli connection
	protected function connect() {
		$this->host = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "testphp";
		
		$conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
		if ($conn->connect_errno) {
    		die("Failed to connect to MySQL: (".$conn->connect_errno.") ".$conn->connect_error);
		} else {
			return $conn;
		}
	}
	
	
}

