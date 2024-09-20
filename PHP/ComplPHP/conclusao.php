<?php
    include_once("dados.php");

    $nome = isset($_POST["nome"]) ? htmlspecialchars(trim($_POST["nome"]), ENT_QUOTES) : "";
    $mail = isset($_POST["mail"]) ? htmlspecialchars(trim($_POST["mail"]), ENT_QUOTES) : "";
    $msg = isset($_POST["msg"]) ? htmlspecialchars(trim($_POST["msg"]), ENT_QUOTES) : "";
    $data = isset($_POST["data"]) ? htmlspecialchars(trim($_POST["data"]), ENT_QUOTES) : "";

    if($mail != "") {
        $sql = "insert into comentarios (nome, email, mensagem, data) values ('$nome', '$mail', '$msg', '$data')";
        $salvar = mysqli_query($conexao, $sql);
    }

    $linhas = mysqli_affected_rows($conexao);

    mysqli_close($conexao);

    header("location: index.php");
?>