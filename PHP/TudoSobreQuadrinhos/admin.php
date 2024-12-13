<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = $limpa->campo(filter_input(INPUT_GET, "env")) ?? "";

session_start();

if(isset($_SESSION["TudoSobreQuadrinhos"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["TudoSobreQuadrinhos"]["logado"]);

    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Tudo Sobre Quadrinhos</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="./">Tudo Sobre Quadrinhos</a></h1>
            </header>
    
<section id="conteudo">     
            
<h2>Contato</h2>

<h3>Acesso a Administração</h3>

<?php if($env == "restricted"): ?>
<div id="war" class="env"><h4>AVISO! Página Restrita!</h4></div>
<?php elseif($env == "password"): ?>
<div id="err" class="env"><h4>ERRO! Senha Incorreta!</h4></div>
<?php elseif($env == "user"): ?>
<div id="err" class="env"><h4>ERRO! Usuário Inexistente!</h4></div>
<?php endif; ?>

<form method="post" id="acesso" action="entrar.php">
    <fieldset>
        <legend>Acesso</legend>
        <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="20" maxlength="20" placeholder="Nome de Usuário" required autofocus/></p>
        <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="20" maxlength="15" placeholder="Palavra-Chave" required/></p>
        <p><input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb">Lembrar Sessão</label></p>
        <span id="cBut"><input type="submit" value="Enviar" onclick="validaAdm()"/></span>
    </fieldset>
</form>

</section>
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>