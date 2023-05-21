<?php
include_once("conexao.php");
include_once("funcoes.php");

$nome = limpar($_POST["tNome"]);
$email = limpar($_POST["tMail"]);
$profissao = limpar($_POST["tProf"]);

$sql = "insert into usuarios (nome,email,profissao) values ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Sistema de Cadastro</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
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
                <h1>Confirmação de Cadastro</h1>
                <hr/>
                <br/>
                
                <?php
                   if($linhas == 1) {
                       echo "Cadastro Efetuado com Sucesso!";
                   }
                   else {
                       echo "Cadastro Não Efetuado! Já Existe um Cadastro com esse E-mail!";
                   }
                ?>
                
            </section>
        </div>
    </body>
</html>
