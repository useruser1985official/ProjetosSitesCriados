<?php
session_start();

unset($_SESSION["CozinhaEReceitas"]["logado"]);

setcookie(session_name(), null, 0, "CozinhaEReceitas");

header("location: admin.php?env=restrito");