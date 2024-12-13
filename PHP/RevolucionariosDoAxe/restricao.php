<?php
session_start();

if(!isset($_SESSION["RevolucionariosDoAxe"]["logado"])) {
    header("location: admin.php?env=restricted");
}