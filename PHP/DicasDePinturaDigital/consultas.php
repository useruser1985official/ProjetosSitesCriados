<?php
require_once "ContatoDAO.php";
require_once "AntiInjection.php";
require_once "restricao.php";

$excl = AntiInjection::campo(filter_input(INPUT_GET, "excl")) ?? "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas de Pintura Digital</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Pintura Digital</a></h1>
            </header>

            <section id="artigo">
                <h2>Consultas</h2>
                <?php if($excl == "sucess"): ?>
                <h3>Êxito! Mensagem Excluída com Sucesso!</h3>
                <?php endif; ?>

                <?php
                    $dao = new ContatoDAO();

                    $dao->buscar();
                ?>
                        
                <p><input type="submit" value="Sair" onclick="location = 'sair.php'"/></p>   
            </section>

            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco!</a></p>
            </footer>
        </div>
    </body>
</html>