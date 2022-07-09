<?php
    #calculate 60 days in the future: seconds * minutes * hours * days + current time
    date_default_timezone_set('Asia/calcutta');
    $itm = 60*60*24*60+time();
    setcookie('last_visit',date("d:i a - d/m/y"),$itm);
    if(isset($_COOKIE['last_visit'])){
        echo "this site was last visited: ".$_COOKIE['last_visit'];
    }
    else{
        echo "Never visited";
    }
 ?>