<?php
    require_once("modelo/Funcionario.php");
    require_once("modelo/Gerente.php");
    require_once("modelo/Desenvolvedor.php");
    require_once("modelo/Estagiario.php");

    $opcao = 0;
    do {
        echo "\n+--------------------------+\n";
        echo "|                          |\n";
        echo "| Escolha o cargo e insira |\n";
        echo "| os dados do funcionário. |\n";
        echo "|                          |\n";
        echo "| 1 => Gerente             |\n";
        echo "| 2 => Desenvolvedor       |\n";
        echo "| 3 => Estagiário          |\n";
        echo "| 0 => Sair do programa    |\n";
        echo "|                          |\n";
        echo "+--------------------------+\n";

        switch($opcao = readline("==> \n")) {
            case 1:       
                $g = new Gerente();
                $g->setNome(readline("\nInsira o nome: "));
                echo $g->getMensagem();
            break;

            case 2:
                $d = new Desenvolvedor();
                $d->setNome(readline("\nInsira o nome: "));
                echo $d->getMensagem();
            break;

            case 3:
                $e = new Estagiario();
                $e->setNome(readline("\nInsira o nome: "));
                echo $e->getMensagem();
            break;
                
            case 0:
                echo "\nPrograma encerrado.\n";
            break;
        }
    } while($opcao != 0);
?>
