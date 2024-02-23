<?php

    echo "Digite três números inteiros:\n";

    //intval == "Valor inteiro";
    $num1 = intval(readline("Número 1: "));
    $num2 = intval(readline("Número 2: "));
    $num3 = intval(readline("Número 3: "));

    $menor = $num1;

    if ($num2 < $menor) {
        $menor = $num2;
    }

    if ($num3 < $menor) {
        $menor = $num3;
    }

    echo "\nO menor número é: $menor\n";

?>
