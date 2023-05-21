<?php
include_once "../funcoes/amigavel.php";
include_once "../funcoes/logado.php";
include_once "../funcoes/entretenimento.php";
include_once "../funcoes/anti-injection.php";

$id = limpaNumero($_GET["id"]);

$sql_del = "delete from entretenimento where id = '$id'";
$excluir = mysqli_query($conexao, $sql_del);

header("location: index.php?env=excl");