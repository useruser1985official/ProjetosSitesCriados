<?php 
    $env = isset($_GET["env"]) ? trim(htmlspecialchars(strip_tags($_GET["env"]), ENT_QUOTES)) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas para Provas e Concursos</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Dicas para Provas e Concursos</a></h1>
            </header>
        
<h2>Formulário de Contato</h2>

<span id="cent">
    <?php if($env == "sucess"): ?>
    <h3>ÊXITO! Mensagem Enviada com Sucesso!</h3>
    <?php elseif($env == "error"): ?>
    <h3>ERRO! Falha no Envio! Tente Novamente!</h3>
    <?php endif; ?>
</span>

<form method="post" action="conclusao.php">
    <fieldset>
        <legend>Contato</legend>
        <p><label for="inome">Nome Completo: </label><input type="text" name="nome" id="inome" size="40" maxlength="120" placeholder="Escreva seu Nome" required autofocus/></p>
        <p><label for="imail">E-mail: </label><input type="email" name="mail" id="imail" size="40" maxlength="120" placeholder="Coloque um E-mail Válido" required/></p>
        <p><label for="iidad">Idade: </label><input type="number" name="idad" id="iidad" min="0" max="116" step="1" value="0" required/></p>
        <fieldset id="sexo">
            <legend>Sexo</legend>
            <input type="radio" name="sex" id="imasc" value="M"/><label for="imasc">Masculino</label>
            <br/>
            <input type="radio" name="sex" id="ifem" value="F"/><label for="ifem">Feminino</label>
            <br/>
            <input type="radio" name="sex" id="iout" value="O" checked/><label for="iout">Outro</label>
        </fieldset>
        <p>
            <label for="imat">Matéria Preferida: </label>
            <select name="mat" id="imat">
                <option>Português</option>
                <option>Matemática</option>
                <option>Biologia</option>
                <option>Química</option>
                <option>Física</option>
                <option>Geografia</option>
                <option>História</option>
                <option>Artes</option>
                <option>Educação Física</option>
                <option>Inglês</option>
                <option>Espanhol</option>
                <option>Literatura</option>
                <option selected>Outros</option>
            </select>
        </p>
        <p><label for="imsg">Sua Mensagem:</label></p>
        <p><textarea name="msg" id="imsg" cols="60" rows="12" maxlength="1000" placeholder="Até 1000 Caracteres" required></textarea></p>
        <p>
            <input type="submit" value="Enviar" onclick="validar()"/>
            <input type="reset" value="Limpar"/>
        </p>
    </fieldset>
</form>

            <footer>
                <p><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco!</a></p>
            </footer>
        </div>
    </body>
</html>