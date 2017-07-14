<?php
$ip = $_SERVER['REMOTE_ADDR'];

function ip(){
    global $ip;//we need to specify this urgently for any variable outside this func that we want to access.
    echo $string = "Your IP address is $ip";
}
ip();
?>