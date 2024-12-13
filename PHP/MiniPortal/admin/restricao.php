<?php
    session_start();

    if(isset($_SESSION["logado"])) {

    }
    else {
        header("location: index.php?erro=negado");
    }