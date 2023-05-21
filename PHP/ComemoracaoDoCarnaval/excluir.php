<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$id = $limpa->campo(filter_input(INPUT_GET, "id"));

$dao = new ContatoDAO();

if($dao->excluir($id)) {
    header("location: consultas.php?excl=sucess");
}
else {
    header("location: consultas.php?excl=error");
}