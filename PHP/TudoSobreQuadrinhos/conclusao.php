<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$nome = $limpa->campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = $limpa->campo(filter_input(INPUT_POST, "tMail")) ?? "";
$mens =  $limpa->texto(filter_input(INPUT_POST, "tMsg")) ?? "";
$data = date("Y-m-d");

$dao = new ContatoDAO();

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