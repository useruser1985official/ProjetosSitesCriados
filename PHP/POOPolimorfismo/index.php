<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>POO Polimorfismo</title>
    </head>
    <body>
        <div class="terminal">
            <?php 
                require_once "Cachorro.php";

                $c = new Cachorro();

                $c->reagirFrase("Olá");
                $c->reagirFrase("Vai Apanhar");

                $c->reagirHora(11, 45);
                $c->reagirHora(20, 00);

                $c->reagirDono(true);
                $c->reagirDono(false);

                $c->reagirIdadePeso(2, 12.5);
                $c->reagirIdadePeso(17, 4.5);
            ?>
        </div>
    </body>
</html>