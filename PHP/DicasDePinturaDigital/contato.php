<?php
$env = isset($_GET["env"]) ? trim(htmlspecialchars(strip_tags($_GET["env"]), ENT_QUOTES)) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas de Pintura Digital</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Pintura Digital</a></h1>
            </header>

            <h2>Formulário de Contato</h2>

            <div id="mens">
                <?php if($env == "sucess"): ?>
                <h3>Êxito! Mensagem Enviada com Sucesso!</h3>
                <?php elseif($env == "error"):?>
                <h3>ERRO! Falha no Envio! Tente Novamente!</h3>
                <?php endif; ?>
            </div>
            <form method="post" action="conclusao.php">
                <fieldset>
                    <legend>Contato</legend>
                    <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="35" maxlength="120" placeholder="Insira seu Nome Completo" required autofocus/></p>
                    <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="35" maxlength="65" placeholder="Coloque um E-mail Válido" required/></p>
                    <fieldset id="fSexo">
                        <legend>Sexo</legend>
                        <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
                        <input type="radio" name="tSex" id="cFen" value="F"/><label for="cFem">Feminino</label>
                        <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
                    </fieldset>
                    <p><label for="cMsg">Sua Mensagem:</label></p>
                    <textarea name="tMsg" id="cMsg" cols="40" rows="7" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea>
                    <br/>
                    <span id="botoes">
                        <input type="submit" value="Enviar" onclick="validar()"/>
                        <input type="reset" value="Limpar"/>
                    </span>
                </fieldset>
            </form>

            <footer id="rodape">
                <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco!</a></p>
            </footer>
        </div>
    </body>
</html>