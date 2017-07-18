<?php
require 'core.php';
require 'database.php'; 

if(!loggedin()){
        if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['surname'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];
        $password_hash = md5($password);
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        
        if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)){
            if($password!=$password_again){
                echo "Passwords do not match"; 
            }else{
                $query = "SELECT `username` FROM `login` WHERE `username`='$username'";
                $query_run = mysql_query($query);
                if(mysql_num_rows($query_run)==1){
                    echo "Username supplied ".$username." Already exists";
                }else {
                    $query="INSERT INTO `login` VALUES ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."')";
                
                    if($query_run = mysql_query($query)){
                        header("Location: loginform.php");
                    }else{
                        echo "Sorry cannot Register You at this time. Please try again later";
                    }
                }
            }
        }else {
            echo "Fill all fields asshole";
        }
    }
    
?>
<form action="register.php" method="post">
Username:<br/><input type="text" name="username" value="<?php if(isset($username)) { echo  $username; }?>"/><br/><br/>
Password:<br/><input type="password" name="password"/><br/><br/>
Confirm Password:<br/><input type="password" name="password_again"/><br/><br/>
First Name:<br/><input type="text" name="firstname" value="<?php if(isset($firstname)){ echo $firstname; }  ?>"/><br/><br/>
Surname:<br/><input type="text" name="surname" value="<?php if(isset($surname)){ echo $surname;} ?>"/><br/><br/>
<input type="submit" value="Submit"/>
</form>
<?php  
}else if(loggedin()){
    echo "You are already registered and logged in";
}
?>