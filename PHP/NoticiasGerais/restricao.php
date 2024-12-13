<?php
session_start();

if(!isset($_SESSION["NoticiasGerais"]["logado"])) {
    header("location: admin.php?env=restricted");
}