<?php
include_once "dados.php";

$id = (int)htmlspecialchars($_GET["id"]);

$sql_del = "delete from contato where id = '$id'";
$excluir = mysqli_query($conexao, $sql_del);

mysqli_close($conexao);

header("location: consultas.php?excl=sucess");