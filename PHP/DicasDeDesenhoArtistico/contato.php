<?php
require_once "AntiInjection.php";

$env = AntiInjection::campo(filter_input(INPUT_GET, "env")) ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas de Desenho Artístico</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Desenho Artístico</a></h1>
            </header>
            <section id="corpo">
                <h2>Contato</h2>
                
                <?php if($env == "error"): ?>
                <h3>ERRO! Mensagem Não-Enviada!</h3>
                <?php elseif($env == "sucess"): ?>
                <h3>ÊXITO! Mensagem Enviada com Sucesso!</h3>
                <?php endif;?>
                
                <form id="fContato" method="post" action="conclusao.php">
                    <fieldset>
                        <legend>Entre em Contato Conosco</legend>
                        <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="40" maxlength="120" placeholder="Insira seu Nome Aqui" required autofocus/></p>
                        <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="40" maxlength="75" placeholder="Coloque um E-mail Válido" required/></p>
                        <fieldset id="sexo">
                            <legend>Sexo</legend>
                            <input type="radio" name="tSex" id="cMasc" value="M"/><label for="cMasc">Masculino</label>
                            <br/>
                            <input type="radio" name="tSex" id="cFem" value="F"/><label for="cFem">Feminino</label>
                            <br/>
                            <input type="radio" name="tSex" id="cOut" value="O" checked/><label for="cOut">Outro</label>
                        </fieldset>
                        <p>
                            <label for="cAss">Assunto: </label>
                            <select name="tAss" id="cAss">
                                <option>Dúvidas sobre Desenho</option>
                                <option>Solicitação de Matéria</option>
                                <option selected>Outros</option>
                            </select>
                        </p>
                        <p>
                            <label for="cMsg">Sua Mensagem:</label>
                            <br/>
                            <textarea name="tMsg" id="cMsg" cols="45" rows="7" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea>
                        </p>
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