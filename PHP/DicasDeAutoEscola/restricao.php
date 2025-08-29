<?php
session_start();

if(!isset($_SESSION["DicasDeAutoEscola"]["logado"])) {
    header("location: admin.php?erro=restrito");
}