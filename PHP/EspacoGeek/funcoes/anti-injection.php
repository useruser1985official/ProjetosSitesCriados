<?php
function limpaString($dados) {
    $retira = strip_tags($dados);
    $quebra = htmlspecialchars($retira, ENT_QUOTES);
    $barra = get_magic_quotes_gpc() ? $quebra : addslashes($quebra);
    $espaco = trim($barra);
    
    return $espaco;
    /*
    $lista = array("select", "update", "drop", "insert", "delete", "alter", "from", "where", "table", "tables", "database", "if", "exists", ";", "--", "#", "%", "&", "'", "\"", "(", ")", "<", ">", "[", "]", ":", "?", "`", "|", "*");
    
    $filtrado = str_ireplace($lista, "", $espaco);
    
    return $filtrado;
    */
}

function limpaNumero($valor) {
    $filtro = htmlspecialchars($valor);
    
    $num = (int)$filtro;
    
    return $num;
}