<?php 
    class Lampada {
        public static $preco = 9.50;
        private static $acesa = false;

        public static function custo() {
            printf("A lâmpada custa R$ %.2f.<br/>", self::$preco);
        }

        public static function acender() {
            echo "A lâmpada está acesa!<br/>";
            self::$acesa = true;
        }

        public static function apagar() {
            echo "A lâmpada está apagada!<br/>";
            self::$acesa = false;
        }
    }