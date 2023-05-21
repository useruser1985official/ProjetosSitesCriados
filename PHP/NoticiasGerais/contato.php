<?php
$env = isset($_GET["env"]) ? trim(htmlspecialchars(strip_tags($_GET["env"]), ENT_QUOTES)) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Notícias Gerais - O Seu Site de Notícias</title>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <hgroup>
                    <h1><a href="index.php">Notícias Gerais</a></h1>
                    <h2>O Seu Site de Notícias</h2>
                </hgroup>
            </header>
            <section id="corpo">
                <h2>Entre em Contato Conosco</h2>
                
                <div id="mens">
                    <?php if($env == "sucess"): ?>
                    <h3>Êxito! Mensagem Enviada com Sucesso!</h3>
                    <?php elseif($env == "error"): ?>
                    <h3>ERRO! Falha no Envio! Tente Novamente!</h3>
                    <?php endif; ?>
                </div>
                <form method="post" id="fContato" action="conclusao.php">
                    <fieldset>
                        <legend>Formulário de Contato</legend>
                        <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="40" maxlength="120" placeholder="Digite seu Nome Aqui" required autofocus/></p>
                        <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="45" maxlength="75" placeholder="Coloque um E-mail Válido" required/></p>
                        <fieldset id="sexo">
                            <legend>Sexo</legend>
                            <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label><br/>
                            <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label><br/>
                            <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
                        </fieldset>
                        <p><label for="cUrg">Grau de Urgência: </label>Min<input type="range" name="tUrg" id="cUrg" min="1" max="5" value="1"/>Max</p>
                        <p><label for="cMsg">Sua Mensagem:</label></p>
                        <p><textarea name="tMsg" id="cMsg" cols="50" rows="7" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea></p>
                        <div id="botoes">
                            <input type="submit" value="Enviar" onclick="validar()"/>
                            <input type="reset" value="Limpar"/>
                        </div>
                    </fieldset>
                </form>
            </section>
            <footer id="rodape">
                <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>