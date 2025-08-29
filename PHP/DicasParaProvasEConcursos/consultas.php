<?php 
    include_once "dados.php";
    include_once "restricao.php";

    $sql = "select * from contato order by data desc";
    $coment = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($coment);
    $total = mysqli_num_rows($coment);

    mysqli_close($conexao);

    $excl = isset($_GET["excl"]) ? trim(htmlspecialchars(strip_tags($_GET["excl"]), ENT_QUOTES)) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas para Provas e Concursos</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header>
                <h1><a href="index.php">Dicas para Provas e Concursos</a></h1>
            </header>
        
<h2>Consultas</h2>

<span id="cent">
<?php if($excl == "sucess"): ?>
    <h3>ÊXITO! Mensagem Excluída com Sucesso!</h3>
<?php endif; ?>
</span>

<?php
    if($total > 0) {
        do {
            echo "<fieldset class=\"mens\">";
            echo "<legend>" . date("d/m/Y", strtotime($row["data"])) ."</legend>";
            echo "<h3>Nome: {$row['nome']}</h3>";
            echo "<h4>E-mail: {$row['email']}</h4>";
            echo "<h4>Idade: {$row['idade']}</h4>";
            echo "<h5>Sexo: {$row['sexo']}</h5>";
            echo "<h5>Matéria Preferida: {$row['materia']}</h5>";
            echo "<pre>{$row['mensagem']}</pre>";
            echo "<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$row['id']}'\"/>";
            echo "</fieldset>";
        }
        while($row = mysqli_fetch_assoc($coment));
    }
    else {
        echo "<h3>Nenhuma Mensagem Disponível no Banco de Dados!</h3>";        
    }
?>

<p><input type="button" value="Sair" onclick="location ='sair.php'"/></p>

            <footer>
                <p><a href="contato.php">Entre em Contato Conosco!</a></p>
            </footer>
        </div>
    </body>
</html>