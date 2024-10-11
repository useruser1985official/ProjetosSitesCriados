<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = $limpa->campo(filter_input(INPUT_GET, "env")) ?? "";

session_start();

if(isset($_SESSION["TudoSobreGatos"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["TudoSobreGatos"]["logado"]);

    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Tudo Sobre Gatos</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Tudo Sobre Gatos</a></h1>
            </header>
            
<section id="conteudo">

<h2>Formulário de Contato</h2>

<?php if($env == "restricted"): ?>
<div id="mens" class="warn"><h3>AVISO! Área Restrita!</h3></div>
<?php elseif($env == "user"): ?>
<div id="mens" class="err"><h3>ERRO! Usuário Inexistente!</h3></div>
<?php elseif($env == "password"): ?>
<div id="mens" class="err"><h3>ERRO! Senha Incorreta!</h3></div>
<?php endif; ?>

<form method="post" id="admin" action="entrar.php">
    <fieldset id="login">
        <legend>Login</legend>
        <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="20" maxlength="15" placeholder="Usuário" required autofocus/></p>
        <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="20" maxlength="15" placeholder="Senha" required/></p>
        <p><input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb">Lembrar Login</label></p>
        <span id="botoes">
            <input type="submit" value="Entrar" onclick="validaAdm()"/>
            <input type="reset" value="Limpar"/>
        </span>
    </fieldset>
</form>
    
</section>
            
<footer id="rodape">
    <p><a href="contato.php">Entre em Contato Conosco</a></p>
</footer>
        </div>
    </body>
</html>