<?php
    require_once("modelo/Pedido.php");
    require_once("modelo/Prato.php");

    $prato1 = new Prato();
    $prato1->setNumero(1);
    $prato1->setNome("Camarão à Milanesa");
    $prato1->setValor(110.00);

    $prato2 = new Prato();
    $prato2->setNumero(2);
    $prato2->setNome("Pizza Margherita");
    $prato2->setValor(80.00);

    $prato3 = new Prato();
    $prato3->setNumero(3);
    $prato3->setNome("Macarrão à Carbonara");
    $prato3->setValor(60.00);

    $prato4 = new Prato();
    $prato4->setNumero(4);
    $prato4->setNome("Bife à Parmegiana");
    $prato4->setValor(75.00);

    $prato5 = new Prato();
    $prato5->setNumero(5);
    $prato5->setNome("Risoto ao Funghi");
    $prato5->setValor(70.00);

    $pratos = array();
    array_push($pratos, $prato1, $prato2, $prato3, $prato4, $prato5);

    $valorTotal = 0;
    $pedidos = array();
    $opcao = 0;
    do {
        echo "x|=======================|x\n";
        echo "||                       ||\n";
        echo "|| 1 - Cadastrar pedido  ||\n";
        echo "|| 2 - Cancelar pedido   ||\n";
        echo "|| 3 - Listar pedidos    ||\n";
        echo "|| 4 - Total de vendas   ||\n";
        echo "|| 0 - Sair do programa  ||\n";
        echo "||                       ||\n";
        echo "x|=======================|x\n";

        switch($opcao) {
            case 1:
                echo "\n||==================================================||\n";
                foreach($pratos as $p) {
                    echo "-> " . $p->getNumero() . " - " . $p->getNome() . " - R$" . $p->getValor() . "\n";
                }

                $pedidoEncontrado = false;
                while($pedidoEncontrado == false) {
                    $numPedido = readline("\n=> Insira o número do prato: \n");
                    foreach($pratos as $prato) {
                        if($prato->getNumero() == $numPedido) {
                            $pedido = new Pedido;
                            $pedido->setNomeCliente("\n=> Insira seu nome: \n");
                            $pedido->setNomeGarcom("\n=> Insira p nome do garçom/atendente: \n");
                            $pedido->setPrato($prato);
                            array_push($pedidos, $pedido);

                            $valorTotal += getPrato()->getValor();
                            echo "\n* Pedido cadastrado.\n";
                            $pedidoEncontrado = true;
                        }
                    }
                    echo "\n* Selecione um prato válido.\n";
                }
            break;

            case 2:
                if(empty($pedidos)) {
                    echo "\n* Nenhum pedido para cancelar.\n";
                } else {
                    foreach($pedidos as $i) {
                        echo "-> Pedido " . ($i + 1) . ": " . $p->getNomeCliente() . "\n";
                    }
                    $indiceExclusao = intval(readline("\n=> Insira o número do pedido a cancelar: ")) - 1;
    
                    if($pedidos[$indiceExclusao]) {
                        $valorTotal = $pedidos[$indiceExclusao]->getPrato()->getValor();
                        array_splice($pedidos, $indiceExclusao, 1);
                        echo "\n* Pedido cancelado.\n";
                    } else {
                        echo "\n* Pedido inválido.\n";
                    }
                }
                break;
            
            break;

            case 3:
                if($pedidos == null) {
                    echo "\n* Nenhum pedido cadastrado.\n";
                } else
                    foreach($pedidos as $p) {
                        echo "\n* O cliente ". $p->getNomeCliente() . ", foi atendido pelo garçom " . $p->getNomeGarcom()
                        . ", pediu um prato de " . $p->getNome($prato) . " no valor de R$" . $p->getValor($prato) . ".\n";
                }

                $indiceExclusao = 1;
                array_splice($pedidos, $indiceExclusao, 1);
            break;

            case 4: 
                
            break;

            case 0:
                echo "\n* Programa encerrado. Obrigado por vir ao restaurante Bona Comida!\n";
            break;

            default:
                echo "\n* Insira um valor válido.\n";
            break;
        }
    } while($opcao != 0);
?>