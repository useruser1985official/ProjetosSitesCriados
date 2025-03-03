<?php
include_once "AntiInjection.php";

$env = filter_input(INPUT_GET, "env") !== null ? AntiInjection::campo(filter_input(INPUT_GET, "env")) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Tudo Sobre Cerveja</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Tudo Sobre Cerveja</a></h1>
            </header>

<section id="conteudo">           
            
<h2>Contato</h2>
<?php if($env == "sucess"): ?>
<h3 style="text-align: center">Sua Mensagem foi Enviada! Aguarde nossa Resposta!</h3>
<?php elseif($env == "error"): ?>
<h3 style="text-align: center">Falha no Envio! Tente Novamente!</h3>
<?php endif; ?>
<form method="post" action="conclusao.php">
    <fieldset>
        <legend>Dados do Usuário</legend>
        <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="35" maxlength="120" placeholder="Digite seu Nome Aqui" required autofocus/></p>
        <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="35" maxlength="70" placeholder="Coloque um E-mail Válido" required/></p>
        <p><label for="cIdad">Idade: </label><input type="number" name="tIdad" id="cIdad" min="18" max="110" step="1" value="18" required/></p>
        <fieldset id="sexo">
            <legend>Sexo</legend>
            <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
            <br/>
            <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label>
            <br/>
            <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
        </fieldset>
    </fieldset>
    <fieldset>
        <legend>Informações do Usuário</legend>
        <p>
            <label for="cCerv">Cerveja Favorita:</label>
            <select name="tCerv" id="cCerv">
                <option selected>Pilsen</option>
                <option>Chopp</option>
                <option>Malzbier</option>
                <option>Boch</option>
                <option>Outras</option>
            </select>
        </p>
        <p><label for="cMsg">Sua Mensagem:</label><br/><textarea name="tMsg" id="cMsg" cols="50" rows="7" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea></p>
    </fieldset>
    <fieldset id="botoes">
        <legend>Botões do Formulário</legend>
        <input type="submit" value="Enviar" onclick="validar()"/>
        <input type="reset" value="Limpar"/>
    </fieldset>
</form>

</section>

<footer id="rodape">
    <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
</footer>
        </div>
    </body>
</html>