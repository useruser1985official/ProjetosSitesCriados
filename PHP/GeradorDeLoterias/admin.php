<?php
    $env = isset($_GET["env"]) ? trim(htmlspecialchars(strip_tags($_GET["env"]), ENT_QUOTES)) : "";

    session_start();

    if(isset($_SESSION["GeradorDeLoterias"]["logado"])) {
        header("location: consultas.php");
    }
    else {
        unset($_SESSION["GeradorDeLoterias"]["logado"]);

        setcookie(session_name(), null, 0, "/");
    }
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
            
            <h2>Contato</h2>
            
            <div id="mens">
                <?php if($env == "user"): ?>
                <h3 id="err">ERRO! User Inexistente!</h3>
                <?php elseif($env == "password"): ?>
                <h3 id="err">ERRO! Senha Incorreta!</h3>
                <?php elseif($env == "restricted"): ?>
                <h3 id="avi">AVISO! Área Restrita!</h3>
                <?php endif; ?>
            </div>

            <form method="post" action="entrar.php">
                <fieldset id="admin">
                    <legend>Administração</legend>
                    <p><label for="cLogin">Login:</label><input type="text" name="tLogin" id="cLogin" size="15" maxlength="12" placeholder="Login" required autofocus/></p>
                    <p><label for="cSenha">Senha:</label><input type="password" name="tSenha" id="cSenha" size="15" maxlength="12" placeholder="Senha" required/></p>
                    <input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb">Lembrar Sessão</label>
                    <p>
                        <span>
                            <input type="submit" value="Enviar" onclick="validaAdm()"/>
                            <input type="reset" value="Limpar"/>
                        </span>
                    </p>
                </fieldset>
            </form>
            
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>