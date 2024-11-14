<?php
require_once "AntiInjection.php";

$env = AntiInjection::campo(filter_input(INPUT_GET, "env")) ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Cozinha e Receitas</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Cozinha e Receitas</a></h1>
            </header>
            
<section id="artigo">
    
<h2>Contato</h2>
    <?php if($env == "sucess"): ?>
    <h3 class="center">Sua Mensagem foi Enviada, Aguarde nossa Resposta!</h3>
    <?php elseif($env == "error"): ?>
    <h3 class="center">Falha no Envio, Tente Novamente!</h3>
    <?php endif; ?>                
    <form method="post" id="fContato" action="conclusao.php">

        <fieldset>
            <legend>Dados do Usuário</legend>
            <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="25" maxlength="120" placeholder="Digite seu Nome Aqui" required autofocus/></p>
            <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="25" maxlength="70" placeholder="Coloque um E-mail Válido" required/></p>
            <fieldset id="fSexo">
                <legend>Sexo</legend>
                <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
                <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label>
                <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
            </fieldset>
            <p>
                <label for="cMot">Motivo do Contato:</label>
                <select name="tMot" id="cMot">
                    <option>Notificar um Erro</option>
                    <option>Pedir ou Enviar Receita</option>
                    <option selected>Dúvidas Gerais</option>
                    <option>Outros</option>
                </select>
            </p>
            <p><label for="cMsg">Sua Mensagem:</label><br/><textarea name="tMsg" id="cMsg" cols="45" rows="7" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea></p>
            <p><input type="checkbox" name="tNov" id="cNov" value="Sim" checked/><label for="cNov">Envie-me Mensagens sobre Novidades no Site</label></p>
            <span class="botoes">
                <input type="submit" onclick="validar()" value="Enviar"/>
                <input type="reset" value="Limpar"/>
            </span>
        </fieldset>
    </form>
</section>
            
            <footer id="rodape">
                <h4><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Contato</a></h4>
            </footer>
        </div>
    </body>
</html>