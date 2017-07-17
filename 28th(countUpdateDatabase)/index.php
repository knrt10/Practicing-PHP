<?php
require 'database.php';

$ip = $_SERVER['REMOTE_ADDR'];

function ip_exists($ip){
    global $ip;
    $query = "SELECT `ip` FROM `hit_ip` WHERE `ip`='$ip'";
    $query_run = mysql_query($query); 
    $query_num_rows = mysql_num_rows($query_run);
    if($query_num_rows==0){
        return false;
    }else if($query_num_rows>=1) {
        return true;
    }
}

function ip_add($ip){
    $query = "INSERT INTO `hit_ip` VALUES('$ip')";
    $query_run = mysql_query($query);
}

function update_counter(){
    
    $query = "SELECT `counter` FROM `hit_counter`";
    if($query_run = mysql_query($query)){
        $count = mysql_result($query_run,0,'counter');
        $count_inc = $count +1;
        
        $query_update = "UPDATE `hit_counter` SET `counter`='$count_inc'";
        $query_update_run = mysql_query($query_update);
    }
    
}

if(!ip_exists($ip)){
    echo "This will now add count +1  ";
update_counter();
ip_add($ip);
}else{
    echo "User already exists on database";
}

?>
