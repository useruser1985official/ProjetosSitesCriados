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
            <form method="post" action="formulario.php">
                <label for="nome">Nome: </label><input type="text" name="nome" id="inome" required/>
                <br/>
                <label for="tel">Telefone: </label><input type="tel" name="tel" id="itel"/>
                <br/>
                <label for="mail">E-mail: </label><input type="email" name="mail" id="imail" required/>
                <br/>
                <label for="msg">Mensagem: </label><textarea name="msg" id="imsg"></textarea>
                <br/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php endif; ?>

            <a href="testes.php">Testes</a>
        </div>
    </body>
</html>