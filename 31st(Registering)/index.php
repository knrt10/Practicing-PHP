<?php

require 'database.php';
require 'core.php';


if(loggedin()){
$firstname= getfield('firstname');
$surname = getfield('surname');
    echo 'You are logged in '. $firstname . " ".$surname .' <a href="logout.php">Logout</a><br/>';  
}else{
require 'loginform.php';    
}
?>