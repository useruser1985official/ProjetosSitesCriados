<?php
require_once "AntiInjection.php";

$erro = filter_input(INPUT_GET, "erro") !== null ? AntiInjection::campo(filter_input(INPUT_GET, "erro")) : "";

session_start();

if(isset($_SESSION["DicasDeMusica"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["DicasDeMusica"]["logado"]);

    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Tudo sobre Teoria Musical</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Tudo sobre Teoria Musical</a></h1>
            </header>

            <form method="post" id="fAdmin" action="entrar.php">
                <?php if($erro == "restrito"): ?>
                <h3>ERRO! Página Restrita!</h3>
                <?php endif; ?>
                <?php if($erro == "senha"): ?>
                <h3>ERRO! Usuário/Senha Incorreta!</h3>
                <?php endif; ?>
                <fieldset id="admin">
                    <legend>Acesso</legend>
                    <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="12" placeholder="Acesso" required autofocus/></p>
                    <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="12" placeholder="Autenticação" required/></p>
                    <input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb"><span>Lembrar Sessão</span></label>
                </fieldset>
                
                <input type="submit" value="Entrar" onclick="validaAdm()"/>
            </form>
            
            <footer>
                <p><a href="contato.php">Entre em contato conosco!</a></p> 
            </footer>
        </div>
    </body>
</html>