<?php
$str= "image.jpg";
$str_shuffeled = str_shuffle($str);//shuffle randomly
echo $str_substr = substr($str_shuffeled,0,strlen($str)/2);//substring cuts the shuffeled into half length of str
echo "<br/>";
$str_rev = strrev($str);//reverses string
$str_rev_sub = substr($str_rev,0,3); //gets jpeg part
echo $a = strrev($str_rev_sub);//reverses jpeg part to normal
echo "<br/>";
$str_1= "this ios app is so amazing. I love it.";//declare 1st string;
$str_2="this android app is cool . But i hate it.";//declare 2nd string;
similar_text($str_1,$str_2,$result);//compare them and store in 3rd argument can be anything
echo "the similatritiy between is :-- $result%<br/>" ;  


/* NOw this code is used for security purpose we add slashes before adding to database.*/
$str_img = "this is a <img src='image.jpg'> string";

echo $addslashes = htmlentities(addslashes($str_img));
echo "<br/>";
//here we remove slash in case we want to access back from database and show it to user.  
echo $removeslash = stripslashes($addslashes); 
echo "<br/>";

echo $string_length = strlen($str);//tells you length of string ;
echo "<br/>";echo "<br/>";
if(isset($_GET['user_name'])&&!empty($_GET['user_name'])){
     $user_name = $_GET['user_name'];
    
    $user_name_lc = strtolower($user_name);//converts to lower case
    if($user_name_lc=="knrt"){
        echo "WHohoaa dude you are awesome" . $user_name;
    }
}
echo "<br/>";
$example ="This is a string . It is an example";
$find = "is";
$find_length= strlen($find);
$offset = 0;
//;strpos takes 3 arguments 1st : string you want to find position
//2nd what you wan to find 
//3rd offset
while($str_pos = strpos($example , $find , $offset)){
    echo "FOund at " . $str_pos ."<br/>";
    $offset = $str_pos + $find_length;
}
?>

<form action="stringfun.php" method="get"><!--with get method we are able to see in URL what is happening-->
    Username<input type="text" name="user_name"/>
    <br/><input type="submit" value="Submit">
</form>