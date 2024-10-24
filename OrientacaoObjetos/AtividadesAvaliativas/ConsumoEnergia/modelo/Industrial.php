<?php
    require_once("IConsumidor.php");
    class Industrial implements IConsumidorEnergia {
        private $consumo;

        public function getValorFatura() {
            if ($this->consumo <= 500) {
                return $this->consumo * 1.80;
            } else {
                return (500 * 1.80) + (($this->consumo - 500) * 2.30);
            }
        }

        public function getConsumo() {
            return $this->consumo;
        }

        public function setConsumo($consumo): self {
            $this->consumo = $consumo;
            return $this;
        }
    }
