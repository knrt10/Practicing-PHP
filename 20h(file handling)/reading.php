<?php

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        if(!empty($name)){
            
            $handle = fopen("name.txt","a");
            fwrite($handle, $name."\n");
            fclose($handle);
            
            echo "Current names : ";
            $count=1;
            $reading = file('name.txt');//we open in reading array format 
            $reading_count = count($reading);
            foreach($reading as $names){//we read it as an array
                echo trim($names);
                if($count<$reading_count){//to avoid (,) at the end of list
                    echo ", ";
                }
                $count++;
            }
            
        }else{
            echo "Please fill in the field";
        }
    }

?>

<form action="reading.php" method="post">
    Name: <br/><br/><input type="text" name="name"/><br/><br/>
    <input type="submit" value="Submit"/>
</form>