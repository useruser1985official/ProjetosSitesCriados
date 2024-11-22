<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$nome = AntiInjection::campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = AntiInjection::campo(filter_input(INPUT_POST, "tMail")) ?? "";
$idade = AntiInjection::numero(filter_input(INPUT_POST, "tIdad")) ?? 0;
$sexo = AntiInjection::campo(filter_input(INPUT_POST, "tSex")) ?? "O";
$mens = AntiInjection::texto(filter_input(INPUT_POST, "tMsg")) ?? "";
$data = date('Y-m-d');

if($mail != "") {
    $dao = new ContatoDAO();

    if($dao->salvar($nome, $mail, $idade, $sexo, $mens, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}