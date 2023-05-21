<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "veiculos_site";

$conexao = mysqli_connect($hostname, $username, $password, $database) or die ('Falha na Conexão com o Banco de Dados!');

mysqli_set_charset($conexao, "utf8");