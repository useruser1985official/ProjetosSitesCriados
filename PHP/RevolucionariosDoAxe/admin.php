<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = filter_input(INPUT_GET, "env") !== null ? $limpa->campo(filter_input(INPUT_GET, "env")) : "";

session_start();

if(isset($_SESSION["RevolucionariosDoAxe"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["RevolucionariosDoAxe"]["logado"]);

    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Revolucionários do Axé</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Revolucionários do Axé</a></h1>
            </header>
            
<section id="conteudo">
            
<h2>Admin</h2>

<h3>Login do Sistema</h3>

<?php if($env == "restricted"): ?>
<div id="war" class="env"><h4>AVISO! Página Restrita!</h4></div>
<?php elseif($env == "password"): ?>
<div id="err" class="env"><h4>ERRO! Senha Incorreta!</h4></div>
<?php elseif($env == "user"): ?>
<div id="err" class="env"><h4>ERRO! Usuário Inexistente!</h4></div>
<?php endif; ?>

<form id="login" method="post" action="entrar.php">
    <fieldset>
        <p><label for="cLogin">*Login: </label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="12" placeholder="Usuário" required autofocus/></p>
        <p><label for="cSenha">*Senha: </label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="12" placeholder="Autenticação" required/></p>
        <input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb"><span>Lembrar Sessão</span></label>
    </fieldset>
    <fieldset>
        <legend>Botões do Formulário</legend>
        <div id="botoes">
            <input type="submit" value="Enviar" onclick="validaAdm()"/>
            <input type="reset" value="Limpar"/>
        </div>
    </fieldset>
</form>

</section>

<footer id="rodape">
    <h3><a href="contato.php">Entre em Contato Conosco</a></h3>
</footer>
            
        </div>
    </body>
</html>