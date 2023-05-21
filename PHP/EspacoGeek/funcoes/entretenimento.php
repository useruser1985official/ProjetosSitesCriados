<?php
include_once "conexao.php";

$sql = "select * from entretenimento order by 'id' desc";
$coment = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($coment);
$total = mysqli_num_rows($coment);

$categoria = "Entretenimento";