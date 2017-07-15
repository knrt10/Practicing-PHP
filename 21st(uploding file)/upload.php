<?php
$name = $_FILES['file']['name'];//file name
$size = $_FILES['file']['size'];//file size in bytes
$type = $_FILES['file']['type'];//file type

$extension = substr($name,strpos($name,".")+1);//sometimes format comes in capital letters it gets format .
$extension_lc = strtolower($extension);//converts to lower case

$tmp_name = $_FILES['file']['tmp_name'];//temporary name
$max_size = 3145728;//3 mb // megabyte
//$error = $_FILES['file']['error']; gives error 
if(isset($name)){
    if(!empty($name)){
        if(($extension_lc=='jpg'||$extension_lc=='jpeg')&&$type='image/jpeg'&&$size<$max_size){
            
        
        $location = "uploads/";//location where we want to add file.
        
        if(move_uploaded_file($tmp_name,$location.$name)){//default function move_uploaded_file
            echo "Uploaded"; //takes 2 parameters
            //1st temp name
        //2nd location where we want to put 
        }  else{
            echo "There was an error";
        }  
    }else{
            echo "You can upload only jpg/jpeg format and must be less than 3MB";
        }
    }
    else{
        echo "please Upload first";
    }
}
//we check extension so that anybody cannot upload any illegal file.
?>

<form action="upload.php" method="post" enctype="multipart/form-data"><!--enctype is for encryption-->
    <input type="file" name="file"><br/><br/>
    <input type="submit" name="submit" value="Submit File"/> 
</form>
