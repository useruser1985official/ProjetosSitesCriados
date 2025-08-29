<?php
include_once "../funcoes/amigavel.php";
include_once "../funcoes/logado.php";
include_once "../funcoes/entretenimento.php";
include_once "../funcoes/anti-injection.php";

$titulo = limpaString($_POST["tTit"]);
$conteudo = limpaString($_POST["tCont"]);
$id = limpaNumero($_POST["tId"]);

$sql_atu = "update entretenimento set titulo = '$titulo', conteudo = '$conteudo' where id = '$id'";

$atualizar = mysqli_query($conexao, $sql_atu);

header("location: materia.php?id=$id");