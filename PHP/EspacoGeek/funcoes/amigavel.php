<?php
function retirar($url) {
    $tirar = preg_replace("/[`^~\"']/", null, iconv("UTF-8", "ASCII//TRANSLIT", $url));
    $resul = strtolower(str_replace(" ", "-", $tirar));
    return $resul;
}