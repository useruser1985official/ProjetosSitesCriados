<?php
    include "../funcao/funcao-inserir.php";
    include_once "../../extensoes/anti_injection.php";

    $nome = isset($_REQUEST["nome"]) ? antiInjection($_REQUEST["nome"]) : "";
    $link = isset($_REQUEST["link"]) ? antiInjection($_REQUEST["link"]) : "";

    inserir(array("nome", "link"), array($nome, $link), "sites_relacionados");

    header("location: ../inserir-sites.php?env=sucess");