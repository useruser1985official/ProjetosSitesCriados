<?php
    include_once("dados.php");

    $sql = "select * from comentarios order by data desc";
    $coment = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($coment);
    $total = mysqli_num_rows($coment);
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
                if($total > 0) {
                    do {
                        echo "<fieldset>";
                        echo "<legend>" . $row["id"] . "</legend>";
                        echo "<p>" . $row["nome"] . "</p>";
                        echo "<p>" . $row["email"] . "</p>";
                        echo "<pre>" . $row["mensagem"] . "</pre>";
                        echo "<p><a href=\"editar.php?id=" . $row["id"] . "\">Editar</a></p>";
                        echo "<p><a href=\"excluir.php?id=" . $row["id"] . "\">Excluir</a></p>";
                        echo "<p>" . date("d/m/Y", strtotime($row["data"])) . "</p>";
                        echo "</fieldset>";
                    }
                    while($row = mysqli_fetch_assoc($coment));
                }
                else {
                    echo "<h3>Não Existem Mensagens no Banco de Dados!</h3>";
                }
            ?>
            <p><a href="./">Página Inicial</a></p>
        </div>
    </body>
</html>