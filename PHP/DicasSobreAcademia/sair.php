<?php
session_start();

unset($_SESSION["DicasSobreAcademia"]["logado"]);

setcookie(session_name(), null, 0, "DicasSobreAcademia");

header("location: admin.php?erro=restrito");