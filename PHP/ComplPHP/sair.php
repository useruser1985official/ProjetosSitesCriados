<?php
    session_start();

    unset($_SESSION["logado"]);

    setcookie(session_name(), null, 0, "/");

    header("location: restrito.php");