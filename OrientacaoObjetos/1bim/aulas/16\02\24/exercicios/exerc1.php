<?php

    $num = readline("Insira um número: \n");

    if($num >= 0) {
        $num = $num * 2;
    } 
    else if($num < 0) {
        $num = $num * 3;
    }

    echo $num . " ";
?>