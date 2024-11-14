<?php 
    include_once "ProdutoDAOTest.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>PHP com PDO</title>
    </head>
    <body>
        <div class="terminal">
            <?php
                $test = new ProdutoDAOTest();

                $test->listar();
            ?>
            <br/>
            <a href="index.php">Página Inicial</a>
        </div>
    </body>
</html>