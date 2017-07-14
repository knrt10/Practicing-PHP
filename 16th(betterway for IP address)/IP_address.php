<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];//this is used for actual internet ip address rather than individual computers ip . They can be connected in hub or root or whatever . It appears like 192.169.3.43 bla bla.
    
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];//used to check proxy.

$http_remote = $_SERVER['REMOTE_ADDR'];//simple client's ip address;
        
        if(!empty($http_client_ip)){
          $ip_address = $http_client_ip;  
        }else if(!empty($http_x_forwarded_for)){
            $ip_address = $http_x_forwarded_for;
        }else if(!empty($http_remote)){
            $ip_address = $http_remote;
        }

echo"Your IP address is " . $ip_address;
?>