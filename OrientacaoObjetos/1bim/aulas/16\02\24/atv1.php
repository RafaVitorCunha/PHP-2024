<?php

    for($i = 1; $i <= 10; $i+=1) {
        $num = readline("Imprima um número. \n");

        if($num < 0) {
            echo "\nO número: " . $num . " é negativo.\n\n";
        }

        else if($num >= 0) {
            echo "\nO número: " . $num . " é positivo.\n\n";
        }

    }
?>