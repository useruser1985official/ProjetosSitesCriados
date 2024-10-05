<?php
    include "../funcao/funcao-inserir.php";
    include "../../extensoes/url-amigavel.php";

    $nome = $_REQUEST["nome"];
    $logo = $_REQUEST["logo"];
    $fone = $_REQUEST["fone"];
    $mail = $_REQUEST["mail"];
    $end = $_REQUEST["end"];
    $cid = $_REQUEST["cid"];
    $cep = $_REQUEST["cep"];
    $sobre = $_REQUEST["sob"];

    inserir(array("nome", "logomarca", "fone", "email", "endereco", "cidade", "cep", "sobre"), array($nome, $logo, $fone, $mail, $end, $cid, $cep, $sobre), "empresa");

    header("location: ../inserir-empresa.php?env=sucess");