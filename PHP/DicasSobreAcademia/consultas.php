<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";
require_once "restricao.php";

$limpa = new AntiInjection();

$excl = $limpa->campo(filter_input(INPUT_GET, "excl")) ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Dicas sobre Academia</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Dicas sobre Academia</a></h1>
            </header>
            
<h2>Consultas</h2>

<section id="consultas">
    
<?php if($excl == "sucess"): ?>
<h4>ÊXITO! Mensagem Excluída com Sucesso!</h4>
<?php elseif($excl == "error"): ?>
<h4>ERRO! Falha na Exclusão da Mensagem!</h4>
<?php endif; ?>

<?php
$dao = new ContatoDAO();

$dao->buscar();
?>
    <p><input type="button" value="Sair" onclick="location = 'sair.php'"/></p>
</section>
            <footer>
                <p><a href="contato.php" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>