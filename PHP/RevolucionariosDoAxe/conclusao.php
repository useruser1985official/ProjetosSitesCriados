<?php
include_once "ContatoDAO.php";
require_once "AntiInjection.php";

$form = new AntiInjection();

$nome = filter_input(INPUT_POST, "tNome") !== null ? $form->campo(filter_input(INPUT_POST, "tNome")) : "";
$mail = filter_input(INPUT_POST, "tMail") !== null ? $form->campo(filter_input(INPUT_POST, "tMail")) : "";
$sexo = filter_input(INPUT_POST, "tSex") !== null ? $form->campo(filter_input(INPUT_POST, "tSex")) : "";
$mens = filter_input(INPUT_POST, "tMsg") !== null ? $form->campo(filter_input(INPUT_POST, "tMsg")) : "";
$env = filter_input(INPUT_POST, "tEnv") !== null ? "Sim" : "Não";
$data = date("Y-m-d");

if($mail != "") {
    $dao = new ContatoDAO();
    
    if($dao->salvar($nome, $mail, $sexo, $mens, $env, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}