<?php
$env = isset($_GET["env"]) ? htmlspecialchars($_GET["env"]) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Introdução ao Plug.dj</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Introdução ao Plug.dj</a></h1>
            </header>

        <h2>Contato</h2>
        
        <?php if($env == "sucess"): ?>
        <span id="mens"><h3 class="inf">Êxito! A sua Mensagem foi Enviada com Sucesso!</h3></span>
        <?php elseif($env == "error"): ?>
        <span id="mens"><h3 class="err">Erro! A sua Mensagem não foi Enviada!</h3></span>
        <?php endif; ?>

        <form method="post" id="fContato" action="conclusao.php">
            <fieldset id="usuario">
                <legend>Identificação</legend>
                <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="40" maxlength="120" placeholder="Digite seu Nome Aqui" required autofocus/></p>
                <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="40" maxlength="70" placeholder="Coloque um E-mail Válido" required/></p>
                <fieldset id="sexo">
                    <legend>Sexo</legend>
                    <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
                    <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label>
                    <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
                </fieldset>
            </fieldset>
            <fieldset id="mensagem">
                <legend>Mensagem</legend>
                <p><label for="cMsg">Digite sua Mensagem: </label></p>
                <textarea name="tMsg" id="cMsg" cols="60" rows="10" maxlength="1000" placeholder="Escreva sua Mensagem Aqui" required></textarea>
            </fieldset>
            <span>
                <input type="submit" value="Enviar a Mensagem" onclick="validaForm()"/>
                <input type="reset" value="Limpar a Mensagem"/>
            </span>
        </form>

            <footer>
                <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato')">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>