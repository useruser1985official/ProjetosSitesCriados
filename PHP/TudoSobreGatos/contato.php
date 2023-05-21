<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = $limpa->campo(filter_input(INPUT_GET, "env")) ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Tudo Sobre Gatos</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Tudo Sobre Gatos</a></h1>
            </header>
            
<section id="conteudo">

<h2>Formulário de Contato</h2>

<?php if($env == "error"): ?>
<div id="mens" class="err"><h3>ERRO! Falha no Envio! Tente Novamente!</h3></div>
<?php elseif($env == "sucess"): ?>
<div id="mens" class="exi"><h3>ÊXITO! Sua Mensagem foi Enviada!</h3></div>
<?php endif; ?>

<form method="post" id="contato" action="conclusao.php">
    <fieldset id="mensagem">
        <legend>Sua Mensagem</legend>
        <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="35" maxlength="120" placeholder="Digite seu Nome Aqui" required autofocus/></p>
        <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="35" maxlength="70" placeholder="Coloque um E-mail Válido" required/></p>
        <fieldset id="sexo">
            <legend>Sexo</legend>
            <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
            <br/>
            <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label>
            <br/>
            <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
        </fieldset>
        <p><label for="cMsg">Sua Mensagem:</label></p>
        <p><textarea name="tMsg" id="cMsg" cols="50" rows="7" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea></p>
        <span id="botoes">
            <input type="submit" value="Enviar" onclick="validar()"/>
            <input type="reset" value="Limpar"/>
        </span>
    </fieldset>
</form>
    
</section>
            
<footer id="rodape">
    <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
</footer>
        </div>
    </body>
</html>