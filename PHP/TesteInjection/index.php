<?php
include_once "dados.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Teste Injection</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="javascript:void()" onclick="alert('Você já Está na Página Inicial!')">Teste Injection</a></h1>
            </header>
            
            <menu>
                <li><a href="consultas.php">Consultas</a></li>
            </menu>
            
            <footer>
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>