<?php
    include_once "restricao.php";
    include_once "../extensoes/anti_injection.php";
    
    $env = isset($_REQUEST["env"]) ? antiInjection($_REQUEST["env"]) : "";
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Inserir Clientes</title>
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
           
            <h1>Inserir Clientes</h1>
        
            <?php if($env == "sucess"): ?>
            <section class="info-sucesso">
                <h1>Dados Enviados com Sucesso!</h1>
            </section>
            <?php endif; ?>
            <?php if($env == "erro-extensao"): ?>
            <section class="info">
                <h1>Só Envie Imagens com Extensões jpg, jpeg, png ou gif!</h1>
            </section>
            <?php endif; ?>
            <?php if($env == "erro-tamanho"): ?>
            <section class="info">
                <h1>Só Envie Imagens com até 2 MB!</h1>
            </section>
            <?php endif; ?>
            <?php if($env == "erro-imagem"): ?>
            <section class="info">
                <h1>Não foi Possível Enviar o Arquivo!</h1>
            </section>
            <?php endif; ?>

            <form method="post" action="inserts/inserir-clientes-processo.php" enctype="multipart/form-data">
                <p><label for="nome">Nome: </label></p>
                <p><input type="text" name="nome" id="inome"/></p>
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
