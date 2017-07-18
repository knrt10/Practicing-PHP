<?php

require 'database.php';
require 'core.php';

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
    echo 'You are logged in. <a href="logout.php">Logout</a>';
}else{
require 'loginform.php';    
}



?>