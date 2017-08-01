<?php
session_start();
header('Content-type: image/jpeg');

$text = $_SESSION['secure'];//takes text
$font_size = 40;

$image_width = 200;
$image_height = 60;

$image = imagecreate($image_width,$image_height);//creates image
imagecolorallocate($image, 255,255,255);//give background color i.e white in this case.

$text_color = imagecolorallocate($image,120,20,30);//gives color to text
//now here we create some disturbances for bot but readable for humans.


//now we are gonna loop through these co-ordinates to create lines.

for ($x = 0 ; $x<=60; $x++){
    $x1 = rand(1, 100);
    $x2 = rand(1, 100);
    $y1 = rand(1, 100);
    $y2 = rand(1, 100);
    
    imageline($image, $x1, $y1 , $x2, $y2 , $text_color);
}

imagettftext($image, $font_size , 0 , 5 , 50, $text_color, 'ALGER.ttf', $text);//alger.ttf is a text file copied from C:/windows/fonts folder in windows.
imagejpeg($image);//very important should be included at end of file
?>
