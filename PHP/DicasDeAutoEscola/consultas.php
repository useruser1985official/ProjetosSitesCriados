<?php
require_once "ContatoDAO.php";
require_once "restricao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas de Auto-Escola</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Auto-Escola</a></h1>
            </header>
            
<iframe src="semaforo.html" id="farol"></iframe>

<h2>Consultas</h2>

<section id="consultas">
<?php
$dao = new ContatoDAO();

$dao->buscar();
?>
    <p><input type="button" value="Sair" onclick="location = 'sair.php'"/></p>
</section>
            
        
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>