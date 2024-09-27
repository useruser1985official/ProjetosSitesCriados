<?php
    include "../funcao/funcao-inserir.php";
    include "../../extensoes/url-amigavel.php";

    $titulo = $_REQUEST["tit"];
    $url = url_amigavel($titulo);
    $resumo = $_REQUEST["res"];
    $conteudo = $_REQUEST["cont"];
    $data = $_REQUEST["data"];
    $img = $_REQUEST["img"];

    inserir(array("titulo", "url", "resumo", "conteudo", "data", "img_destaque"), array($titulo, $url, $resumo, $conteudo, $data, $img), "portifolio");

    header("location: ../inserir-portifolio.php?env=sucess");