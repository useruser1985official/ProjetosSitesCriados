<?php
include_once "dados.php";

$nome = htmlspecialchars(isset($_POST["tNome"])) ? trim(htmlspecialchars(strip_tags($_POST["tNome"]), ENT_QUOTES)) : "";
$mail = htmlspecialchars(isset($_POST["tMail"])) ? trim(htmlspecialchars(strip_tags($_POST["tMail"]), ENT_QUOTES)) : "";
$idade = htmlspecialchars(isset($_POST["tIdad"])) ? (int)trim(htmlspecialchars(strip_tags($_POST["tIdad"]), ENT_QUOTES)) : 0;
$sexo = htmlspecialchars(isset($_POST["tSex"])) ? trim(htmlspecialchars(strip_tags($_POST["tSex"]), ENT_QUOTES)) : "O";
$mens = htmlspecialchars(isset($_POST["tMsg"])) ? trim(htmlspecialchars(strip_tags($_POST["tMsg"]), ENT_QUOTES)) : "";
$data = date('Y-m-d');

if($mail != "") {
    $sql = "insert into contato (id, nome, email, idade, sexo, mensagem, data) values (default, '$nome', '$mail', '$idade', '$sexo', '$mens', '$data')";
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