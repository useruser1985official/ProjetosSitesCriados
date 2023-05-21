<?php
    include_once "dados.php";
    include_once "restricao.php";
    
    $pesq = $_GET["pesquisa"];

    $sql_sel = "select * from contato where nome like '%$pesq%'";
    $coment = mysqli_query($conexao, $sql_sel);
    $row = mysqli_fetch_assoc($coment);
    $total = mysqli_num_rows($coment);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="_imagens/favicon.ico"/>
        <title>Teste Injection</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Teste Injection</a></h1>
            </header>
            
<h2>Consultas</h2>

<form method="get" action="">
    <input type="text" name="pesquisa"/>
    <input type="submit" value="Enviar"/>
</form>

<section id="consultas">
<?php
    if($pesq != "") {
        echo "<h4>Resultados para \"$pesq\".</h4>";
    }

    if($total > 0) {
        do {
            echo "<fieldset>";
            echo "<legend>" . $row["data"] . "</legend>";
            echo "<h3>" . $row["nome"] . "</h3>";
            echo "<h4>" . $row["idade"] . " anos. Sexo: " . $row["sexo"] . "</h4>";
            echo "<h5>" . $row["email"] . "</h5>";
            echo "<pre>" . $row["mensagem"] . "</pre>";
            echo "<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id=" . $row["id"] . "'\"/>";
            echo "</fieldset>";
        }
        while($row = mysqli_fetch_assoc($coment));
    }
    else {
        echo "<h3>Nenhuma Mensagem Disponível no Banco de Dados!</h3>";
    }
?>
    <p><input type="button" value="Sair" onclick="location = 'sair.php'"/></p>
</section>
            <footer>
                <p><a href="contato.php" onclick="alert('Você já Está na Página de Contato!')">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>