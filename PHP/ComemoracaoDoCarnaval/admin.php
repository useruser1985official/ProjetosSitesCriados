<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = $limpa->campo(filter_input(INPUT_GET, "env")) ?? "";

session_start();

if(isset($_SESSION["ComemoracaoDoCarnaval"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["ComemoracaoDoCarnaval"]["logado"]);
    
    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Comemoração do Carnaval</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Comemoração do Carnaval</a></h1>
            </header>
            
            <h2>Administração</h2>
            
            <form method="post" id="fAdmin" action="entrar.php">
                <?php if($env == "restricted"): ?>
                <h3>AVISO! Área Restrita!</h3>
                <?php elseif($env == "password"): ?>
                <h3>ERRO! Senha Incorreta!</h3>
                <?php elseif($env == "user"): ?>
                <h3>ERRO! Usuário Inexistente!</h3>
                <?php endif; ?>
                <fieldset id="entrada">
                    <legend>Entrada</legend>
                    <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="12" maxlength="15" placeholder="Usuário" required autofocus/></p>
                    <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="12" maxlength="15" placeholder="Autenticação" required/></p>
                    <p><input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb">Lembrar do Login</label></p>
                </fieldset>
                <span>
                    <input type="submit" value="Enviar" onclick="validaAdm()"/>
                    <input type="reset" value="Limpar"/>
                </span>
            </form>
          
            <footer>
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>