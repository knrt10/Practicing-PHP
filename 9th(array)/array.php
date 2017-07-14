<?php
    $saman= array("hat","khad","hafd","bfkf");
    $food = array("pizza"=>100,"vege"=>1000,"momos"=>50,"chicken"=>400  );
print_r($food);//will print whole array 
// echo $saman ; will print output :--- Array 
//now if i want to access any item we don't do like index below we do like in 9th line
//echo $food[0]; this will now show any output
echo "<br/>";
echo $food["pizza"];
echo "<br/>";
//multi dimmensional array.
$multiarray= array("Real Madrid"=>
                   array("cr7","bale","ramos"),
                   "Barcelona"=>
                   array("messi","suarez","neymar"));//it is just like associative arrays like we assign values to it.
//echo $multiarray["Real Madrid"][0]." ".  $multiarray["Barcelona"][0]; it will give single output.

//usinf foreach();

foreach($multiarray as $element=> $item){//here element is real madrid and barcelona 
    echo '<strong>'.$element .'</strong><br/>';//item is inside elements 
    foreach($item as $item_inside){
        echo $item_inside . "<br/>";
    }
}
?>