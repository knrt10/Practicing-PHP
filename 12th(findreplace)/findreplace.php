<?php
$text = "";//fix if you remove it it will show error in html code;
$offset= 0;
    if(isset($_POST['text'])&&isset($_POST['search'])&&isset($_POST['replace'])){//checking that we are getting value from input boxes and textarea
        $text = $_POST['text'];//setting value to variable
        $search = $_POST['search'];
        $replace = $_POST['replace'];
        $search_length = strlen($search);
        if(!empty($_POST['text'])&&!empty($_POST['search'])&&!empty($_POST['replace'])){//checking that inout boxes and text area should be non empty.
            while($strpos = strpos($text,$search,$offset)){//getting position of string we want to replace
                $offset=$strpos;
                $text = substr_replace($text,$replace,$offset,$search_length);
            }//this while loop will work till condition inside it is true
        }
    }
?>
        <!--Setting form-->
<form action="findreplace.php" method="post">
    <textarea name="text" rows="10" cols="60"><?php echo $text ; ?></textarea><br/><br/>
    Search For:- <br/><input type="text" name="search"/><br/><br/>
    Replace :- <br/><input type="text" name="replace"/><br/><br/>
    <input type="submit" value="Find & Replace"/>
</form>