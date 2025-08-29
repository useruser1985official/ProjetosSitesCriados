<?php
require_once "AdminDAO.php";
require_once "AntiInjection.php";

$anti = new AntiInjection();

$login = $anti->campo(filter_input(INPUT_POST, "tLogin")) ?? "";
$pass = $anti->campo(filter_input(INPUT_POST, "tSenha")) ?? "";
$lemb = $anti->campo(filter_input(INPUT_POST, "tLemb")) ?? "";

if($login != "") {
    $dao = new AdminDAO();
    
    $dao->buscar($login, $pass, $lemb);
    
    // $dao->salvar($login, $pass);
    
    // $dao->excluir($login);
}
else {
    header("location: admin.php?env=usuario");
}