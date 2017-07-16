<?php

//just like forms in sites where people are asked for feedback .

    if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['text'])){
        if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['text'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['text'];
            
            $to = "tripathi.kautilya@gmail.com";
            $subject = "test";
            $body = $name."\n".$message;
            $headers = "From: ".$email;
            if(mail($to,$subject,$body,$headers)){
                echo "Thank you for submitting we will get back to you asap";
            }else{
                echo "Not able to send . Please try again";
            }
            
        }else{
            echo "all fields required";
        }
    }

?>
<form action="contact.php" method="post">
Name : <br/><input type="text" name="name" maxlength="25"/><br/><br/>
Email : <br/><input type="email" name="email"/><br/><br/>
Message : <br/><textarea name="text" cols="60" rows="10"></textarea><br/><br/>
    <input type="submit" value="Submit"/>
</form>