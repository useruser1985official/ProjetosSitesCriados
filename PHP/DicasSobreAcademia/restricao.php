<?php
session_start();

if(!isset($_SESSION["DicasSobreAcademia"]["logado"])) {
    header("location: admin.php?erro=restrito");
}