<?php
    if(isset($_POST['roll'])){
        $rand = rand(1,6);
        echo "You got " . $rand ."<br/>";    
    }
?>
<br/>
<form action="randomnumber.php" method="post">
    <input type="submit" value="Roll a Die!!" name="roll"/>
</form>