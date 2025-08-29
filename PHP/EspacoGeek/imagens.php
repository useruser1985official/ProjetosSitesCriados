<?php
    include_once "funcoes/amigavel.php";
    include_once "funcoes/logado.php";
    include_once "funcoes/imagens.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Espaço Geek - Página Inicial</title>
        <style>
            li {
                float: left;
                list-style-type: none;
            }
            img {
                max-width: 300px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1><a href="./">Espaço Geek</a></h1>
        </header>
        <nav id="menu">
            <h2>Imagens</h2>
            <?php
                if($total > 0) {
                    $i = 0;
                    echo "<ul>\n";
                    do {
                        echo "\t\t\t\t<li><img src=\"uploads/" . $row["nome"] . "\" alt=\"" . $row["id"] . "\"></li>\n";
                        $i++;
                    }
                    while($row = mysqli_fetch_assoc($coment));
                    echo "\t\t\t</ul>\n";
                }
                else {
                    echo "<h3>Nenhuma Imagem Encontrada!</h3>";
                }
            ?>
        </nav>
    </body>
</html>