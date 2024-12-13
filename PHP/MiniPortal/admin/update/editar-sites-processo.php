<?php
    include "../funcao/funcao-atualizar.php";
    include_once "../../extensoes/anti_injection.php";

    $nome = isset($_REQUEST["nome"]) ? antiInjection($_REQUEST["nome"]) : "";
    $link = isset($_REQUEST["link"]) ? antiInjection($_REQUEST["link"]) : "";
    $id = (int)$_REQUEST["id"];

    atualizar(array("nome", "link"), array($nome, $link), "sites_relacionados", "where id = '$id'");

    header("location: ../sites-relacionados.php?env=sucess");