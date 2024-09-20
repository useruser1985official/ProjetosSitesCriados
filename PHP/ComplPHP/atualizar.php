<?php
    include_once("dados.php");

    $id = isset($_POST["id"]) ? (int)htmlspecialchars($_POST["id"], ENT_QUOTES) : 0;

    $nome = isset($_POST["nome"]) ? htmlspecialchars(trim($_POST["nome"]), ENT_QUOTES) : "";
    $mail = isset($_POST["mail"]) ? htmlspecialchars(trim($_POST["mail"]), ENT_QUOTES) : "";
    $msg = isset($_POST["msg"]) ? htmlspecialchars(trim($_POST["msg"]), ENT_QUOTES) : "";

    if($mail != "") {
        $sql = "update comentarios set nome = '$nome', email = '$mail', mensagem = '$msg' where id = '$id'";
        $atualizar = mysqli_query($conexao, $sql);
    }

    header("location: consultas.php");