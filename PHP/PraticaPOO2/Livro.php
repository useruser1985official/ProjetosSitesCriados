<?php
    require_once "Pessoa.php";
    require_once "Publicacao.php";

    class Livro implements Publicacao {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "Livro " . $this->titulo . " escrito por " . $this->autor . ".<br/>";

            if($this->aberto == true) {
                echo "O livro está aberto!<br/>";
                echo "Páginas: " . $this->totPaginas . ", página atual " . $this->pagAtual . ".<br/>";
                echo "Sendo lido por " . $this->leitor->getNome() . ".<br/>";
                echo "De idade de " . $this->leitor->getIdade() . " anos.<br/>";
                echo "E de sexo " . $this->leitor->getSexo() . ".<br/>";
            }
            else {
                echo "O livro está fechado no momento!<br/>";
            }
        }

        public function abrir() {
            $this->aberto = true;
        }

        public function fechar() {
            $this->aberto = false;
        }

        public function folhear($p) {
            if($this->getAberto() == true) {
                if($p > $this->totPaginas) {
                    $this->setPagAtual($this->geTotPaginas());
                }
                else if($p < 0) {
                    $this->setPagAtual(0);
                }
                else {
                    $this->pagAtual = $p;
                }
            }
        }

        public function avancarPag() {
            if($this->getAberto() == true) {
                if($this->getPagAtual() < $this->geTotPaginas()) {
                    $this->setPagAtual($this->getPagAtual() + 1);
                }
            }
        }

        public function voltarPag() {
            if($this->getAberto() == true) {
                if($this->getPagAtual() > 0) {
                    $this->setPagAtual($this->getPagAtual() - 1);
                }
            }
        }

        public function __construct($titulo, $autor, $totPaginas, $leitor) {
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
            $this->aberto = false;
            $this->pagAtual = 0;
        }

        public function __destruct() {
            unset($this->leitor);

            echo "Objeto Livro Destruído!<br/>";
        }

        public function getTitulo() {
            return $this->titulo;
        }
        
        public function getAutor() {
            return $this->autor;
        }
        
        public function geTotPaginas() {
            return $this->totPaginas;
        }
        
        public function getPagAtual() {
            return $this->pagAtual;
        }
        
        public function getAberto() {
            return $this->aberto;
        }
        
        public function getLeitor() {
            return $this->leitor;
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }
        
        public function setAutor($autor) {
            $this->autor = $autor;
        }
        
        public function seTotPaginas($totPaginas) {
            $this->totPaginas = $totPaginas;
        }
        
        public function setPagAtual($pagAtual) {
            $this->pagAtual = $pagAtual;
        }
        
        public function setAberto($aberto) {
            $this->aberto = $aberto;
        }
        
        public function setLeitor($leitor) {
            $this->leitor = $leitor;
        }
    }