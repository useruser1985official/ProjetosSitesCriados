<?php
require_once "ContatoDAO.php";
require_once "restricao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Comemoração do Carnaval</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Comemoração do Carnaval</a></h1>
            </header>
            
            <h2>Consultas</h2>
            
            <?php
                $dao = new ContatoDAO();

                $dao->buscar();
            ?>
            <input type="button" value="Sair" onclick="location = 'sair.php'"/>
            <footer>
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>