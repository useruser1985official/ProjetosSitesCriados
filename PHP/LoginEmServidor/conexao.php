<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "appexemplo";

$conexao = mysqli_connect($hostname, $username, $password, $database);

mysqli_set_charset($conexao, "utf8");

if(!$conexao) {
    echo "Erro na Conexão!";
}