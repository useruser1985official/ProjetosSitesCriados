<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>POO Controle</title>
    </head>
    <body>
        <div class="terminal">
            <?php 
                require_once "ControleRemoto.php";

                $c = new ControleRemoto();

                $c->ligar();
                $c->play();
                $c->maisVolume();
                $c->maisVolume();
                $c->maisVolume();
                $c->maisVolume();
                $c->abrirMenu();
                $c->fecharMenu();
            ?>
        </div>
    </body>
</html>