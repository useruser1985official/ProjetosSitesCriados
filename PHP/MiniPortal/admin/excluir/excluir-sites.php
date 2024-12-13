<?php 
    include "../funcao/funcao-deleta.php";

    $id = (int)$_REQUEST["id"];

    deleta("sites_relacionados", "where id = '$id'");

    header("location: ../sites-relacionados.php?env=erase");