<?php
    include_once "../../conexao/conexao.php";
    include_once "../../conexao/fecha-conexao.php";

    function atualizar($coluna, $valor, $tabela, $where) {
        if(is_array($coluna) && is_array($valor)) {
            if(count($coluna) == count($valor)) {
                $valor_coluna = NULL;

                for($i = 0; $i < count($coluna); $i++) {
                    $valor_coluna .= "{$coluna[$i]} = '{$valor[$i]}',";
                }

                $valor_coluna = substr($valor_coluna, 0, -1);

                $atualizar = "update $tabela set $valor_coluna $where";
            }
            else {
                return false;
            }
        }
        else {
            $atualizar = "update $tabela set $coluna = '$valor' $where";
        }

        if($conexao = conectaSite()) {
            if(mysqli_query($conexao, $atualizar)) {
                fechaConexao($conexao);

                return true;
            }
            else {
                echo "Query Inválida!";

                return false;
            }
        }
        else {
            return false;
        }
    }