<?php
session_start();

if(!isset($_SESSION["TudoSobreQuadrinhos"]["logado"])) {
    header("location: admin.php?env=restricted");
}