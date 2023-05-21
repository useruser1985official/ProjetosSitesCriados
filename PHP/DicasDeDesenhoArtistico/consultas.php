<?php
require_once "ContatoDAO.php";
require_once "restricao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Dicas de Desenho Artístico</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Desenho Artístico</a></h1>
            </header>
            <section id="corpo">
                <h2>Consultas</h2>

                <?php
                    $dao = new ContatoDAO();

                    $dao->buscar();
                ?>
            </section>
            
            <div id="botoes">
                <input type="button" value="Sair" onclick="location = 'sair.php'"/>
            </div>
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>