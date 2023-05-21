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
        <title>Tudo Sobre Quadrinhos</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="./">Tudo Sobre Quadrinhos</a></h1>
            </header>
            
<section id="conteudo"> 
    
<h2>Consultas</h2>

<?php if($excl == "sucess"): ?>
<div id="suc" class="env"><h4>ÊXITO! Mensagem Excluída com Sucesso!</h4></div>
<?php elseif($excl == "error"): ?>
<div id="err" class="env"><h4>ERRO! Falha na Exclusão da Mensagem!</h4></div>
<?php endif; ?>

<?php
$dao = new ContatoDAO();

$dao->buscar();
?>
    
<input type="button" value="Sair" onclick="location = 'sair.php'"/>

</section>

            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>