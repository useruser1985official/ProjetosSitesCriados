<?php
include_once "AdminDAO.php";
include_once "AntiInjection.php";

$login = AntiInjection::campo(filter_input(INPUT_POST, "tLogin")) ?? "";
$senha = AntiInjection::campo(filter_input(INPUT_POST, "tSenha")) ?? "";
$lemb = AntiInjection::campo(filter_input(INPUT_POST, "tLemb")) ?? "";

if($login != "") {
    $dao = new AdminDAO();
    
    $dao->buscar($login, $senha, $lemb);
    
    // $dao->salvar($login, $senha);
    
    // $dao->excluir($login);
}
else {
    header("location: admin.php?env=usuario");
}