<?php
require_once "AntiInjection.php";

$env = AntiInjection::campo(filter_input(INPUT_GET, "env")) ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Comemoração do Carnaval</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">

            <header>
                <h1><a href="index.php">Comemoração do Carnaval</a></h1>
            </header>
            
            <form method="post" id="fContato" action="conclusao.php">
                <?php if($env == "sucess"): ?>
                <h3>ÊXITO! Mensagem Enviada com Sucesso!</h3>
                <?php elseif($env == "error"): ?>
                <h3>ERRO! Mensagem não Enviada! Tente Novamente!</h3>
                <?php endif; ?>
                <fieldset id="usuario">
                    <legend>Identificação</legend>
                    <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="40" maxlength="120" placeholder="Digite seu Nome" required autofocus/></p>
                    <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="40" maxlength="80" placeholder="Coloque um E-mail Válido" required/></p>
                    <fieldset id="sexo">
                        <legend>Sexo</legend>
                        <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
                        <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label>
                        <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
                    </fieldset>
                </fieldset>
                <fieldset id="mensagem">
                    <legend>Mensagem</legend>
                    <label for="cMsg">Sua Mensagem: </label>
                    <p><textarea name="tMsg" id="cMsg" cols="40" rows="7" maxlength="1000" placeholder="Escreva sua Mensagem Aqui" required></textarea></p>
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