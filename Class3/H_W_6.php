<?php

//10 friends name in array
    $arr = array("Morgan", "Jorja", "Kamal", "Vinay", "Sameera", 
                "Shahid", "Kamran", "Belle ", "Randy", "Nicky" );

    for($i=0; $i<10; $i++)
    {
        if(strlen($arr[$i])==5)
        {
            echo $arr[$i]." you are invited to the party !!!<br>"; 
        }
    }
 
?>