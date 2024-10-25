<?php
    include_once "dados.php";

    $nome = isset($_POST["nome"]) ? trim(htmlspecialchars(strip_tags($_POST["nome"]), ENT_QUOTES)) : "";
    $mail = isset($_POST["mail"]) ? trim(htmlspecialchars(strip_tags($_POST["mail"]), ENT_QUOTES)) : "";
    $idade = isset($_POST["idad"]) ? (int)trim(htmlspecialchars(strip_tags($_POST["idad"]), ENT_QUOTES)) : 0;
    $sexo = isset($_POST["sex"]) ? trim(htmlspecialchars(strip_tags($_POST["sex"]), ENT_QUOTES)) : "O";
    $materia = isset($_POST["mat"]) ? trim(htmlspecialchars(strip_tags($_POST["mat"]), ENT_QUOTES)) : "";
    $mensagem = isset($_POST["msg"]) ? trim(htmlspecialchars(strip_tags($_POST["msg"]), ENT_QUOTES)) : "";
    $data = date("Y-m-d");

    if($mail != "") {
        $sql = "insert into contato (id, nome, email, idade, sexo, materia, mensagem, data) values (default, '$nome', '$mail', '$idade', '$sexo', '$materia', '$mensagem', '$data')";
        $salvar = mysqli_query($conexao, $sql);
    }
    else {
        header("location: contato.php?env=error");
    }

    $linhas = mysqli_affected_rows($conexao);

    if($linhas == 0) {
        header("location: contato.php?env=error");
    }
    else {
        header("location: contato.php?env=sucess");
    }