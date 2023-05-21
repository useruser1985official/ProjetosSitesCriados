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
        <title>Tudo Sobre Veículos</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <script src="_javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Tudo Sobre Veículos</a></h1>
            </header>

<section id="conteudo">
    
<h2>Consultas</h2>

<?php
if($total > 0) {
    do {
        echo "<fieldset>\n\t";
        echo "<legend>" . date("d/m/Y", strtotime($row['data'])) . "</legend>\n\t";
        echo "<h4>Nome: {$row['nome']}</h4>\n\t";
        echo "<h5>E-mail: {$row['email']} - Idade: {$row['idade']} - Sexo: {$row['sexo']}</h5>\n\t";
        echo "<pre>\n{$row['mensagem']}\n\t</pre>\n\t";
        echo "<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$row['id']}'\"/>\n";
        echo "</fieldset>\n";
    }
    while($row = mysqli_fetch_assoc($coment));
}
else {
    echo "<h3>Nenhuma Mensagem no Banco de Dados!</h3>";
}
?>

<div id="botoes">
    <input type="button" value="Sair" onclick="location = 'sair.php'"/>
</div>

</section>      
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>