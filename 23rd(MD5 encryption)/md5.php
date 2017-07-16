<?php

/*
        
        MD5 hashing is a one sided encryption . You cannot change back hashed part to normal string.
        Also it is not so much secured way of hashing as it can be exploited by brute force attack.
        But it can be used when storing data to databases.
        
*/

if(isset($_POST['password'])){
    if(!empty($_POST['password'])){
        $password = md5($_POST['password']);
        
        $handle = fopen('hash.txt','r');
        $passhash = fread($handle,filesize('hash.txt'));//password is password
        if($password==$passhash){
            echo "Password OK";
        }else{
            echo "Not correct";
        }
    }
}
?>

<form action="md5.php" method="post">
Password : <br/><br/>
    <input type="text" name="password" />
    <br/><br/>
    <input type="submit" value="Submit"/>
</form>