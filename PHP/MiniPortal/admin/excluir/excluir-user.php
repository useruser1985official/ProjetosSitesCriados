<?php 
    include "../funcao/funcao-deleta.php";

    $id = (int)$_REQUEST["id"];

    deleta("user", "where id = '$id'");

    header("location: ../usuarios.php?env=erase");