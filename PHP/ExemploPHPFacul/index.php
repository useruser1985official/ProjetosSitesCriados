<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="icon" href="imagens/favicon.ico"/>
        <meta charset="UTF-8"/>
        <title>Exemplo PHP</title>
    </head>
    <body>
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
                        echo "<td align=\"right\">" . number_format($valor, 2, ",", ".") . "</td>";
                        echo "</tr>";
                    }

                    fclose($arquivo);
                }
            ?>
        </table>
    </body>
</html>