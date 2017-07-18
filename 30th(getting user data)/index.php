<?php

require 'database.php';
require 'core.php';


if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
$firstname= getfield('firstname');
$surname = getfield('surname');
    echo 'You are logged in '. $firstname . " ".$surname .' <a href="logout.php">Logout</a><br/>';
    
}else{
require 'loginform.php';    
}
?>