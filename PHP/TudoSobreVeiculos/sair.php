<?php
session_start();

unset($_SESSION["TudoSobreVeiculos"]["logado"]);

setcookie(session_name(), null, 0, "TudoSobreVeiculos");

header("location: admin.php?env=restricted");