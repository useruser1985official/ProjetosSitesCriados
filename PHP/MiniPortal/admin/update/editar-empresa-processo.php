<?php
    include "../funcao/funcao-atualizar.php";

    $nome = $_REQUEST["nome"];
    $logomarca = $_REQUEST["logo"];
    $fone = $_REQUEST["fone"];
    $email = $_REQUEST["mail"];
    $endereco = $_REQUEST["end"];
    $cidade = $_REQUEST["cid"];
    $cep = $_REQUEST["cep"];
    $sobre = $_REQUEST["sob"];
    $id = $_REQUEST["id"];

    atualizar(array("nome", "logomarca", "fone", "email", "endereco", "cidade", "cep", "sobre"), array($nome, $logomarca, $fone, $email, $endereco, $cidade, $cep, $sobre), "empresa", "where id = '$id'");

    header("location: ../empresa.php?env=sucess");