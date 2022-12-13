<?php
    $array=[];
    while (count($array) < 15){
        $random = rand();
        if(!in_array($random, $array)){
            $array[] = $random;
        }
    }
    for($i = 0; $i < count($array); $i++){
        echo $array[$i];
        echo "<br>";
    }
?>