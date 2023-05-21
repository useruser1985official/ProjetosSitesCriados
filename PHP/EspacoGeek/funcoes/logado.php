<?php
include_once "anti-injection.php";
/*
$login = htmlspecialchars(isset($_POST["login"])) ? limpaString($_POST["login"]) : "";
$senha = htmlspecialchars(isset($_POST["senha"])) ? limpaString($_POST["senha"]) : "";
 */

$login = "admin";
$senha = "123";

$sal = "Salgado";
$crip = sha1($senha . $sal);

if($login == "admin" && $crip == sha1("123" . $sal)) {
    $logado = true;
    echo "Logado<br/>";
    echo "Login: $login<br/>";
    echo "Senha: $senha<br/>";
    echo "Sal: $sal<br/>";
    echo "Criptografada: $crip<br/>";
}
else {
    $logado = false;
    echo "Não Logado<br/>";
    echo "Login: $login<br/>";
    echo "Senha: $senha<br/>";
    echo "Sal: $sal<br/>";
    echo "Criptografada: $crip<br/>";
}