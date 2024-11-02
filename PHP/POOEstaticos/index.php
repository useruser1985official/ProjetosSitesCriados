<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>POO Lâmpadas</title>
    </head>
    <body>
        <div class="terminal">
            <?php 
                require_once "Lampada.php";

                Lampada::$preco = 7.25;
               
                Lampada::custo();

                Lampada::acender();
                Lampada::apagar();
            ?>
        </div>
    </body>
</html>