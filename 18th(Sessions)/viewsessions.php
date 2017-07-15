<?php
    session_start();
if(isset($_SESSION['username'])&&isset($_SESSION['email'])){
    echo "Welcome , ".$_SESSION['username']."<br/>Logged with ". $_SESSION['email']
        ;
}else{
    echo "Please login";
}
/*Now this is very important concept if you try to go to this page first without first going to sessions.php,
You are gonna receive the else part message cause you have not set the session. 
These kind of things are used in login type apllication which we will see later on . 
So first go to sessions.php and that open this file in browser.
*/
?>