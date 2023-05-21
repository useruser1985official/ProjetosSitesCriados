<?php
include_once "dados.php";

$login = isset($_POST["tLogin"]) ? trim(htmlspecialchars(strip_tags($_POST["tLogin"]), ENT_QUOTES)) : "";
$senha = isset($_POST["tSenha"]) ? trim(htmlspecialchars(strip_tags($_POST["tSenha"]), ENT_QUOTES)) : "";
$lemb = isset($_POST["tLemb"]) ? trim(htmlspecialchars(strip_tags($_POST["tLemb"]), ENT_QUOTES)) : "";

// Logar:

$sql = "select * from admin where login = '$login' limit 1";
$entrar = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($entrar);
$total = mysqli_num_rows($entrar);

$sal = $row["sal"];
$salgada = $senha . $sal;
$crip = sha1($salgada);

if($login == $row["login"] && $crip == $row["senha"]) {
    $exp = ($lemb == "on") ? 3600 * 24 * 30 : null;

    session_set_cookie_params($exp, "DicasDePinturaDigital", "localhost");
    session_start();

    $_SESSION["DicasDePinturaDigital"]["logado"] = true;
    header("location: consultas.php");
}
else if($login == $row["login"] && $crip != $row["senha"]) {
    $_SESSION["DicasDePinturaDigital"]["logado"] = null;
    header("location: admin.php?env=password");
}
else  {
    $_SESSION["DicasDePinturaDigital"]["logado"] = null;
    header("location: admin.php?env=user");
}



/*
// Inserir:

$sal = time();
$salgada = $senha . $sal;
$crip = sha1($salgada);

$sql = "insert into admin (id, login, senha, sal) values (default, '$login', '$crip', '$sal')";
$salvar = mysqli_query($conexao, $sql);
$linhas = mysqli_affected_rows($conexao);

if($linhas == 1) {
    echo "Novo Login Inserido com Sucesso!";
}
else {
    echo "Login Não-Inserido! Tente Novamente!";
}

*/

mysqli_close($conexao);