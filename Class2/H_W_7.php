<?PHP

// function for addtion or subtraction
    function process($num1, $num2)
    {
        if($num1>$num2)
        {
            $result= $num1-$num2;
            return $result;
        }else{
            $result= $num1+$num2;
            return $result;
        }
    } 

// Taking two integers
    $num1 = 15;
    $num2 = 10;

    echo "Answer: ".process($num1, $num2);
?>