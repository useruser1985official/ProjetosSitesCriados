<?php
include_once "ContatoDAO.php";
require_once "AntiInjection.php";

$nome = AntiInjection::campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = AntiInjection::campo(filter_input(INPUT_POST, "tMail")) ?? "";
$opcao = AntiInjection::campo(filter_input(INPUT_POST, "tOpcao")) ?? "";
$idade = AntiInjection::numero(filter_input(INPUT_POST, "tIdade")) ?? 0;
$mens = AntiInjection::texto(filter_input(INPUT_POST, "tMsg")) ?? "";
$arq = AntiInjection::texto(filter_input(INPUT_POST, "tArq")) ?? "";
$data = date("Y-m-d");

if($mail != "") {
    $dao = new ContatoDAO();
    
    if($dao->salvar($nome, $mail, $opcao, $idade, $mens, $arq, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}