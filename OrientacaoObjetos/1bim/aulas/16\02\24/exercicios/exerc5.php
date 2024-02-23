<?php

    echo "Digite dois números inteiros:\n";
    $num1 = intval(readline("Primeiro número: \n"));
    $num2 = intval(readline("Segundo número: \n"));

    echo "\nNúmeros divisíveis por 5 de $num1 a $num2:\n";

    for ($i = $num1; $i <= $num2; $i++) {
        if ($i % 5 == 0) {
            echo "$i\n";
        }
    }

?>