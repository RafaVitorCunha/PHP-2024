<?php

    function Cirncunferencia($raio) {
        return 2 * 3.14 * $raio;
    }

    echo "Digite o raio do círculo: ";
    $raio = floatval(readline("\n"));
    $circunferencia = Cirncunferencia($raio);

    echo "A circunferência do círculo é: $circunferencia" . "cm\n";

?>
