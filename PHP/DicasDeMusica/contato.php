<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Tudo sobre Teoria Musical</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Tudo sobre Teoria Musical</a></h1>
            </header>

            <form method="post" id="fContato" action="conclusao.php">
                <fieldset id="usuario">
                    <legend>Identificação</legend>
                    <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="40" maxlength="100" placeholder="Digite seu Nome" required autofocus/></p>
                    <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="30" maxlength="60" placeholder="Digite um E-mail Válido" required/></p>
                </fieldset>
                
                <fieldset id="mensagem">
                    <legend>Mensagem</legend>
                    <p><label for="cMsg">Sua mensagem: </label></p><textarea name="tMsg" id="cMsg" cols="40" rows="5" placeholder="Digite sua Mensagem" required></textarea>
                </fieldset>
                
                <input type="submit" value="Enviar Mensagem" onclick="validaForm()"/>
                <input type="reset" value="Limpar Mensagem"/>
            </form>
            
            <footer>
                <p><a href="javascript:void()" onclick="alert('Você Já Está na Página de Contato')">Entre em contato conosco!</a></p> 
            </footer>
        </div>
    </body>
</html>