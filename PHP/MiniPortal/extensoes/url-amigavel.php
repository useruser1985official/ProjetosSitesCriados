<?php
    function url_amigavel($url) {
        $retirar = preg_replace("/[`^~\"']/", null, iconv("UTF-8", "ASCII//TRANSLIT", $url));
        $resul = strtolower(str_replace(" ", "-", $retirar));

        return $resul;
    }