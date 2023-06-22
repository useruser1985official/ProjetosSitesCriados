<?php
include_once "dados.php";
include_once "restricao.php";

$sql_sel = "select * from contato order by data desc";
$coment = mysqli_query($conexao, $sql_sel);
$row = mysqli_fetch_assoc($coment);
$total = mysqli_num_rows($coment);

mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Introdução ao Plug.dj</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Introdução ao Plug.dj</a></h1>
            </header>

        <h2>Consultas</h2>

        <?php
            if($total > 0) {
                do {
                    echo "<fieldset id=\"contato{$row['id']}\">";
                    echo "<legend>" . date("d/m/Y", strtotime($row["data"])) . "</legend>";
                    echo "<hgroup>";
                    echo "<h2>Nome: {$row['nome']}</h2>";
                    echo "<h3>E-mail: {$row['email']}</h3>";
                    echo "<h4>Sexo: {$row['sexo']}</h4>";
                    echo "</hgroup>";
                    echo "<pre>";
                    echo $row["mensagem"];
                    echo "</pre>";
                    echo "<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$row['id']}'\"/><br/>";
                    echo "</fieldset>";
                }
                while($row = mysqli_fetch_assoc($coment));
            }
            else {
                echo "<h3>Nenhuma Mensagem Disponível no Banco de Dados!</h3>";
            }
        ?>

        <input type="button" value="Sair" onclick="location = 'sair.php'"/>
            <footer>
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>