<?php

// finding the odd numbers in an array
    $arr = array('1','2','3','4','5','6','7','8','9','10');

    for($i=0; $i<10; $i++)
    {
        if($arr[$i]%2 !=0)
        {
            echo $arr[$i]." number is odd<br>";
        }
    }

?>