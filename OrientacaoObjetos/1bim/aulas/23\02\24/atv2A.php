<?php

    function AreaCirculo($raio) {
        return 3.14 * ($raio * $raio);
    }

    echo "Digite o raio do círculo: ";
    $raio = floatval(readline("\n"));
    $area = AreaCirculo($raio);
    
    echo "A área do círculo com um raio de $raio". "cm é: " . "$area" . "cm\n";

?>