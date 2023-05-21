<?php
session_start();

if(!isset($_SESSION["TudoSobreGatos"]["logado"])) {
    header("location: admin.php?env=restricted");
}