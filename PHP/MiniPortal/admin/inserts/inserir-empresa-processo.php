<?php
    include "../funcao/funcao-inserir.php";
    include "../../extensoes/url-amigavel.php";
    include_once "../../extensoes/anti_injection.php";

    $nome = isset($_REQUEST["nome"]) ? antiInjection($_REQUEST["nome"]) : "";
    $logo = isset($_REQUEST["logo"]) ? antiInjection($_REQUEST["logo"]) : "";
    $fone = isset($_REQUEST["fone"]) ? antiInjection($_REQUEST["fone"]) : "";
    $mail = isset($_REQUEST["mail"]) ? antiInjection($_REQUEST["mail"]) : "";
    $end = isset($_REQUEST["end"]) ? antiInjection($_REQUEST["end"]) : "";
    $cid = isset($_REQUEST["cid"]) ? antiInjection($_REQUEST["cid"]) : "";
    $cep = isset($_REQUEST["cep"]) ? antiInjection($_REQUEST["cep"]) : "";
    $sobre = isset($_REQUEST["sob"]) ? antiInjection($_REQUEST["sob"]) : "";

    inserir(array("nome", "logomarca", "fone", "email", "endereco", "cidade", "cep", "sobre"), array($nome, $logo, $fone, $mail, $end, $cid, $cep, $sobre), "empresa");

    header("location: ../inserir-empresa.php?env=sucess");