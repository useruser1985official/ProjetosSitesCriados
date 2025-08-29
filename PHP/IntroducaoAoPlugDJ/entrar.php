<?php
include_once "dados.php";

$login = isset($_POST["tLogin"]) ? htmlspecialchars($_POST["tLogin"]) : "";
$senha = isset($_POST["tSenha"]) ? htmlspecialchars($_POST["tSenha"]) : "";
$lemb = isset($_POST["tLemb"]) ? htmlspecialchars($_POST["tLemb"]) : "";

$sql_pass = "select * from admin where login = '$login' limit 1";
$entrar = mysqli_query($conexao, $sql_pass);
$row = mysqli_fetch_assoc($entrar);
$total = mysqli_num_rows($entrar);

$sal = $row["sal"];
$salgada = $senha . $sal;
$crip = sha1($salgada);

if($login == $row["login"] && $crip == $row["senha"]) {
    $exp = ($lemb == "on") ? 3600 * 24 * 30 : null;
    
    session_set_cookie_params($exp, "IntroducaoAoPlugDJ", "localhost");
    session_start();
    $_SESSION["IntroducaoAoPlugDJ"]["logado"] = true;
    header("location: consultas.php");
}
else if($login == $row["login"] && $crip != $row["senha"]) {
    $_SESSION["IntroducaoAoPlugDJ"]["logado"] = null;
    header("location: admin.php?env=password");
}
else {
    $_SESSION["IntroducaoAoPlugDJ"]["logado"] = null;
    header("location: admin.php?env=user");
}


/*

// Inserir:

$sal = time();
$salgada = $senha . $sal;
$crip = sha1($salgada);

$sql_pass = "insert into admin (id, login, senha, sal) values (default, '$login', '$crip', '$sal')";
$salvar = mysqli_query($conexao, $sql_pass);
$linhas = mysqli_affected_rows($conexao);

if($linhas == 1) {
    echo "Novo login inserido com sucesso!";
}
else {
    echo "Login não-inserido! Tente novamente!";
}

*/

mysqli_close($conexao);