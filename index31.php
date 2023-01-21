<?php

// Write a PHP program to find the largest three numbers in an array.

$num = array(1,2,3,5,4,45,34,43,56,34,35,34,677,3435,34366,343,888,6797,4356);

$max = $sMax = $tMax = 0;

for($i=0;$i<sizeof($num);$i++){
    if($num[$i]>$max){
        $tMax = $sMax;
        $sMax = $max;
        $max = $num[$i];
    }else if($num[$i]>$sMax && $num[$i] != $max){
        $tMax = $sMax;
        $sMax = $num[$i];
    }else if($num[$i]>$tMax && $num[$i] != $sMax){
        $tMax = $num[$i];
    }
}

echo "First Largest Number: " . $max . "<br>" . "Second Largest Number: " . $sMax . "<br>" . "Third Largest Number: " . $tMax; 
?>
