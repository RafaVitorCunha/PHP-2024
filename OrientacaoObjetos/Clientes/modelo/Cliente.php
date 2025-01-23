<?php
    abstract class Cliente {
        protected int $id;
        protected string $nomeSocial;
        protected string $email;

        public abstract function getIdentificacao();
        public abstract function getNroDoc();
        public abstract function getTipo();
        
        public function getId(): int {
            return $this->id;
        }

        public function setId(int $id): self {
            $this->id = $id;
            return $this;
        }

        //GETERS & SETERS.

        public function getNomeSocial(): string {
            return $this->nomeSocial;
        }

        public function setNomeSocial(string $nomeSocial): self {
            $this->nomeSocial = $nomeSocial;
            return $this;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function setEmail(string $email): self {
            $this->email = $email;
            return $this;
        }
    }
?>