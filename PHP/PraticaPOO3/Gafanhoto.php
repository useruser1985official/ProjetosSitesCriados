<?php
    require_once "Pessoa.php";

    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        public function assistirMaisUm() {
            $this->totAssistido++;
        }

        public function __construct($nome, $idade, $sexo, $login) {
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }

        public function __destruct() {
            echo "Objeto Gafanhoto Destruído!<br/>";
        }

        public function getLogin() {
            return $this->login;
        }

        public function getTotAssistido() {
            return $this->totAssistido;
        }

        public function setLogin($login) {
            $this->login = $login;
        }

        public function setTotAssistido($totAssistido) {
            $this->totAssistido = $totAssistido;
        }
    }