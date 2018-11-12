<?php 

session_start();

require_once 'models/db.php';
require_once 'models/users.php';

   $user = new User();
   $id = $_SESSION['id'];
 ?>

<link rel="stylesheet" type="text/css" href="css/main.css">
<div class="form" id="showcase">  
    <h1>Welcome <?php $user->fullname($id);?></h1>  
</div>