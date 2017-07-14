<?php// ob_start();   just remove this for header to work.Its not necessary that you get the error.?>

<h1>Knrt's Code</h1>
<h2>This is a page</h2>
<p>ob_start() function is used to stop getting error that we get if we use header() after any html header tag.It is not necessary that you get the error , but if you do use ob_start() </p>

<?php
    $redirect = false;//change this to true to redirect
$redirect_page = "https://www.google.co.in";
if($redirect==true){
    header("Location: ".$redirect_page);
}
//ob_end_flush ...use this function too in the end if you use ob_start() this clears the output buffer.
?>