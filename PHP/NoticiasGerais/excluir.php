<?php
include_once "dados.php";

$id = (int)$_GET["id"];

$sql = "delete from contato where id = '$id'";
$excluir = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location: consultas.php?excl=sucess");