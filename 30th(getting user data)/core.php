<?php
ob_start();
session_start();

$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = $_SERVER['HTTP_REFERER'];

function getfield($field){
    $query = "SELECT `$field` FROM `login` WHERE `id`='".$_SESSION['user_id']."'";
    if($query_run = mysql_query($query)){
        if($query_result=mysql_result($query_run,0,$field)){
            return $query_result; 
        } 
    }else{
        echo "Field Name does not exist";
    }
}

?>