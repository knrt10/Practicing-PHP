<?php
$conn_error = 'Could not connect to database';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='login';

if(!@mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!@mysql_select_db($mysql_db)){
    die($conn_error);//checking connection for database
}
?>