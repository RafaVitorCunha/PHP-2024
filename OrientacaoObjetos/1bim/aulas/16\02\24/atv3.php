<?php

    for($i=1; $i <= 5; $i++) {
        $nome = readline("Informe o nome: \n");
        $peso = readline("Informe o peso (em quilos): \n");
        $altura = readline("Informe a altura (em metros): \n");

        $imc = $peso / ($altura * $altura);
        printf("%s possui %dkg, %.2fm de altura e um IMC de %.2f\n",
        $nome, $peso, $altura, $imc);
    }
?>