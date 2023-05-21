<?php
include_once "dados.php";

$nome = htmlspecialchars($_POST["tNome"]);
$mail = htmlspecialchars($_POST["tMail"]);
$sexo = htmlspecialchars($_POST["tSex"]);
$msg = htmlspecialchars($_POST["tMsg"]);
$data = date("Y-m-d");

if($mail != "") {
    $sql = "insert into contato (id, nome, email, sexo, mensagem, data) values (default, '$nome', '$mail', '$sexo', '$msg', '$data')";
    $salvar = mysqli_query($conexao, $sql);
}
else {
    header("location: contato.php?env=error");
}

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

if($linhas == 0) {
    header("location: contato.php?env=error");
}
else {
    header("location: contato.php?env=sucess");
}