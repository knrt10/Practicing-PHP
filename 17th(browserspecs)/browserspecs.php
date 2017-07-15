<?php
echo $_SERVER['HTTP_USER_AGENT'];

$browser = get_browser(null, true);
print_r($browser);
?>