<?php
    require_once("Funcionario.php");

    class Gerente extends Funcionario {
        public function getSalario() {
            return 1500 * 4.5;
        }

        public function getCargo() {
            return "Gerente";
        }
    }
?>
