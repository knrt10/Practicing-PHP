<?php
require 'database.php';//gets file where we are connecting the database
$query = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`='u' ORDER BY `id` DESC";//getting query from database table that i created with TABLE NAME = food . We get in descending order

if($query_run = mysql_query($query)){//fetching data
    while($query_row = mysql_fetch_assoc($query_run)){//grab data as array
        $food = $query_row['food'];
        $calories = $query_row['calories'];
    echo $food . " has " .$calories." calories "."<br/>";
    }
}else{
    echo mysql_error();//debugs error
}

?>