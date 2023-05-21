<?php
session_start();

if(!isset($_SESSION["DicasParaChurrasco"]["logado"])) {
    header("location: admin.php?env=restrito");
}