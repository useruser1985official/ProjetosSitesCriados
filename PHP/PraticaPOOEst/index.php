<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>POO Ventilador</title>
    </head>
    <body>
        <div class="terminal">
            <?php 
                require_once "Ventilador.php";

                Ventilador::ligar(3);
                Ventilador::ligar(2);
                Ventilador::desligar();

                echo (Ventilador::getLigado() ? "true" : "false") . "<br/>";
            ?>
        </div>
    </body>
</html>