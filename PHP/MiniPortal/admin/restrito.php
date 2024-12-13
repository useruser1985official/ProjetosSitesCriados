<?php
    include_once "restricao.php";

    $erro = isset($_REQUEST["erro"]) ? $_REQUEST["erro"] : "";
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Painel Administrativo</title>
	</head>

	<body>
		<header class="topo"> 
            <figure class="logo">
                <img src="../img/intro_bg.png" alt="PontoCOM" />
            </figure>
            <hgroup>
                <h1>Painel Administrativo</h1> 
                <h2>Versão para estudos</h2>
            </hgroup>
        </header>
        <div class="login"></div>
        <aside class="login">
                <?php if($erro == "negado"): ?>
                <section class="info">
                    <p><strong>Página restrita!</strong></p><p>É preciso ter uma senha válida para acessar o sistema!</p>
                </section>
                <?php endif; ?>
                <?php if($erro == "usuario"): ?>
                <section class="info">
                    <p><strong>O usuário informado não existe!</strong></p><p>É preciso ter um usuário e senhas válidos para acessar o sistema!</p>
                </section>
                <?php endif; ?>
                <?php if($erro == "senha"): ?>
                <section class="info">
                    <p><strong>Senha incorreta!</strong></p><p>É preciso ter um usuário e senhas válidos para acessar o sistema!</p>
                </section>
                <?php endif; ?>
                
                
        	<section class="login">
            	<h1>Usuário Logado</h1>
            </section>       
        </aside>
        <footer class="rodape">

            	<h1> Todos os direitos preservados &copy;2014</h1>
               
        </footer>     
	</body>
	</html>
