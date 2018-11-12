<?php 
session_start();
require_once 'models/db.php';
require_once 'models/users.php';

   $user = new User();


   // If user is not logged in redirect to the login screen
   if (!$user->session()){  
      header("location:login.php");  
   }

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   	// Find all users based on the search term
   	$search = $user->searchUsers($_REQUEST['searchform']);
   	// Loop through all users
   	foreach ($search as $searchdata) {
   		echo $searchdata['name'].'<br>';
   	}
   }

  