<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$nome = AntiInjection::campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = AntiInjection::campo(filter_input(INPUT_POST, "tMail")) ?? "";
$sexo = AntiInjection::campo(filter_input(INPUT_POST, "tSex")) ?? "O";
$msg = AntiInjection::texto(filter_input(INPUT_POST, "tMsg")) ?? "";
$data = date("Y-m-d");

if($mail != "") {
    $dao = new ContatoDAO();

    if($dao->salvar($nome, $mail, $sexo, $msg, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}