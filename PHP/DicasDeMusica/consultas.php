<?php
require_once "ContatoDAO.php";
require_once "restricao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Tudo sobre Teoria Musical</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Tudo sobre Teoria Musical</a></h1>
            </header>
            
<section id="consultas">
<?php
$dao = new ContatoDAO();

$dao->buscar();
?>
    <p><input type="button" value="Sair" onclick="location = 'sair.php'"/></p>
</section>
            
            <footer>
                <p><a href="contato.php">Entre em contato conosco!</a></p> 
            </footer>
        </div>
    </body>
</html>