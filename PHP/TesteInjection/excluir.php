<?php
    include_once("dados.php");
    
    $id = $_GET["id"];
    
    $sql_del = "delete from contato where id = '$id'";
    $excluir = mysqli_query($conexao, $sql_del);
    
    header("location: consultas.php");