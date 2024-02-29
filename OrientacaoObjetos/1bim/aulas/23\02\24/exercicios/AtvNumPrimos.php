<?php
    function ePrimo($numero) {
        if ($numero < 2) {
            return false;
    }

    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
    }

    while (true) {
        echo "Digite um número (digite 1 ou menos para sair): ";
        $entrada = readline();
        $numero = intval($entrada);
    
        if ($numero < 2) {
            echo "Programa encerrado.\n";
            break;
        }
    
        if (ePrimo($numero)) {
            echo "$numero é primo.\n\n";
        } 

        else {
            echo "$numero não é primo.\n\n";
        }
    }
?>