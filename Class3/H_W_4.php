<?php

// Recursion Function
    function Recursion($num)
    {
        for($i=1 ; $i<=5 ; $i++)
        {
            $num= $num+$i;
        }
        return $num;
    }

    $number=0;
    echo "1 + 2 + 3 + 4 + 5 = ".Recursion($number);
    
?>