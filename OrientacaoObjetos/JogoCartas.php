$pontuacao = 0;

do {
    $tentativas = 9;
    $acerto = false;

    echo "\n|==========================|\n";
    echo "| 1 => Escolher uma carta  |\n";
    echo "| 2 => Ver pontuação       |\n";
    echo "| 0 => Encerrar programa   |\n";
    echo "|--------------------------|\n";

    foreach($cartas as $carta) {
        echo "| => " . $carta->getNome() . " (Número: " . $carta->getNumero() . ")   |\n";
    }
    echo "|==========================|\n";

    $opcao1 = (int)readline("\nSelecione uma opção: \n");
    switch($opcao1) {
        case 1:
            do {
                echo "\n|==================================|\n";
                echo "| Digite qualquer número de 1 a 10 |\n";
                echo "| 11 => Pedir dica                 |\n";
                echo "| 0 => Desistir                    |\n";
                echo "|==================================|\n";

                $opcao2 = (int)readline("Opção: ");

                if ($opcao2 === 0) {
                    echo "\nVocê desistiu, a carta correta era a " . $cartaSorteada->getNome() . "\n";
                    $acerto = true;
                    break;
                }

                if ($opcao2 == 11) { 
                    echo "\n=> $dica\n";
                    continue;
                }

                if ($opcao2 < 1 || $opcao2 > 10) {
                    echo "\nOpção inválida, tente novamente...\n";
                    continue;
                }

                if ($opcao2 === $cartaSorteada->getNumero()) {
                    echo "\nParabéns! Você acertou a carta: " . $cartaSorteada->getNome() . "\n";
                    $pontuacao++;
                    $acerto = true;
                } else {
                    echo "\nCarta incorreta!\n";
                    $tentativas--;
                    if ($tentativas === 0) {
                        echo "Todas as suas tentativas foram gastas, a carta sorteada era a " . $cartaSorteada->getNome() . "\n";
                    }
                }
            } while (!$acerto && $tentativas > 0);
            break;

        case 2:
            echo "\nPontuação total => " . $pontuacao . "\n";
            break;

        case 0:
            echo "\nPrograma encerrado...\n";
            break;

        default:
            echo "\nOpção inválida, tente novamente...\n";
            break;
    }

} while ($opcao1 != 0);
