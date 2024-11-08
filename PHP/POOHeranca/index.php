<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>POO Herança</title>
    </head>
    <body>
        <div class="terminal">
            <pre>
            <?php 
                require_once "Bolsista.php";

                $b1 = new Bolsista();

                $b1->setNome("Jubileu");
                $b1->setIdade(17);
                $b1->setSexo("M");
                $b1->setMatr(1112);
                $b1->setCurso("Administrador");
                $b1->setBolsa(12.5);

                $b1->pagarMensal();
                $b1->renovarBolsa();

                print_r($b1);
            ?>
            </pre>
        </div>
    </body>
</html>