<?php
    require_once("Cliente.php");

    class ClientePJ extends Cliente {
        private string $razaoSocial;
        private string $cnpj;

        public function getIdentificacao() {
            return $this->razaoSocial;
        }

        public function getNroDoc() {
            return $this->cnpj;
        }

        public function getTipo() {
            return "J";
        }

        //GETERS & SETERS.

        public function getRazaoSocial(): string {
            return $this->razaoSocial;
        }

        public function setRazaoSocial(string $razaoSocial): self {
            $this->razaoSocial = $razaoSocial;
            return $this;
        }

        public function getCnpj(): string {
            return $this->cnpj;
        }

        public function setCnpj(string $cnpj): self {
            $this->cnpj = $cnpj;
            return $this;
        }
    }
?>