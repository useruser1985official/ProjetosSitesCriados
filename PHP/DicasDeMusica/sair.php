<?php
session_start();

unset($_SESSION["DicasDeMusica"]["logado"]);

setcookie(session_name(), null, 0, "DicasDeMusica");

header("location: admin.php");