<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>POO Livros</title>
    </head>
    <body>
        <div class="terminal">
            <?php 
                require_once "Livro.php";

                $p[0] = new Pessoa("Sérgio", 22, "M");
                $p[1] = new Pessoa("Maria", 31, "F");

                $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
                $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
                $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);

                $l[2]->abrir();
                $l[2]->folhear(305);
                $l[2]->avancarPag();
                $l[2]->detalhes();

                unset($p);
                unset($l);
            ?>
        </div>
    </body>
</html>