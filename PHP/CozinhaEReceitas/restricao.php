<?php
session_start();

if(!isset($_SESSION["CozinhaEReceitas"]["logado"])) {
    header("location: admin.php?env=restrito");
}