<?php
    include_once("conexao.php");
    include_once("funcoes.php");
    
    $filtro = limpar(isset($_GET["tFiltro"])) ? limpar($_GET["tFiltro"]) : "";
    
    $sql = "select * from usuarios where profissao like '%$filtro%'";
    $consulta = mysqli_query($conexao,$sql);
    $registros = mysqli_num_rows($consulta);
    
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Cadastro</a></li>
                    <li><a href="consultas.php">Consultas</a></li>
                </ul>
            </nav>
            <section>
                <h1>Consulta de Cadastros</h1>
                <hr/>
                <br/>
                
                <form method="get" action="">
                    Filtrar por Profissão: <input type="text" name="tFiltro" class="campo" required autofocus/>
                    <input type="submit" value="Pesquisar" class="btn"/>
                </form>
                
                <?php
                
                    echo "Resultados da Pesquisa para \"<b>$filtro</b>\"<br/><br/>";
                
                    echo "$registros Registros Encontrados";
                   
                    echo "<br/><br/>";
                    
                    while($exibirRegistros = mysqli_fetch_array($consulta)) {
                        $codigo = $exibirRegistros[0];
                        $nome = $exibirRegistros[1];
                        $email = $exibirRegistros[2];
                        $profissao = $exibirRegistros[3];
                        
                        echo "\n<article>\n";
                        echo "$codigo<br/>\n";
                        echo "$nome<br/>\n";
                        echo "$email<br/>\n";
                        echo "$profissao<br/>\n";
                        echo "</article>\n";
                        
                    }
                    mysqli_close($conexao);
                ?>
            </section>
        </div>
    </body>
</html>
