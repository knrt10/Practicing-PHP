<?php

$handle = fopen("name.txt",'w');//we need to first open a case and tell what we want to do here we tell we want to write;

fwrite($handle,"Knrt"."\n");//fwrite is used to write ion our open case
fwrite($handle,"Parikshita");

fclose($handle);//we need to close trhe handler at the end;
echo "Written";
?>