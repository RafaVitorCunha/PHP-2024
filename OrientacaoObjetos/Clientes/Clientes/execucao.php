<?php

require_once("dao/ClienteDAO.php");
require_once("modelo/ClientePF.php");
require_once("modelo/ClientePJ.php");

//Teste da conexão
/*require_once("util/Conexao.php");
$con = Conexao::getCon();
print_r($con); */

do {
    echo "\n+===========================+\n";
    echo "|   CADASTRO DE CLIENTES    |\n";
    echo "| 1 => Cadastrar Cliente PF |\n";
    echo "| 2 => Cadastrar Cliente PJ |\n";
    echo "| 3 => Listar Clientes      |\n";
    echo "| 4 => Buscar Cliente       |\n";
    echo "| 5 => Excluir Cliente      |\n";
    echo "| 0 => Sair                 |\n";
    echo "+===========================+\n";

    echo "\n";
    $opcao = readline("=> Informe a opção: \n");
    switch ($opcao) {
        case 1:
            echo "\n";
            $cliente = new ClientePF();
            $cliente->setNome(readline("Informe o nome: "));
            $cliente->setNomeSocial(readline("Informe o nome social: "));
            $cliente->setCpf(readline("Informe o CPF: "));
            $cliente->setEmail(readline("Informe o e-mail: "));

            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);

            echo "\nCliente PF cadastrado com sucesso!\n\n";
            break;

        case 2:
            echo "\n";
            $cliente = new ClientePJ();
            $cliente->setRazaoSocial(readline("\nInforme a Razão Social: \n"));
            $cliente->setNomeSocial(readline("Insira o Nome Social: \n"));
            $cliente->setEmail(readline("Insira seu e-mail: \n"));
            $cliente->setCnpj(readline("Informe o CNPJ: \n"));

            $clienteDAO = new ClienteDAO();
            $clienteDAO->inserirCliente($cliente);
            echo "\nCliente PJ cadastrado com sucesso!\n\n";
            break;

        case 3:
            echo "\n";
            $clienteDAO = new ClienteDAO();
            $clientes = $clienteDAO->listarClientes();

            foreach($clientes as $c) {
                printf("%d- %s | %s | %s | %s | %s\n",
                $c->getId(), $c->getTipo(), $c->getNomeSocial(),
                $c->getIdentificacao(), $c->getNroDoc(), $c->getEmail());
            }

            break;

        case 4:
            break;

        case 5:
            break;

        case 0:
            echo "Programa encerrado!\n";
            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);