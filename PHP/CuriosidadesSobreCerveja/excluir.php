<?php
include_once "ContatoDAO.php";
include_once "AntiInjection.php";

$anti = new AntiInjection();

$id = $anti->numero(filter_input(INPUT_GET, "id"));

$dao = new ContatoDAO();

if($dao->excluir($id)) {
    header("location: consultas.php?excl=sucess");
}
else {
    header("location: consultas.php?excl=error");
}