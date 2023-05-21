<?php
    include_once "funcoes/amigavel.php";
    include_once "funcoes/logado.php";
    include_once "funcoes/entretenimento.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Espaço Geek - Login</title>
    </head>
    <body>
        <header>
            <h1><a href="./">Espaço Geek</a></h1>
        </header>
        <nav id="menu">
            <h2>Logar no Site:</h2>
            
            <form method="post" action="funcoes/logado.php">
                <p><label>Login: </label><input type="text" name="login"/></p>
                <p><label>Senha: </label><input type="text" name="senha"/></p>
                <input type="submit" value="Entrar"/>
            </form>
        </nav>
    </body>
</html>