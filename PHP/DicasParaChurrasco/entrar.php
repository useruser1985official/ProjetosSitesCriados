<?php
include_once "AdminDAO.php";
require_once "AntiInjection.php";

$adminis = new AntiInjection();

$login = filter_input(INPUT_POST, "tLogin") !== null ? $adminis->campo(filter_input(INPUT_POST, "tLogin")) : "";
$senha = filter_input(INPUT_POST, "tSenha") !== null ? $adminis->campo(filter_input(INPUT_POST, "tSenha")) : "";
$lemb = filter_input(INPUT_POST, "tLemb") !== null ? $adminis->campo(filter_input(INPUT_POST, "tLemb")) : "";

$conn = FabricaConexao::getConexao();

if($login != "") {
    $dao = new AdminDAO();
    
    $dao->buscar($login, $senha, $lemb);
    
    // $dao->salvar($login, $senha);
    
    // $dao->excluir($login);
}
else {
    header("location: admin.php?env=user");
}