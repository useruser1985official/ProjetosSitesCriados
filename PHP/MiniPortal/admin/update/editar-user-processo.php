<?php
    include "../funcao/funcao-atualizar.php";
    include_once "../../extensoes/anti_injection.php";

    $login = isset($_REQUEST["nome"]) ? antiInjection($_REQUEST["nome"]) : "";
    $senha = isset($_REQUEST["senha"]) ? antiInjection($_REQUEST["senha"]) : "";
    $cripsenha = password_hash($senha, PASSWORD_BCRYPT);
    $id = (int)$_REQUEST["id"];

    if($senha == "") {
        atualizar("login", $login, "user", "where id = '$id'");
    }
    else {
        atualizar(array("login", "senha"), array($login, $cripsenha), "user", "where id = '$id'");
    }
    

    header("location: ../usuarios.php?env=sucess");