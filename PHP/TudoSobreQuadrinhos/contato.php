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
        <title>Tudo Sobre Quadrinhos</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="./">Tudo Sobre Quadrinhos</a></h1>
            </header>
            
<section id="conteudo"> 
    
<h2>Contato</h2>

<h3>Fale Conosco</h3>

<?php if($env == "warning"): ?>
<div id="war" class="env"><h4>AVISO! Não foi Especificada uma Mensagem!</h4></div>
<?php elseif($env == "error"): ?>
<div id="err" class="env"><h4>ERRO! Falha no Envio, Tente Novamente!</h4></div>
<?php elseif($env == "sucess"): ?>
<div id="suc" class="env"><h4>ÊXITO! Mensagem Enviada com Sucesso!</h4></div>
<?php endif; ?>

<form method="post" id="contato" action="conclusao.php">
    <fieldset>
        <legend>Dados Pessoais</legend>
        <p><label for="cNome">Nome: </label><input type="text" name="tNome" id="cNome" size="45" maxlength="120" placeholder="Digite seu Nome Completo Aqui" required autofocus/></p>
        <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="45" maxlength="70" placeholder="Coloque um E-mail Válido" required/></p>
        <p><label for="cMsg">Sua Mensagem:</label></p>
        <p><textarea name="tMsg" id="cMsg" cols="50" rows="7" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea></p>
        <span id="cBut">
            <input type="submit" value="Enviar" onclick="validaForm()"/>
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