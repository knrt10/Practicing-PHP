<?php

/*

        Whole concept of this program is that you add ip address of person who visits your site and     increase the number of people in a file and if that same ip address refreshes that site the counter remains the same 

*/
function hit_count(){
$ip_address = $_SERVER['REMOTE_ADDR'];
    
    $ip_file=file('ip.txt');
    foreach($ip_file as $ip){
        $ip_single= trim($ip);
        if($ip_address==$ip_single){//ip adress should be different for this to work
            $found= true;
            break;
        }else{
            $found = false;
            
        }
    }
    if($found==false){
            $filename= 'counter.txt';
    $handle = fopen($filename,'r');
 $current = fread($handle, filesize($filename));

    fclose($handle);
$current_increment = $current + 1;
    $handle = fopen($filename,'w');//will increment counter if file opens
    fwrite($handle,$current_increment);
    fclose($handle);
        
        $handle = fopen('ip.txt','a');//will append ip address to ip.txt file
        fwrite($handle,$ip_address."\n");
        fclose($handle);
   
    } else {
        echo "Sorry bitch ";
    }    
}   
?>