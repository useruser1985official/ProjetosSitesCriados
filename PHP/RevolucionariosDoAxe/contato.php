<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = filter_input(INPUT_GET, "env") !== null ? $limpa->campo(filter_input(INPUT_GET, "env")) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Revolucionários do Axé</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Revolucionários do Axé</a></h1>
            </header>
            
<section id="conteudo">
            
<h2>Contato</h2>

<h3>Formulário</h3>

<?php if($env == "warning"): ?>
<div id="war" class="env"><h4>AVISO! Não foi Especificada uma Mensagem!</h4></div>
<?php elseif($env == "error"): ?>
<div id="err" class="env"><h4>ERRO! Falha no Envio, Tente Novamente!</h4></div>
<?php elseif($env == "sucess"): ?>
<div id="suc" class="env"><h4>ÊXITO! Mensagem Enviada com Sucesso!</h4></div>
<?php endif; ?>

<form id="contato" method="post" action="conclusao.php">
    <fieldset>
        <legend>Dados do Usuário (Dados com * são obrigatórios)</legend>
        <p><label for="cNome">*Nome Completo: </label><input type="text" name="tNome" id="cNome" size="40" maxlength="120" placeholder="Digite seu Nome Aqui" required autofocus/></p>
        <p><label for="cMail">*E-mail: </label><input type="email" name="tMail" id="cMail" size="40" maxlength="75" placeholder="Coloque um E-mail Válido" required/></p>
        <fieldset id="sexo">
            <legend>*Sexo</legend>
            <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label><br/>
            <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label><br/>
            <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
        </fieldset>
    </fieldset>
    
    <fieldset>
        <legend>Conteúdo da Mensagem</legend>
        <p><label for="cMsg">*Sua Mensagem:</label><br/><textarea name="tMsg" id="cMsg" cols="50" rows="7" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea></p>
        <p><input type="checkbox" name="tEnv" id="cEnv" value="Sim" checked/><label for="cEnv">Desejo Receber E-mail sobre Novidades no Site</label></p>
    </fieldset>
    
    <fieldset>
        <legend>Botões do Formulário</legend>
        <div id="botoes">
            <input type="submit" value="Enviar" onclick="validaForm()"/>
            <input type="reset" value="Limpar"/>
        </div>
    </fieldset>
</form>

</section>

<footer id="rodape">
    <h3><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></h3>
</footer>
            
        </div>
    </body>
</html>