<?php
    $string ="09:59 am";
if(preg_match("/(1[012]|[1-9]):[0-5][0-9] +(am|pm)/",$string)){//just like regex takes 3 arguments 1st--what you want to search
    echo "Match Found";//2nd where you want to search
}else{
    echo "Nope";
}
?> 