<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Painel Administrativo</title>
	</head>

	<body>
		<?php include_once "topo.php"; ?>
        <nav>
        	<ul>
            	<li><a href="#"> Início </a></li>
                <li><a href="../" target="_blank">Ver o Site </a> </li>
                <li><a href="https://developers.facebook.com/tools/comments" target="_blank">Administrador de Comentários</a> </li>
                <li><a href="#" target="_blank">Google Analytic</a> </li>
                <li><a class="selecionado" href="#" target="_blank">Deslogar</a> </li>
            </ul>
        </nav>
       <section class="centro">
           
            <h1>Conteúdo</h1>
        
       </section>
        <?php 
            include_once "lateral-direita.php";
            include_once "rodape.php";
        ?>
             
	</body>
	</html>
