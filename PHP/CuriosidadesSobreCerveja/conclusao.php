<?php
include_once "ContatoDAO.php";
include_once "AntiInjection.php";

$anti = new AntiInjection();

$nome = $anti->campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = $anti->campo(filter_input(INPUT_POST, "tMail")) ?? "";
$idad = $anti->numero(filter_input(INPUT_POST, "tIdad")) ?? 0;
$sexo = $anti->campo(filter_input(INPUT_POST, "tSex")) ?? "";
$cerv = $anti->campo(filter_input(INPUT_POST, "tCerv")) ?? "";
$mens = $anti->texto(filter_input(INPUT_POST, "tMsg")) ?? "";
$data = date("Y-m-d");

if($mail != "") {
    $dao = new ContatoDAO();
    
    if($dao->salvar($nome, $mail, $idad, $sexo, $cerv, $mens, $data)) {
        header("location: contato.php?env=sucess");
    }
    else {
        header("location: contato.php?env=error");
    }
}
else {
    header("location: contato.php?env=warning");
}
