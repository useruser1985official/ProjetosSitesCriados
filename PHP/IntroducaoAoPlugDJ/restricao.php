<?php
session_start();

if(!isset($_SESSION["IntroducaoAoPlugDJ"]["logado"])) {
    header("location: admin.php?env=restricted");
}