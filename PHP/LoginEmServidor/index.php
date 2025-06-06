<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Formulário para Receber Dados</title>
    </head>
    <body>
        <form action="login.php" method="post">
            <!--
            <label for="inome">Nome: </label><input type="text" name="nome" id="inome" size="15" maxlength="70" required/>
            <br/>
            -->
            <label for="iuser">User: </label><input type="text" name="user" id="iuser" size="15" maxlength="35" required autofocus>
            <br/>
            <label for="isenha">Senha: </label><input type="password" name="senha" id="isenha" size="15" max="15" required>
            <br/>
            <br/>
            <input type="submit" value="Enviar"/>
            <input type="reset" value="Limpar"/>
        </form>
    </body>
</html>