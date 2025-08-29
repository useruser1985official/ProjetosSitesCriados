<?php 
    $env = isset($_GET["env"]) ? trim(htmlspecialchars(strip_tags($_GET["env"]), ENT_QUOTES)) : "";

    session_start();

    if(isset($_SESSION["DicasParaProvasEConcursos"]["logado"])) {
        header("location: consultas.php");
    }
    else {
        unset($_SESSION["DicasParaProvasEConcursos"]["logado"]);

        setcookie(session_name(), null, 0, "/");
    }
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
        
<h2>Formulário de Contato</h2>

<span id="cent">
    <?php if($env == "user"): ?>
    <h3>ERRO! Usuário Inexistente!</h3>
    <?php elseif($env == "password"): ?>
    <h3>ERRO! Senha Incorreta!</h3>
    <?php elseif($env == "restricted"): ?>
    <h3>AVISO! Área Restrita!</h3>
    <?php endif; ?>
</span>
<form method="post" action="entrar.php">
    <fieldset id="adm">
        <legend>Admin</legend>
        <p><label for="ilogin">Login: </label><input type="text" name="login" id="ilogin" size="15" maxlength="30" placeholder="Usuário" required autofocus/></p>
        <p><label for="isenha">Senha: </label><input type="password" name="senha" id="isenha" size="15" maxlength="15" placeholder="Autenticação" required/></p>
        <p><input type="checkbox" name="lemb" id="ilemb" value="on" checked/><label for="ilemb">Lembrar Sessão</label></p>
        <p>
            <input type="submit" value="Enviar" onclick="validaAdm()"/>
            <input type="reset" value="Limpar"/>
        </p>
    </fieldset>
</form>

            <footer>
                <p><a href="contato.php">Entre em Contato Conosco!</a></p>
            </footer>
        </div>
    </body>
</html>