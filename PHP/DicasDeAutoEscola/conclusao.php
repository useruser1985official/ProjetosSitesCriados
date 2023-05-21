<?php
include_once "ContatoDAO.php";
require_once "AntiInjection.php";

$contato = new AntiInjection();

$nome = $contato->campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = $contato->campo(filter_input(INPUT_POST, "tMail")) ?? "";
$opcao = $contato->campo(filter_input(INPUT_POST, "tOpcao")) ?? "";
$idade = $contato->numero(filter_input(INPUT_POST, "tIdade")) ?? 0;
$mens = $contato->texto(filter_input(INPUT_POST, "tMsg")) ?? "";
$arq = $contato->texto(filter_input(INPUT_POST, "tArq")) ?? "";
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