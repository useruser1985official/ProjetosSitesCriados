<?php
session_start();

unset($_SESSION["TudoSobreGatos"]["logado"]);

setcookie(session_name(), null, 0, "TudoSobreGatos");

header("location: admin.php?env=restricted");