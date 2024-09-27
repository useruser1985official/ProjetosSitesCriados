<?php
    session_set_cookie_params(3600 * 24 * 365, "ComplPHP", "localhost");
    session_start();

    $login = "pcanal";
    $senha = "123";

    if($login == "pcanal" && $senha == "123") {
        $_SESSION["logado"] = true;
        echo "Logado!";
        header("location: restrito.php");
    }
    else {
        $_SESSION["logado"] = null;
        echo "Não Logado!";   
    }