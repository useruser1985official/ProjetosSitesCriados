<?php
    include_once("dados.php");

    $id = (int)htmlspecialchars($_GET["id"], ENT_QUOTES);

    $sql = "delete from comentarios where id = '$id'";
    $excluir = mysqli_query($conexao, $sql);

    header("location: consultas.php");