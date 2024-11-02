<?php
    class Caneta {
        private $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        public function tampar() {
            $this->tampada = true;
        }

        public function destampar() {
            $this->tampada = false;
        }

        public function __construct($m, $c, $p) {
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function __destruct() {
            echo "Objeto Destruído!";
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function getPonta() {
            return $this->ponta;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function setPonta($ponta) {
            $this->ponta = $ponta;
        }
    }