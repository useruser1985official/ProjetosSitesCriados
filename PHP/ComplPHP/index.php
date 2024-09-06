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
            <?php
                $v = array(2 => "A", 5 => "J", 0 => "M", 3 => "X", 4 => "K");

                print_r($v);

                krsort($v);

                print_r($v);
            ?>
        </div>
    </body>
</html>