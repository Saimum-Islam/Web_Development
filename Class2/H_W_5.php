<?php

// Taking 3 numbers
$number1 = 7; 
$number2 = 14; 
$number3 = 21;

// Comparing which number is the max   
    if(($number1 > $number2) && ($number1 > $number3))
        echo $number1." is max" ;

    elseif(($number2 > $number1) && ($number2 > $number3))
        echo $number2." is max" ;

    else
        echo $number3." is max" ;  

?>