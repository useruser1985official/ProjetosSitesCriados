<?php
    include_once "funcoes/amigavel.php";
    include_once "funcoes/logado.php";
    include_once "funcoes/entretenimento.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Espaço Geek - Página Inicial</title>
    </head>
    <body>
        <header>
            <h1><a href="javascript:void()" onclick="alert('Você já Está na Página Inicial!')">Espaço Geek</a></h1>
        </header>
        <nav id="menu">
            <h2>Categorias</h2>
            <menu>
                <li><a href="<?php echo retirar($categoria); ?>"><?php echo $categoria; ?></a></li>
                <!-- <li><a href="tecnologia-informacao">Tecnologia e Informações</a></li> -->
            </menu>
            
            <a href="imagens.php">Repositório de Imagens</a>
        </nav>
    </body>
</html>
