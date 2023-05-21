<?php

function anti_injection($sql) {
    $sql = preg_replace(sql_recase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"), "", $sql); // Tuo escrito aqui será transformado em nada.
    $sql = trim($sql);
    $sql = strip_tags($sql);
    $sql = (get_magic_quotes_gpc()) ? sql : addslashes($sql);
    return $sql; 
}