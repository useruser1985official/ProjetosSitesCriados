<?php
    include_once "../funcoes/amigavel.php";
    include_once "../funcoes/logado.php";
    include_once "../funcoes/entretenimento.php";
    
    $id = limpaNumero(isset($_GET["id"])) ? limpaNumero($_GET["id"]) : 0;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Espaço Geek - <?php echo $row['titulo'] ?></title>
    </head>
    <body>
        <header>
            <h1><a href="../">Espaço Geek</a></h1>
        </header>
        
        <?php echo "<h3><a href=\"./\">" . $categoria . "</a></h3>\n"; ?>
        
        <?php if($logado == true): ?>
        
        <?php
            do {
                if($id == $row["id"]) {               
        ?>
        <form method="post" action="atualizar.php">
            <fieldset>
                <legend><?php echo "Edição da Matéria"; ?></legend>
                <input type="hidden" name="tId" id="cId" value="<?php echo $row['id']?>"/>
                <p><label for="cTit">Título: </label><input type="text" name="tTit" id="cTit" size="150" maxlength="120" placeholder="Coloque o Título da Matéria" value="<?php echo $row['titulo']; ?>" required/></p>
                <label for="cCont">Conteúdo:</label>
                <br/>
                <textarea name="tCont" id="cCont" cols="150" rows="20" placeholder="Coloque o Conteúdo da Matéria (HTML Permitido)" required autofocus><?php echo $row['conteudo']; ?></textarea>
            </fieldset>
            <input type="submit" value="Atualizar"/>
            <input type="button" value="Cancelar" onclick="location = 'materia.php?id=<?php echo $row['id']?>'"/>
            <input type="reset" value="Resetar"/>
        </form>
        <?php
                }
            }
            while($row = mysqli_fetch_assoc($coment));
        ?>
        
        <?php endif; ?>

    </body>
</html>