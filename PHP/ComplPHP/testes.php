<?php
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Complemento em PHP</title>
    </head>
    <body>
        <div class="terminal">
            <?php
                $valor = isset($_GET["n"]) ? (int)$_GET["n"] : 0;

                echo "Analisando o número $valor.<br/>";
                echo "Valores múltiplos: ";

                $tot = 0;

                for($i = 1; $i <= $valor; $i++) {
                    if($valor % $i == 0) {
                        $exi = $i;
                        $tot++;

                        echo "$exi ";
                    }
                }

                echo "<br/>";
                echo "Total de múltiplos: $tot<br/>";

                if($tot == 2) {
                    echo "É Primo!";
                }
                else {
                    echo "Não é Primo!";
                }
            ?>
            <br/>
            <br/>
            <a href="./">Página Inicial</a>
        </div>
    </body>
</html>