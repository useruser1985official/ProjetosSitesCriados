<?php
function ola() {
    echo "Olá, Mundo!";
}

function mostraValor($v) {
    echo "Acabei de receber o valor $v.";
}

function antiInjection($sql) {
    $lista = array("select", "update", "drop", "insert", "delete", "alter", "from", "where", "table", "tables", "database", ";", "--", "#", "%", "&", "'", "\"", "(", ")", "<", ">", "[", "]", ":", "?", "`", "|", "*");
    $sql = strip_tags($sql);
    $sql = str_ireplace($lista, "", $sql);
    $sql = htmlspecialchars($sql, ENT_QUOTES);
    $sql = trim($sql);

    return $sql;
}