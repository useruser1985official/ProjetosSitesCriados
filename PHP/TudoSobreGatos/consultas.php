<?php
require_once "AntiInjection.php";
require_once "ContatoDAO.php";
require_once "restricao.php";

$limpa = new AntiInjection();

$excl = $limpa->campo(filter_input(INPUT_GET, "env")) ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Tudo Sobre Gatos</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Tudo Sobre Gatos</a></h1>
            </header>
            
<section id="conteudo">

<?php if($excl == "sucess"): ?>
<div id="mens" class="exi"><h3>Êxito! A Mensagem foi Apagada!</h3></div>
<?php endif; ?>

<h2>Consultas</h2>

<?php
$dao = new ContatoDAO();

$dao->buscar();
?>

<span id="botoes">
    <input type="button" value="Sair" onclick="location = 'sair.php'"/>
</span>
    
</section>
            
<footer id="rodape">
    <p><a href="contato.php">Entre em Contato Conosco</a></p>
</footer>
        </div>
    </body>
</html>