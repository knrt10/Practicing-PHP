<?php
require 'database.php';//gets file where we are connecting the database
?>

<form action="index.php" method="get">
    Choose a food type:<br/><br/>
    <select name="uh">
        <option value="u">Unhealthy</option>
        <option value="h">Healthy</option>
    </select><br/><br/>
    <input type="submit" value="Submit"/>
</form>

<?php

if(isset($_GET['uh'])&&!empty($_GET['uh'])){
     $uh = strtolower($_GET['uh']);

    if($uh=='u'||$uh=='h'){

    
        $query = "SELECT `food`, `calories` FROM `food` WHERE `healthy_unhealthy`='$uh' ORDER BY `id` DESC";//getting query from database table that i created with TABLE NAME = food . We get in descending order
        if($query_run = mysql_query($query)){

            if(mysql_num_rows($query_run)==NULL){//fetching data.
                echo "No result found";
            }else{
                while($query_row = mysql_fetch_assoc($query_run)){//grab data as array
                $food = $query_row['food'];
                $calories = $query_row['calories'];
                echo $food . " has " .$calories." calories "."<br/>";
                 }
            }
        }
        else{
            echo mysql_error();//debugs error
        }
        }
    }       
?>