<?php
session_start();

if(!isset($_SESSION["DicasDeMusica"]["logado"])) {
    header("location: admin.php?erro=restrito");
}