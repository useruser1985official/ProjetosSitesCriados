<?php
    include "../funcao/funcao-atualizar.php";

    $nome = $_REQUEST["nome"];
    $link = $_REQUEST["link"];
    $id = $_REQUEST["id"];

    atualizar(array("nome", "link"), array($nome, $link), "sites_relacionados", "where id = '$id'");

    header("location: ../sites-relacionados.php?env=sucess");