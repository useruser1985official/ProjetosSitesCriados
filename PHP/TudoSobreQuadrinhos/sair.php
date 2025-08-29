<?php
session_start();

unset($_SESSION["TudoSobreQuadrinhos"]["logado"]);

setcookie(session_name(), null, 0, "TudoSobreQuadrinhos");

header("location: admin.php?env=restricted");