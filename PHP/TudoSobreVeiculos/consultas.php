<?php
require_once "ContatoDAO.php";
require_once "restricao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Tudo Sobre Veículos</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Tudo Sobre Veículos</a></h1>
            </header>

<section id="conteudo">
    
<h2>Consultas</h2>

<?php
    $dao = new ContatoDAO();

    $dao->buscar();
?>

<div id="botoes">
    <input type="button" value="Sair" onclick="location = 'sair.php'"/>
</div>

</section>      
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>