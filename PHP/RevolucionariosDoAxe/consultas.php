<?php
include_once "ContatoDAO.php";
include_once "restricao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Revolucionários do Axé</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Revolucionários do Axé</a></h1>
            </header>
            
<section id="conteudo">
            
<h2>Consultas</h2>

<?php
$dao = new ContatoDAO();

$dao->buscar();
?>

<p><input type="button" value="Sair" onclick="location = 'sair.php'"/></p>

</section>

<footer id="rodape">
    <h3><a href="javascript:void()" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></h3>
</footer>
            
        </div>
    </body>
</html>