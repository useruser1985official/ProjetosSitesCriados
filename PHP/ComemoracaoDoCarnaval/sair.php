<?php
session_start();

unset($_SESSION["ComemoracaoDoCarnaval"]["logado"]);

setcookie(session_name(), null, 0, "ComemoracaoDoCarnaval");

header("location: admin.php?env=restricted");