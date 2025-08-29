<?php
    require_once "AntiInjection.php";

    $env = AntiInjection::campo(filter_input(INPUT_GET, "env")) ?? "";

    session_start();

    if(isset($_SESSION["DicasDePinturaDigital"]["logado"])) {
        header("location: consultas.php");
    }
    else {
        unset($_SESSION["DicasDePinturaDigital"]["logado"]);

        setcookie(session_name(), null, 0, "/");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas de Pintura Digital</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Pintura Digital</a></h1>
            </header>

            <h2>Acesso ao Sistema</h2>

            <div id="mens">
                <?php if($env == "user"): ?>
                <h3>ERRO! User Inexistente!</h3>
                <?php elseif($env == "password"): ?>
                <h3>ERRO! Senha Incorreta!</h3>
                <?php elseif($env == "restricted"): ?>
                <h3>AVISO! Área Restrita!</h3>
                <?php endif;?> 
            </div>   

            <form method="post" name="admin" id="fLogin" action="entrar.php">
                <fieldset>
                    <legend>Digite o Login e a Senha</legend>
                    <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="12" placeholder="Login" required autofocus/></p>
                    <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="12" placeholder="Senha" required/></p>
                    <input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb"><span>Lembrar Sessão</span></label>
                    <p><span id="botoes"><input type="submit" value="Entrar" onclick="validaAdm()"/></span></p>
                </fieldset>
            </form>

            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco!</a></p>
            </footer>
        </div>
    </body>
</html>