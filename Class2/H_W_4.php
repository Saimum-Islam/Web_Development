<?php

// Taking 3 names
    $name1 = "Messi"; 
    $name2 = "Neymar"; 
    $name3 = "Ronaldo";

// Comparing which name is the shortest   
    if(strlen($name1)<strlen($name2) && strlen($name1)<strlen($name3))
        if(strlen($name1)%2==0)
            echo $name1." you are general <br>" ;
        else
            echo $name1." you are different <br>" ;

    elseif(strlen($name2)<strlen($name1) && strlen($name2)<strlen($name3))
        if(strlen($name2)%2==0)
            echo $name2." you are general <br>" ;
        else
            echo $name2." you are different <br>" ;

    else
        if(strlen($name3)%2==0)
            echo $name3." you are general <br>" ;
        else
            echo $name3." you are different <br>" ;  
    
?>