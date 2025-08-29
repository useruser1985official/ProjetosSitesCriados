<?php
include_once "anti-injection.php";

echo retiraPalavroes("Filho da Puta! Vão tomar no meio dos seus cus, seus viados do caralho, montes de merda! Sua mãe é uma biscate que não lava a buceta!");

function retiraPalavroes($texto) {
    $lista = array("porra", "foda", "puta", "caralho", "cú", "cu", "merda", "bosta", "buceta", "bicha", "viado", "cuzão", "biscate");
    
    $peneira = explode(" ", limpaString($texto));
    
    $retira = array();
    
    for($cont = 0; $cont < count($peneira); $cont++) {
        $cens = str_repeat("*", strlen($peneira[$cont]));
        
        $retira[$cont] = str_ireplace($lista, $cens, $peneira[$cont]);
    }
    
    $limpa = implode(" ", $retira);
    
    return $limpa;
}