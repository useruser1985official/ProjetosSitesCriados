<?php
    session_start();

    if(!isset($_SESSION["DicasParaProvasEConcursos"]["logado"])) {
        header("location: admin.php?env=restricted");
    }