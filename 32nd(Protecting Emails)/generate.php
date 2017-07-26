<?php
header('Content-type: image/jpeg');

mysql_connect('$ip','$user','$password');
mysql_select_db('$database table');//name of database . i took anything 



    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysql_query("SELECT `email` FROM `$table` WHERE `id`= '".mysql_real_escape_string($id)."'");
            if(mysql_num_rows($query)>=1){
                $email = mysql_result($query , 0 ,'email');

            }else{
                $email = "ID not found";
            }


        
    }else{
        $email = 'No email specified';
    }

$email_length = strlen($email);

$font_size = 4;

$image_height = ImageFontHeight($font_size);
$image_width = ImageFontWidth($font_size) * $email_length;   

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image , 200,235,155);

$font_color = imagecolorallocate($image,30,3,0);

imagestring($image, $font_size , 0 , 0 , $email ,$font_color );

imagejpeg($image);
?>