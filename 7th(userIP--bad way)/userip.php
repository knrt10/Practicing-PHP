<?php
require 'config.php';

foreach($ip_blocked as $ip){
    if($ip==$ip_address){
        die('Fuck off cause your IP '.$ip_address .' is fucking blocked');
    }
}

?>
<h1>Welcome</h1>