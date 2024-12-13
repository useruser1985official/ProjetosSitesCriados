<?php
session_start();

unset($_SESSION["NoticiasGerais"]["logado"]);

setcookie(session_name(), null, 0, "NoticiasGerais");

header("location: admin.php?env=restricted");