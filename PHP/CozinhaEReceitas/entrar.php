<?php
require_once "AdminDAO.php";
require_once "AntiInjection.php";

$adminis = new AntiInjection();

$login = $adminis->campo(filter_input(INPUT_POST, "tLogin")) ?? "";
$senha = $adminis->campo(filter_input(INPUT_POST, "tSenha")) ?? "";
$lemb = $adminis->campo(filter_input(INPUT_POST, "tLemb")) ?? "";

if($login != "") {
    $dao = new AdminDAO();
    
    $dao->buscar($login, $senha, $lemb);
    
    // $dao->salvar($login, $senha);
    
    // $dao->excluir($login);
}
else {
    header("location: admin.php?env=usuario");
}