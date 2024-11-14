<?php
    function getConnection() {
        $hostname = "mysql:host=localhost;dbname=mercadophp;charset=utf8";
        $username = "root";
        $password = "";

        try {
            $conexao = new PDO($hostname, $username, $password);

            return $conexao;
        }
        catch(PDOException $ex) {
            echo "ERRO: {$ex->getMessage()}";
        }
    }
