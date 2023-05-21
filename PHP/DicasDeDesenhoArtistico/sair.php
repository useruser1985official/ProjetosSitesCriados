<?php
session_start();

unset($_SESSION["DicasDeDesenhoArtistico"]["logado"]);

setcookie(session_name(), null, 0, "DicasDeDesenhoArtistico");

header("location: admin.php?env=restricted");