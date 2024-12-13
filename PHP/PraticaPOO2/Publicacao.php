<?php
    interface Publicacao {
        public function detalhes();
        public function abrir();
        public function fechar();
        public function folhear($p);
        public function avancarPag();
        public function voltarPag();
    }