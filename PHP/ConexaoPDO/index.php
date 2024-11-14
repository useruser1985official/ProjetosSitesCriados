<?php 
    
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
                require_once "ProdutoDAOTest.php";

                $test = new ProdutoDAOTest();

                $test->excluir();
            ?>
            <br/>
            <a href="consultas.php">Consultas</a>
        </div>
    </body>
</html>