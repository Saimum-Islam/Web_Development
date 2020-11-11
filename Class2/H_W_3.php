<?php

// Taking full name with comma
    $name = "Saimum,Islam,";

// Breaking string into array
    $result = explode(",",$name);

// Attaching array into string
    $final= implode(" ",$result);
 
    echo $final;

?>