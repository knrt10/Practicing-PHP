<?php
require 'core.php';
if(isset($_POST['username'])&&isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hash = md5($password);
        if(!empty($username)&&!empty($password)){
            
            $query = "SELECT `id` FROM `login` WHERE `username`='$username' AND `password`='$password_hash'";
            
                if($query_run = mysql_query($query)){
                    $query_num_rows = mysql_num_rows($query_run);
                    if($query_num_rows==0){
                        echo "Invalid username/password combination";
                    }
                    else {
                        echo "cool";
                    }
                }
            
            
        }else{
            echo "Please fill in all fields";
        }
}

?>
<form action="<?php echo $current_file ; ?>" method="post">
    Username:<br/><br/>
    <input type="text" name="username" maxlength="20"/><br/><br/>
    Password:<br/><br/>
    <input type="password" name="password" /><br/><br/>
    <input type="submit" value="Submit"/>
</form>
