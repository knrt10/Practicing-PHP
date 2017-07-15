<?php

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        if(!empty($name)){
            
            $handle = fopen("name.txt","a");
            fwrite($handle, $name."\n");
            
            fclose($handle);
            
            
        }else{
            echo "Please fill in the field";
        }
    }

?>

<form action="append.php" method="post">
    Name: <br/><br/><input type="text" name="name"/><br/><br/>
    <input type="submit" value="Submit"/>
</form>