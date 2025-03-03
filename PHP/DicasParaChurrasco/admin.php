<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = filter_input(INPUT_GET, "env") !== null ? $limpa->campo(filter_input(INPUT_GET, "env")) : "";

session_start();

if(isset($_SESSION["DicasParaChurrasco"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["DicasParaChurrasco"]["logado"]);
    
    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas para Churrasco</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Dicas para Churrasco</a></h1>
            </header>
            
<section id="conteudo">

<h2>Administração</h2>

<form method="post" id="fAdmin" action="entrar.php">
    <?php if($env == "restrito"): ?>
    <h3>AVISO! Página Restrita!</h3>
    <?php elseif($env == "senha"): ?>
    <h3>ERRO! Senha Incorreta!</h3>
    <?php elseif($env == "usuario"): ?>
    <h3>ERRO! Usuário Inexistente!</h3>
    <?php endif; ?>
    <fieldset id="admin">
        <legend>Acesso</legend>
        <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="12" placeholder="Acesso" required autofocus/></p>
        <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="12" placeholder="Autenticação" required/></p>
        <p><input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb"><span>Lembrar Sessão</span></label></p>
    </fieldset>
    <fieldset id="botoes">
        <input type="submit" value="Entrar" onclick="validaAdm()"/>
    </fieldset>
</form>

</section>

            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>