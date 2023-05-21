<?php
session_start();

if(!isset($_SESSION["ComemoracaoDoCarnaval"]["logado"])) {
    header("location: admin.php?env=restricted");
}