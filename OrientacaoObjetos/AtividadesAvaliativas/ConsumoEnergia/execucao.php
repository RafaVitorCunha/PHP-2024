<?php
    require_once("modelo/Comercial.php");
    require_once("modelo/Residencial.php");
    require_once("modelo/Industrial.php");
    
    $tipoConsumidor = readline("\nDigite o tipo de consumidor (residencial, comercial, industrial): \n");
    $consumo = floatval(readline("\nDigite o consumo em kWh: \n"));

    $consumidor = null;
    switch($tipoConsumidor) {
        case 'residencial':
            $consumidor = new Residencial();
            break;
        case 'comercial':
            $consumidor = new Comercial();
            break;
        case 'industrial':
            $consumidor = new Industrial();
            break;
        default:
            echo "\nTipo de consumidor inválido.\n";
            return;
    }

    $consumidor->setConsumo($consumo);
    $valorFatura = $consumidor->getValorFatura();
    echo "\nO valor da fatura é: R$" . $valorFatura . "\n";
