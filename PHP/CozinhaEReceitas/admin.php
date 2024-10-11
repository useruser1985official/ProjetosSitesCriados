<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = $limpa->campo(filter_input(INPUT_GET, "env")) ?? "";

session_start();

if(isset($_SESSION["CozinhaEReceitas"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["CozinhaEReceitas"]["logado"]);
    
    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Cozinha e Receitas</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Cozinha e Receitas</a></h1>
            </header>
            
<section id="artigo">
    
<h2>Administração</h2>

<form method="post" name="admin" id="fLogin" action="entrar.php">
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
        <p><span id="botoes"><input type="submit" value="Entrar" onclick="validaAdm()"/></span></p>
    </fieldset>
</form>

</section>
            
            <footer id="rodape">
                <h4><a href="contato.php">Contato</a></h4>
            </footer>
        </div>
    </body>
</html>