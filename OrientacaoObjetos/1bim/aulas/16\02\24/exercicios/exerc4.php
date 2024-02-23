<?php

    $pares = 0;
    $impares = 0;

    echo "Digite 10 números:\n";

    for ($i = 1; $i <= 10; $i++) {
        $numero = intval(readline("Número $i: "));
    
        if ($numero % 2 == 0) {
            $pares++;
        } 
        else {
        $impares++;
        }
    }

    echo "Números pares: $pares\n";
    echo "Números ímpares: $impares\n";

?>