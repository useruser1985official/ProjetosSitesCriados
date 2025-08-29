<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = filter_input(INPUT_GET, "env") !== null ? $limpa->campo(filter_input(INPUT_GET, "env")) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas sobre Academia</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Dicas sobre Academia</a></h1>
            </header>
            
<h2>Fale Conosco</h2>

<?php if($env == "sucess"): ?>
<h3>Sua Mensagem foi Enviada, Aguarde nossa Resposta!</h3>
<?php elseif($env == "error"): ?>
<h3>Falha no Envio, Tente Novamente!</h3>
<?php endif; ?>
<form method="post" name="contato" id="fContato" action="conclusao.php">
    <fieldset id="contato">
        <legend>Contato</legend>
        <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="40" maxlength="100" placeholder="Digite seu Nome" required autofocus/></p>
        <p><label for="cIdad">Idade: </label><input type="number" name="tIdad" id="cIdad" min="14" max="110" step="1" value="14"/></p>
        <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="35" maxlength="70" placeholder="Coloque um E-mail Válido" required/></p>
        <fieldset id="sexo">
            <legend>Sexo</legend>
            <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
            <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label>
            <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
        </fieldset>
        <p><label for="cMsg">Sua Mensagem:</label></p>
        <textarea name="tMsg" id="cMsg" cols="50" rows="5" maxlength="1000" placeholder="Escreva Aqui sua Mensagem" required></textarea>
    </fieldset>
    <input type="submit" value="Enviar a Mensagem" onclick="validaForm()"/>
    <input type="reset" value="Limpar Dados"/>
    <br/>
    <br/>
</form>

            <footer>
                <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>