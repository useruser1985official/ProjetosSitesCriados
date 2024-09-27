<?php
    include "../funcao/funcao-inserir.php";

    $login = $_REQUEST["nome"];
    $senha = $_REQUEST["senha"];
    $cripsenha = password_hash($senha, PASSWORD_BCRYPT);

    inserir(array("login", "senha"), array($login, $cripsenha), "user");

    header("location: ../inserir-user.php?env=sucess");