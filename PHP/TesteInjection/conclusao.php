<?php
    include_once("dados.php");
    
    $nome = $_POST["tNome"];
    $idade = $_POST["tIdad"];
    $mail = $_POST["tMail"];
    $sexo = $_POST["tSex"];
    $mensagem = $_POST["tMsg"];
    $data = date("Y-m-d");
    
    if($mail != "") {
        $sql = "insert into contato (nome, idade, email, sexo, mensagem, data) values ('$nome', '$idade', '$mail', '$sexo', '$mensagem', '$data')";
        $salvar = mysqli_query($conexao, $sql);
    }
    else {
        header("location: contato.php?env=error");
        exit();
    }
    
    $linhas = mysqli_affected_rows($conexao);
    
    if($linhas == 0) {
        header("location: contato.php?env=error");
        exit();
    }
    
    header("location: contato.php?env=sucess");