<?php
require_once "AntiInjection.php";

$limpa = new AntiInjection();

$env = $limpa->campo(filter_input(INPUT_GET, "env")) ?? "";

session_start();

if(isset($_SESSION["DicasDeDesenhoArtistico"]["logado"])) {
    header("location: consultas.php");
}
else {
    unset($_SESSION["DicasDeDesenhoArtistico"]["logado"]);
    
    setcookie(session_name(), null, 0, "/");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" href="imagens/favicon.ico"/>
        <title>Dicas de Desenho Artístico</title>
        <link rel="stylesheet" href="css/estilo.css"/>
        <script src="javascript/funcoes.js"></script>
    </head>
    <body>
        <div id="interface">
            <header id="cabecalho">
                <h1><a href="index.php">Dicas de Desenho Artístico</a></h1>
            </header>
            <section id="corpo">
                <h2>Área Restrita</h2>
                
                <div id="mens">
                    <?php if($env == "user"): ?>
                    <h3>ERRO! User Inexistente!</h3>
                    <?php elseif($env == "password"): ?>
                    <h3>ERRO! Senha Incorreta!</h3>
                    <?php elseif($env == "restricted"): ?>
                    <h3>AVISO! Área Restrita!</h3>
                    <?php endif;?>
                </div>

                <form id="fAdmin" method="post" action="entrar.php">
                    <fieldset>
                        <legend>Administração</legend>
                        <p><label for="cLogin">Login: </label><input type="text" name="tLogin" id="cLogin" size="12" maxlength="15" placeholder="Usuário" required autofocus/></p>
                        <p><label for="cSenha">Senha: </label><input type="password" name="tSenha" id="cSenha" size="12" maxlength="15" placeholder="Autenticação" required/></p>
                        <p><input type="checkbox" name="tLemb" id="cLemb" value="on" checked/><label for="cLemb">Lembrar Login</label></p>
                        <div id="botoes">
                            <input type="submit" value="Entrar" onclick="validaAdm()"/>
                        </div>
                    </fieldset>
                </form>
            </section>
            <footer id="rodape">
                <p><a href="contato.php">Entre em Contato Conosco</a></p>
            </footer>
        </div>
    </body>
</html>