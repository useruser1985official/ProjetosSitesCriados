<?php
    require_once "Aluno.php";

    class Bolsista extends Aluno {
        private $bolsa;

        public function renovarBolsa() {
            echo "<p>Bolsa Renovada!</p>";
        }

        public function pagarMensal() {
            echo "<p>$this->nome é bolsista, então paga com desconto!</p>";
        }

        public function getBolsa() {
            return $this->bolsa;
        }

        public function setBolsa($bolsa) {
            $this->bolsa = $bolsa;
        }
    }