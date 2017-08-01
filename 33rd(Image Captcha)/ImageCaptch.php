<?php
session_start(); 

if(!isset($_POST['secure'])){
$_SESSION['secure']= rand(1000,9999);
}else{
    if($_SESSION['secure']==$_POST['secure']){
        echo 'Success dude!!'."<br/>";    
    }else{
        echo 'Please try again!'."<br/>";
        $_SESSION['secure']= rand(1000,9999);
    }
}

?>
<img src="generate.php"/><br/><br/>
<form action="" method="post">
    Type the value you see above: <br/><br/>
    <input type="text" name="secure" size="6" /><br/><br/>
    <input type="submit" value="Submit"/>
    
</form>