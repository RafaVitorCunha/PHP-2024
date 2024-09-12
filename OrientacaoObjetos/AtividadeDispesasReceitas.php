<?php
    class Receita {

        //Atributos - Receita.
        private string $descricao;
        private float $valor;

        //Geters e Seters - Receita.
        public function getDescricao(): string {
            return $this->descricao;
        }

        public function setDescricao(string $descricao): self {
            $this->descricao = $descricao;
            return $this;
        }

        public function getValor(): float {
                return $this->valor;
        }

        public function setValor(float $valor): self {
            $this->valor = $valor;
            return $this;
        }
    }

    class Despesa {

        //Atributos - Despesa.
        private string $descricao;
        private float $valor;

        //Geters e Seters - Despesa.
        
        public function getDescricao(): string {
            return $this->descricao;
        }

        public function setDescricao(string $descricao): self {
            $this->descricao = $descricao;
            return $this;
        }

        public function getValor(): float {
            return $this->valor;
        }

        public function setValor(float $valor): self {
            $this->valor = $valor;
            return $this;
        }
    }

    $receitas = array();
    $despesas = array();
    $opcao = 1;

    do {
        echo "\n|========================|\n";
        echo "| 0 -> Sair do programa  |\n";
        echo "| 1 -> Adicionar receita |\n";
        echo "| 2 -> Adicionar despesa |\n";
        echo "| 3 -> Listar receitas   |\n";
        echo "| 4 -> Listar despesas   |\n";
        echo "| 5 -> Sumarizar         |\n";
        echo "|========================|\n";


        $opcao = (int)readline("\nSelecione uma opcao: \n");
        switch ($opcao) {

            case 1:
                $receita = new Receita();
                $receita->setDescricao(readline("\nInsira a descrição: \n"));
                $receita->setValor((float)readline("Insira o valor: \n"));
                array_push($receitas, $receita);
                break;

            case 2:
                $despesa = new Despesa();
                $despesa->setDescricao(readline("\nInsira a descrição: \n"));
                $despesa->setValor((float)readline("Insira o valor: \n"));
                array_push($despesas, $despesa);
                break;

            case 3:
                 //empty -> Se o array $receitas estiver vazio, mandar mensagem que o array não possui nenhuma receita cadastrada.
                if (empty($receitas)) {
                    echo "\nNenhuma receita cadastrada.\n";
                } else {
                    echo "\nReceitas:\n";
                    foreach ($receitas as $receita) {
                        echo "\nDescrição: " . $receita->getDescricao() . "\n";
                        echo "Valor: R$" . $receita->getValor() . "\n";
                    }
                }
                break;

            case 4:
                //empty -> Se o array $despesas estiver vazio, mandar mensagem que o array não possui nenhuma despesa cadastrada.
                if (empty($despesas)) {
                    echo "\nNenhuma despesa cadastrada.\n";
                } else {
                    echo "\nDespesas:\n";
                    foreach ($despesas as $despesa) {
                        echo "\nDescrição: " . $despesa->getDescricao() . "\n";
                        echo "Valor: R$" . $despesa->getValor() . "\n";
                    }
                }
                break;

            case 5:
                $totalReceitas = 0;
                foreach($receitas as $receita) {
                    $totalReceitas += $receita->getValor();
                }

                $totalDespesas = 0;
                foreach($despesas as $despesa) {
                    $totalDespesas += $despesa->getValor();
                }

                $saldo = $totalReceitas - $totalDespesas;

                echo "\nSaldo: R$ " . $saldo . "\n";
                echo "Total de receitas: R$ " . $totalReceitas . "\n";
                echo "Total de despesas: R$ " . $totalDespesas . "\n";
                break;

            case 0:
                echo "\nPrograma encerrado...\n";
                break;

            default:
                echo "\nOpção inválida. Tente novamente.\n";
                break;
        }

    } while ($opcao != 0);
?>
