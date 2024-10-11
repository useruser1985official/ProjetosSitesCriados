<?php
    include "../funcao/funcao-inserir.php";
    include_once "../../extensoes/anti_injection.php";

    $login = isset($_REQUEST["nome"]) ? antiInjection($_REQUEST["nome"]) : "";
    $senha = isset($_REQUEST["senha"]) ? antiInjection($_REQUEST["senha"]) : "";
    $cripsenha = password_hash($senha, PASSWORD_BCRYPT);

    inserir(array("login", "senha"), array($login, $cripsenha), "user");

    header("location: ../inserir-user.php?env=sucess");