<?php
session_start();

unset($_SESSION["IntroducaoAoPlugDJ"]["logado"]);

setcookie(session_name(), null, 0, "IntroducaoAoPlugDJ");

header("location: admin.php?env=restricted");