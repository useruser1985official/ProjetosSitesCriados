<?php
include_once "dados.php";

$id = (int)trim(htmlspecialchars(strip_tags($_GET["id"]), ENT_QUOTES));

$sql = "delete from contato where id = '$id'";
$excluir = mysqli_query($conexao, $sql);

mysqli_close($conexao);

header("location: consultas.php?excl=sucess");