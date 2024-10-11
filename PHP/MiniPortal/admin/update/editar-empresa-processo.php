<?php
    include "../funcao/funcao-atualizar.php";
    include_once "../../extensoes/anti_injection.php";

    $nome = isset($_REQUEST["nome"]) ? antiInjection($_REQUEST["nome"]) : "";
    $logo = isset($_REQUEST["logo"]) ? antiInjection($_REQUEST["logo"]) : "";
    $fone = isset($_REQUEST["fone"]) ? antiInjection($_REQUEST["fone"]) : "";
    $mail = isset($_REQUEST["mail"]) ? antiInjection($_REQUEST["mail"]) : "";
    $end = isset($_REQUEST["end"]) ? antiInjection($_REQUEST["end"]) : "";
    $cid = isset($_REQUEST["cid"]) ? antiInjection($_REQUEST["cid"]) : "";
    $cep = isset($_REQUEST["cep"]) ? antiInjection($_REQUEST["cep"]) : "";
    $sobre = isset($_REQUEST["sob"]) ? antiInjection($_REQUEST["sob"]) : "";
    $id = (int)$_REQUEST["id"];

    atualizar(array("nome", "logomarca", "fone", "email", "endereco", "cidade", "cep", "sobre"), array($nome, $logomarca, $fone, $email, $endereco, $cidade, $cep, $sobre), "empresa", "where id = '$id'");

    header("location: ../empresa.php?env=sucess");