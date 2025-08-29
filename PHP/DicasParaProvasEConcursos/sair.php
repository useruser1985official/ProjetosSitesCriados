<?php
    session_start();

    unset($_SESSION["DicasParaProvasEConcursos"]["logado"]);

    setcookie(session_name(), null, 0, "DicasParaProvasEConcursos");

    header("location: admin.php?env=restricted");