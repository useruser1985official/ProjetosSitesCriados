<?php
include_once "ContatoDAO.php";
require_once "AntiInjection.php";

$form = new AntiInjection();

$nome = $form->campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = $form->campo(filter_input(INPUT_POST, "tMail")) ?? "";
$sexo = $form->campo(filter_input(INPUT_POST, "tSex")) ?? "";
$moti = $form->campo(filter_input(INPUT_POST, "tMot")) ?? "";
$mens = $form->campo(filter_input(INPUT_POST, "tMsg")) ?? "";
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