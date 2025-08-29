<?php
include_once "ContatoDAO.php";
require_once "AntiInjection.php";

$anti = new AntiInjection();

$nome = filter_input(INPUT_POST, "tNome") !== null ? $anti->campo(filter_input(INPUT_POST, "tNome")) : "";
$mail = filter_input(INPUT_POST, "tMail") !== null ? $anti->campo(filter_input(INPUT_POST, "tMail")) : "";
$sexo = filter_input(INPUT_POST, "tSex") !== null ? $anti->campo(filter_input(INPUT_POST, "tSex")) : "O";
$mens = filter_input(INPUT_POST, "tMsg") !== null ? $anti->texto(filter_input(INPUT_POST, "tMsg")) : "";
$data = date("Y-m-d");

if($mail != "") {
    $dao = new ContatoDAO();
    
    if($dao->salvar($nome, $mail, $sexo, $mens, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}