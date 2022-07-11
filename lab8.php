<?php
    function lag(){
        $greet = array("Hello","Hai","Nice meeting you","Have a nice day");
        $idx = rand()%4;
        return $greet[$idx];
    }
        $name = readline("Enter the name of the person: ");
        $greet = lag();
        echo $greet." ".$name;

?>