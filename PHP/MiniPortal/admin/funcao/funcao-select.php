<?php
    include_once "../conexao/conexao.php";
    include_once "../conexao/fecha-conexao.php";

    function select($tabela, $coluna = "*", $where = NULL, $ordem = NULL, $limite = NULL) {
        $sql = "select $coluna from $tabela $where $ordem $limite";

        if($conexao = conectaSite()) {
            if($query = mysqli_query($conexao, $sql)) {
                if(mysqli_num_rows($query) > 0) {
                    $res_totais = array();

                    while($res = mysqli_fetch_assoc($query)) {
                        $res_totais[] = $res;
                    }

                    fechaConexao($conexao);

                    return $res_totais;
                }
                else {
                    return false;
                }
            }
            else {
                return false;
            }
        }
        else {
            return false;
        }
    }