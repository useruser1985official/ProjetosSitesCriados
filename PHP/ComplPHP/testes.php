<?php
    $cor = filter_input(INPUT_COOKIE, "bg") !== null ? filter_input(INPUT_COOKIE, "bg") : "black";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Complemento em PHP</title>
        <style>
            body {
                background-color: <?php echo $cor; ?>;
            }
        </style>
    </head>
    <body>
        <div class="terminal">
            <?php
                
            ?>
            <br/>
            <br/>
            <a href="./">Página Inicial</a>
        </div>
    </body>
</html>