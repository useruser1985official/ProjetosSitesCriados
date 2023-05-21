<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$form = new AntiInjection();

$nome = $form->campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = $form->campo(filter_input(INPUT_POST, "tMail")) ?? "";
$sexo = $form->campo(filter_input(INPUT_POST, "tSex")) ?? "";
$mens = $form->texto(filter_input(INPUT_POST, "tMsg")) ?? "";
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