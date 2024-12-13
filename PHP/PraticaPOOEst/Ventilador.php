<?php
    class Ventilador {
        private static $ligado = false;
        private static $velocidade = 0;

        public static function ligar($vel) {
            self::$ligado = true;

            if($vel < 1) {
                $vel = 1;
            }
            else if($vel > 3) {
                $vel = 3;
            }

            self::$velocidade = $vel;

            printf("O ventilador está ligado, na velocidade de %d.<br/>", self::$velocidade);
        }

        public static function desligar() {
            self::$velocidade = 0;
            self::$ligado = false;

            echo "O ventilador está desligado!<br/>";
        }

        public static function getLigado() {
            return self::$ligado;
        }

        public static function getVelocidade() {
            return self::$velocidade;
        }

        public static function setLigado($ligado) {
            self::$ligado = $ligado;
        }

        public static function setVelocidade($velocidade) {
            self::$velocidade = $velocidade;
        }
    }