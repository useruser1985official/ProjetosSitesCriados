<?php
session_start();

unset($_SESSION["RevolucionariosDoAxe"]["logado"]);

setcookie(session_name(), null, 0, "RevolucionariosDoAxe");

header("location: admin.php?env=restricted");