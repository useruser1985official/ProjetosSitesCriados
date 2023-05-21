<?php
include_once "../funcoes/amigavel.php";
include_once "../funcoes/logado.php";
include_once "../funcoes/entretenimento.php";
include_once "../funcoes/anti-injection.php";

$categoria = limpaString($_POST["tCat"]);
$titulo = limpaString($_POST["tTit"]);
$conteudo = limpaString($_POST["tCont"]);
$data = date("Y-m-d");

if($titulo != "") {
    $sql = "insert into entretenimento (id, categoria, data, titulo, conteudo) values (default, '$categoria', '$data', '$titulo', '$conteudo')";
    $salvar = mysqli_query($conexao, $sql);
}

header("location: ../entretenimento/?id=$id");

mysqli_close($conexao);