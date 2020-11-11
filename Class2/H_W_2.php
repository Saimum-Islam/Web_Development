<?php

// Taking full name with comma
    $name = "Saimum,Islam,";

// Breaking string into array
    $result = explode(",",$name);

// Attaching array into string
    $final= implode(" ",$result);

//Taking another array
    $arr = ["Coders","Trust","Success","Story"];
    $str = implode(" ",$arr);
    
    echo $final." ".$str;

?>