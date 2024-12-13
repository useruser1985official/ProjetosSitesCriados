<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>POO Canetas</title>
    </head>
    <body>
        <div class="terminal">
            <pre>
            <?php 
                require_once "Caneta.php";

                $c1 = new Caneta("BIC", "Azul", 0.5);
                $c2 = new Caneta("Pilot", "Verde", 1.0);

                print_r($c1);
                print_r($c2);

                unset($c1);
                unset($c2);
            ?>
            </pre>
        </div>
    </body>
</html>