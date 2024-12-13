<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $database = "pagina_cadastro";
    $conexao = mysqli_connect($hostname, $user, $password, $database) or die ("Falha na Conexão com o Banco de Dados");

    mysqli_set_charset($conexao, "utf8");