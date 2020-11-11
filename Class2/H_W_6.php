<?php

// fuction for taking names
    function my_name($first_name,$last_name)
    {
        $result= "$first_name $last_name";
        return $result ;
    }

    $name1 = "Saimum";
    $name2 = "Islam";
    echo  "Welcome ".my_name($name1,$name2);

?>