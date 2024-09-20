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
            <table border="1">
                <tr>
                    <th>Data</th>
                    <th align="right">Valor</th>
                </tr>
                <?php
                    $arquivo = fopen("cotacoes.txt", "r");

                    if($arquivo) {
                        while(!feof($arquivo)) {
                            $linha = fgets($arquivo);

                            $vetor = explode("-", $linha);
                            $data = $vetor[0];
                            $valor = trim($vetor[1]);
                            
                            echo "<tr>";
                            echo "<td>$data</td>";
                            echo "<td align=\"right\">R\$" . number_format($valor, 2, ",", ".") . "</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </table>
        </div>
    </body>
</html>