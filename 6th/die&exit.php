<?php
@mysql_connect("localhost","root","") or die("Could not connect to database");
/* using @ will give our produced message in die() but if we dont use @ it will show default message
and our generated message too.
*/
echo "Connected";
?>