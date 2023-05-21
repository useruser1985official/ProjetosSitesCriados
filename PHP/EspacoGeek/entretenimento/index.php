<?php
    include_once "../funcoes/amigavel.php";
    include_once "../funcoes/logado.php";
    include_once "../funcoes/entretenimento.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Espaço Geek - <?php echo $categoria ?></title>
    </head>
    <body>
        <header>
            <h1><a href="../">Espaço Geek</a></h1>
        </header>
        <nav id="menu">
            <?php
                echo "<h2>" . $categoria . "</h2>\n";
                
                if($total > 0) {
                    $i = 0;
                    echo "\t\t\t<ul>\n";
                    do {
                        echo "\t\t\t\t<li><a href=\"materia.php?id=" . $row['id'] ."&amp;t=" . retirar($row['titulo']) . "\">" . $row['titulo'] . "</a></li>\n";
                        $i++;
                    }
                    while($row = mysqli_fetch_assoc($coment));
                    echo "\t\t\t</ul>\n";
                }
                else {
                    echo "<h3>Nenhuma Pergunta Encontrada!</h3>";
                }
            ?>
        </nav>
        <?php if($logado == true): ?>
        
        <section>
            <input type="button" value="Inserir Nova Matéria" onclick="location = 'inserir.php'"/>
        </section>
        <?php endif; ?>
        
    </body>
</html>