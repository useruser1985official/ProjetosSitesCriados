<?php
    include "../conexao/conexao.php";
    include "../conexao/fecha-conexao.php";
    include "funcao/funcao-select2.php";
    include_once "../extensoes/anti_injection.php";

    $user = isset($_REQUEST["login"]) ? antiInjection($_REQUEST["login"]) : "";
    $senha = isset($_REQUEST["senha"]) ? antiInjection($_REQUEST["senha"]) : "";

    $consulta = select("user", "*", "where login = '$user'");

    if($consulta == true) {
        for($i = 0; $i < count($consulta); $i++) {
            if(password_verify($senha, $consulta[$i]["senha"]) == $consulta[$i]["senha"]) {
                session_start();

                $_SESSION["usuario"] = $user;
                $_SESSION["logado"] = true;

                header("location: sites-relacionados.php");
            }
            else {
                header("location: index.php?erro=senha");
            }
        }
    }
    else {
        header("location: index.php?erro=usuario");
    }