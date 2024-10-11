<?php 
    include "../funcao/funcao-deleta.php";

    $id = (int)$_REQUEST["id"];

    deleta("empresa", "where id = '$id'");

    header("location: ../empresa.php?env=erase");