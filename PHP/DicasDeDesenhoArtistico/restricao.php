<?php
session_start();

if(!isset($_SESSION["DicasDeDesenhoArtistico"]["logado"])) {
    header("location: admin.php?env=restricted");
}