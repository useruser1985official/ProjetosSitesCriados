<?php
    class Produto {
        private $id;
        private $descricao;
        private $qtd;
        private $valor;

        public function getId() {
            return $this->id;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getQtd() {
            return $this->qtd;
        }

        public function getValor() {
            return $this->valor;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function setQtd($qtd) {
            $this->qtd = $qtd;
        }

        public function setValor($valor) {
            $this->valor = $valor;
        }
    }