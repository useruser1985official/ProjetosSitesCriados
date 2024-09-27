<?php
    include "../funcao/funcao-inserir.php";
    include "../../extensoes/url-amigavel.php";

    $nome = $_REQUEST["nome"];
    $url = url_amigavel($nome);
    $img = $_REQUEST["img"];

    inserir(array("nome", "url", "imagem"), array($nome, $url, $img), "clientes");

    header("location: ../inserir-clientes.php?env=sucess");
