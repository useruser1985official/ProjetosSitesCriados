<?php 
    $msg = isset($_REQUEST["msg"]) ? $_REQUEST["msg"] : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Complemento em PHP</title>
    </head>
    <body>
        <div class="terminal">
            <?php if($msg == "enviado"): ?>
            <h3>Mensagem Enviada!</h3>
            <?php else: ?>
            <form method="get" action="testes.php">
                <label for="nome">Nome: </label><input type="text" name="nome" id="inome" required/>
                <br/>
                <label for="idade">Idade: </label><input type="number" name="idade" id="iidade" value="0" min="0" max="126"/>
                <br/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php endif; ?>

            <a href="testes.php">Testes</a>
        </div>
    </body>
</html>