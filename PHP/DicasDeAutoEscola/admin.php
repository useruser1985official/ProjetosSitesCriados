<?php
include_once "AntiInjection.php";

$limpa = new AntiInjection();

$erro = $limpa->campo(filter_input(INPUT_GET, "erro")) ?? "";

session_start();

if(isset($_SESSION["DicasDeAutoEscola"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["DicasDeAutoEscola"]["logado"]);

    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas de Auto-Escola</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Auto-Escola</a></h1>
            </header>
            
<iframe src="semaforo.html" id="farol"></iframe>

<h2>Administração</h2>
            
<form method="post" name="admin" id="login" action="entrar.php">
    <fieldset>
        <legend>Digite o Login e a Senha</legend>
        <?php if($erro == "restrito"): ?>
        <h3>ERRO! Página Restrita!</h3>
        <?php elseif($erro == "senha"): ?>
        <h3>ERRO! Senha Incorreta!</h3>
        <?php elseif($erro == "usuario"): ?>
        <h3>ERRO! Usuário Inexistente!</h3>
        <?php endif; ?>
        <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="12" placeholder="Login" required autofocus/></p>
        <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="12" placeholder="Senha" required/></p>
        <p><input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb"><span>Lembrar Sessão</span></label></p>
        <div><input type="submit" value="Entrar" onclick="validaAdm()"/></div>
    </fieldset>
</form>
        
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>