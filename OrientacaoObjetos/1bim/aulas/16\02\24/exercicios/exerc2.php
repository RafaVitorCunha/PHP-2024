<?php

    $DinArrecadado = 0;
        while (true) {
        $valor = readline("Digite o valor que cada aluno poderá contribuir (ou digite 0 para encerrar): ");

        if ($valor == 0) {
            break;
        }

        $DinArrecadado += $valor;
    }

    echo "O valor total arrecadado para o evento é: R$$DinArrecadado\n";

?>