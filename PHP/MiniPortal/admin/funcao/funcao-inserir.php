<?php
    include_once "../../conexao/conexao.php";
    include_once "../../conexao/fecha-conexao.php";

    function inserir($coluna, $valor, $tabela) {
        if(is_array($coluna) && is_array($valor)) {
            if(count($coluna) == count($valor)) {
                $inserir = "insert into $tabela (" . implode(", ", $coluna) . ") values ('" . implode("', '", $valor) . "')";
            }
            else {
                return false;
            }
        }
        else {
            $inserir = "insert into $tabela ($coluna) values ('$valor')";
        }

        if($conexao = conectaSite()) {
            if(mysqli_query($conexao, $inserir)) {
                fechaConexao($conexao);

                return true;
            }
            else {
                echo "Query Inválida!";

                return false;
            }
        }
    }