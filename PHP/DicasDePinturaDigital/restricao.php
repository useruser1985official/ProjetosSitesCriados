<?php
session_start();

if(!isset($_SESSION["DicasDePinturaDigital"]["logado"])) {
    header("location: admin.php?env=restricted");
}