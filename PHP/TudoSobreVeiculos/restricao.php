<?php
session_start();

if(!isset($_SESSION["TudoSobreVeiculos"]["logado"])) {
    header("location: admin.php?env=restricted");
}