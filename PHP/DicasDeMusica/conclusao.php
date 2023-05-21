<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$nome = filter_input(INPUT_POST, "tNome") !== null ? $limpa->campo(filter_input(INPUT_POST, "tNome")) : "";
$mail = filter_input(INPUT_POST, "tMail") !== null ? $limpa->campo(filter_input(INPUT_POST, "tMail")) : "";
$mens = filter_input(INPUT_POST, "tMsg") !== null ? $limpa->texto(filter_input(INPUT_POST, "tMsg")) : "";
$data = date("Y-m-d");

if($mail != "") {
    $dao = new ContatoDAO();
    
    if($dao->salvar($nome, $mail, $mens, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}