<?php

    $num = readline("Insira um número. \n");
    echo "Números anteriores: ";

    for($i = 1; $i < $num; $i++) {
        echo ($num - $i);
        
        if($i < $num - 1) {
            echo ", ";        
        }       
    }
?>