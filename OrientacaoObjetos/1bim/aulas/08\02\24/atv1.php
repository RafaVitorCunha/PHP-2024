<?php

    $num = 1;

        echo "WHILE:\n";
        while($num <= 10) {
        echo $num . "\n";
        $num+=1;
        }

        echo "\nDO WHILE:\n";
        $num = 1;

        do{
            echo $num . "\n";
            $num+=1;
            } 
        while($num <= 10);

        echo "\nFOR:\n";

        for($num = 1; $num <= 10; $num+=1)
        echo $num . "\n"; 

        echo"\n";
?>
