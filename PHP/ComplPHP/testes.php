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
                include_once "funcoes.php";

                $nome = isset($_GET["nome"]) ? antiInjection(filter_input(INPUT_GET, "nome")) : "";
                $idade = isset($_GET["idade"]) ? (int)antiInjection(filter_input(INPUT_GET, "idade")) : 0;

                echo "\"select * from tabela where nome = '$nome' and idade = $idade;\"";
            ?>
            <br/>
            <br/>
            <a href="./">Página Inicial</a>
        </div>
    </body>
</html>