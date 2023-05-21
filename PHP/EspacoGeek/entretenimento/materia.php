<?php
    include_once "../funcoes/amigavel.php";
    include_once "../funcoes/logado.php";
    include_once "../funcoes/entretenimento.php";
    include_once "../funcoes/anti-injection.php";
    
    $id = limpaNumero(isset($_GET["id"])) ? limpaNumero($_GET["id"]) : 0;
    
    do {
        if($row["id"] == $id) {
            break;
        }
    }
    while($row = mysqli_fetch_assoc($coment));
    
    $titulo = isset($row["titulo"]) ? $row["titulo"] : "Essa Matéria Não Existe";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Espaço Geek - <?php echo $titulo ?></title>
    </head>
    <body>
        <header>
            <h1><a href="../">Espaço Geek</a></h1>
        </header>
        
        <?php
            echo "<h3><a href=\"./\">" . $categoria . "</a></h3>\n\n";
            
            do {
                if((int)$row["id"] == $id) {
                    if($row["titulo"] != "") {
                        echo "<h2>" . $row["titulo"] . "</h2>\n\n";

                        echo "<pre>\n" . $row["conteudo"] . "\n</pre>\n\n";

                        if($logado == true) {
                            echo "<input type=\"button\" value=\"Editar\" onclick=\"location = 'editar.php?id=" . $id . "'\"/>\n";
                            echo "<input type=\"button\" value=\"Excluir\" onclick=\"location = 'excluir.php?id=" . $id . "'\"/>\n";
                        }
                    }
                    break;
                }
            }
            while($row = mysqli_fetch_assoc($coment));
            
            if((int)$row["id"] != $id) {
                echo "<h3>Essa Matéria Não Existe!</h3>";      
            }

            // echo $excl;
        ?>

    </body>
</html>
