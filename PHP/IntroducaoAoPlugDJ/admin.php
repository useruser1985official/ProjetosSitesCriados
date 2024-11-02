<?php
$env = isset($_GET["env"]) ? htmlspecialchars($_GET["env"]) : "";

session_start();

if(isset($_SESSION["IntroducaoAoPlugDJ"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["IntroducaoAoPlugDJ"]["logado"]);
    
    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Introdução ao Plug.dj</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Introdução ao Plug.dj</a></h1>
            </header>

        <h2>Administração</h2>
        
        <?php if($env == "restricted"): ?>
        <span id="mens"><h3 class="avi">Aviso! Área Restrita! Faça o Login para Acessar!</h3></span>
        <?php elseif($env == "password"): ?>
        <span id="mens"><h3 class="err">Erro! A Senha está Incorreta!</h3></span>
        <?php elseif($env == "user"): ?>
        <span id="mens"><h3 class="err">Erro! Este Usuário não Existe!</h3></span>
        <?php endif; ?>
        <form method="post" id="fAdmin" action="entrar.php">
            <fieldset id="usuario">
                <legend>Autenticação</legend>
                <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="12" maxlength="20" placeholder="Usuário" required autofocus/></p>
                <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="12" maxlength="20" placeholder="Autenticação" required/></p>
                <p><input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb">Lembrar Login</label></p>
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