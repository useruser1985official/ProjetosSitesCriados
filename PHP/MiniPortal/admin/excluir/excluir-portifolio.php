<?php 
    include "../funcao/funcao-deleta.php";
    include "../funcao/funcao-select2.php";

    $id = (int)$_REQUEST["id"];

    $consulta = select("portifolio", "img_destaque", "where id = '$id'");

    if($consulta == true) {
        for($i = 0; $i < count($consulta); $i++) {
            $excluir_img = $consulta[$i]["img_destaque"];
        }
        unlink("../../img/$excluir_img");
    }

    deleta("portifolio", "where id = '$id'");

    header("location: ../portifolio.php?env=erase");