<?php
    $env = isset($_REQUEST["env"]) ? $_REQUEST["env"] : "";
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen">
		<title>Inserir Sites Relacionados</title>
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
           
            <h1>Inserir Empresa</h1>
        
            <?php if($env == "sucess"): ?>
            <section class="info-sucesso">
                <h1>Dados Enviados com Sucesso!</h1>
            </section>
            <?php endif; ?>

            <form method="post" action="inserts/inserir-empresa-processo.php">
                <p><label for="nome">Nome: </label></p>
                <p><input type="text" name="nome" id="inome"/></p>
                <p><label for="logo">Logomarca: </label></p>
                <p><input type="text" name="logo" id="ilogo"/></p>
                <p><label for="fone">Telefone: </label></p>
                <p><input type="tel" name="fone" id="ifone"></p>
                <p><label for="mail">E-mail: </label></p>
                <p><input type="email" name="mail" id="imail"></p>
                <p><label for="end">Endereço: </label></p>
                <p><input type="text" name="end" id="iend"></p>
                <p><label for="cid">Cidade: </label></p>
                <p><input type="text" name="cid" id="icid"></p>
                <p><label for="cep">CEP: </label></p>
                <p><input type="text" name="cep" id="icep"></p>
                <p><label for="sob">Sobre: </label></p>
                <p><textarea name="sob" id="isob"></textarea></p>
                <p><button type="submit">Inserir</button></p>
            </form>
       </section>
        <?php 
            include_once "lateral-direita.php";
            include_once "rodape.php";
        ?>
             
	</body>
	</html>
