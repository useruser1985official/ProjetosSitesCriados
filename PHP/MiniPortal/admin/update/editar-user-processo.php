<?php
    include "../funcao/funcao-atualizar.php";

    $login = $_REQUEST["nome"];
    $senha = $_REQUEST["senha"];
    $cripsenha = password_hash($senha, PASSWORD_BCRYPT);
    $id = $_REQUEST["id"];

    if($senha == "") {
        atualizar("login", $login, "user", "where id = '$id'");
    }
    else {
        atualizar(array("login", "senha"), array($login, $cripsenha), "user", "where id = '$id'");
    }
    

    header("location: ../usuarios.php?env=sucess");