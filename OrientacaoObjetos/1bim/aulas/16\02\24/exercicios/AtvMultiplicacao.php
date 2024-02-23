<?php

    $num1 = readline("Insira um número: \n");
    $num2 = readline("Insira outro número: \n");
    $resultado = 0;

    for ($i = 1; $i <= $num2; $i++) {
        $resultado += $num1;
    }

    echo $resultado . " ";

?>
