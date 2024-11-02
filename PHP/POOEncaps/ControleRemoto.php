<?php
    require_once "Controlador.php";

    class ControleRemoto implements Controlador {
        private $volume;
        private $ligado;
        private $tocando;
        
        public function ligar() {
            $this->setLigado(true);
        }

        public function desligar() {
            $this->setLigado(false);
        }

        public function abrirMenu() {
            echo "Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO") . "<br/>";
            echo "Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO") . "<br/>";
            echo "Volume: " . $this->getVolume();

            for($i = 0; $i < $this->getVolume(); $i += 2) {
                echo "|";
            }

            echo "<br/>";
        }

        public function fecharMenu() {
            echo "Fechando menu...<br/>";
        }

        public function maisVolume() {
            if($this->getLigado()) {
                if($this->getVolume() < 100) {
                    $this->setVolume($this->getVolume() + 2);
                }
            }
            else {
                echo "ERRO! Está desligado, não posso aumentar o volume!<br/>";
            }
        }

        public function menosVolume() {
            if($this->getLigado()) {
                if($this->getVolume() > 0) {
                    $this->setVolume($this->getVolume() - 2);
                }
            }
            else {
                echo "ERRO! Está desligado, não posso diminuir o volume!<br/>";
            }
        }

        public function ligarMudo() {
            if($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }

        public function desligarMudo() {
            if($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }

        public function play() {
            if($this->getLigado() && !$this->getTocando()) {
                $this->setTocando(true);
            }
        }

        public function pause() {
            if($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }
        
        public function __construct() {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume() {
            return $this->volume;
        }

        private function getLigado() {
            return $this->ligado;
        }

        private function getTocando() {
            return $this->tocando;
        }

        private function setVolume($volume) {
            $this->volume = $volume;
        }

        private function setLigado($ligado) {
            $this->ligado = $ligado;
        }

        private function setTocando($tocando) {
            $this->tocando = $tocando;
        }
    }