<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Cadastro</a></li>
                    <li><a href="consultas.php">Consultas</a></li>
                </ul>
            </nav>
            <section>
                <h1>Cadastro de Usuários</h1>
                <hr/>
                <br/>
                <form method="post" action="processa.php">
                    <input type="submit" value="Salvar" class="btn"/>
                    <input type="reset" value="Limpar" class="btn"/>
                    <br/>
                    <br/>
                    <p>Nome: <input type="text" name="tNome" id="cNome" class="campo" maxlength="40" required autofocus/></p>
                    <p>E-mail: <input type="email" name="tMail" id="cMail" class="campo" maxlength="50" required/></p>
                    <p>Profissão: <input type="text" name="tProf" id="cProf" class="campo" maxlength="40" required/></p>
                </form>
            </section>
        </div>
    </body>
</html>
