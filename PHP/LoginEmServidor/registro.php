<?php
require_once "conexao.php";
require_once "antiinjection.php";

$nome = isset($_POST["nome"]) ? antiInjection($_POST["nome"]) : "";
$user = isset($_POST["user"]) ? antiInjection($_POST["user"]) : "";
$senha = isset($_POST["senha"]) ? sha1(antiInjection($_POST["senha"])) : "";

$sql = "insert into usuario (nome, user, senha) values ('$nome', '$user', '$senha')";

if($nome != "" && $user != "" && $senha != "") {
    if(mysqli_query($conexao, $sql)) {
        echo "Dados Inseridos com Sucesso!";
    }
    else {
        echo "Erro ao Registrar Dados: " . mysqli_error($conexao);
    }
}
else {
    echo "Nenhum Dado Inserido!";
}