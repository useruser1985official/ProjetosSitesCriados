<?php
session_start();

unset($_SESSION["CuriosidadesSobreCerveja"]["logado"]);

setcookie(session_name(), null, 0, "CuriosidadesSobreCerveja");

header("location: admin.php?env=restrito");