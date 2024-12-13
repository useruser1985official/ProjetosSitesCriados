<?php
    require_once "Pessoa.php";

    class Aluno extends Pessoa {
        private $matr;
        private $curso;

        public function pagarMensal() {
            echo "<p>Pagando Mensalidade do Aluno $this->nome.</p>";
        }

        public function getMatr() {
            return $this->matr;
        }

        public function getCurso() {
            return $this->curso;
        }

        public function setMatr($matr) {
            $this->matr = $matr;
        }

        public function setCurso($curso) {
            $this->curso = $curso;
        }
    }