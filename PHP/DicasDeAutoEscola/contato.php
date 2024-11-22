<?php
require_once "AntiInjection.php";

$env = filter_input(INPUT_GET, "env") !== null ? AntiInjection::campo(filter_input(INPUT_GET, "env")) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas de Auto-Escola</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Auto-Escola</a></h1>
            </header>
            
<iframe src="semaforo.html" id="farol"></iframe>
            
<form method="post" id="contato" action="conclusao.php">
    <fieldset>
        <?php if($env == "sucess"): ?>
        <h3>Sua Mensagem foi Enviada, Aguarde nossa Resposta!</h3>
        <?php endif; ?>
        <?php if($env == "error"): ?>
        <h3>Falha no Envio, Tente Novamente!</h3>
        <?php endif; ?>
        <legend>Formulário de Contato</legend>
        <p><label for="cNome">Nome Completo: </label><input type="text" name="tNome" id="cNome" size="40" maxlength="120" placeholder="Digite Aqui seu Nome" required autofocus/></p>
        <p><label for="cMail">E-mail: </label><input type="email" name="tMail" id="cMail" size="40" maxlength="75" placeholder="Coloque um E-mail Válido" required/></p>
        <p>
            <label for="cOpcao">Selecione a Opção:</label>
            <select name="tOpcao" id="cOpcao">
                <optgroup label="1ª Habilitação">
                    <option value="Primeira A">Categoria "A" - Motocicletas e Triciclos (1ª Habilitação).</option>
                    <option value="Primeira B" selected>Categoria "B" - Carros de Passeio, Utilitários e Caminhonetes (1ª Habilitação).</option>
                    <option value="Primeira AB">Categoria "AB" - Motos e outros da "A", e carros e outros da "B" (1ª Habilitação).</option>                     
                </optgroup>

                <optgroup label="Adição de Categoria">
                    <option value="Adição A">Categoria "A" - Motocicletas e Triciclos (Adição).</option>
                    <option value="Adição B">Categoria "B" - Carros de Passeio, Utilitários e Caminhonetes (Adição).</option>
                </optgroup>

                <optgroup label="Mudança de Categoria">
                    <option value="Mudança C">Categoria "C" - Caminhões, Tratores e Outros Veículos de Carga.</option>
                    <option value="Mudança D">Categoria "D" - Ônibus, Micro-ônibus e Outros Veículos de Passageiros.</option>
                    <option value="Mudança E">Categoria "E" - Carreta, Veículos Articulados e Transporte de Cargas Perigosas.</option>            
                </optgroup>                           
            </select>
        </p>
        <p><label for="cIdade">Idade: </label><input type="number" name="tIdade" id="cIdade" min="18" max="90" step="1" value="18" required/></p>
        <p><label for="cMsg">Sua Mensagem:</label></p>
        <p><textarea name="tMsg" id="cMsg" cols="90" rows="7" maxlength="1000" placeholder="Escreva Aqui sua Mensagem" required></textarea></p>
        <p><label for="cArq">Arquivo a ser Enviado: </label><input type="file" name="tArq" id="cArq"/></p>
        <div><input type="submit" value="Enviar" onclick="validar()"/><input type="reset" value="Limpar"/></div>
    </fieldset>
</form>
        
            <footer id="rodape">
                <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>
