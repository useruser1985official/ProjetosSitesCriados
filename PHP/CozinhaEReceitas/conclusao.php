<?php
include_once "ContatoDAO.php";
require_once "AntiInjection.php";

$nome = AntiInjection::campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = AntiInjection::campo(filter_input(INPUT_POST, "tMail")) ?? "";
$sexo = AntiInjection::campo(filter_input(INPUT_POST, "tSex")) ?? "";
$moti = AntiInjection::campo(filter_input(INPUT_POST, "tMot")) ?? "";
$mens = AntiInjection::texto(filter_input(INPUT_POST, "tMsg")) ?? "";
$novi = filter_input(INPUT_POST, "tNov") !== null ? "Sim" : "Não";
$data = date("Y-m-d");

if($mail != "") {
    $dao = new ContatoDAO();
    
    if($dao->salvar($nome, $mail, $sexo, $moti, $mens, $novi, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}