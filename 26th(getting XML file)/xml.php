<?php
$xml = simplexml_load_file('example.xml');

foreach($xml->player as $player){
    echo $player->name." is ".$player->age."<br/>";
    echo "<hr/>";
    foreach($player->show as $show){
        echo $show->showcase. " on ".$show->showdate."<br/>";
    }
}
?>