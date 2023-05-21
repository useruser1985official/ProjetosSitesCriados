<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$filtro = new AntiInjection();

$nome = $filtro->campo(filter_input(INPUT_POST, "tNome")) ?? "";
$mail = $filtro->campo(filter_input(INPUT_POST, "tMail")) ?? "";
$sexo = $filtro->campo(filter_input(INPUT_POST, "tSex")) ?? "O";
$msg = $filtro->campo(filter_input(INPUT_POST, "tMsg")) ?? "";
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