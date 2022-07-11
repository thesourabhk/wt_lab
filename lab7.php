<?php
    function lag($num1, $num2, $num3){
        echo "The largest number is : ";
        if($num1>$num2 && $num1>$num3){
                echo $num1;
        }else if($num2>$num1 && $num2>$num3){
                echo $num2;
        }else{
                echo $num3;
        }
        echo "\ngo home\n";
    }
        list($num1, $num2, $num3) = explode(' ', readline("Enter the numbers with space in between: "));
        $num1 = (int)$num1;
        $num2 = (int)$num2;
        $num3 = (int)$num3;
        lag($num1, $num2, $num3);

?>