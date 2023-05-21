<?php
session_start();

unset($_SESSION["DicasParaChurrasco"]["logado"]);

setcookie(session_name(), null, 0, "DicasParaChurrasco");

header("location: admin.php?env=restrito");