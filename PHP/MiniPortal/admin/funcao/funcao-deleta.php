<?php
    include_once "../../conexao/conexao.php";
    include_once "../../conexao/fecha-conexao.php";

    function deleta($tabela, $where = NULL) {
        $delete = "delete from $tabela $where";

        if($conexao = conectaSite()) {
            if(mysqli_query($conexao, $delete)) {
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