<?php
include_once "ContatoDAO.php";
include_once "restricao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Cozinha e Receitas</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Cozinha e Receitas</a></h1>
            </header>
            
<section id="artigo">
    
<h2>Consultas</h2>
         
<?php
$dao = new ContatoDAO();

$dao->buscar();
?>

<p><input type="submit" value="Sair" onclick="location = 'sair.php'"/></p>

</section>
            
            <footer id="rodape">
                <h4><a href="contato.php">Contato</a></h4>
            </footer>
        </div>
    </body>
</html>