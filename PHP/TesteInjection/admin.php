<?php
    session_start();
    
    include_once "dados.php";
    
    if(isset($_SESSION["logado"])) {
        header("location: consultas.php");
    }
    
    $erro = $_GET["erro"];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Teste Injection</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
            <div id="interface">
                <header>            
                    <h1><a href="index.php">Teste Injection</a></h1>
                </header>
            <form method="post" name="admin" id="fLogin" action="entrar.php">
                <fieldset>
                    <legend>Digite o Login e a Senha</legend>
                    <?php if($erro == "restrito"): ?>
                    <h3>ERRO! Página Restrita!</h3>
                    <?php endif; ?>
                    <?php if($erro == "senha"): ?>
                    <h3>ERRO! Usuário/Senha Incorreta!</h3>
                    <?php endif; ?>
                    <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="20" placeholder="Login" required autofocus/></p>
                    <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="20" placeholder="Senha" required/></p>
                    <input type="submit" value="Entrar"/>
                </fieldset>
            </form>
                
        <footer>
            <p><a href="contato.php">Entre em Contato Conosco</a></p>
        </footer>
        </div>
    </body>
</html>
