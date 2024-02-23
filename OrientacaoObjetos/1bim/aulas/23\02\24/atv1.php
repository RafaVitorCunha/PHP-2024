<?php

    function Fatorial($n) {
        if ($n == 0) {
            return 1;
        } 
        
        else {
            return $n * Fatorial($n - 1);
        }
    }

    while (true) {
        $numero = intval(readline("Digite um número para calcular o fatorial (ou digite 0 para encerrar): "));
        if ($numero == 0) {
            break;
        }
    
        $fatorial = Fatorial($numero);
        echo "O fatorial de $numero é: $fatorial\n";
    }

?>
