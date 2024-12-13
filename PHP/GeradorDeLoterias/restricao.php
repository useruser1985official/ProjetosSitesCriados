<?php
    session_start();

    if(!isset($_SESSION["GeradorDeLoterias"]["logado"])) {
        header("location: admin.php?env=restricted");
    }