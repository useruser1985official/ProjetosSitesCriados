<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$nome = filter_input(INPUT_POST, "tNome") !== null ? AntiInjection::campo(filter_input(INPUT_POST, "tNome")) : "";
$mail = filter_input(INPUT_POST, "tMail") !== null ? AntiInjection::campo(filter_input(INPUT_POST, "tMail")) : "";
$mens = filter_input(INPUT_POST, "tMsg") !== null ? AntiInjection::texto(filter_input(INPUT_POST, "tMsg")) : "";
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