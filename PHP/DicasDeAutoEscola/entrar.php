<?php
include_once "AdminDAO.php";
require_once "AntiInjection.php";

$adminis = new AntiInjection();

$login = $adminis->campo(filter_input(INPUT_POST, "tLogin")) ?? "";
$pass = $adminis->campo(filter_input(INPUT_POST, "tSenha")) ?? "";
$lemb = $adminis->campo(filter_input(INPUT_POST, "tLemb")) ?? "";

$conn = FabricaConexao::getConexao();

if($login != "") {
    $dao = new AdminDAO();
    
    $dao->buscar($login, $pass, $lemb);
    
    // $dao->salvar($login, $pass);
    
    // $dao->excluir($login);
}
else {
    header("location: admin.php?env=user");
}