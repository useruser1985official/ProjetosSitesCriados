<?php
include_once "dados.php";

$nome = isset($_POST["tNome"]) ? trim(htmlspecialchars(strip_tags($_POST["tNome"]), ENT_QUOTES)) : "";
$mail = isset($_POST["tMail"]) ? trim(htmlspecialchars(strip_tags($_POST["tMail"]), ENT_QUOTES)) : "";
$sexo = isset($_POST["tSex"]) ? trim(htmlspecialchars(strip_tags($_POST["tSex"]), ENT_QUOTES)) : "";
$mensagem = isset($_POST["tMsg"]) ? trim(htmlspecialchars(strip_tags($_POST["tMsg"]), ENT_QUOTES)) : "";
$data = date("Y-m-d");

if($mail != "") {
    $sql = "insert into contato (id, nome, email, sexo, mensagem, data) values (default, '$nome', '$mail', '$sexo', '$mensagem', '$data')";
    $salvar = mysqli_query($conexao, $sql);
}
else {
    header("location: contato.php?env=error");
}

$linhas = mysqli_affected_rows($conexao);

if($linhas == 0) {
    header("location: contato.php?env=error");
}
else {
    header("location: contato.php?env=sucess");
}