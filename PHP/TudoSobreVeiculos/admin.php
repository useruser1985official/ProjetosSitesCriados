<?php
    require_once "AntiInjection.php";

    $env = AntiInjection::campo(filter_input(INPUT_GET, "env")) ?? "";

    session_start();

    if(isset($_SESSION["TudoSobreVeiculos"]["logado"])) {
        header("location: consultas.php");
    }
    else {
        unset($_SESSION["TudoSobreVeiculos"]["logado"]);
        
        setcookie(session_name(), null, 0, "/");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Tudo Sobre Veículos</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Tudo Sobre Veículos</a></h1>
            </header>

<section id="conteudo">
    
<h2>Contato</h2>

<?php if($env == "restricted"): ?>
<div id="mens" class="warn"><h3>AVISO! Área Restrita!</h3></div>
<?php elseif($env == "user"): ?>
<div id="mens" class="err"><h3>ERRO! Usuário Inexistente!</h3></div>
<?php elseif($env == "password"): ?>
<div id="mens" class="err"><h3>ERRO! Senha Incorreta!</h3></div>
<?php endif; ?>

<form method="post" id="fLogin" action="entrar.php">
    <fieldset>
        <legend>Acesso à Área Restrita</legend>
        <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="12" maxlength="15" required autofocus/></p>
        <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="12" maxlength="15" required/></p>
        <p><input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb">Lembrar Login</label></p>
        <div id="botoes">
            <input type="submit" value="Enviar" onclick="validaAdm()"/>
            <input type="reset" value="Limpar"/>
        </div>
    </fieldset>
</form>

</section>
            
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>