<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$erro = filter_input(INPUT_GET, "erro") !== null ? $limpa->campo(filter_input(INPUT_GET, "erro")) : "";

session_start();

if(isset($_SESSION["DicasSobreAcademia"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["DicasSobreAcademia"]["logado"]);

    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas sobre Academia</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>            
                <h1><a href="index.php">Dicas sobre Academia</a></h1>
            </header>
            <form method="post" name="admin" id="fLogin" action="entrar.php">
                <fieldset>
                    <legend>Digite o Login e a Senha</legend>
                    <?php if($erro == "restrito"): ?>
                    <h3>AVISO! Página Restrita!</h3>
                    <?php elseif($erro == "senha"): ?>
                    <h3>ERRO! Senha Incorreta!</h3>
                    <?php elseif($erro == "usuario"): ?>
                    <h3>ERRO! Usuário Inexistente!</h3>
                    <?php endif; ?>
                    <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="12" placeholder="Login" required autofocus/></p>
                    <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="12" placeholder="Senha" required/></p>
                    <input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb"><span>Lembrar Sessão</span></label>
                    <input type="submit" value="Entrar" onclick="validaAdm()"/>
                </fieldset>
            </form>
                
        <footer>
            <p><a href="contato.php">Entre em Contato Conosco</a></p>
        </footer>
        </div>
    </body>
</html>
