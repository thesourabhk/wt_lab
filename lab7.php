<?php

    $num1=(int)$_POST['fn'];
    $num2=(int)$_POST['sn'];
    $num3=(int)$_POST['tn'];
    if($num1>$num2 && $num1>$num3){
    echo $num1;
    }
    else{
    if($num2>$num1 && $num2>$num3){
        echo $num2;
    }
    else
        echo $num3;
    }

?>