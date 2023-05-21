<?php
include_once "ContatoDAO.php";
include_once "restricao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Tudo Sobre Cerveja</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Tudo Sobre Cerveja</a></h1>
            </header>

<section id="conteudo">           
            
<h2>Consultas</h2>

<?php
$dao = new ContatoDAO();

$dao->buscar();
?>

<p><input type="submit" value="Sair" onclick="location = 'sair.php'"/></p>

</section>

<footer id="rodape">
    <p><a href="contato.php">Entre em Contato Conosco</a></p>
</footer>
        </div>
    </body>
</html>