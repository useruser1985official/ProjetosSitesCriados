<?php
require_once "AdminDAO.php";
require_once "AntiInjection.php";

$adm = new AntiInjection();

$login = $adm->campo(filter_input(INPUT_POST, "tLogin")) ?? "";
$senha = $adm->campo(filter_input(INPUT_POST, "tSenha")) ?? "";
$lemb =  $adm->campo(filter_input(INPUT_POST, "tLemb")) ?? "";

if($login != "") {
    $dao = new AdminDAO();

    $dao->buscar($login, $senha, $lemb);

    // $dao->salvar($login, $senha);

    // $dao->excluir($login);
}
else {
    header("location: admin.php?env=user");
}