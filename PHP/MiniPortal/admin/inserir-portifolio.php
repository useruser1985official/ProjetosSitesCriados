<?php
    $env = isset($_REQUEST["env"]) ? $_REQUEST["env"] : "";
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Inserir Portfólio</title>
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
           
            <h1>Inserir Portfólio</h1>
        
            <?php if($env == "sucess"): ?>
            <section class="info-sucesso">
                <h1>Dados Enviados com Sucesso!</h1>
            </section>
            <?php endif; ?>

            <form method="post" action="inserts/inserir-portifolio-processo.php">
                <p><label for="tit">Título: </label></p>
                <p><input type="text" name="tit" id="itit"/></p>
                <p><label for="res">Resumo: </label></p>
                <p><textarea name="res" id="ires"></textarea></p>
                <p><label for="cont">Conteúdo: </label></p>
                <p><textarea name="cont" id="icont"></textarea></p>
                <p><label for="data">Data: </label></p>
                <p><input type="datetime-local" name="data" id="idata"/></p>
                <p><label for="img">Imagem: </label></p>
                <p><input type="file" name="img" id="iimg"/></p>
                <p><button type="submit">Inserir</button></p>
            </form>
       </section>
        <?php 
            include_once "lateral-direita.php";
            include_once "rodape.php";
        ?>
             
	</body>
	</html>
