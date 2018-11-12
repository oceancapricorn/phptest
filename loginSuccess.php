<?php 

session_start();

require_once 'models/db.php';
require_once 'models/users.php';

   $user = new User();
   $id = $_SESSION['id'];
 ?>

 <div class="form">  
            <h1>Welcome <?php $user->fullname($id);?></h1>  
        </div>