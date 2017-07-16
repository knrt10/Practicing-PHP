<?php
$to = "tripathi.kautilya@gmail.com";
$subject = "test";
$body= "Just a test";

if(mail($to,$subject,$body,'From: tripathi.kautilya@gmail.com')){
    echo "Email sent";
}else{
    echo "fuck you";
}//most important thing is that if you want this mail system to work you need to open a SMTP server .
?>