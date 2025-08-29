<?php
    include_once "../funcoes/amigavel.php";
    include_once "../funcoes/logado.php";
    include_once "../funcoes/entretenimento.php";
    include_once "../funcoes/anti-injection.php";
    
    $env = limpaString(isset($_GET["env"])) ? limpaString($_GET["env"]) : "";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Espaço Geek</title>
    </head>
    <body>
        <header>
            <h1><a href="../">Espaço Geek</a></h1>
        </header>
        
        <?php echo "<h3><a href=\"./\">" . $categoria . "</a></h3>\n"; ?>
        
        <?php if($logado == true): ?>
        <form method="post" action="enviar.php">
            <fieldset>
                <legend><?php echo "Nova Matéria"; ?></legend>
                <input type="hidden" name="tCat" id="cCat" value="<?php echo $categoria?>"/>
                <p><label for="cTit">Título: </label><input type="text" name="tTit" id="cTit" size="150" maxlength="120" placeholder="Coloque o Título da Matéria" required/></p>
                <label for="cCont">Conteúdo:</label>
                <br/>
                <textarea name="tCont" id="cCont" cols="150" rows="20" placeholder="Coloque o Conteúdo da Matéria (HTML Permitido)" required autofocus></textarea>
            </fieldset>
            <input type="submit" value="Inserir"/>
            <input type="button" value="Cancelar" onclick="history.go(-1)"/>
            <input type="reset" value="Limpar"/>
        </form>
        
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <?php if($env == "erro-imagem"): ?>
            <h3>Erro no Envio! Tente Novamente!</h3>
            <?php elseif($env == "suc-imagem"): ?>
            <h3>Imagem Enviada com Sucesso!</h3>
            <?php endif; ?>
            <fieldset>
                <legend>Envio de Imagens</legend>
                <p>Formatos aceitos: jpg, png, gif.</p>
                <p><input type="file" name="tImg" id="cImg"/></p>
                <input type="submit" value="Inserir"/>
            </fieldset>
        </form>
        <?php else: ?>
        
        <?php header("location: ./"); ?>
        
        <?php endif; ?>

    </body>
</html>