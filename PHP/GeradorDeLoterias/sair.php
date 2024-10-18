<?php
    session_start();

    unset($_SESSION["GeradorDeLoterias"]["logado"]);

    setcookie(session_name(), null, 0, "GeradorDeLoterias");

    header("location: admin.php?env=restricted");