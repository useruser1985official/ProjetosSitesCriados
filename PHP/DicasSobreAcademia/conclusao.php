<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$form = new AntiInjection();

$nome = filter_input(INPUT_POST, "tNome") !== null ? $form->campo(filter_input(INPUT_POST, "tNome")) : "";
$idade = filter_input(INPUT_POST, "tIdad") !== null ? $form->numero(filter_input(INPUT_POST, "tIdad")) : 0;
$mail = filter_input(INPUT_POST, "tMail") !== null ? $form->campo(filter_input(INPUT_POST, "tMail")) : "";
$sexo = filter_input(INPUT_POST, "tSex") !== null ? $form->campo(filter_input(INPUT_POST, "tSex")) : "";
$mensagem = filter_input(INPUT_POST, "tMsg") !== null ? $form->texto(filter_input(INPUT_POST, "tMsg")) : "";
$data = date("Y-m-d");

if($mail != "") {
    $dao = new ContatoDAO();
    
    if($dao->salvar($nome, $idade, $mail, $sexo, $mensagem, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}