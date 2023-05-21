<?php
include_once "AntiInjection.php";

$anti = new AntiInjection();

$env = filter_input(INPUT_GET, "env") !== null ? $anti->campo(filter_input(INPUT_GET, "env")) : "";

session_start();

if(isset($_SESSION["CuriosidadesSobreCerveja"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["CuriosidadesSobreCerveja"]["logado"]);
    
    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Tudo Sobre Cerveja</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Tudo Sobre Cerveja</a></h1>
            </header>

<section id="conteudo">           
            
<h2>Contato</h2>

<form method="post" id="fLogin" action="entrar.php">
    <fieldset>
        <?php if($env == "restrito"): ?>
        <h3>AVISO! Página Restrita!</h3>
        <?php elseif($env == "senha"): ?>
        <h3>ERRO! Senha Incorreta!</h3>
        <?php elseif($env == "usuario"): ?>
        <h3>ERRO! Usuário Inexistente!</h3>
        <?php endif; ?>
        <legend>Digite o Login e a Senha</legend>
        <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="12" placeholder="Login" required autofocus/></p>
        <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="12" placeholder="Senha" required/></p>
        <input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb"><span>Lembrar Sessão</span></label>
    </fieldset>
    <fieldset id="botoes">
        <input type="submit" value="Entrar" onclick="validaAdm()"/>
    </fieldset>
</form>

</section>

<footer id="rodape">
    <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
</footer>
        </div>
    </body>
</html>