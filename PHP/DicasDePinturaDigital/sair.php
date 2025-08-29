<?php
session_start();

unset($_SESSION["DicasDePinturaDigital"]["logado"]);

setcookie(session_name(), null, 0, "DicasDeDesenhoDigital");

header("location: admin.php?env=restricted");