<?php
    $txt = isset($_GET["t"]) ? htmlspecialchars($_GET["t"], ENT_QUOTES) : "Texto Genérico";
    $tam = isset($_GET["tam"]) ? htmlspecialchars($_GET["tam"], ENT_QUOTES) : "12pt";
    $cor = isset($_GET["cor"]) ? htmlspecialchars($_GET["cor"], ENT_QUOTES) : "black";
    $ini = filter_input(INPUT_GET, "filtro") != null ? (int)filter_input(INPUT_GET, "filtro") : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Complemento em PHP</title>
        <style>
            span.texto {
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
    </head>
    <body>
        <div class="terminal">
            <?php
                echo "<span class=\"texto\">$txt</span>\n";
            ?>
        </div>
    </body>
</html>