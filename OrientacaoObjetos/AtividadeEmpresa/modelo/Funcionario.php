<?php
    abstract class Funcionario {
        protected string $nome;

        abstract function getSalario();

        abstract function getCargo();

        public function getMensagem() {
            return "\nO funcionário " . $this->getNome() . ", cargo " .
            $this->getCargo() . ", possui salário de R$ " . $this->getSalario() . "\n";
        }

        public function getNome(): string {
            return $this->nome;
        }

        public function setNome(string $nome): self {
            $this->nome = $nome;
            return $this;
        }
    }
?>
