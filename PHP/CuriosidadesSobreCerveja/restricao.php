<?php
session_start();

if(!isset($_SESSION["CuriosidadesSobreCerveja"]["logado"])) {
    header("location: admin.php?env=restrito");
}