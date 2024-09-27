<?php
    session_start();
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
            <?php if(isset($_SESSION["logado"])): ?>
            <h3>Usuário Logado!</h3>
            <?php else: ?>
            <h3>Página Restrita, volte e tente novamente!</h3>
            <?php endif; ?>
            <a href="sair.php">Sair</a>
            <br/>
            <br/>
            <a href="./">Página Inicial</a>
        </div>
    </body>
</html>