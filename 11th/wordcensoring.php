<?php
$user_input = ""; 
    $find = array("fuck","asshole","bitch","dick","shithead","butthole","cocksuker","loda","chutiya" ,"gandu");
$replace = array("f**k","a**h**e","b**ch","d**k","s**thead","b**th**e","c**ks****r","l**a","ch****a","g***u");
if(isset($_POST['user_input'])&&!empty($_POST['user_input'])){
    $user_input = $_POST['user_input'];
    echo $str_replace = str_ireplace($find,$replace,$user_input);//str_ireplace is case insensitive function. 
}
?>
<hr/>
<form action="wordcensoring.php" method="post">
    <textarea name="user_input" cols="30" rows="6"><?php echo $user_input; ?></textarea><br/>
    <input type="submit" value="Submit"/>
</form>