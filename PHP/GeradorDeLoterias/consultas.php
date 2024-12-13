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
        <title>Gerador de Loterias</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Gerador de Loterias</a></h1>
                <img src="imagens/gastao.png" id="gastao" alt="Gastão"/>
            </header>
            
            <h2>Consultas</h2>
            
            <div id="mens">
                <?php if($excl == "sucess"): ?>
                <h3 id="inf">ÊXITO! Mensagem Excluída com Sucesso!</h3>
                <?php endif; ?>                
            </div>

            <?php 
                if($total > 0) {
                    do {
                        echo "<fieldset>";
                        echo "<legend>" . date("d/m/Y", strtotime($row["data"])) . "</legend>";
                        echo "<h3>Nome: {$row['nome']}</h3>";
                        echo "<h4>E-mail: {$row['email']}</h4>";
                        echo "<h5>Sexo: {$row['sexo']}</h5>";
                        echo "<h6>Motivo: {$row['motivo']}</h6>";
                        echo "<h5>Jogos: {$row['jogos']}</h5>";
                        echo "<pre>{$row['mensagem']}</pre>";
                        echo "<p><input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id={$row['id']}'\"/></p>";
                        echo "</fieldset>";
                    }
                    while($row = mysqli_fetch_assoc($coment));
                }
                else {
                    echo "<h3>Nenhuma Mensagem no Banco de Dados!</h3>";
                }
            ?>

            <p><input type="button" value="Sair" onclick="location = 'sair.php'"/></p>
            
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>