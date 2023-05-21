<?php
include_once "AdminDAO.php";
include_once "AntiInjection.php";

$anti = new AntiInjection();

$login = $anti->campo(filter_input(INPUT_POST, "tLogin")) ?? "";
$senha = $anti->campo(filter_input(INPUT_POST, "tSenha")) ?? "";
$lemb = $anti->campo(filter_input(INPUT_POST, "tLemb")) ?? "";

if($login != "") {
    $dao = new AdminDAO();
    
    $dao->buscar($login, $senha, $lemb);
    
    // $dao->salvar($login, $senha);
    
    // $dao->excluir($login);
}
else {
    header("location: admin.php?env=usuario");
}