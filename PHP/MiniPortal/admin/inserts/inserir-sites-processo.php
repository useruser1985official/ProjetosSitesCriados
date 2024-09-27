<?php
    include "../funcao/funcao-inserir.php";

    $nome = $_REQUEST["nome"];
    $link = $_REQUEST["link"];

    inserir(array("nome", "link"), array($nome, $link), "sites_relacionados");

    header("location: ../inserir-sites.php?env=sucess");