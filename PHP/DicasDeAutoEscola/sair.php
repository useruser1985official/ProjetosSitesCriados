<?php
session_start();

unset($_SESSION["DicasDeAutoEscola"]["logado"]);

setcookie(session_name(), null, 0, "DicasDeAutoEscola");

header("location: admin.php");