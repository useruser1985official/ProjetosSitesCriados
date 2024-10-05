<?php
    include "../funcao/funcao-inserir.php";
    include "../../extensoes/url-amigavel.php";

    $nome = $_REQUEST["nome"];
    $url = url_amigavel($nome);

    $up["pasta"] = "../../img/";
    $up["tamanho"] = 1024 * 1024 * 2;
    $up["extensoes"] = array("jpg", "jpeg", "png", "gif");
    $up["renomeia"] = true;

    $extensao = strtolower(end(explode(".", $_FILES["img"]["name"])));

    if(array_search($extensao, $up["extensoes"]) === false) {
        header("location: ../inserir-clientes.php?env=erro-extensao");
        exit;
    }
    else if($up["tamanho"] < $_FILES["img"]["size"]) {
        header("location: ../inserir-clientes.php?env=erro-tamanho");
        exit;
    }
    else if($up["renomeia"] == true) {
        switch($_FILES["img"]["type"]) {
            case "image/gif":
                $tipo = ".gif";
                break;
            case "image/png":
                $tipo = ".png";
                break;
            default:
                $tipo = ".jpeg";
                break;
        }

        $nome_final = time() . $tipo;
    }
    else {
        $nome_final = $_FILES["img"]["name"];
    }

    if(move_uploaded_file($_FILES["img"]["tmp_name"], $up["pasta"] . $nome_final)) {

    }
    else {
        header("location: ../inserir-clientes.php?env=erro-imagem");
        exit;
    }

    inserir(array("nome", "url", "imagem"), array($nome, $url, $nome_final), "clientes");

    header("location: ../inserir-clientes.php?env=sucess");
