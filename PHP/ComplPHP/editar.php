<?php
    include_once("dados.php");

    $id = (int)htmlspecialchars($_GET["id"], ENT_QUOTES);

    $sql = "select * from comentarios where id = '$id'";
    $coment = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($coment);
    $total = mysqli_num_rows($coment);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <link rel="stylesheet" href="css/estilo.css"/>
        <title>Complemento em PHP</title>
    </head>
    <body>
        <div class="terminal">
            <form method="post" action="atualizar.php">
                <p><label for="inome">Nome: </label><input type="text" name="nome" id="inome" size="35" maxlength="120" placeholder="Digite seu Nome" value="<?php echo $row["nome"] ?>" required autofocus/></p>
                <p><label for="imail">E-mail: </label><input type="email" name="mail" id="imail" size="35" maxlength="65" placeholder="Coloque um E-mail Válido" value="<?php echo $row["email"] ?>" required/></p>
                <p><label for="imsg">Mensagem:</label></p>
                <textarea cols="40" rows="5" name="msg" id="imsg" maxlength="5000" placeholder="Sua Mensagem" required><?php echo $row["mensagem"] ?></textarea>
                <input type="hidden" name="id" id="iid" value="<?php echo $row["id"] ?>"/>
                <br/>
                <input type="submit" value="Enviar"/>
                <input type="reset" value="Resetar"/>
            </form>
            <p><a href="consultas.php">Consultas</a></p>
        </div>
    </body>
</html>