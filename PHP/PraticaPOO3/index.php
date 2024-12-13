<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>POO Youtube</title>
    </head>
    <body>
        <div class="terminal">
            <pre>
            <?php 
                require_once "Visualizacao.php";

                $v = array();

                array_push($v, new Video("Aula 1 de POO"));
                array_push($v, new Video("Aula 12 de PHP"));
                array_push($v, new Video("Aula 15 de HTML5"));

                $g = array();

                array_push($g, new Gafanhoto("Jubileu", 22, "M", "Jubi"));
                array_push($g, new Gafanhoto("Creuza", 12, "F", "Creuzita"));

                $vis = array();

                array_push($vis, new Visualizacao($g[0], $v[2]));
                array_push($vis, new Visualizacao($g[0], $v[1]));

                $vis[0]->avaliar();
                $vis[1]->avaliarPorc(85.0);

                print_r($vis[0]);
                print_r($vis[1]);

                unset($v);
                unset($g);
                unset($vis);
            ?>
            </pre>
        </div>
    </body>
</html>